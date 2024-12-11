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

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'full_name' => 'required|string|max:200', // Validasi full_name
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // Password harus sesuai konfirmasi
            'role' => 'required|string', // Role harus diisi
            'status' => 'required|in:active,inactive', // Status harus aktif atau tidak aktif
        ]);

        // Membuat user baru
        $user = new User();
        $user->name = $validatedData['name'];
        $user->full_name = $validatedData['full_name']; // Menyimpan full_name
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->role = $validatedData['role'];
        $user->status = $validatedData['status']; // Menyimpan status
        $user->save();

        return redirect()->route('kelolauser.index')->with('success', 'User berhasil ditambahkan.');
    }


    // Menampilkan form untuk mengedit user
    public function edit($id)
    {
        $user = User::findOrFail($id); // Cari user berdasarkan id
        return view('admin.kelolauser.edituser', compact('user')); // Menampilkan form edit user
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'full_name' => 'required|string|max:200', // Validasi full_name
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed', // Password opsional saat update
            'role' => 'required|string',
            'status' => 'required|in:active,inactive', // Status harus aktif atau tidak aktif
        ]);

        // Mencari user berdasarkan ID
        $user = User::findOrFail($id);
        $user->name = $validatedData['name'];
        $user->full_name = $validatedData['full_name']; // Menyimpan perubahan full_name
        $user->email = $validatedData['email'];

        // Memperbarui password jika ada perubahan
        if ($request->filled('password')) {
            $user->password = Hash::make($validatedData['password']); // Update password jika diubah
        }

        $user->role = $validatedData['role'];
        $user->status = $validatedData['status']; // Menyimpan perubahan status
        $user->save();

        return redirect()->route('kelolauser.index')->with('success', 'User berhasil diperbarui.');
    }


    // Menghapus user dari database
    public function destroy($id)
    {
        $user = User::findOrFail($id); // Cari user berdasarkan id
        $user->delete();

        return redirect()->route('kelolauser')->with('success', 'User berhasil dihapus.');
    }
}
