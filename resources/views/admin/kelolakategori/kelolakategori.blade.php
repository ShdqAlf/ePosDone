<h1>Daftar Kategori Barang</h1>

<!-- Tampilkan pesan sukses jika ada -->
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<!-- Tombol untuk menambah kategori -->
<a href="{{ route('kategori.tambah') }}" class="btn btn-primary mb-3">Tambah Kategori</a>

<!-- Tabel daftar kategori -->
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Kategori</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kategoriBarang as $kategori)
        <tr>
            <td>{{ $kategori->id }}</td>
            <td>{{ $kategori->nama_kategori }}</td>
            <td>{{ $kategori->deskripsi }}</td>
            <td>
                <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <!-- Form untuk menghapus kategori dengan soft delete -->
                <form action="{{ route('kategori.hapus', $kategori->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>