@extends('layouts.app')
@section('content')
    <section class="container-fluid bg-light">
        <div class="container">
            <div class="col-sm-4 pt-3">
                <h6 class="display-4">Unduhan</h6>
            </div>
            <div class="col-sm-8">
                <p class="text-muted pb-4">Halaman ini berisi informasi terkait Polimarim dalam bentuk file dokumen atau juga
                    gambar.</p>
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-4 sr-card mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text text-muted"><small><svg class="bi mb-1" width="13" height="13"
                                        fill="currentColor">
                                        <use
                                            xlink:href="{{ asset('build/assets/bootstrap-icons.svg#calendar-event-fill') }}" />
                                    </svg> 20 Agustus 2020 - 20 Agustus 2020</small></p>
                            <h5 class="card-title">Pengumuman seleksi lulus catar/i ta 2020/2021</h5>
                            <p class="card-text text-muted">Prodi: Manajemen pelabuhan</p>
                            <a href="/show-agenda" class="btn btn-primary" role="button"><svg class="bi mb-1"
                                    width="18" height="18" fill="currentColor">
                                    <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#download') }}" />
                                </svg> Unduh</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 sr-card mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text text-muted"><small><svg class="bi mb-1" width="13" height="13"
                                        fill="currentColor">
                                        <use
                                            xlink:href="{{ asset('build/assets/bootstrap-icons.svg#calendar-event-fill') }}" />
                                    </svg> 20 Agustus 2020 - 20 Agustus 2020</small></p>
                            <h5 class="card-title">Pengumuman seleksi lulus catar/i ta 2020/2021</h5>
                            <p class="card-text text-muted">Prodi: Manajemen pelabuhan</p>
                            <a href="/show-agenda" class="btn btn-primary"><svg class="bi mb-1" width="18"
                                    height="18" fill="currentColor">
                                    <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#download') }}" />
                                </svg> Unduh</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 sr-card mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text text-muted"><small><svg class="bi mb-1" width="13" height="13"
                                        fill="currentColor">
                                        <use
                                            xlink:href="{{ asset('build/assets/bootstrap-icons.svg#calendar-event-fill') }}" />
                                    </svg> 20 Agustus 2020 - 20 Agustus 2020</small></p>
                            <h5 class="card-title">Pengumuman seleksi lulus catar/i ta 2020/2021</h5>
                            <p class="card-text text-muted">Prodi: Manajemen pelabuhan</p>
                            <a href="/show-agenda" class="btn btn-primary"><svg class="bi mb-1" width="18"
                                    height="18" fill="currentColor">
                                    <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#download') }}" />
                                </svg> Unduh</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 sr-card mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text text-muted"><small><svg class="bi mb-1" width="13" height="13"
                                        fill="currentColor">
                                        <use
                                            xlink:href="{{ asset('build/assets/bootstrap-icons.svg#calendar-event-fill') }}" />
                                    </svg> 20 Agustus 2020 - 20 Agustus 2020</small></p>
                            <h5 class="card-title">Pengumuman seleksi lulus catar/i ta 2020/2021</h5>
                            <p class="card-text text-muted">Prodi: Manajemen pelabuhan</p>
                            <a href="/show-agenda" class="btn btn-primary"><svg class="bi mb-1" width="18"
                                    height="18" fill="currentColor">
                                    <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#download') }}" />
                                </svg> Unduh</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
