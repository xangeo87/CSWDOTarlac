<?php

namespace App\Http\Livewire;

use App\Models\ClientFile;
use Livewire\Component;

class ClientFilesComponent extends Component
{
    public function render()
    {
        $cfiles = ClientFile::all();
        return view('livewire.client-files-component', ['cfiles'=>$cfiles])->layout('layouts.base');
    }
}
