<h1>Kelola Barang</h1>

<a href="{{ route('barang.tambah') }}" class="btn btn-primary">Tambah Barang</a>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Supplier</th>
            <th>Harga</th>
            <th>Stok Terkini</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barangs as $barang)
        <tr>
            <td>{{ $barang->id }}</td>
            <td>{{ $barang->kode_barang }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->kategori->nama_kategori }}</td>
            <td>{{ $barang->supplier->nama_supplier }}</td>
            <td>{{ number_format($barang->harga, 2) }}</td>
            <td>{{ $barang->stok_terkini }}</td>
            <td>
                <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('barang.hapus', $barang->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>