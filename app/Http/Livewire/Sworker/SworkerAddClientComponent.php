<?php

namespace App\Http\Livewire\Sworker;

use App\Models\ClientFile;
use Livewire\Component;

class SworkerAddClientComponent extends Component
{
    public $first_name;
    public $last_name;
    public $middle_name;
    public $suffix;
    public $civil_status;
    public $date_of_birth;
    public $place_of_birth;
    public $educational_attainment;
    public $occupation;
    public $income;
    public $home_address;
    public $barangay;
    public $name_of_hospital;
    public $date_of_admission;
    public $date_of_discharge;
    public $name_of_attending_md;
    public $diagnosis;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'first_name' => 'required',
            'last_name' => 'required'
        ]);
    }

    public function createNewClient()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required'
        ]);

        $cfile = new ClientFile();
        $cfile->first_name = $this->first_name;
        $cfile->last_name = $this->last_name;
        $cfile->middle_name = $this->middle_name;
        $cfile->suffix = $this->suffix;
        $cfile->civil_status = $this->civil_status;
        $cfile->date_of_birth = $this->date_of_birth;
        $cfile->place_of_birth = $this->place_of_birth;
        $cfile->educational_attainment = $this->educational_attainment;
        $cfile->occupation = $this->occupation;
        $cfile->income = $this->income;
        $cfile->home_address = $this->home_address;
        $cfile->barangay = $this->barangay;
        $cfile->name_of_hospital = $this->name_of_hospital;
        $cfile->date_of_admission = $this->date_of_admission;
        $cfile->date_of_discharge = $this->date_of_discharge;
        $cfile->name_of_attending_md = $this->name_of_attending_md;
        $cfile->diagnosis = $this->diagnosis;

        $cfile->save();

        session()->flash('message','Client has been added successfully!');
    }

    public function render()
    {
        return view('livewire.sworker.sworker-add-client-component')->layout('layouts.base');
    }
}
