<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KelolaUserController extends Controller
{
    // Menampilkan halaman daftar user
    public function index()
    {
        $users = User::all(); // Ambil semua data user
        return view('admin.kelolauser.kelolauser', compact('users')); // Menampilkan view daftar user
    }

    // Menampilkan form untuk menambahkan user baru
    public function create()
    {
        return view('admin.kelolauser.tambahuser'); // Menampilkan form untuk tambah user
    }

    // Menyimpan user baru ke database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // Password harus sesuai konfirmasi
            'role' => 'required|string', // Misal, admin atau user
        ]);

        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->role = $validatedData['role'];
        $user->save();

        return redirect()->route('kelolauser')->with('success', 'User berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit user
    public function edit($id)
    {
        $user = User::findOrFail($id); // Cari user berdasarkan id
        return view('admin.kelolauser.edituser', compact('user')); // Menampilkan form edit user
    }

    // Memperbarui data user di database
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed', // Password opsional saat update
            'role' => 'required|string',
        ]);

        $user = User::findOrFail($id); // Cari user berdasarkan id
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];

        if ($validatedData['password']) {
            $user->password = Hash::make($validatedData['password']); // Update password jika diubah
        }

        $user->role = $validatedData['role'];
        $user->save();

        return redirect()->route('kelolauser')->with('success', 'User berhasil diperbarui.');
    }

    // Menghapus user dari database
    public function destroy($id)
    {
        $user = User::findOrFail($id); // Cari user berdasarkan id
        $user->delete();

        return redirect()->route('kelolauser')->with('success', 'User berhasil dihapus.');
    }
}
