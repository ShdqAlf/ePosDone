<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\KelolaUserController;



// Halaman login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::middleware(['auth', 'roleCheck:user'])->group(function () {
    Route::get('/dashboardUser', [UserController::class, 'index'])->name('dashboard.user');
});

Route::middleware(['auth', 'roleCheck:admin'])->group(function () {
    Route::get('/dashboardAdmin', [AdminController::class, 'index'])->name('dashboard.admin');
    Route::get('/kelolauser', [KelolaUserController::class, 'index'])->name('kelolauser');
    Route::get('/users/create', [KelolaUserController::class, 'create'])->name('kelolauser.tambah');
    Route::post('/users/store', [KelolaUserController::class, 'store'])->name('kelolauser.store');
    Route::get('/users/{id}/edit', [KelolaUserController::class, 'edit'])->name('kelolauser.edit');
    Route::put('/users/{id}', [KelolaUserController::class, 'update'])->name('kelolauser.update');
    Route::delete('/hapususer/{id}', [KelolaUserController::class, 'destroy'])->name('kelolauser.hapus');
});
