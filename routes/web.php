<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;



// Halaman login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::middleware(['auth', 'roleCheck:user'])->group(function () {
    Route::get('/dashboardUser', [UserController::class, 'index'])->name('dashboard.user');
});

Route::middleware(['auth', 'roleCheck:admin'])->group(function () {
    Route::get('/dashboardAdmin', [AdminController::class, 'index'])->name('dashboard.admin');
});
