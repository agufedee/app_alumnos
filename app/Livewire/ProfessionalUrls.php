<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ProfessionalUrl;
use Illuminate\Support\Facades\Auth;

class ProfessionalUrls extends Component
{
    public $url;

    public function addUrl()
    {
        $this->validate([
            'url' => 'required|url',
        ]);

        Auth::user()->professionalUrls()->create([
            'url' => $this->url,
        ]);

        $this->reset('url');
    }

    public function deleteUrl($id)
    {
        $link = ProfessionalUrl::find($id);

        if ($link && $link->user_id === Auth::id()) {
            $link->delete();
        }
    }

    public function render()
    {
        $urls = Auth::user()->professionalUrls()->latest()->get();
        return view('livewire.professional-urls', compact('urls'));
    }
}

