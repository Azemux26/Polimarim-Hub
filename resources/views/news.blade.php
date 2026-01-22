@extends('layouts.app')
@section('content')
    @include('partials.header')
    <!-- BERITA TERPOPULER -->
    <section class="container-fluid">
        <div class="container-lg mt-4">
            <div class="row mt-4">

                <div class="col-md-6 mb-1">
                    <div class="card text-white">
                        @if (isset($popularNews[0]))
                            <img src="{{ asset('storage/' . $popularNews[0]->image) }}" class="card-img"
                                style="filter:brightness(50%); height: 410px; object-fit: cover;" alt="...">
                            <div class="card-img-overlay">
                                <small class="card-text">
                                    <svg class="bi mb-1" width="13" height="13" fill="currentColor">
                                        <use
                                            xlink:href="{{ asset('build/assets/bootstrap-icons.svg#calendar-event-fill') }}" />
                                    </svg> {{ $popularNews[0]->created_at->format('d F Y') }}
                                </small>
                                <h5 class="card-title">
                                    <a href="{{ route('news.show', $popularNews[0]->slug) }}"
                                        class="text-white">{{ $popularNews[0]->title }}</a>
                                </h5>
                            </div>
                        @else
                            <img src="{{ asset('img/blog-1 3.jpg') }}" class="card-img" style="filter:brightness(50%);"
                                alt="...">
                            <div class="card-img-overlay">
                                <small class="card-text">20 Agustus 2020</small>
                                <h5 class="card-title"><a href="/show-news" class="text-white">Pelantikan taruna/i Ta
                                        2020/2021</a></h5>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row no-gutters">

                        <div class="col-md-6 mb-1 pr-1">
                            <div class="card bg-dark text-white">
                                @if (isset($popularNews[1]))
                                    <img src="{{ asset('storage/' . $popularNews[1]->image) }}" class="card-img"
                                        style="filter:brightness(50%); height: 200px; object-fit: cover;" alt="...">
                                    <div class="card-img-overlay">
                                        <small class="card-text">
                                            <svg class="bi mb-1" width="13" height="13" fill="currentColor">
                                                <use
                                                    xlink:href="{{ asset('build/assets/bootstrap-icons.svg#calendar-event-fill') }}" />
                                            </svg> {{ $popularNews[1]->created_at->format('d F Y') }}
                                        </small>
                                        <h6 class="card-title"><a href="{{ route('news.show', $popularNews[1]->slug) }}"
                                                class="text-white">{{ Str::limit($popularNews[1]->title, 40) }}</a></h6>
                                    </div>
                                @else
                                    <img src="{{ asset('img/blog-1 3.jpg') }}" class="card-img"
                                        style="filter:brightness(50%);" alt="...">
                                    <div class="card-img-overlay"><small class="card-text">20 Agustus 2020</small>
                                        <h6 class="card-title">Card title</h6>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 mb-1">
                            <div class="card bg-dark text-white">
                                @if (isset($popularNews[2]))
                                    <img src="{{ asset('storage/' . $popularNews[2]->image) }}" class="card-img"
                                        style="filter:brightness(50%); height: 200px; object-fit: cover;" alt="...">
                                    <div class="card-img-overlay">
                                        <small class="card-text">
                                            <svg class="bi mb-1" width="13" height="13" fill="currentColor">
                                                <use
                                                    xlink:href="{{ asset('build/assets/bootstrap-icons.svg#calendar-event-fill') }}" />
                                            </svg> {{ $popularNews[2]->created_at->format('d F Y') }}
                                        </small>
                                        <h6 class="card-title"><a href="{{ route('news.show', $popularNews[2]->slug) }}"
                                                class="text-white">{{ Str::limit($popularNews[2]->title, 40) }}</a></h6>
                                    </div>
                                @else
                                    <img src="{{ asset('img/blog-2 3.jpg') }}" class="card-img"
                                        style="filter:brightness(50%);" alt="...">
                                    <div class="card-img-overlay"><small class="card-text">20 Agustus 2020</small>
                                        <h6 class="card-title">Card title</h6>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 mb-1 pr-1">
                            <div class="card bg-dark text-white">
                                @if (isset($popularNews[3]))
                                    <img src="{{ asset('storage/' . $popularNews[3]->image) }}" class="card-img"
                                        style="filter:brightness(50%); height: 200px; object-fit: cover;" alt="...">
                                    <div class="card-img-overlay">
                                        <small class="card-text">
                                            <svg class="bi mb-1" width="13" height="13" fill="currentColor">
                                                <use
                                                    xlink:href="{{ asset('build/assets/bootstrap-icons.svg#calendar-event-fill') }}" />
                                            </svg> {{ $popularNews[3]->created_at->format('d F Y') }}
                                        </small>
                                        <h6 class="card-title"><a href="{{ route('news.show', $popularNews[3]->slug) }}"
                                                class="text-white">{{ Str::limit($popularNews[3]->title, 40) }}</a></h6>
                                    </div>
                                @else
                                    <img src="{{ asset('img/blog-2 3.jpg') }}" class="card-img"
                                        style="filter:brightness(50%);" alt="...">
                                    <div class="card-img-overlay"><small class="card-text">20 Agustus 2020</small>
                                        <h6 class="card-title">Card title</h6>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card bg-dark text-white">
                                @if (isset($popularNews[4]))
                                    <img src="{{ asset('storage/' . $popularNews[4]->image) }}" class="card-img"
                                        style="filter:brightness(50%); height: 200px; object-fit: cover;" alt="...">
                                    <div class="card-img-overlay">
                                        <small class="card-text">
                                            <svg class="bi mb-1" width="13" height="13" fill="currentColor">
                                                <use
                                                    xlink:href="{{ asset('build/assets/bootstrap-icons.svg#calendar-event-fill') }}" />
                                            </svg> {{ $popularNews[4]->created_at->format('d F Y') }}
                                        </small>
                                        <h6 class="card-title"><a href="{{ route('news.show', $popularNews[4]->slug) }}"
                                                class="text-white">{{ Str::limit($popularNews[4]->title, 40) }}</a></h6>
                                    </div>
                                @else
                                    <img src="{{ asset('img/blog-2 3.jpg') }}" class="card-img"
                                        style="filter:brightness(50%);" alt="...">
                                    <div class="card-img-overlay"><small class="card-text">20 Agustus 2020</small>
                                        <h6 class="card-title">Card title pelantikan taruna/i yang ceria dan berbahaya</h6>
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>
    <!-- END BERITA TERPOPULER -->

    <!------- BERITA TERBARU ----------->
    <section class="container-fluid">
    <div class="container mt-4">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card border-0 mb-3">
                    @if(isset($latestNews[0]))
                        {{-- Perbaikan: Gambar diambil dari tabel news, bukan category --}}
                        <img src="{{ asset('storage/' . $latestNews[0]->image) }}" class="card-img-top rounded img-fluid" style="height: 350px; object-fit: cover;" alt="...">
                        <div class="card-body">
                            {{-- Badge Kategori Utama Berita --}}
                            @if($latestNews[0]->category)
                                <a href="{{ route('news.category', $latestNews[0]->category->slug) }}" class="badge badge-primary mb-3 label-judul">
                                    {{ $latestNews[0]->category->name }}
                                </a>
                            @endif

                            {{-- Badge Kategori Lainnya --}}
                            @foreach($allCategories as $cat)
                                @if($latestNews[0]->category_id != $cat->id)
                                    <a href="{{ route('news.category', $cat->slug) }}" class="badge badge-secondary mb-3 label-judul">
                                        {{ $cat->name }}
                                    </a>
                                @endif
                            @endforeach
                            
                            <a href="{{ route('news.show', $latestNews[0]->slug) }}" class="text-dark">
                                <h5 class="card-title">{{ $latestNews[0]->title }}</h5>
                            </a>
                            <a href="{{ route('news.show', $latestNews[0]->slug) }}" class="text-dark">
                                <p class="card-text">{{ Str::limit(strip_tags($latestNews[0]->content), 150) }}</p>
                            </a>
                            <p class="card-text"><small class="text-muted"><svg class="bi mb-1" width="15" height="15" fill="currentColor">
                                <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#clock') }}" />
                            </svg> {{ $latestNews[0]->created_at->diffForHumans() }}, Admin</small></p>
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-md-6 sr-card">
                <div class="row no-gutters">
                    @foreach($latestNews->skip(1)->take(4) as $lNews)
                        <div class="col-md-6 sr-card pr-3 pb-3">
                            <img src="{{ asset('storage/' . $lNews->image) }}" class="card-img-top rounded img-fluid" style="height: 120px; object-fit: cover;" alt="...">
                        </div>
                        <div class="col-md-6 sr-card">
                            @if($lNews->category)
                                <small class="text-primary font-weight-bold">{{ $lNews->category->name }}</small>
                            @endif
                            
                            <h6><a href="{{ route('news.show', $lNews->slug) }}" class="text-dark">{{ Str::limit($lNews->title, 60) }}</a></h6>
                            <p class="text-secondary"><small><svg class="bi mb-1" width="13" height="13" fill="currentColor">
                                <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#calendar-event-fill') }}" />
                            </svg> {{ $lNews->created_at->format('d M Y') }}</small></p>
                            <hr>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!------- END BERITA TERBARU ----------->

    <!-- BARITA AUDIT EKSTERNAL -->
    <section class="container-fluid">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6">
                    <h4>BERITA AUDIT EKSTERNAL</h4>
                </div>
                <div class="col-md-6 text-right">
                    <a href="#" class="text-decoration-none text-secondary">
                        <span">Lihat semua berita <svg class="bi mb-0" width="15" height="15"
                                fill="currentColor">
                                <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#chevron-double-right') }}" />
                            </svg></span>
                    </a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3 sr-card">
                    <div class="card border-0 mb-3">
                        <img src="{{ asset('img/blog-1 3.jpg') }}" class="card-img-top rounded img-fluid"
                            alt="...">
                        <div class="card-body">
                            <a href="#" class="text-dark">
                                <h5 class="card-title">Judul berita tetang audit eksternal</h5>
                            </a>
                            <!-- <a href="#" class="text-dark"><p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p></a> -->
                            <p class="card-text"><small class="card-text text-muted"><svg class="bi mb-1" width="15"
                                        height="15" fill="currentColor">
                                        <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#clock') }}" />
                                    </svg> Last updated 3 mins ago, Author</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 sr-card">
                    <div class="card border-0 mb-3">
                        <img src="{{ asset('img/blog-1 3.jpg') }}" class="card-img-top rounded img-fluid"
                            alt="...">
                        <div class="card-body">
                            <a href="#" class="text-dark">
                                <h5 class="card-title">Judul berita tetang audit eksternal</h5>
                            </a>
                            <!-- <a href="#" class="text-dark"><p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p></a> -->
                            <p class="card-text"><small class="text-muted"><svg class="bi mb-1" width="15"
                                        height="15" fill="currentColor">
                                        <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#clock') }}" />
                                    </svg> Last updated 3 mins ago, Author</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 sr-card">
                    <div class="card border-0 mb-3">
                        <img src="{{ asset('img/blog-1 3.jpg') }}" class="card-img-top rounded img-fluid"
                            alt="...">
                        <div class="card-body">
                            <a href="#" class="text-dark">
                                <h5 class="card-title">Judul berita tetang audit eksternal</h5>
                            </a>
                            <!-- <a href="#" class="text-dark"><p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p></a> -->
                            <p class="card-text"><small class="text-muted"><svg class="bi mb-1" width="15"
                                        height="15" fill="currentColor">
                                        <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#clock') }}" />
                                    </svg> Last updated 3 mins ago, Author</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 sr-card">
                    <div class="card border-0 mb-3">
                        <img src="{{ asset('img/blog-1 3.jpg') }}" class="card-img-top rounded img-fluid"
                            alt="...">
                        <div class="card-body">
                            <a href="#" class="text-dark">
                                <h5 class="card-title">Judul berita tetang audit eksternal</h5>
                            </a>
                            <!-- <a href="#" class="text-dark"><p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p></a> -->
                            <span class="card-text"><small class="text-muted"><svg class="bi mb-1" width="15"
                                        height="15" fill="currentColor">
                                        <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#clock') }}" />
                                    </svg> Last updated 3 mins ago, Author</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BARITA AUDIT EKSTERNAL -->
@endsection
