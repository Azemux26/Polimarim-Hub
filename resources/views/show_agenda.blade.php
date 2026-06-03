@extends('layouts.app')

@section('content')
<section class="container-fluid bg-light">
    <div class="container pb-3">
        <h6 class="display-4 pt-3 mb-2">Agenda</h6>
    </div>
</section>

<section class="container-fluid">
    <div class="container mt-3 mb-5">
        <div class="d-flex flex-column bd-highlight mb-3 text-center">
            <div class="p-2 bd-highlight">
                <h2>{{ $agenda->title }}</h2>
            </div>
            <div class="p-2 bd-highlight text-secondary">
                {{ $agenda->description }}
            </div>
            <div class="p-2 bd-highlight text-secondary">
                Tema Agenda: "{{ $agenda->theme ?? '-' }}"
            </div>
        </div>

        <div class="row">
            <div class="d-flex col-md-12 flex-column bd-highlight mb-3">
                <div class="d-flex flex-wrap">
                    <div class="col col-sm-4 col-md-4">
                        <div class="p-2 bd-highlight">
                            <div class="text-secondary">
                                <svg class="bi mb-1 text-dark" width="16" height="16" fill="currentColor">
                                    <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#person-badge-fill') }}" />
                                </svg>
                                Oleh
                            </div>
                            <div class="font-weight-bold">{{ $agenda->author ?? 'Admin' }}</div>
                        </div>
                    </div>

                    <div class="col col-sm-4 col-md-4">
                        <div class="p-2 bd-highlight">
                            <div class="text-secondary">
                                <svg class="bi mb-1 text-dark" width="16" height="16" fill="currentColor">
                                    <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#clock-fill') }}" />
                                </svg>
                                Jam mulai
                            </div>
                            <div class="font-weight-bold">
                                @if ($agenda->start_time && $agenda->end_time)
                                    {{ \Carbon\Carbon::parse($agenda->start_time)->format('H.i') }}
                                    s.d
                                    {{ \Carbon\Carbon::parse($agenda->end_time)->format('H.i') }}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col col-sm-4 col-md-4">
                        <div class="p-2 bd-highlight">
                            <div class="text-secondary">
                                <svg class="bi mb-1 text-dark" width="16" height="16" fill="currentColor">
                                    <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#calendar3-week-fill') }}" />
                                </svg>
                                Tanggal mulai
                            </div>
                            <div class="font-weight-bold">
                                {{ $agenda->start_date->translatedFormat('d F Y') }}
                                s.d
                                {{ $agenda->end_date->translatedFormat('d F Y') }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap mt-3">
                    <div class="col col-sm-4 col-md-4">
                        <div class="p-2 bd-highlight">
                            <div class="text-secondary">
                                <svg class="bi mb-1 text-dark" width="16" height="16" fill="currentColor">
                                    <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#geo-fill') }}" />
                                </svg>
                                Alamat
                            </div>
                            <div class="font-weight-bold">{{ $agenda->location ?? '-' }}</div>
                        </div>
                    </div>

                    <div class="col col-sm-4 col-md-4">
                        <div class="p-2 bd-highlight">
                            <div class="text-secondary">
                                <svg class="bi mb-1 text-dark" width="16" height="16" fill="currentColor">
                                    <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#telephone-forward-fill') }}" />
                                </svg>
                                Kontak
                            </div>
                            <div class="font-weight-bold">{{ $agenda->contact_person ?? '-' }}</div>
                        </div>
                    </div>

                    <div class="col col-sm-4 col-md-4">
                        <div class="p-2 bd-highlight">
                            <div class="text-secondary">
                                <svg class="bi mb-1 text-dark" width="16" height="16" fill="currentColor">
                                    <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#camera-reels-fill') }}" />
                                </svg>
                                Media
                            </div>
                            <div class="font-weight-bold">{{ $agenda->media ?? '-' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h6 class="mt-5 mb-2">Agenda lainnya.</h6>
        <div class="row mt-3">
            @forelse ($otherAgendas as $otherAgenda)
                <div class="col-sm-4 col-md-4 sr-card mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <p class="card-text text-muted">
                                <small>
                                    <svg class="bi mb-1" width="13" height="13" fill="currentColor">
                                        <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#calendar-event-fill') }}" />
                                    </svg>
                                    {{ $otherAgenda->start_date->translatedFormat('d F Y') }}
                                    -
                                    {{ $otherAgenda->end_date->translatedFormat('d F Y') }}
                                </small>
                            </p>
                            <h5 class="card-title">{{ $otherAgenda->title }}</h5>
                            <p class="card-text text-muted">Oleh {{ $otherAgenda->author ?? 'Admin' }}</p>
                            <a href="{{ route('agenda.show', $otherAgenda->slug) }}" class="btn btn-primary">
                                Lihat
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-12">
                    <p class="text-muted">Belum ada agenda lainnya.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
