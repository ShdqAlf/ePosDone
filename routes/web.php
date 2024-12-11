<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\KelolaUserController;
use App\Http\Controllers\admin\KelolaKategoriController;
use App\Http\Controllers\admin\KelolaSupplierController;
use App\Http\Controllers\admin\KelolaBarangController;



// Halaman login
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::middleware(['auth', 'roleCheck:user'])->group(function () {
    Route::get('/dashboardUser', [UserController::class, 'index'])->name('dashboard.user');
});

Route::middleware(['auth', 'roleCheck:admin'])->group(function () {
    Route::get('/dashboardAdmin', [AdminController::class, 'index'])->name('dashboard.admin');

    // Kelola User
    Route::get('/kelolauser', [KelolaUserController::class, 'index'])->name('kelolauser');
    Route::get('/users/create', [KelolaUserController::class, 'create'])->name('kelolauser.tambah');
    Route::post('/users/store', [KelolaUserController::class, 'store'])->name('kelolauser.store');
    Route::get('/users/{id}/edit', [KelolaUserController::class, 'edit'])->name('kelolauser.edit');
    Route::put('/users/{id}', [KelolaUserController::class, 'update'])->name('kelolauser.update');
    Route::delete('/hapususer/{id}', [KelolaUserController::class, 'destroy'])->name('kelolauser.hapus');

    // Kelola Kategori
    Route::get('kategori', [KelolaKategoriController::class, 'index'])->name('kategori');
    Route::get('kategori/create', [KelolaKategoriController::class, 'create'])->name('kategori.tambah');
    Route::post('kategori', [KelolaKategoriController::class, 'store'])->name('kategori.store');
    Route::get('kategori/{id}/edit', [KelolaKategoriController::class, 'edit'])->name('kategori.edit');
    Route::put('kategori/{id}', [KelolaKategoriController::class, 'update'])->name('kategori.update');
    Route::delete('hapuskategori/{id}', [KelolaKategoriController::class, 'destroy'])->name('kategori.hapus');

    // Kelola Supplier
    Route::get('supplier', [KelolaSupplierController::class, 'index'])->name('supplier');
    Route::get('supplier/create', [KelolaSupplierController::class, 'create'])->name('supplier.tambah');
    Route::post('supplier/', [KelolaSupplierController::class, 'store'])->name('supplier.store');
    Route::get('supplier/{id}/edit', [KelolaSupplierController::class, 'edit'])->name('supplier.edit');
    Route::put('supplier/{id}', [KelolaSupplierController::class, 'update'])->name('supplier.update');
    Route::delete('hapussupplier/{id}', [KelolaSupplierController::class, 'destroy'])->name('supplier.hapus');

    // Kelola Barang
    Route::get('barang', [KelolaBarangController::class, 'index'])->name('barang');
    Route::get('barang/create', [KelolaBarangController::class, 'create'])->name('barang.tambah');
    Route::post('barang/', [KelolaBarangController::class, 'store'])->name('barang.store');
    Route::get('barang/{id}/edit', [KelolaBarangController::class, 'edit'])->name('barang.edit');
    Route::put('barang/{id}', [KelolaBarangController::class, 'update'])->name('barang.update');
    Route::delete('hapusbarang/{id}', [KelolaBarangController::class, 'destroy'])->name('barang.hapus');
});
