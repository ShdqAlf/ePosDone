<h1>Edit Supplier</h1>

<form action="{{ route('supplier.update', $supplier->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nama_supplier">Nama Supplier</label>
        <input type="text" name="nama_supplier" class="form-control" value="{{ $supplier->nama_supplier }}" required maxlength="200">
    </div>

    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" class="form-control" required>{{ $supplier->alamat }}</textarea>
    </div>

    <div class="form-group">
        <label for="contact_person">Contact Person</label>
        <input type="text" name="contact_person" class="form-control" value="{{ $supplier->contact_person }}" required maxlength="100">
    </div>

    <div class="form-group">
        <label for="nomor_telpon">Nomor Telepon</label>
        <input type="text" name="nomor_telpon" class="form-control" value="{{ $supplier->nomor_telpon }}" required maxlength="50">
    </div>

    <div class="form-group">
        <label for="email_supplier">Email Supplier</label>
        <input type="email" name="email_supplier" class="form-control" value="{{ $supplier->email_supplier }}" required maxlength="150">
    </div>

    <button type="submit" class="btn btn-warning">Update</button>
</form>