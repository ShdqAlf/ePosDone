<h1>Edit User</h1>

<form action="{{ route('kelolauser.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Nama</label>
        <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
    </div>

    <div>
        <label for="full_name">Nama Lengkap</label>
        <input type="text" name="full_name" id="full_name" value="{{ old('full_name', $user->full_name) }}" required>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <small>Biarkan kosong jika tidak ingin mengubah password</small>
    </div>

    <div>
        <label for="password_confirmation">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
    </div>

    <div>
        <label for="role">Role</label>
        <input type="text" name="role" id="role" value="{{ old('role', $user->role) }}" required>
    </div>

    <div>
        <label for="status">Status</label>
        <select name="status" id="status" required>
            <option value="active" {{ $user->status == 'active' ? 'selected' : '' }}>Aktif</option>
            <option value="inactive" {{ $user->status == 'inactive' ? 'selected' : '' }}>Tidak Aktif</option>
        </select>
    </div>

    <div>
        <button type="submit">Update</button>
    </div>
</form>