<h1>Tambah Barang</h1>

<form action="{{ route('barang.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="kode_barang">Kode Barang</label>
        <input type="text" name="kode_barang" class="form-control" required maxlength="50">
    </div>

    <div class="form-group">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" required maxlength="200">
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" step="0.01" name="harga" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="kategori_id">Kategori</label>
        <select name="kategori_id" class="form-control" required>
            @foreach ($kategoris as $kategori)
            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="supplier_id">Supplier</label>
        <select name="supplier_id" class="form-control" required>
            @foreach ($suppliers as $supplier)
            <option value="{{ $supplier->id }}">{{ $supplier->nama_supplier }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="stok_terkini">Stok Terkini</label>
        <input type="number" name="stok_terkini" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
</form>