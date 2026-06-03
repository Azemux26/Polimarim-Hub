@extends('layouts.app')

@section('content')
<section class="container-fluid bg-light">
    <div class="container pb-3">
        <h6 class="display-4 pt-3 mb-2">Pengumuman</h6>
    </div>
</section>

<section class="container-fluid">
    <div class="container mt-3 mb-5">
        <div class="d-flex flex-column bd-highlight mb-3 text-center">
            <div class="p-2 bd-highlight">
                <h2>{{ $announcement->title }}</h2>
            </div>
            <div class="p-2 bd-highlight text-secondary">
                {{ $announcement->description }}
            </div>
            <div class="p-2 bd-highlight text-secondary">
                Tema Pengumuman: "{{ $announcement->theme ?? '-' }}"
            </div>
        </div>

        <div class="row">
            <div class="d-flex col-md-12 flex-column bd-highlight mb-3">
                <div class="d-flex flex-wrap">
                    <div class="col col-sm-4 col-md-4">
                        <div class="p-2 bd-highlight">
                            <div class="text-secondary">Oleh</div>
                            <div class="font-weight-bold">{{ $announcement->author ?? 'Admin' }}</div>
                        </div>
                    </div>

                    <div class="col col-sm-4 col-md-4">
                        <div class="p-2 bd-highlight">
                            <div class="text-secondary">Jam mulai</div>
                            <div class="font-weight-bold">
                                @if ($announcement->start_time && $announcement->end_time)
                                    {{ \Carbon\Carbon::parse($announcement->start_time)->format('H.i') }}
                                    s.d
                                    {{ \Carbon\Carbon::parse($announcement->end_time)->format('H.i') }}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col col-sm-4 col-md-4">
                        <div class="p-2 bd-highlight">
                            <div class="text-secondary">Tanggal mulai</div>
                            <div class="font-weight-bold">
                                {{ $announcement->start_date->translatedFormat('d F Y') }}
                                s.d
                                {{ $announcement->end_date->translatedFormat('d F Y') }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap mt-3">
                    <div class="col col-sm-4 col-md-4">
                        <div class="p-2 bd-highlight">
                            <div class="text-secondary">Alamat</div>
                            <div class="font-weight-bold">{{ $announcement->location ?? '-' }}</div>
                        </div>
                    </div>

                    <div class="col col-sm-4 col-md-4">
                        <div class="p-2 bd-highlight">
                            <div class="text-secondary">Kontak</div>
                            <div class="font-weight-bold">{{ $announcement->contact_person ?? '-' }}</div>
                        </div>
                    </div>

                    <div class="col col-sm-4 col-md-4">
                        <div class="p-2 bd-highlight">
                            <div class="text-secondary">Media</div>
                            <div class="font-weight-bold">{{ $announcement->media ?? '-' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h6 class="mt-5 mb-2">Pengumuman lainnya.</h6>
        <div class="row mt-3">
            @forelse ($otherAnnouncements as $otherAnnouncement)
                <div class="col-sm-4 col-md-4 sr-card mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <p class="card-text text-muted">
                                <small>
                                    {{ $otherAnnouncement->start_date->translatedFormat('d F Y') }}
                                    -
                                    {{ $otherAnnouncement->end_date->translatedFormat('d F Y') }}
                                </small>
                            </p>
                            <h5 class="card-title">{{ $otherAnnouncement->title }}</h5>
                            <p class="card-text text-muted">Oleh {{ $otherAnnouncement->author ?? 'Admin' }}</p>
                            <a href="{{ route('announcement.show', $otherAnnouncement->slug) }}" class="btn btn-primary">
                                Lihat
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-12">
                    <p class="text-muted">Belum ada pengumuman lainnya.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
