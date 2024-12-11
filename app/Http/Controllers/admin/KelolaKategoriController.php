<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\KategoriBarang;
use Illuminate\Http\Request;

class KelolaKategoriController extends Controller
{
    // Menampilkan daftar kategori
    public function index()
    {
        $kategoriBarang = KategoriBarang::all(); // Mengambil semua kategori
        return view('admin.kelolakategori.kelolakategori', compact('kategoriBarang')); // Tampilkan view dengan data kategori
    }

    // Menampilkan form tambah kategori
    public function create()
    {
        return view('admin.kelolakategori.tambahkategori'); // Menampilkan form tambah kategori
    }

    // Menyimpan kategori baru
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_kategori' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
        ]);

        // Menyimpan data kategori
        KategoriBarang::create($validatedData);

        return redirect()->route('kategori')->with('success', 'Kategori berhasil ditambahkan.');
    }

    // Menampilkan form edit kategori
    public function edit($id)
    {
        $kategori = KategoriBarang::findOrFail($id); // Cari kategori berdasarkan ID
        return view('admin.kelolakategori.editkategori', compact('kategori')); // Tampilkan form edit dengan data kategori
    }

    // Memperbarui kategori
    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_kategori' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
        ]);

        $kategori = KategoriBarang::findOrFail($id); // Cari kategori berdasarkan ID
        $kategori->update($validatedData); // Update data kategori

        return redirect()->route('kategori')->with('success', 'Kategori berhasil diperbarui.');
    }

    // Menghapus kategori
    public function destroy($id)
    {
        $kategori = KategoriBarang::findOrFail($id); // Cari kategori berdasarkan ID
        $kategori->delete(); // Soft delete kategori

        return redirect()->route('kategori')->with('success', 'Kategori berhasil dihapus.');
    }
}
