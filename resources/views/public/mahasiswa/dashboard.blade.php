@extends('layout.home')
@section('container')
    @include('partials.nav-mahasiswa')
    <div class="container-fluid" style="height: 40rem;">
        <div class="container card border border-2 rounded-5">
            @include('partials.nav-module')
            @switch($module)
                @case('Dashboard Mahasiswa')
                    @include('partials.mahasiswa.dashboard')
                    @break
                @case('Kredit Keaktifan Mahasiswa')
                    @include('partials.mahasiswa.kkm')
                    @break
                @default
                    
            @endswitch
        </div>
    </div>
    @include('partials.mahasiswa.modal')
@endsection
