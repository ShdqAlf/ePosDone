<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginStoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login.
     */
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login',
        ]);
    }

    /**
     * Menangani proses login pengguna.
     */
    public function login(LoginStoreRequest $request)
    {
        $credentials = $request->only('email', 'password');

        // Jika login berhasil
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Mengecek apakah status user adalah inactive
            if ($user->status === 'inactive') {
                // Logout user yang statusnya inactive
                Auth::logout();

                // Kembalikan error bahwa akun dinonaktifkan
                return back()->withErrors([
                    'email' => 'Akun Anda telah dinonaktifkan. Silakan hubungi admin.',
                ]);
            }

            // Redirect berdasarkan role jika statusnya aktif
            if ($user->role == 'admin') {
                return redirect()->intended('/dashboardAdmin'); // Dashboard Admin
            } elseif ($user->role == 'user') {
                return redirect()->intended('/dashboardUser'); // Dashboard User
            }
        }

        // Jika login gagal, kembalikan error
        return back()->withErrors([
            'email' => 'Email atau password yang dimasukkan tidak valid.',
        ]);
    }

    /**
     * Menangani proses logout pengguna.
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
