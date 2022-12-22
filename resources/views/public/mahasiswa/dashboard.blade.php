@extends('layout.home')
@section('container')
    @include('partials.nav-mahasiswa')
    <div class="container card rounded-2" style="margin-top: 4rem;">
        @include('partials.nav-module')
    </div>
    <div class="container card rounded-5">
            @switch($module)
                @case('Dashboard Mahasiswa')
                    @include('partials.mahasiswa.dashboard')
                    @break
                @case('Kredit Keaktifan Mahasiswa')
                    @include('partials.mahasiswa.kkm')
                    @break
                @case('History Dispensasi')
                    @include('partials.mahasiswa.dispensasi')
                    @break
                @case('History Beasiswa')
                    @include('partials.mahasiswa.beasiswa')
                    @break
                @case('PKM')
                    @include('partials.mahasiswa.pkm')
                    @break
                @default
            @endswitch
        </div>
    @include('partials.mahasiswa.modal')
@endsection
