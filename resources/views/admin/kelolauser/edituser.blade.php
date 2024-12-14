@extends('admin.layouts.main', ['title' => 'Tambah User'])
@section('content')
    <style>
        .form-control,
        .form-select {
            border: 1px solid #ccc;
        }
    </style>
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('kelolauser') }}">Kelola User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah User</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    {{--  <h6 class="card-title">Tabel Pengguna</h6>  --}}
                    <form action="{{ route('kelolauser.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" id="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="full_name" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="full_name" class="form-control" value="{{ old('full_name', $user->full_name) }}" id="full_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" id="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="role" class="form-label">Tipe</label>
                                    <input type="text" name="role" class="form-control" value="{{ old('role', $user->role) }}" id="role" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-control" id="status" required>
                                <option selected disabled>-- Pilih Status --</option>
                                <option value="active" {{ $user->status == 'active' ? 'selected' : '' }}>Aktif</option>
                                <option value="inactive" {{ $user->status == 'inactive' ? 'selected' : '' }}>Tidak Aktif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i data-feather="save"></i>
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
