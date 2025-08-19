<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Alumno\Perfil;
use App\Http\Middleware\IsAdmin;

Route::get('/', function () {
    $user = Auth::user();

    return $user->is_admin
        ? redirect('dashboard')
        : redirect('/perfil');
});


Route::get('/iniciar', Login::class)->name('iniciar');
Route::get('/registro', Register::class);


Route::get('/dashboard', Dashboard::class)->middleware(['auth', IsAdmin::class]);


//Route::get('/perfil', Perfil::class)->middleware('auth');


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/iniciar');
})->middleware('auth')->name('logout');