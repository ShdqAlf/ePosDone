<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\KategoriBarang;
use App\Models\Supplier;
use Illuminate\Http\Request;

class KelolaBarangController extends Controller
{
    /**
     * Menampilkan semua barang.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil semua data barang yang ada di database
        $barangs = Barang::with(['kategori', 'supplier'])->get();

        return view('admin.kelolabarang.kelolabarang', compact('barangs'));
    }

    /**
     * Menampilkan form untuk menambah barang baru.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Mengambil data kategori dan supplier untuk pilihan pada form
        $kategoris = KategoriBarang::all();
        $suppliers = Supplier::all();

        return view('admin.kelolabarang.tambahbarang', compact('kategoris', 'suppliers'));
    }

    /**
     * Menyimpan barang baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
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

        // Membuat dan menyimpan barang baru
        Barang::create($validatedData);

        // Redirect setelah barang berhasil ditambahkan
        return redirect()->route('barang')->with('success', 'Barang berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit barang.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // Mengambil barang berdasarkan ID
        $barang = Barang::findOrFail($id);
        // Mengambil kategori dan supplier untuk pilihan form
        $kategoris = KategoriBarang::all();
        $suppliers = Supplier::all();

        return view('admin.kelolabarang.editbarang', compact('barang', 'kategoris', 'suppliers'));
    }

    /**
     * Memperbarui data barang di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
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

        // Redirect setelah barang berhasil diperbarui
        return redirect()->route('barang')->with('success', 'Barang berhasil diperbarui.');
    }

    /**
     * Menghapus barang dari database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // Mengambil barang berdasarkan ID
        $barang = Barang::findOrFail($id);

        // Menghapus barang
        $barang->delete();

        // Redirect setelah barang berhasil dihapus
        return redirect()->route('barang')->with('success', 'Barang berhasil dihapus.');
    }
}
