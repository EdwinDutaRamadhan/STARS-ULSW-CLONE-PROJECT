@extends('layout.home')
@section('container')
    <title>Stars Home</title>
    </head>

    <body>
        {{-- Banner --}}
        @include('partials.home.banner')
        @include('partials.nav-home')
        <div class=" mt-5">
            <img src="{{ asset('storage/'.$d->image) }}" alt="not found" class="img-fluid w-100">
        </div>

        <div class="container mt-2">
            <div class="row d-flex justify-content-start">
                <div class="m-1 col-sm-3" style="min-width: 180px;">
                    <h1><b class="text-primary">{{ $data->category->category }}</b></h1>
                </div>
                <div class="m-1 col-sm-3 justify-content-start">
                    <table class="m-2">
                        <tr>
                            <td rowspan="2"><h1><i class="text-primary bi bi-calendar4"></i></h1></td>
                        </tr>
                        <tr>
                            <td><p class="ms-2 text-dark"><b>TANGGAL</b><br>{{ $data->tanggal }}</p></td>
                        </tr>
                    </table>
                </div>
                <div class="m-1 col-sm-3 justify-content-start">
                    <table class="m-2">
                        <tr>
                            <td rowspan="2"><h1><i class="text-primary bi bi-person-fill"></i></h1></td>
                        </tr>
                        <tr>
                            <td><p class="ms-2 text-dark"><b>Author</b><br>{{ $data->user->name }}</p></td>
                        </tr>
                    </table>
                </div>
            </div>
        


            <div class="row">
                <div class="col">
                    <p>{{ $data->description }}</p>
                </div>
            </div>
        </div>


        <footer class="text-muted py-5">
            <div class="container">
                <p class="float-end mb-1">
                    <a href="#">Back to top</a>
                </p>
                <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
                <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a
                        href="../getting-started/introduction/">getting started guide</a>.</p>
            </div>
        </footer>
    @endsection
