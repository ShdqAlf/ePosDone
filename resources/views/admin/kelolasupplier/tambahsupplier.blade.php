<h1>Tambah Supplier</h1>

<form action="{{ route('supplier.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama_supplier">Nama Supplier</label>
        <input type="text" name="nama_supplier" class="form-control" required maxlength="200">
    </div>

    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <label for="contact_person">Contact Person</label>
        <input type="text" name="contact_person" class="form-control" required maxlength="100">
    </div>

    <div class="form-group">
        <label for="nomor_telpon">Nomor Telepon</label>
        <input type="text" name="nomor_telpon" class="form-control" required maxlength="50">
    </div>

    <div class="form-group">
        <label for="email_supplier">Email Supplier</label>
        <input type="email" name="email_supplier" class="form-control" required maxlength="150">
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>