<?php

namespace App\Http\Livewire\Sworker;

use App\Models\ClientFile;
use Livewire\Component;

// use Livewire\WithFileUploads;

// use Illuminate\Support\Str;
// use Carbon\Carbon;


class SworkerEditClientFileComponent extends Component
{
    // use WithFileUploads;

    public $client_id;
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
    public $narrative;
    public $problem_presented_1;
    public $problem_presented_2;
    public $recommendation;

    // public $slug;
    // public $image;
    // public $newimage;

    public function mount($client_id)
    {
        $cfile = ClientFile::find($client_id);
        $this->client_id = $cfile->id;
        $this->first_name = $cfile->first_name;
        $this->last_name = $cfile->last_name;
        $this->middle_name = $cfile->middle_name;
        $this->suffix = $cfile->suffix;
        $this->civil_status = $cfile->civil_status;
        $this->date_of_birth = $cfile->date_of_birth;
        $this->place_of_birth = $cfile->place_of_birth;
        $this->educational_attainment = $cfile->educational_attainment;
        $this->occupation = $cfile->occupation;
        $this->income = $cfile->income;
        $this->home_address = $cfile->home_address;
        $this->barangay = $cfile->barangay;
        $this->name_of_hospital = $cfile->name_of_hospital;
        $this->date_of_admission = $cfile->date_of_admission;
        $this->date_of_discharge = $cfile->date_of_discharge;
        $this->name_of_attending_md = $cfile->name_of_attending_md;
        $this->diagnosis = $cfile->diagnosis;
        $this->narrative = $cfile->narrative;
        $this->problem_presented_1 = $cfile->problem_presented_1;
        $this->problem_presented_2 = $cfile->problem_presented_2;
        $this->recommendation = $cfile->recommendation;

        // $this->slug = $cfile->slug;
        // $this->image = $cfile->image;
    }

    // public function generateSlug()
    // {
    //     $this->slug = Str::slug($this->first_name, '-');
    // }

    public function update($fields)
    {
        $this->validateOnly($fields, [
            'first_name' => 'required',
            'last_name' => 'required'
        ]);

        // if($this->newimage)
        // {
        //     $this-validateOnly($fields, [
        //         'newimage' = 'required|mimes:jpeg,png';
        //     ]);
        // }
    }

    public function updateClientFile()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required'
        ]);

        // if($this->newimage)
        // {
        //     $this->validate([
        //         'newimage' = 'required|mimes:jpeg,png';
        //     ]);
        // }

        $cfile = ClientFile::find($this->client_id);
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
        $cfile->narrative = $this->narrative;
        $cfile->problem_presented_1 = $this->problem_presented_1;
        $cfile->problem_presented_2 = $this->problem_presented_2;
        $cfile->recommendation = $this->recommendation;

        // $cfile->slug = $this->slug;

        // if($this->newimage)
        // {
        //     $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
        //     $this->newimage->storeAs('client', $imageName);
        //     $cfile->image = $imageName;
        // }

        $cfile->save();

        session()->flash('message','Client has been edited successfully!');

    }

    public function render()
    {
        return view('livewire.sworker.sworker-edit-client-file-component')->layout('layouts.base');
    }
}
