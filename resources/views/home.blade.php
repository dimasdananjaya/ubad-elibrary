@extends('layouts.app')

@section('content')
    <!--jumbotron-->
    <section id="jumbotron">
        <div class="jumbotron">
            <div class="container">
                <div class="layer">
                    <h1>Universitas Bali Dwipa E-Library</h1>
                    <p>Silahkan Menggunakan Fasilitas Ini Semaksimal Mungkin</p>
                    <div class="mx-auto d-flex justify-content-center">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </div><!-- layer-->
            </div><!-- container -->
        </div><!-- jumbotron-->
    </section>
    <!-- end jumbotron-->

    <!--Jumbotron-->
    <section id="book-collection">
        <div class="container h-100">
            <div class="col-lg-12">
                <h2 class="text-center">Koleksi Buku</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-head">
                            <img class="book-collection-icon" src="/resources/image/academic.png"><p class="book-collection-type"><b>Jurnal Ilmiah</b></p>
                            <div class="card-body">
                                <p class="book-type-description"> Koleksi Jurnal Ilmiah Universitas Bali Dwipa<p>
                            </div>
                            <a href="#" class="btn btn-primary btn-block">Lihat Semua</a>
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-head">
                            <img class="book-collection-icon" src="/resources/image/academic.png"><p class="book-collection-type"><b>Jurnal Ilmiah</b></p>
                            <div class="card-body">
                                <p class="book-type-description"> Koleksi Jurnal Ilmiah Universitas Bali Dwipa<p>
                            </div>
                            <a href="#" class="btn btn-primary btn-block">Lihat Semua</a>
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-head">
                            <img class="book-collection-icon" src="/resources/image/academic.png"><p class="book-collection-type"><b>Jurnal Ilmiah</b></p>
                            <div class="card-body">
                                <p class="book-type-description"> Koleksi Jurnal Ilmiah Universitas Bali Dwipa<p>
                            </div>
                            <a href="#" class="btn btn-primary btn-block">Lihat Semua</a>
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!--end jumbotron-->
@endsection
