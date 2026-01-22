@extends('layouts.app')

@section('content')

{{-- HEADER --}}
@include('partials.header')
<!-- KABAR BERITA -->
  <section class="container-fluid mt-4">
    <div class="container">
      <h4>KABAR BERITA</h4>
      <div class="row">
        <div class="col-md-6">
          <p class="lead text-secondary">Berita terupdate dan terkini.</p>
        </div>
        <div class="col-md-6 text-right">
          <a href="news.html" class="text-decoration-none text-secondary">
            <span">Lihat semua berita
              <svg class="bi mb-0" width="15" height="15" fill="currentColor">
                <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#chevron-double-right')}}" />
              </svg></span>
          </a>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-4 sr-card">
          <div class="card border-0 shadow-sm mb-5" data-filetype="card-berita">
            <div class="img-card-hover">
              <img src="{{asset('img/blog-1 3.jpg')}}" class="card-img-top rounded-top img-fluid" alt="Gambar berita">
            </div>
            <div class="card-body">
              <a href="/show-news" class="text-dark">
                <h6 class="card-title">Pelantikan Catar/i Ta 2020/2021 dilantik oleh direktur dan menjadikan taruna
                  lebih berbahagia</h6>
              </a>
              <a href="#" class="text-dark">
                <p class="text-secondary">This is a wider card with supporting text below as a natural lead-in to
                  additional content. This content is a little.</p>
              </a>
              <p class="card-text"><small class="text-muted"><svg class="bi mb-1" width="17" height="17"
                    fill="currentColor">
                    <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#clock')}}" />
                  </svg> Last updated 3 mins ago, Author</small></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 sr-card">
          <div class="card border-0 shadow-sm mb-5" data-filetype="card-berita">
            <div class="img-card-hover">
              <img src="{{asset('img/blog-2 3.jpg')}}" class="card-img-top  rounded-top img-fluid" alt="Gambar berita">
            </div>
            <div class="card-body">
              <a href="/show-news" class="text-dark">
                <h6 class="card-title">Pelantikan Catar/i Ta 2020/2021 dilantik oleh direktur dan menjadikan taruna
                  lebih berbahagia</h6>
              </a>
              <a href="#" class="text-dark">
                <p class="text-secondary">This is a wider card with supporting text below as a natural lead-in to
                  additional content. This content is a little.</p>
              </a>
              <p class="card-text"><small class="text-muted"><svg class="bi mb-1" width="17" height="17"
                    fill="currentColor">
                    <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#clock')}}" />
                  </svg> Last updated 3 mins ago, Author</small></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 sr-card">
          <div class="card border-0 shadow-sm mb-5" data-filetype="card-berita">
            <div class="img-card-hover">
              <img src="{{asset('img/blog-3 2.jpg')}}" class="card-img-top  rounded-top img-fluid" alt="Gambar berita">
            </div>
            <div class="card-body">
              <a href="/show-news" class="text-dark">
                <h6 class="card-title">Pelantikan Catar/i Ta 2020/2021 dilantik oleh direktur dan menjadikan taruna
                  lebih berbahagia</h6>
              </a>
              <a href="#" class="text-dark">
                <p class="text-secondary">This is a wider card with supporting text below as a natural lead-in to
                  additional content. This content is a little.</p>
              </a>
              <p class="card-text"><small class="text-muted"><svg class="bi mb-1" width="17" height="17"
                    fill="currentColor">
                    <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#clock')}}" />
                  </svg> Last updated 3 mins ago, Author</small></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 sr-card">
          <div class="card border-0 shadow-sm mb-5" data-filetype="card-berita">
            <div class="img-card-hover">
              <img src="{{asset('img/blog-1 3.jpg')}}" class="card-img-top  rounded-top img-fluid" alt="Gambar berita">
            </div>
            <div class="card-body">
              <a href="/show-news" class="text-dark">
                <h6 class="card-title">Pelantikan Catar/i Ta 2020/2021 dilantik oleh direktur dan menjadikan taruna
                  lebih berbahagia</h6>
              </a>
              <a href="#" class="text-dark">
                <p class="text-secondary">This is a wider card with supporting text below as a natural lead-in to
                  additional content. This content is a little.</p>
              </a>
              <p class="card-text"><small class="text-muted"><svg class="bi mb-1" width="17" height="17"
                    fill="currentColor">
                    <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#clock')}}" />
                  </svg> Last updated 3 mins ago, Author</small></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 sr-card">
          <div class="card border-0 shadow-sm mb-5" data-filetype="card-berita">
            <div class="img-card-hover">
              <img src="{{asset('img/blog-2 3.jpg')}}" class="card-img-top  rounded-top img-fluid" alt="Gambar berita">
            </div>
            <div class="card-body">
              <a href="/show-news" class="text-dark">
                <h6 class="card-title">Pelantikan Catar/i Ta 2020/2021 dilantik oleh direktur dan menjadikan taruna
                  lebih berbahagia</h6>
              </a>
              <a href="#" class="text-dark">
                <p class="text-secondary">This is a wider card with supporting text below as a natural lead-in to
                  additional content. This content is a little.</p>
              </a>
              <p class="card-text"><small class="text-muted"><svg class="bi mb-1" width="17" height="17"
                    fill="currentColor">
                    <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#clock')}}" />
                  </svg> Last updated 3 mins ago, Author</small></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 sr-card">
          <div class="card border-0 shadow-sm mb-5" data-filetype="card-berita">
            <div class="img-card-hover">
              <img src="{{asset('img/blog-3 2.jpg')}}" class="card-img-top  rounded-top img-fluid" alt="Gambar berita">
            </div>
            <div class="card-body">
              <a href="/show-news" class="text-dark">
                <h6 class="card-title">Pelantikan Catar/i Ta 2020/2021 dilantik oleh direktur dan menjadikan taruna
                  lebih berbahagia</h6>
              </a>
              <a href="#" class="text-dark">
                <p class="text-secondary">This is a wider card with supporting text below as a natural lead-in to
                  additional content. This content is a little.</p>
              </a>
              <p class="card-text"><small class="text-muted">
                  <svg class="bi mb-1" width="17" height="17" fill="currentColor">
                    <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#clock')}}" />
                  </svg> Last updated 3 mins ago, Author</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END KABAR BERITA -->

  <!-- KATEGORI BERITA -->
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
                <div class="col-sm-3 mt-3">
                  <div class="card kategori border-0" style="background-color: #1e3b5f;">
                    <a href="#" class="text-decoration-none text-dark">
                      <div class="d-flex justify-content-center">
                        <div class="px-2 py-3">
                          <img src="{{asset('img/news-icon.png')}}" class="card-img" alt="kategori">
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-sm-3 mt-3">
                  <div class="card kategori border-0" style="background-color: #1e3b5f;">
                    <a href="#" class="text-decoration-none text-dark">
                      <div class="d-flex justify-content-center">
                        <div class="px-2 py-3">
                          <img src="{{asset('img/news-icon.png')}}" class="card-img" alt="kategori">
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-sm-3 mt-3">
                  <div class="card kategori border-0" style="background-color: #1e3b5f;">
                    <a href="#" class="text-decoration-none text-dark">
                      <div class="d-flex justify-content-center">
                        <div class="px-2 py-3">
                          <img src="{{asset('img/news-icon.png')}}" class="card-img" alt="kategori">
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-sm-3 mt-3">
                  <div class="card kategori border-0" style="background-color: #1e3b5f;">
                    <a href="#" class="text-decoration-none text-dark">
                      <div class="d-flex justify-content-center">
                        <div class="px-2 py-3">
                           <img src="{{asset('img/news-icon.png')}}" class="card-img" alt="kategori">
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-sm-3 mt-3">
                  <div class="card kategori border-0" style="background-color: #1e3b5f;">
                    <a href="#" class="text-decoration-none text-dark">
                      <div class="d-flex justify-content-center">
                        <div class="px-2 py-3">
                           <img src="{{asset('img/news-icon.png')}}" class="card-img" alt="kategori">
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-sm-3 mt-3">
                  <div class="card kategori border-0" style="background-color: #1e3b5f;">
                    <a href="#" class="text-decoration-none text-dark">
                      <div class="d-flex justify-content-center">
                        <div class="px-2 py-3">
                           <img src="{{asset('img/news-icon.png')}}" class="card-img" alt="kategori">
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END KATEGORI BERITA -->

  <!-- AGENDA PENGUMUMAN -->
  <section class="container-fluid bg-dark">
    <div class="container pb-1">
      <h4 class="text-white pt-5">AGENDA & PENGUMUMAN</h4>
      <p class="lead text-secondary">Pemilihan Agenda & Pengumuman terbaru terkait kegiatan internal dan eksternal.</p>
      <div class="card p-0 mb-5 border-0 shadow-sm rounded">
        <div class="card-body rounded">
          <div class="row">
            <div class="col-md-6 mt-3">
              <div class="row">
                <div class="col-md-7 mx-auto d-block">
                  <h3>Agenda</h3>
                </div>
                <div class="col-md-4 mt-2 text-right">
                  <a href="agenda.html" class="text-decoration-none text-secondary"><span>Lihat semua <svg
                        class="bi mb-0" width="15" height="15" fill="currentColor">
                        <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#chevron-double-right')}}" />
                      </svg></span></a>
                </div>
                <div class="col-md-12 mt-4">
                  <span class="text-secondary ml-4"><svg class="bi mb-1" width="13" height="13" fill="currentColor">
                      <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                    </svg> 10 Aug 2020</span>
                  <p class="lead ml-4">Audit eksternal untuk mutu dan sesuatu</p>
                  <hr>
                  <span class="text-secondary ml-4"><svg class="bi mb-1" width="13" height="13" fill="currentColor">
                      <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                    </svg> 10 Aug 2020</span>
                  <p class="lead ml-4">Audit eksternal untuk mutu dan sesuatu</p>
                  <hr>
                  <span class="text-secondary ml-4"><svg class="bi mb-1" width="13" height="13" fill="currentColor">
                      <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                    </svg> 10 Aug 2020</span>
                  <p class="lead ml-4">Audit eksternal untuk mutu dan sesuatu</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-3">
              <div class="row">
                <div class="col-md-7 mx-auto d-block">
                  <h3>Pengumuman</h3>
                </div>
                <div class="col-md-4 mt-2 text-right">
                  <a href="agenda.html" class="text-decoration-none text-secondary"><span>Lihat semua <svg
                        class="bi mb-0" width="15" height="15" fill="currentColor">
                        <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#chevron-double-right')}}" />
                      </svg></span></a>
                </div>
                <div class="col-md-12 mt-4">
                  <span class="text-secondary ml-4"><svg class="bi mb-1" width="13" height="13" fill="currentColor">
                      <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                    </svg> 10 Aug 2020</span>
                  <p class="lead ml-4">Audit eksternal untuk mutu dan sesuatu</p>
                  <hr>
                  <span class="text-secondary ml-4"><svg class="bi mb-1" width="13" height="13" fill="currentColor">
                      <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                    </svg> 10 Aug 2020</span>
                  <p class="lead ml-4">Audit eksternal untuk mutu dan sesuatu</p>
                  <hr>
                  <span class="text-secondary ml-4"><svg class="bi mb-1" width="13" height="13" fill="currentColor">
                      <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                    </svg> 10 Aug 2020</span>
                  <p class="lead ml-4">Audit eksternal untuk mutu dan sesuatu</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END AGENDA PENGUMUMAN -->

  <!-- TOP LEADER -->
  <section class="container-fluid mt-3 pt-3">
    <div class="container">
      <H4>TOP PEMIMPIN</H4>
      <div class="row">
        <div class="col-md-6">
          <p class="lead text-secondary">Pemimpin terbaik untuk masa depan dunia maritim.</p>
        </div>
        <div class="col-md-6 text-right">
          <a href="#" class="text-decoration-none text-secondary">
            <span">Lihat semua <svg class="bi mb-0" width="15" height="15" fill="currentColor">
                <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#chevron-double-right')}}" />
              </svg></span>
          </a>
        </div>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
        <ol class="carousel-indicators justify-content-start ml-5 pl-5" id="indikator-leader">
          <li class="rounded-circle" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li class="rounded-circle" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li class="rounded-circle" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-sm"><img src="{{asset('img/direktur.png')}}" class="d-block w-100" alt="..."></div>
              <div class="col-sm"><img src="{{asset('img/pudir1.png')}}" class="d-block w-100" alt="..."></div>
              <div class="col-sm"><img src="{{asset('img/pudir2.png')}}" class="d-block w-100" alt="..."></div>
              <div class="col-sm"><img src="{{asset('img/pudir3.png')}}" class="d-block w-100" alt="..."></div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-sm"><img src="{{asset('img/direktur.png')}}" class="d-block w-100" alt="..."></div>
              <div class="col-sm"><img src="{{asset('img/pudir1.png')}}" class="d-block w-100" alt="..."></div>
              <div class="col-sm"><img src="{{asset('img/pudir2.png')}}" class="d-block w-100" alt="..."></div>
              <div class="col-sm"><img src="{{asset('img/pudir3.png')}}" class="d-block w-100" alt="..."></div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-sm"><img src="{{asset('img/direktur.png')}}" class="d-block w-100" alt="..."></div>
              <div class="col-sm"><img src="{{asset('img/pudir1.png')}}" class="d-block w-100" alt="..."></div>
              <div class="col-sm"><img src="{{asset('img/pudir2.png')}}" class="d-block w-100" alt="..."></div>
              <div class="col-sm"><img src="{{asset('img/pudir3.png')}}" class="d-block w-100" alt="..."></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END TOP LEADER -->

  <!-- KATA MEREKA -->
  <section class="container-fluid mt-5 pt-4">
    <div class="container" id="kata-mereka">
      <H4>TOP KATA MEREKA</H4>
      <div class="row">
        <div class="col-md-10">
          <p class="lead text-secondary">Kata mereka dengan lulusan dan kualitas kampus Polimarim Makassar.</p>
        </div>
        <div class="col-md-2 text-right">
          <a href="#" class="text-decoration-none text-secondary">
            <span">Lihat semua <svg class="bi mb-0" width="15" height="15" fill="currentColor">
                <use xlink:href="{{'build/assets/bootstrap-icons.svg#chevron-double-right'}}" />
              </svg></span>
          </a>
        </div>
      </div>
      <div id="carouselKataMereka" class="carousel slide mt-3" data-ride="carousel">
        <ol class="carousel-indicators justify-content-start ml-5 pl-5" id="indikator-mereka">
          <li class="rounded-circle" data-target="#carouselKataMereka" data-slide-to="0" class="active"></li>
          <li class="rounded-circle" data-target="#carouselKataMereka" data-slide-to="1"></li>
          <li class="rounded-circle" data-target="#carouselKataMereka" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-4 mb-5">
                <div class="card border-0 shadow-sm" style="opacity: 0.97;">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{asset('img/blog-author 2.png')}}" class="rounded-circle" width="85px" height="85px" alt="...">
                    </div>
                    <p class="card-text text-secondary font-italic mt-4"
                      style="font-family: 'Poppins'; font-style: italic;">"Some quick example text to build on the card
                      title and make up the bulk of the card's content."</p>
                    <div class="d-flex justify-content-between">
                      <span class="text-secondary mr-5 pr-5" style="font-size: 13px;">Author link</span>
                      <span class="text-secondary ml-3 pl-4" style="font-size: 13px;"><svg class="bi mb-1" width="13"
                          height="13" fill="currentColor">
                          <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                        </svg> 01 Aug 2020</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-5">
                <div class="card border-0 shadow-sm" style="opacity: 0.97;">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{asset('img/blog-author 2.png')}}" class="rounded-circle" width="85px" height="85px" alt="...">
                    </div>
                    <p class="card-text text-secondary font-italic mt-4"
                      style="font-family: 'Poppins'; font-style: italic;">"Some quick example text to build on the card
                      title and make up the bulk of the card's content."</p>
                    <div class="d-flex justify-content-between">
                      <span class="text-secondary mr-5 pr-5" style="font-size: 13px;">Author link</span>
                      <span class="text-secondary ml-3 pl-4" style="font-size: 13px;">
                        <svg class="bi mb-1" width="13" height="13" fill="currentColor">
                          <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                        </svg> 01 Aug 2020</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-5">
                <div class="card border-0 shadow-sm" style="opacity: 0.97;">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{asset('img/blog-author 2.png')}}" class="rounded-circle" width="85px" height="85px" alt="...">
                    </div>
                    <p class="card-text text-secondary font-italic mt-4"
                      style="font-family: 'Poppins'; font-style: italic;">"Some quick example text to build on the card
                      title and make up the bulk of the card's content."</p>
                    <div class="d-flex justify-content-between">
                      <span class="text-secondary mr-5 pr-5" style="font-size: 13px;">Author link</span>
                      <span class="text-secondary ml-3 pl-4" style="font-size: 13px;"><svg class="bi mb-1" width="13"
                          height="13" fill="currentColor">
                          <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                        </svg> 01 Aug 2020</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-4 mb-5">
                <div class="card border-0 shadow-sm" style="opacity: 0.97;">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{asset('img/blog-author 2.png')}}" class="rounded-circle" width="85px" height="85px" alt="...">
                    </div>
                    <p class="card-text text-secondary font-italic mt-4"
                      style="font-family: 'Poppins'; font-style: italic;">"Some quick example text to build on the card
                      title and make up the bulk of the card's content."</p>
                    <div class="d-flex justify-content-between">
                      <span class="text-secondary mr-5 pr-5" style="font-size: 13px;">Author link</span>
                      <span class="text-secondary ml-3 pl-4" style="font-size: 13px;"><svg class="bi mb-1" width="13"
                          height="13" fill="currentColor">
                          <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                        </svg> 01 Aug 2020</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-5">
                <div class="card border-0 shadow-sm" style="opacity: 0.97;">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{asset('img/blog-author 2.png')}}" class="rounded-circle" width="85px" height="85px" alt="...">
                    </div>
                    <p class="card-text text-secondary font-italic mt-4"
                      style="font-family: 'Poppins'; font-style: italic;">"Some quick example text to build on the card
                      title and make up the bulk of the card's content."</p>
                    <div class="d-flex justify-content-between">
                      <span class="text-secondary mr-5 pr-5" style="font-size: 13px;">Author link</span>
                      <span class="text-secondary ml-3 pl-4" style="font-size: 13px;"><svg class="bi mb-1" width="13"
                          height="13" fill="currentColor">
                          <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                        </svg> 01 Aug 2020</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-5">
                <div class="card border-0 shadow-sm" style="opacity: 0.97;">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{asset('img/blog-author 2.png')}}" class="rounded-circle" width="85px" height="85px" alt="...">
                    </div>
                    <p class="card-text text-secondary font-italic mt-4"
                      style="font-family: 'Poppins'; font-style: italic;">"Some quick example text to build on the card
                      title and make up the bulk of the card's content."</p>
                    <div class="d-flex justify-content-between">
                      <span class="text-secondary mr-5 pr-5" style="font-size: 13px;">Author link</span>
                      <span class="text-secondary ml-3 pl-4" style="font-size: 13px;"><svg class="bi mb-1" width="13"
                          height="13" fill="currentColor">
                          <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                        </svg> 01 Aug 2020</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-4 mb-5">
                <div class="card border-0 shadow-sm" style="opacity: 0.97;">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{asset('img/blog-author 2.png')}}" class="rounded-circle" width="85px" height="85px" alt="...">
                    </div>
                    <p class="card-text text-secondary font-italic mt-4"
                      style="font-family: 'Poppins'; font-style: italic;">"Some quick example text to build on the card
                      title and make up the bulk of the card's content."</p>
                    <div class="d-flex justify-content-between">
                      <span class="text-secondary mr-5 pr-5" style="font-size: 13px;">Author link</span>
                      <span class="text-secondary ml-3 pl-4" style="font-size: 13px;"><svg class="bi mb-1" width="13"
                          height="13" fill="currentColor">
                          <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                        </svg> 01 Aug 2020</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-5">
                <div class="card border-0 shadow-sm" style="opacity: 0.97;">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{asset('img/blog-author 2.png')}}" class="rounded-circle" width="85px" height="85px" alt="...">
                    </div>
                    <p class="card-text text-secondary font-italic mt-4"
                      style="font-family: 'Poppins'; font-style: italic;">"Some quick example text to build on the card
                      title and make up the bulk of the card's content."</p>
                    <div class="d-flex justify-content-between">
                      <span class="text-secondary mr-5 pr-5" style="font-size: 13px;">Author link</span>
                      <span class="text-secondary ml-3 pl-4" style="font-size: 13px;"><svg class="bi mb-1" width="13"
                          height="13" fill="currentColor">
                          <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                        </svg> 01 Aug 2020</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-5">
                <div class="card border-0 shadow-sm" style="opacity: 0.97;">
                  <div class="card-body">
                    <div class="mx-auto">
                      <img src="{{asset('img/blog-author 2.png')}}" class="rounded-circle" width="85px" height="85px" alt="...">
                    </div>
                    <p class="card-text text-secondary font-italic mt-4"
                      style="font-family: 'Poppins'; font-style: italic;">"Some quick example text to build on the card
                      title and make up the bulk of the card's content."</p>
                    <div class="d-flex justify-content-between">
                      <span class="text-secondary mr-5 pr-5" style="font-size: 13px;">Author link</span>
                      <span class="text-secondary ml-3 pl-4" style="font-size: 13px;"><svg class="bi mb-1" width="13"
                          height="13" fill="currentColor">
                          <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                        </svg> 01 Aug 2020</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END KATA MEREKA -->



@endsection
