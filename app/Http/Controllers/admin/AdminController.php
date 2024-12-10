<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
