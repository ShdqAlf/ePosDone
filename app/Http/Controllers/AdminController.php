<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Menampilkan halaman dashboard untuk admin.
     */
    public function index()
    {
        // Logika untuk menampilkan dashboard admin
        return view('admin.dashboard', [
            'title' => 'Admin Dashboard',
        ]);
    }
}
