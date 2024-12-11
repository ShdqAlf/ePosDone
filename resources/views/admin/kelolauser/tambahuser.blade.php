<form action="{{ route('kelolauser.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nama</label>
        <input type="text" name="name" id="name" required>
    </div>

    <div>
        <label for="full_name">Nama Lengkap</label>
        <input type="text" name="full_name" id="full_name" required>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div>
        <label for="password_confirmation">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
    </div>

    <div>
        <label for="role">Role</label>
        <input type="text" name="role" id="role" required>
    </div>

    <div>
        <label for="status">Status</label>
        <select name="status" id="status" required>
            <option value="active">Aktif</option>
            <option value="inactive">Tidak Aktif</option>
        </select>
    </div>

    <div>
        <button type="submit">Simpan</button>
    </div>
</form>