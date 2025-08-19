<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/iniciar', Login::class)->name('iniciar');
Route::post('/login', [AuthController::class, 'login']);
// Route::get('/register', [AuthController::class, 'showRegister']);
Route::get('/registro', Register::class);
//Route::post('/register', [AuthController::class, 'register']);
Route::get('/admin', AdminDashboard::class)->middleware(['auth', 'is_admin']);


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->middleware('auth');