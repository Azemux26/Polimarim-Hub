@extends('layouts.app')
@section('content')
    <section class="container-fluid bg-light">
        <div class="container">
            <h6 class="pt-3 display-4">Galeri</h6>
            <p class="text-muted pb-4">Halaman ini berisi foto dokumentasi kegiatan atau foto penting lainnya yang dibagikan
                secara publik.</p>
        </div>
    </section>


    <section class="container-fluid">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-sm-3 sr-card col-md-3 mb-2">
                    <img src="{{ asset('img/blog-1 3.jpg') }}" class="rounded img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-3 sr-card col-md-3 mb-2">
                    <img src="{{ asset('img/capt_01.png') }}" class="rounded img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-3 sr-card col-md-3 mb-2">
                    <img src="{{ asset('img/capt_03.png') }}" class="rounded img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-3 sr-card col-md-3 mb-2">
                    <img src="{{ asset('img/blog-1 3.jpg') }}" class="rounded img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-3 sr-card col-md-3 mb-2">
                    <img src="{{ asset('img/blog-1 3.jpg') }}" class="rounded img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-3 sr-card col-md-3 mb-2">
                    <img src="{{ asset('img/blog-1 3.jpg') }}" class="rounded img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-3 sr-card col-md-3 mb-2">
                    <img src="{{ asset('img/blog-1 3.jpg') }}" class="rounded img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-3 sr-card col-md-3 mb-2">
                    <img src="{{ asset('img/blog-1 3.jpg') }}" class="rounded img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </section>
@endsection
