<?php

namespace App\Http\Livewire\Sworker;

use App\Models\ClientFile;
use Livewire\Component;
use Livewire\WithPagination;

class SworkerClientFileComponent extends Component
{
    use WithPagination;

    public function deleteClientFile($id)
    {
        $cfile = ClientFile::find($id);
        
        // if($cfile->image)
        // {
        //     unlink('images/categories'.'/'.$cfile->image);
        // }
        
        $cfile->delete();
        session()->flash('message','Client has been deleted successfully!');
    }
    public function render()
    {
        $cfiles = ClientFile::paginate(5);
        return view('livewire.sworker.sworker-client-file-component',['cfiles'=>$cfiles])->layout('layouts.base');
    }
}
