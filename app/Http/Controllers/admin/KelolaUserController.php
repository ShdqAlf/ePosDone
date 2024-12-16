<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KelolaUserController extends Controller
{
    public function index()
    {
        $data = [
            'users' => User::all(),
            'title' => 'Kelola User',
        ];
        return view('admin.kelolauser.kelolauser', $data);
    }

    // public function index()
    // {
    //     $users = User::all();
    //     return response()->json([
    //         'status' => 'success',
    //         'data' => $users,
    //     ]);
    // }

    public function create()
    {
        return view('admin.kelolauser.tambahuser');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'full_name' => 'required|string|max:200',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string',
            'status' => 'required|in:active,inactive',
        ]);

        $user = new User();
        $user->name = $validatedData['name'];
        $user->full_name = $validatedData['full_name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->role = $validatedData['role'];
        $user->status = $validatedData['status'];
        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => 'User berhasil ditambahkan.',
            'data' => $user,
        ]);

        // return redirect()->route('kelolauser')->with('success', 'User berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.kelolauser.edituser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'full_name' => 'required|string|max:200',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
            'role' => 'required|string',
            'status' => 'required|in:active,inactive',
        ]);

        $user = User::findOrFail($id);
        $user->name = $validatedData['name'];
        $user->full_name = $validatedData['full_name'];
        $user->email = $validatedData['email'];

        if ($request->filled('password')) {
            $user->password = Hash::make($validatedData['password']);
        }

        $user->role = $validatedData['role'];
        $user->status = $validatedData['status'];
        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => 'User berhasil diperbarui.',
            'data' => $user,
        ]);

        // return redirect()->route('kelolauser.index')->with('success', 'User berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'User berhasil dihapus.',
        ]);

        // return redirect()->route('kelolauser')->with('success', 'User berhasil dihapus.');
    }
}
