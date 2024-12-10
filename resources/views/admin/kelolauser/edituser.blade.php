<h1>Edit User</h1>
<form action="{{ route('kelolauser.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Nama</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}" required>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <label for="password_confirmation">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
    </div>
    <div>
        <label for="role">Role</label>
        <input type="text" name="role" id="role" value="{{ $user->role }}" required>
    </div>
    <div>
        <button type="submit">Update</button>
    </div>
</form>