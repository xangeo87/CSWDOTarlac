<?php

namespace App\Http\Livewire\Sworker;

use App\Models\FamilyMember;
use Livewire\Component;
use Livewire\WithPagination;

class SworkerFamilyMembersComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $family_members = FamilyMember::paginate(10);
        return view('livewire.sworker.sworker-family-members-component', ['family_members'=>$family_members])->layout('layouts.base');
    }
}
