@extends('layout.home')
@section('container')
<title>Stars Home</title>
</head>
<body>
    <main>
        {{-- Banner --}}
        @include('partials.home.banner')

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <h1 class="text-primary m-4 mb-5">Pengumuman</h1>
                    
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($data as $d)
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="{{ $d->image }}" alt="not found" class="img-fluid">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="card-text text-muted">{{ App\Http\Controllers\PengumumanController::getDateSingle( $d->created_at) }}</b></p>
                                        <p class="card-text text-muted"></b></p>
                                        <a href="/home/category/{{ $d->category }}" class="card-text text-muted text-decoration-none">{{ $d->category }}</b></a>
                                    </div>

                                    <h5 class="card-text">{{ $d->title }}</h5>
                                    <p class="card-text text-muted">{{ $d->subtitle }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="/home/{{ Crypt::encrypt($d->id) }}" class="btn btn-sm btn-primary">Lihat
                                                Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    @endforeach
                    
                </div>
                {{ $data->links() }}
            </div>
        </div>

    </main>

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