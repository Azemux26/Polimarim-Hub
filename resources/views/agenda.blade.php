@extends('layouts.app')

@section('content')
<section class="container-fluid bg-light">
    <div class="container pb-3">
        <h6 class="pt-3 display-4">Agenda &amp; Pengumuman</h6>
        <p class="text-secondary">
            Agenda berisi kegiatan yang akan berjalan atau sedang berjalan di lingkungan POLIMARIM.
            Pengumuman berisi informasi resmi yang dapat diakses oleh masyarakat umum.
        </p>

        <ul class="nav mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-agenda-tab" data-toggle="pill" href="#pills-agenda" role="tab"
                    aria-controls="pills-agenda" aria-selected="true">
                    <div class="card border-0 shadow-sm" style="width: 17rem;">
                        <div class="card-body text-dark text-center">
                            <svg class="bi mb-1" width="35" height="35" fill="currentColor">
                                <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#file-earmark-easel-fill') }}" />
                            </svg>
                            <h2>Agenda</h2>
                        </div>
                    </div>
                </a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-announcement-tab" data-toggle="pill" href="#pills-announcement" role="tab"
                    aria-controls="pills-announcement" aria-selected="false">
                    <div class="card border-0 shadow-sm" style="width: 17rem;">
                        <div class="card-body text-dark text-center">
                            <svg class="bi mb-1" width="35" height="35" fill="currentColor">
                                <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#clipboard-data') }}" />
                            </svg>
                            <h2>Pengumuman</h2>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>

<section class="container-fluid">
    <div class="container mt-5 mb-5">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-agenda" role="tabpanel" aria-labelledby="pills-agenda-tab">
                <h4>
                    <svg class="bi mb-1" width="25" height="25" fill="currentColor">
                        <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#file-earmark-easel-fill') }}" />
                    </svg>
                    Daftar agenda
                </h4>

                <div class="row">
                    @forelse ($agendas as $agenda)
                        <div class="col-sm-4 col-md-4 mb-3 sr-card">
                            <div class="card h-100">
                                <div class="card-body">
                                    <p class="card-text text-muted">
                                        <small>
                                            <svg class="bi mb-1" width="13" height="13" fill="currentColor">
                                                <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#calendar-event-fill') }}" />
                                            </svg>
                                            {{ $agenda->start_date->translatedFormat('d F Y') }}
                                            -
                                            {{ $agenda->end_date->translatedFormat('d F Y') }}
                                        </small>
                                    </p>

                                    <h5 class="card-title">{{ $agenda->title }}</h5>
                                    <p class="card-text text-muted">Oleh {{ $agenda->author ?? 'Admin' }}</p>

                                    <a href="{{ route('agenda.show', $agenda->slug) }}"
                                        class="btn rounded-lg btn-sm btn-outline-primary" role="button">
                                        Lihat
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12">
                            <p class="text-muted">Belum ada agenda aktif.</p>
                        </div>
                    @endforelse
                </div>

                <div class="mt-3">
                    {{ $agendas->links() }}
                </div>
            </div>

            <div class="tab-pane fade" id="pills-announcement" role="tabpanel" aria-labelledby="pills-announcement-tab">
                <h4>
                    <svg class="bi mb-1" width="25" height="25" fill="currentColor">
                        <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#clipboard-data') }}" />
                    </svg>
                    Daftar pengumuman
                </h4>

                <div class="row">
                    @forelse ($announcements as $announcement)
                        <div class="col-sm-4 col-md-4 mb-3 sr-card">
                            <div class="card h-100">
                                <div class="card-body">
                                    <p class="card-text text-muted">
                                        <small>
                                            <svg class="bi mb-1" width="13" height="13" fill="currentColor">
                                                <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#calendar-event-fill') }}" />
                                            </svg>
                                            {{ $announcement->start_date->translatedFormat('d F Y') }}
                                            -
                                            {{ $announcement->end_date->translatedFormat('d F Y') }}
                                        </small>
                                    </p>

                                    <h5 class="card-title">{{ $announcement->title }}</h5>
                                    <p class="card-text text-muted">Oleh {{ $announcement->author ?? 'Admin' }}</p>

                                    <a href="{{ route('announcement.show', $announcement->slug) }}"
                                        class="btn rounded-lg btn-sm btn-outline-primary" role="button">
                                        Lihat
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12">
                            <p class="text-muted">Belum ada pengumuman aktif.</p>
                        </div>
                    @endforelse
                </div>

                <div class="mt-3">
                    {{ $announcements->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
