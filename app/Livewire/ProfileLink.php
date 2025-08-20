<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProfessionalUrl;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class ProfileLink extends Component
{
    public $url;

    protected $rules = [
        'url' => 'required|url|max:255',
    ];

    public function save()
    {
        $this->validate();

        User::professionalUrls()->create([
            'url' => $this->url,
        ]);

        $this->reset('url');
    }

    public function render()
    {
        return view('livewire.profile-link', [
            'links' => Auth::user()->professionalUrls,
        ]);
    }
}

