<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]

class Dashboard extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.admin.dashboard', compact('users'));
    }
}
