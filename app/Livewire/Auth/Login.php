<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Login extends Component
{
    public $email = '';
    public $password = '';
    public $remember = false;

    public function iniciar()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            session()->regenerate();
            $user = Auth::user();

    if ($user->is_admin) {
        return redirect()->intended('/dashboard');
    } else {
        return redirect()->intended('/perfil');
    }
        }

        $this->addError('email', 'Las credenciales no son válidas.');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
