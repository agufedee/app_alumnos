<?php
namespace App\Livewire\Alumno;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;


#[Layout('layouts.app')]

class PerfilAlumno extends Component
{
    public $phone;
    public $professional_url;
    public $user;

    public function mount()
    {
        $user = Auth::user();
        $this->phone = $user->phone;
        $this->professional_url = $user->professional_url;
    }

    public function save()
    {
        $this->validate([
            'professional_url' => 'nullable|url',
        ]);
    
        $this->user->professional_url = $this->professional_url;
        $this->user->save();
    
        session()->flash('success', 'Enlace Profesional actualizado correctamente.');
    }

    public function render()
    {
        return view('livewire.alumno.perfil-alumno');
    }
}
