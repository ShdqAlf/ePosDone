<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class KelolaSupplierController extends Controller
{
    // Menampilkan daftar supplier
    public function index()
    {
        // Ambil semua supplier
        $suppliers = Supplier::all();
        return view('admin.kelolasupplier.kelolasupplier', compact('suppliers'));
    }

    // Menampilkan form untuk menambah supplier
    public function create()
    {
        return view('admin.kelolasupplier.tambahsupplier');
    }

    // Menyimpan data supplier baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_supplier' => 'required|string|max:200',
            'alamat' => 'required|string',
            'contact_person' => 'required|string|max:100',
            'nomor_telpon' => 'required|string|max:50',
            'email_supplier' => 'required|email|max:150',
        ]);

        // Membuat supplier baru
        Supplier::create($request->all());

        return redirect()->route('supplier')->with('success', 'Supplier berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit supplier
    public function edit($id)
    {
        // Cari supplier berdasarkan ID
        $supplier = Supplier::findOrFail($id);
        return view('admin.kelolasupplier.editsupplier', compact('supplier'));
    }

    // Memperbarui data supplier
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_supplier' => 'required|string|max:200',
            'alamat' => 'required|string',
            'contact_person' => 'required|string|max:100',
            'nomor_telpon' => 'required|string|max:50',
            'email_supplier' => 'required|email|max:150',
        ]);

        // Cari supplier berdasarkan ID
        $supplier = Supplier::findOrFail($id);

        // Update data supplier
        $supplier->update($request->all());

        return redirect()->route('supplier')->with('success', 'Supplier berhasil diperbarui.');
    }

    // Menghapus supplier (soft delete)
    public function destroy($id)
    {
        // Cari supplier berdasarkan ID
        $supplier = Supplier::findOrFail($id);

        // Hapus supplier menggunakan soft delete
        $supplier->delete();

        return redirect()->route('supplier')->with('success', 'Supplier berhasil dihapus.');
    }
}
