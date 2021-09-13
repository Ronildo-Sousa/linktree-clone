<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', ['title' => 'Esta é uma página home']);
})->name('home');

Route::get('/register', [AuthController::class, 'registerForm'])->name('auth.registerForm');
Route::get('/login', [AuthController::class, 'loginForm'])->name('auth.loginForm');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('user/{name}',[AdminController::class, 'links'])->name('links');

Route::middleware(['auth'])->group(function(){
    Route::resource('admin', AdminController::class);
});
