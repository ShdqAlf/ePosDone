<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Menampilkan halaman dashboard untuk user.
     */
    public function index()
    {
        // Logika untuk menampilkan dashboard user
        return view('user.dashboard', [
            'title' => 'User Dashboard',
        ]);
    }
}
