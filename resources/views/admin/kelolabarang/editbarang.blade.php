<h1>Edit Barang</h1>

<form action="{{ route('barang.update', $barang->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="kode_barang">Kode Barang</label>
        <input type="text" name="kode_barang" class="form-control" value="{{ $barang->kode_barang }}" required maxlength="50">
    </div>

    <div class="form-group">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" value="{{ $barang->nama_barang }}" required maxlength="200">
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" class="form-control">{{ $barang->deskripsi }}</textarea>
    </div>

    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" step="0.01" name="harga" class="form-control" value="{{ $barang->harga }}" required>
    </div>

    <div class="form-group">
        <label for="kategori_id">Kategori</label>
        <select name="kategori_id" class="form-control" required>
            @foreach ($kategoris as $kategori)
            <option value="{{ $kategori->id }}" {{ $barang->kategori_id == $kategori->id ? 'selected' : '' }}>
                {{ $kategori->nama_kategori }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="supplier_id">Supplier</label>
        <select name="supplier_id" class="form-control" required>
            @foreach ($suppliers as $supplier)
            <option value="{{ $supplier->id }}" {{ $barang->supplier_id == $supplier->id ? 'selected' : '' }}>
                {{ $supplier->nama_supplier }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="stok_terkini">Stok Terkini</label>
        <input type="number" name="stok_terkini" class="form-control" value="{{ $barang->stok_terkini }}" required>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
</form>