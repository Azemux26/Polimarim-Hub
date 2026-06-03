@extends('layouts.app')

@section('content')
@include('partials.header')

<section class="container-fluid mt-4">
    <div class="container">
        <h4>KABAR BERITA</h4>
        <div class="row">
            <div class="col-md-6">
                <p class="lead text-secondary">Berita terupdate dan terkini.</p>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{ route('news') }}" class="text-decoration-none text-secondary">
                    <span>Lihat semua berita
                        <svg class="bi mb-0" width="15" height="15" fill="currentColor">
                            <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#chevron-double-right') }}" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>

        <div class="row mt-3">
            @forelse ($latestNews as $news)
                <div class="col-md-4 sr-card">
                    <div class="card border-0 shadow-sm mb-5 h-100" data-filetype="card-berita">
                        <div class="img-card-hover">
                            <img src="{{ $news->image ? asset('storage/' . $news->image) : asset('img/blog-1 3.jpg') }}"
                                class="card-img-top rounded-top img-fluid" style="height: 220px; object-fit: cover;"
                                alt="{{ $news->title }}">
                        </div>

                        <div class="card-body">
                            @if ($news->category)
                                <a href="{{ route('news.category', $news->category->slug) }}"
                                    class="badge badge-primary mb-2">
                                    {{ $news->category->name }}
                                </a>
                            @endif

                            <a href="{{ route('news.show', $news->slug) }}" class="text-dark">
                                <h6 class="card-title">{{ $news->title }}</h6>
                            </a>

                            <a href="{{ route('news.show', $news->slug) }}" class="text-dark">
                                <p class="text-secondary">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($news->content), 120) }}
                                </p>
                            </a>

                            <p class="card-text">
                                <small class="text-muted">
                                    {{ ($news->published_at ?? $news->created_at)->diffForHumans() }}
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-12">
                    <p class="text-muted">Belum ada berita yang dipublikasikan.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<section class="container-fluid mt-3">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-7 mb-3">
                <div class="rounded shadow-sm embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/XqH332tf1Ag" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card shadow-sm border-0 p-0 mb-5 bg-white">
                    <div class="card-body rounded">
                        <h3>KATEGORI BERITA</h3>
                        <p class="lead text-secondary">Pilihlah berita berdasarkan kategori.</p>

                        <div class="row">
                            @forelse ($categories as $category)
                                <div class="col-sm-4 mt-3">
                                    <a href="{{ route('news.category', $category->slug) }}" class="text-decoration-none text-dark">
                                        <div class="card kategori border-0 text-center" style="background-color: #1e3b5f;">
                                            <div class="card-body text-white">
                                                <img src="{{ asset('img/news-icon.png') }}" width="42" height="42" alt="{{ $category->name }}">
                                                <div class="mt-2 small">{{ $category->name }}</div>
                                                <div class="small">{{ $category->news_count }} berita</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @empty
                                <div class="col-md-12">
                                    <p class="text-muted">Belum ada kategori berita aktif.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid bg-dark">
    <div class="container pb-5">
        <h4 class="text-white pt-5">AGENDA &amp; PENGUMUMAN</h4>
        <p class="lead text-secondary">Pemilihan agenda dan pengumuman terbaru terkait kegiatan internal dan eksternal.</p>

        <div class="card p-0 border-0 shadow-sm rounded">
            <div class="card-body rounded">
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <div class="row">
                            <div class="col-md-7">
                                <h3>Agenda</h3>
                            </div>
                            <div class="col-md-5 mt-2 text-right">
                                <a href="{{ route('agenda') }}" class="text-decoration-none text-secondary">
                                    <span>Lihat semua</span>
                                </a>
                            </div>

                            <div class="col-md-12 mt-4">
                                @forelse ($agendas as $agenda)
                                    <span class="text-secondary ml-4">
                                        {{ $agenda->start_date->translatedFormat('d M Y') }}
                                    </span>
                                    <p class="lead ml-4">
                                        <a href="{{ route('agenda.show', $agenda->slug) }}" class="text-dark">
                                            {{ $agenda->title }}
                                        </a>
                                    </p>
                                    @if (! $loop->last)
                                        <hr>
                                    @endif
                                @empty
                                    <p class="text-muted ml-4">Belum ada agenda aktif.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <div class="row">
                            <div class="col-md-7">
                                <h3>Pengumuman</h3>
                            </div>
                            <div class="col-md-5 mt-2 text-right">
                                <a href="{{ route('agenda') }}" class="text-decoration-none text-secondary">
                                    <span>Lihat semua</span>
                                </a>
                            </div>

                            <div class="col-md-12 mt-4">
                                @forelse ($announcements as $announcement)
                                    <span class="text-secondary ml-4">
                                        {{ $announcement->start_date->translatedFormat('d M Y') }}
                                    </span>
                                    <p class="lead ml-4">
                                        <a href="{{ route('announcement.show', $announcement->slug) }}" class="text-dark">
                                            {{ $announcement->title }}
                                        </a>
                                    </p>
                                    @if (! $loop->last)
                                        <hr>
                                    @endif
                                @empty
                                    <p class="text-muted ml-4">Belum ada pengumuman aktif.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
</section>

<section class="container-fluid mt-3 pt-3">
    <div class="container">
        <h4>TOP PEMIMPIN</h4>
        <div class="row">
            <div class="col-md-6">
                <p class="lead text-secondary">Pemimpin terbaik untuk masa depan dunia maritim.</p>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{ route('leader') }}" class="text-decoration-none text-secondary">
                    <span>Lihat semua</span>
                </a>
            </div>
        </div>

        <div class="row mt-3 text-center">
            <div class="col-sm"><img src="{{ asset('img/direktur.png') }}" class="d-block w-100" alt="Direktur"></div>
            <div class="col-sm"><img src="{{ asset('img/pudir1.png') }}" class="d-block w-100" alt="Pudir 1"></div>
            <div class="col-sm"><img src="{{ asset('img/pudir2.png') }}" class="d-block w-100" alt="Pudir 2"></div>
            <div class="col-sm"><img src="{{ asset('img/pudir3.png') }}" class="d-block w-100" alt="Pudir 3"></div>
        </div>
    </div>
</section>
@endsection
