@extends('admin.pengumuman.layout.main')
@section('container')
    <div class="container">
        <div class="row my-2 justify-content-start">
            <div class="m-2">
                <a class="text-decoration-none" href="/admin/dashboard/pengumuman"><i class="bi bi-arrow-return-left"></i> Back to pengumuman</a>
            </div>
        </div>
        <div class="row my-2 justify-content-center">
            <h5 class="text-center">{{ $data->title }}</h5>
        </div>
        <div class="row my-2 justify-content-center">
            <div class="col-md-8">
                <img class="img-fluid" src="{{ $data->image }}" alt="Not Found!">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="m-1 col-sm-3" style="min-width: 180px;">
                <h1><b class="text-primary">{{ $data->category->category }}</b></h1>
            </div>
            <div class="m-1 col-sm-3 justify-content-center">
                <table class="m-2">
                    <tr>
                        <td rowspan="2">
                            <h1><i class="text-primary bi bi-calendar4"></i></h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="ms-2 text-dark"><b>TANGGAL</b><br>{{ $data->created_at }}</p>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="m-1 col-sm-3 justify-content-center">
                <table class="m-2">
                    <tr>
                        <td rowspan="2">
                            <h1><i class="text-primary bi bi-person-fill"></i></h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="ms-2 text-dark"><b>Author</b><br>{{ $data->user->name }}</p>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p>{{ $data->description }}</p>
                </div>
            </div>
        </div>


    </div>
@endsection
