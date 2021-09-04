<?php

namespace App\Http\Livewire;

use App\Models\ClientFile;
use App\Models\FamilyMember;
use Livewire\Component;

class FamilyMemberOfClientComponent extends Component
{
    public $client_id;

    public function mount($client_id)
    {
        $this->client_id = $client_id;
    }
    public function render()
    {
        $cfile = ClientFile::where('id',$this->client_id)->first();
        // $family_members = FamilyMember::where('client_file_id', $this->client_id)->first();

        return view('livewire.family-member-of-client-component', ['cfile'=>$cfile])->layout('layouts.base');
    }
}
