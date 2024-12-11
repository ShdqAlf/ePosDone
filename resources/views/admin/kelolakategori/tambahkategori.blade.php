<h1>Tambah Kategori Barang</h1>

<!-- Menampilkan pesan error jika ada -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- Form untuk menambah kategori -->
<form action="{{ route('kategori.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama_kategori">Nama Kategori</label>
        <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required maxlength="100">
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    <a href="{{ route('kategori') }}" class="btn btn-secondary mt-3">Kembali</a>
</form>