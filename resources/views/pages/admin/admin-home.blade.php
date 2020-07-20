@extends('layouts.app')

@section('content')
<section id="admin-home">
    <div class="container">
        <h2 class="text-center">Welcome, Admin</h2>
        <p class="text-center">Pilih menu yang tersedia dibawah ini</p>
        <img class="d-block mx-auto" src="{{ asset('resources/image/manage.svg') }}">

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <img class="d-block mx-auto" src="{{ asset('resources/image/collection.svg') }}">
                    <p class="lead text-center"><b>Kelola Koleksi Buku</b></p>
                    <button class="btn btn-primary btn-block">Pilih</button>
                </div><!--card-->
            </div><!--col-6-->

            <div class="col-lg-6">
                <div class="card">
                    <img class="d-block mx-auto" src="{{ asset('resources/image/peminjaman.svg') }}">
                    <p class="lead text-center"><b>Kelola Peminjaman</b></p>
                    <button class="btn btn-primary btn-block btn-round">Pilih</button>
                </div><!--card-->
            </div><!--col-6-->
        </div><!--row-->
    </div>
</section>
    
@endsection