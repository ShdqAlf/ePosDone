<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\KategoriBarang;
use App\Models\Supplier;
use Illuminate\Http\Request;

class KelolaBarangController extends Controller
{
    public function index()
    {
        // Mengambil semua data barang yang ada di database
        $barangs = Barang::with(['kategori', 'supplier'])->get();

        return view('admin.kelolabarang.kelolabarang', compact('barangs'));
    }

    public function create()
    {
        // Mengambil data kategori dan supplier untuk pilihan pada form
        $kategoris = KategoriBarang::all();
        $suppliers = Supplier::all();

        return view('admin.kelolabarang.tambahbarang', compact('kategoris', 'suppliers'));
    }

    public function store(Request $request)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'kode_barang' => 'required|string|max:50|unique:barang',
            'nama_barang' => 'required|string|max:200',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|decimal:0,2',
            'kategori_id' => 'required|exists:kategori_barang,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'stok_terkini' => 'required|integer',
        ]);

        $barang = Barang::create($validatedData);

        return response()->json([
            'status' => 'success',
            'message' => 'Barang berhasil ditambahkan.',
            'data' => $barang
        ]);
    }

    public function edit($id)
    {
        // Mengambil barang berdasarkan ID
        $barang = Barang::findOrFail($id);
        // Mengambil kategori dan supplier untuk pilihan form
        $kategoris = KategoriBarang::all();
        $suppliers = Supplier::all();

        return view('admin.kelolabarang.editbarang', compact('barang', 'kategoris', 'suppliers'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'kode_barang' => 'required|string|max:50|unique:barang,kode_barang,' . $id,
            'nama_barang' => 'required|string|max:200',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|decimal:0,2',
            'kategori_id' => 'required|exists:kategori_barang,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'stok_terkini' => 'required|integer',
        ]);

        // Mengambil barang berdasarkan ID
        $barang = Barang::findOrFail($id);

        // Mengupdate data barang
        $barang->update($validatedData);

        return response()->json([
            'status' => 'success',
            'message' => 'Barang berhasil diperbarui.',
            'data' => $barang
        ]);
    }

    public function destroy($id)
    {
        // Mengambil barang berdasarkan ID
        $barang = Barang::findOrFail($id);

        // Menghapus barang
        $barang->delete();

        // Redirect setelah barang berhasil dihapus
        return response()->json([
            'status' => 'success',
            'message' => 'Barang berhasil sihapus.',
            'data' => $barang
        ]);
    }
}
