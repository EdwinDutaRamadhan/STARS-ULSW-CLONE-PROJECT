@extends('admin.pengumuman.layout.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('pengumuman.create') }}" class="btn btn-sm btn-outline-secondary">Tambah Pengumuman</a>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>
    
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Author</th>
                    <th scope="col">Category</th>
                    <th scope="col">Title</th>
                    <th scope="col">tipe</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->user->name }}</td>
                        <td>{{ $d->category->category }}</td>
                        <td>{{ $d->title }}</td>
                        <td>{{ $d->type }}</td>
                        <td><a href="/admin/dashboard/pengumuman/{{ $d->id }}" rel="noopener noreferrer" class="btn btn-warning btn-sm"><i class="bi bi-pen-fill"></i></a></td>
                        <td><a href="/admin/dashboard/pengumuman/" rel="noopener noreferrer" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus {{ $d->id }}');"><i class="bi bi-trash-fill"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
