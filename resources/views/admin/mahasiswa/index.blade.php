@extends('admin.pengumuman.layout.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        @if (session()->has('success'))
            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header bg-warning">
                        <img src="https://stars.uksw.edu/public/images/logo.png" class="img-fluid rounded me-2 w-25" alt="...">
                        <strong class="me-auto"></strong>
                        <small>Just now</small>
                        <button id="liveToastClose" type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                </div>
            </div>
        @elseif(session()->has('danger'))
            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header bg-warning">
                        <img src="https://stars.uksw.edu/public/images/logo.png" class="img-fluid rounded me-2 w-25" alt="...">
                        <strong class="me-auto"></strong>
                        <small>Just now</small>
                        <button id="liveToastClose" type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        {{ session('danger') }}
                    </div>
                </div>
            </div>
        @elseif(session()->has('warning'))
            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header bg-warning">
                        <img src="https://stars.uksw.edu/public/images/logo.png" class="img-fluid rounded me-2 w-25" alt="...">
                        <strong class="me-auto"></strong>
                        <small>Just now</small>
                        <button id="liveToastClose" type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        {{ session('warning') }}
                    </div>
                </div>
            </div>
        @endif

        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('mahasiswa.create') }}" class="btn btn-sm btn-outline-secondary">Tambah Mahasiswa</a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Email</th>
                    <th scope="col">Progdi</th>
                    <th scope="col" colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ ($data->currentPage() - 1 )* $data->perPage() + $loop->iteration }}</td>
                        <td>{{ $d->user->name }}</td>
                        <td>{{ $d->user->nim }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->progdi }}</td>
                        <td><button type="button" class="btn btn-sm btn-info profileDetail" data-id="{{ $d->id }}" data-bs-toggle="modal" data-bs-target="#profileDetail"><i class="bi bi-eye"></i></button></td>
                        <td><a href="/admin/dashboard/mahasiswa/{{ $d->id }}/edit" rel="noopener noreferrer"
                                class="btn btn-warning btn-sm"><i class="bi bi-pen-fill"></i></a></td>
                        <td>
                            <form action="/admin/dashboard/mahasiswa/{{ $d->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus {{ $d->title }}?');"><i
                                        class="bi bi-trash-fill"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
    @include('admin.mahasiswa.partials.mahasiswa-modal')
@endsection
