<h1>Edit Kategori Barang</h1>

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

<!-- Form untuk mengedit kategori -->
<form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nama_kategori">Nama Kategori</label>
        <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="{{ old('nama_kategori', $kategori->nama_kategori) }}" required maxlength="100">
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" class="form-control">{{ old('deskripsi', $kategori->deskripsi) }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Perbarui</button>
    <a href="{{ route('kategori') }}" class="btn btn-secondary mt-3">Kembali</a>
</form>