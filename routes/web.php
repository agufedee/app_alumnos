<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Admin\Dashboard;
use App\Http\Middleware\IsAdmin;
use App\Livewire\Alumno\PerfilAlumno;
use App\Livewire\Admin\UserProfile;
use App\Models\User;

Route::get('/', function () {
    $user = Auth::user();

    if (!$user) {
        return redirect('/iniciar'); // o la ruta que uses para login
    }

    return $user->is_admin
        ? redirect('/dashboard')
        : redirect('/perfil');
});


Route::get('/iniciar', Login::class)->middleware('guest')->name('iniciar');
Route::get('/registro', Register::class)->middleware('guest');


Route::get('/dashboard', Dashboard::class)->middleware(['auth', IsAdmin::class]);


Route::get('/perfil', PerfilAlumno::class)->middleware('auth');



Route::post('/logout', function () {
    Auth::logout();
    return redirect('/iniciar');
})->middleware('auth')->name('logout');

Route::get('/dashboard/user-profile/{user}', UserProfile::class)
    ->middleware(['auth', IsAdmin::class])
    ->name('admin.user-profile');
