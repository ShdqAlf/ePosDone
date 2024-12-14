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
                    <form action="{{ route('kelolauser.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama<span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="full_name" class="form-label">Nama Lengkap<span class="text-danger">*</span></label>
                                    <input type="text" name="full_name" class="form-control" id="full_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" id="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="role" class="form-label">Tipe<span class="text-danger">*</span></label>
                                    <input type="text" name="role" class="form-control" id="role" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status<span class="text-danger">*</span></label>
                                    <select name="status" class="form-control" id="status" required>
                                        <option selected disabled>-- Pilih Status --</option>
                                        <option value="active">Aktif</option>
                                        <option value="inactive">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i data-feather="save"></i>
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
