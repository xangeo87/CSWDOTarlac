<?php

namespace App\Http\Livewire\Sworker;

use App\Models\ClientFile;
use App\Models\FamilyMember;
use Livewire\Component;

class SworkerAddFamilyMemberComponent extends Component
{
    public $client_id;
    public $name;
    public $age;
    public $relationship;
    public $educational_attainment;
    public $occupation;
    public $income;
    public $client_file_id;

    public function mount($client_id)
    {
        $cfile = ClientFile::find($client_id);
        $this->client_id = $cfile->id;
        $this->first_name = $cfile->first_name;
        $this->last_name = $cfile->last_name;
        $this->middle_name = $cfile->middle_name;
        $this->suffix = $cfile->suffix;
    }



    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required'
        ]);
    }

    public function createNewFamilyMember()
    {
        $this->validate([
            'name' => 'required',
            // 'age' => 'required',
            // 'relationship' => 'required',
            // 'educational_attainment' => 'required',
        ]);
        $cfile = ClientFile::find($this->client_id);
        $family_member = new FamilyMember();
        $family_member->name = $this->name;
        $family_member->age = $this->age;
        $family_member->relationship = $this->relationship;
        $family_member->educational_attainment = $this->educational_attainment;
        $family_member->occupation = $this->occupation;
        $family_member->income = $this->income;
        $family_member->client_file_id = $cfile->id;


        $family_member->save();

        session()->flash('message','Family Member has been added successfully!');
    }

    public function render()
    {
        $cfile = ClientFile::where('id',$this->client_id)->first();
        // $family_members = FamilyMember::where('client_file_id', $cfile->id);
        return view('livewire.sworker.sworker-add-family-member-component',['cfile'=>$cfile])->layout('layouts.base');
    }
}
