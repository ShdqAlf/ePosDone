@extends('admin.layouts.main')
@section('content')
    {{--  <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
        </ol>
    </nav>  --}}

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Tabel Pengguna</h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="">
                            <form action="">
                                <div class="input-group">
                                    <select name="kategori" id="" class="form-select">
                                        <option selected disabled>-- Status --</option>
                                        <option value="active">Aktif</option>
                                        <option value="inactive">Tidak Aktif</option>
                                    </select>
                                    <button class="btn btn-primary" type="submit">
                                        Filter
                                        <i data-feather="search" class="icon-aksi"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <a href="{{ route('kelolauser.tambah') }}" class="btn btn-primary">
                            <i data-feather="plus"></i>
                            Tambah User
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="text-center">Aksi</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('kelolauser.edit', $item->id) }}" class="btn btn-warning"><i
                                                    data-feather="edit" class="icon-aksi"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#{{ $item->id }}"
                                                class="btn btn-danger"><i data-feather="trash" class="icon-aksi"></i></a>
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->role }}</td>
                                        <td>{{ $item->status }}</td>
                                    </tr>
                                    <div class="modal fade" id="{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form action="{{ route('kelolauser.hapus', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="modal-body">
                                                        Apakah kamu yakin akan menghapus data ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Tidak</button>
                                                        <button type="submit" class="btn btn-primary">Ya</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
