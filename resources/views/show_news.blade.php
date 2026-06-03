@extends('layouts.app')

@section('content')
<section class="container-fluid">
    <div class="container mt-4">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card text-white border-0 shadow-sm">
                    <img src="{{ $news->image ? asset('storage/' . $news->image) : asset('img/blog-1 3.jpg') }}"
                        class="card-img w-100" style="filter:brightness(50%); height: 420px; object-fit: cover;"
                        alt="{{ $news->title }}">

                    <div class="card-img-overlay">
                        @if ($news->category)
                            <a href="{{ route('news.category', $news->category->slug) }}" class="badge badge-primary mb-2">
                                {{ $news->category->name }}
                            </a>
                        @endif

                        <h3 class="card-title judul-berita">
                            <a href="{{ route('news.show', $news->slug) }}" class="text-white">{{ $news->title }}</a>
                        </h3>

                        <small class="card-text">
                            {{ ($news->published_at ?? $news->created_at)->translatedFormat('d F Y') }}
                        </small>
                    </div>
                </div>

                <div class="text-justify text-secondary mt-3 font-weight-light">
                    {!! $news->content !!}
                </div>

                <hr>

                <h5>Berita terkait lainnya.</h5>
                <div class="row mt-3">
                    @forelse ($relatedNews as $related)
                        <div class="col-md-3">
                            <div class="card mb-3 h-100">
                                <a href="{{ route('news.show', $related->slug) }}">
                                    <img src="{{ $related->image ? asset('storage/' . $related->image) : asset('img/blog-1 3.jpg') }}"
                                        class="card-img-top rounded-top img-fluid"
                                        style="height: 120px; object-fit: cover;"
                                        alt="{{ $related->title }}">
                                </a>

                                <div class="card-body">
                                    <a href="{{ route('news.show', $related->slug) }}" class="text-dark">
                                        <h5 class="card-title">{{ \Illuminate\Support\Str::limit($related->title, 55) }}</h5>
                                    </a>

                                    <p class="card-text">
                                        <small class="text-muted">
                                            {{ ($related->published_at ?? $related->created_at)->translatedFormat('d M Y') }}
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12">
                            <p class="text-muted">Belum ada berita terkait.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
