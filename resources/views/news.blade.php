@extends('layouts.app')

@section('content')
@include('partials.header')

<section class="container-fluid">
    <div class="container-lg mt-4">
        <div class="row mt-4">
            <div class="col-md-6 mb-1">
                <div class="card text-white">
                    @if ($popularNews->isNotEmpty())
                        <img src="{{ $popularNews[0]->image ? asset('storage/' . $popularNews[0]->image) : asset('img/blog-1 3.jpg') }}"
                            class="card-img" style="filter:brightness(50%); height: 410px; object-fit: cover;"
                            alt="{{ $popularNews[0]->title }}">
                        <div class="card-img-overlay">
                            <small class="card-text">
                                {{ ($popularNews[0]->published_at ?? $popularNews[0]->created_at)->translatedFormat('d F Y') }}
                            </small>
                            <h5 class="card-title">
                                <a href="{{ route('news.show', $popularNews[0]->slug) }}" class="text-white">
                                    {{ $popularNews[0]->title }}
                                </a>
                            </h5>
                        </div>
                    @else
                        <img src="{{ asset('img/blog-1 3.jpg') }}" class="card-img" style="filter:brightness(50%);" alt="Berita belum tersedia">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Belum ada berita.</h5>
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                <div class="row no-gutters">
                    @foreach ($popularNews->skip(1)->take(4) as $popular)
                        <div class="col-md-6 mb-1 pr-1">
                            <div class="card bg-dark text-white">
                                <img src="{{ $popular->image ? asset('storage/' . $popular->image) : asset('img/blog-1 3.jpg') }}"
                                    class="card-img" style="filter:brightness(50%); height: 200px; object-fit: cover;"
                                    alt="{{ $popular->title }}">
                                <div class="card-img-overlay">
                                    <small class="card-text">
                                        {{ ($popular->published_at ?? $popular->created_at)->translatedFormat('d F Y') }}
                                    </small>
                                    <h6 class="card-title">
                                        <a href="{{ route('news.show', $popular->slug) }}" class="text-white">
                                            {{ \Illuminate\Support\Str::limit($popular->title, 40) }}
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <hr>
    </div>
</section>

<section class="container-fluid">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h4>{{ $category ? 'BERITA KATEGORI: ' . strtoupper($category->name) : 'BERITA TERBARU' }}</h4>
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
            @forelse ($latestNews as $item)
                <div class="col-md-4 sr-card">
                    <div class="card border-0 mb-3 h-100">
                        <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('img/blog-1 3.jpg') }}"
                            class="card-img-top rounded img-fluid" style="height: 220px; object-fit: cover;"
                            alt="{{ $item->title }}">

                        <div class="card-body">
                            @if ($item->category)
                                <a href="{{ route('news.category', $item->category->slug) }}"
                                    class="badge badge-primary mb-3 label-judul">
                                    {{ $item->category->name }}
                                </a>
                            @endif

                            <a href="{{ route('news.show', $item->slug) }}" class="text-dark">
                                <h5 class="card-title">{{ $item->title }}</h5>
                            </a>

                            <a href="{{ route('news.show', $item->slug) }}" class="text-dark">
                                <p class="card-text">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($item->content), 130) }}
                                </p>
                            </a>

                            <p class="card-text">
                                <small class="text-muted">
                                    {{ ($item->published_at ?? $item->created_at)->diffForHumans() }}
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

        <div class="mt-4">
            {{ $latestNews->links() }}
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="container mt-4 mb-5">
        <div class="row">
            <div class="col-md-6">
                <h4>BERITA AUDIT EKSTERNAL</h4>
            </div>
        </div>

        <div class="row mt-3">
            @forelse ($auditNews as $news)
                <div class="col-md-3 sr-card">
                    <div class="card border-0 mb-3 h-100">
                        <img src="{{ $news->image ? asset('storage/' . $news->image) : asset('img/blog-1 3.jpg') }}"
                            class="card-img-top rounded img-fluid" style="height: 160px; object-fit: cover;"
                            alt="{{ $news->title }}">

                        <div class="card-body">
                            <a href="{{ route('news.show', $news->slug) }}" class="text-dark">
                                <h5 class="card-title">{{ \Illuminate\Support\Str::limit($news->title, 60) }}</h5>
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
                    <p class="text-muted">Belum ada berita kategori Audit Eksternal.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
