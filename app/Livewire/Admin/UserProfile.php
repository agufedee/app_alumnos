<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class UserProfile extends Component
{
    public User $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.admin.user-profile');
    }
}
