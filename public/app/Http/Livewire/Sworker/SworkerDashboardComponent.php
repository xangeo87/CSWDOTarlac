<?php

namespace App\Http\Livewire\Sworker;

use Livewire\Component;

class SworkerDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.sworker.sworker-dashboard-component')->layout('layouts.base');
    }
}
