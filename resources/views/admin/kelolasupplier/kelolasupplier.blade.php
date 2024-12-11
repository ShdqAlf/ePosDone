<h1>Daftar Supplier</h1>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<a href="{{ route('supplier.tambah') }}" class="btn btn-primary mb-3">Tambah Supplier</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Supplier</th>
            <th>Alamat</th>
            <th>Contact Person</th>
            <th>Nomor Telepon</th>
            <th>Email Supplier</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($suppliers as $supplier)
        <tr>
            <td>{{ $supplier->id }}</td>
            <td>{{ $supplier->nama_supplier }}</td>
            <td>{{ $supplier->alamat }}</td>
            <td>{{ $supplier->contact_person }}</td>
            <td>{{ $supplier->nomor_telpon }}</td>
            <td>{{ $supplier->email_supplier }}</td>
            <td>
                <a href="{{ route('supplier.edit', $supplier->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('supplier.hapus', $supplier->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus supplier ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>