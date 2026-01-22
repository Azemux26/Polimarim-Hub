@extends('layouts.app')
@section('content')
@include('partials.header')
  <!-- BERITA TERPOPULER -->
  <section class="container-fluid">
    <div class="container-lg mt-4">
      <!-- <h4>BERITA POPULER</h4> -->
      <div class="row mt-4">
        <div class="col-md-6 mb-1">
          <div class="card text-white">
            <img src="{{asset('img/blog-1 3.jpg')}}" class="card-img" style="filter:brightness(50%);" alt="...">
            <div class="card-img-overlay">
              <small class="card-text">
                <svg class="bi mb-1" width="13" height="13" fill="currentColor">
                  <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                </svg> 20 Agustus 2020</small>
              <h5 class="card-title">
                <a href="/show-news" class="text-white">Pelantikan taruna/i Ta 2020/2021</a>
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row no-gutters">
            <div class="col-md-6 mb-1 pr-1">
              <div class="card bg-dark text-white">
                <img src="{{asset('img/blog-1 3.jpg')}}" class="card-img" style="filter:brightness(50%);" alt="...">
                <div class="card-img-overlay">
                  <small class="card-text"><svg class="bi mb-1" width="13" height="13" fill="currentColor">
                      <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                    </svg></i> 20 Agustus 2020</small>
                  <h6 class="card-title">Card title</h6>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-1">
              <div class="card bg-dark text-white">
                <img src="{{asset('img/blog-2 3.jpg')}}" class="card-img" style="filter:brightness(50%);" alt="...">
                <div class="card-img-overlay">
                  <small class="card-text"><svg class="bi mb-1" width="13" height="13" fill="currentColor">
                      <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                    </svg></i> 20 Agustus 2020</small>
                  <h6 class="card-title">Card title</h6>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-1 pr-1">
              <div class="card bg-dark text-white">
                <img src="{{asset('img/blog-2 3.jpg')}}" class="card-img" style="filter:brightness(50%);" alt="...">
                <div class="card-img-overlay">
                  <small class="card-text"><svg class="bi mb-1" width="13" height="13" fill="currentColor">
                      <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                    </svg></i> 20 Agustus 2020</small>
                  <h6 class="card-title">Card title</h6>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card bg-dark text-white">
                <img src="{{asset('img/blog-2 3.jpg')}}" class="card-img" style="filter:brightness(50%);" alt="...">
                <div class="card-img-overlay">
                  <small class="card-text"><svg class="bi mb-1" width="13" height="13" fill="currentColor">
                      <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                    </svg></i> 20 Agustus 2020</small>
                  <h6 class="card-title">Card title pelantikan taruna/i yang ceria dan berbahaya</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </div>
  </section>
  <!-- END BERITA TERPOPULER -->

  <!-- BERITA TERBARU -->
  <section class="container-fluid">
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-6">
          <h4>BERITA TERBARU</h4>
        </div>
        <div class="col-md-6 text-right">
          <a href="#" class="text-decoration-none text-secondary">
            <span">Lihat semua berita <svg class="bi mb-0" width="15" height="15" fill="currentColor">
                <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#chevron-double-right')}}" />
              </svg></span>
          </a>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="card border-0 mb-3">
            <img src="{{asset('img/blog-1 3.jpg')}}" class="card-img-top rounded img-fluid" alt="...">
            <div class="card-body">
              <a href="news.html" class="badge badge-primary mb-3 label-judul">Audit</a>
              <a href="#" class="badge badge-secondary label-judul">Pelantikan</a>
              <a href="#" class="badge badge-success label-judul">Puopuler</a>
              <a href="#" class="badge badge-danger label-judul">Hot</a>
              <a href="show_news.html" class="text-dark">
                <h5 class="card-title">Card title</h5>
              </a>
              <a href="show_news.html" class="text-dark">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
              </a>
              <p class="card-text"><small class="text-muted"><svg class="bi mb-1" width="15" height="15"
                    fill="currentColor">
                    <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#clock')}}" />
                  </svg> Last updated 3 mins ago, Author</small></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 sr-card">
          <div class="row no-gutters">
            <div class="col-md-6 sr-card pr-3 pb-3">
              <img src="{{asset('img/blog-1 3.jpg')}}" class="card-img-top rounded img-fluid" alt="...">
            </div>
            <div class="col-md-6 sr-card">
              <h6><a href="" class="text-dark">Judul berita tentang sesuatu yang bermanfaat</a></h6>
              <p class="text-secondary"><small><svg class="bi mb-1" width="13" height="13" fill="currentColor">
                    <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                  </svg> 20 Agustus 2020</small></p>
              <hr>
            </div>
            <div class="col-md-6 sr-card pr-3 pb-3">
              <img src="{{asset('img/blog-2 3.jpg')}}" class="card-img-top rounded img-fluid" alt="...">
            </div>
            <div class="col-md-6 sr-card">
              <h6><a href="" class="text-dark">Judul berita tentang sesuatu yang bermanfaat</a></h6>
              <p class="text-secondary"><small><svg class="bi mb-1" width="13" height="13" fill="currentColor">
                    <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                  </svg> 20 Agustus 2020</small></p>
              <hr>
            </div>
            <div class="col-md-6 sr-card pr-3 pb-3">
              <img src="{{asset('img/blog-3 2.jpg')}}" class="card-img-top rounded img-fluid" alt="...">
            </div>
            <div class="col-md-6 sr-card">
              <h6><a href="" class="text-dark">Judul berita tentang sesuatu yang bermanfaat</a></h6>
              <p class="text-secondary"><small><svg class="bi mb-1" width="13" height="13" fill="currentColor">
                    <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                  </svg> 20 Agustus 2020</small></p>
              <hr>
            </div>
            <div class="col-md-6 sr-card pr-3 pb-3">
              <img src="{{asset('img/blog-1 3.jpg')}}" class="card-img-top rounded img-fluid" alt="...">
            </div>
            <div class="col-md-6 sr-card">
              <h6><a href="" class="text-dark">Judul berita tentang sesuatu yang bermanfaat</a></h6>
              <p class="text-secondary"><small>
                  <svg class="bi mb-1" width="13" height="13" fill="currentColor">
                    <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                  </svg> 20 Agustus 2020</small></p>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </div>
  </section>
  <!-- END BERITA TERBARU -->

  <!-- BARITA AUDIT EKSTERNAL -->
  <section class="container-fluid">
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-6">
          <h4>BERITA AUDIT EKSTERNAL</h4>
        </div>
        <div class="col-md-6 text-right">
          <a href="#" class="text-decoration-none text-secondary">
            <span">Lihat semua berita <svg class="bi mb-0" width="15" height="15" fill="currentColor">
                <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#chevron-double-right')}}" />
              </svg></span>
          </a>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-3 sr-card">
          <div class="card border-0 mb-3">
            <img src="{{asset('img/blog-1 3.jpg')}}" class="card-img-top rounded img-fluid" alt="...">
            <div class="card-body">
              <a href="#" class="text-dark">
                <h5 class="card-title">Judul berita tetang audit eksternal</h5>
              </a>
              <!-- <a href="#" class="text-dark"><p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p></a> -->
              <p class="card-text"><small class="card-text text-muted"><svg class="bi mb-1" width="15" height="15"
                    fill="currentColor">
                    <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#clock')}}" />
                  </svg> Last updated 3 mins ago, Author</small></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 sr-card">
          <div class="card border-0 mb-3">
            <img src="{{asset('img/blog-1 3.jpg')}}" class="card-img-top rounded img-fluid" alt="...">
            <div class="card-body">
              <a href="#" class="text-dark">
                <h5 class="card-title">Judul berita tetang audit eksternal</h5>
              </a>
              <!-- <a href="#" class="text-dark"><p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p></a> -->
              <p class="card-text"><small class="text-muted"><svg class="bi mb-1" width="15" height="15"
                    fill="currentColor">
                    <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#clock')}}" />
                  </svg> Last updated 3 mins ago, Author</small></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 sr-card">
          <div class="card border-0 mb-3">
            <img src="{{asset('img/blog-1 3.jpg')}}" class="card-img-top rounded img-fluid" alt="...">
            <div class="card-body">
              <a href="#" class="text-dark">
                <h5 class="card-title">Judul berita tetang audit eksternal</h5>
              </a>
              <!-- <a href="#" class="text-dark"><p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p></a> -->
              <p class="card-text"><small class="text-muted"><svg class="bi mb-1" width="15" height="15"
                    fill="currentColor">
                    <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#clock')}}" />
                  </svg> Last updated 3 mins ago, Author</small></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 sr-card">
          <div class="card border-0 mb-3">
            <img src="{{asset('img/blog-1 3.jpg')}}" class="card-img-top rounded img-fluid" alt="...">
            <div class="card-body">
              <a href="#" class="text-dark">
                <h5 class="card-title">Judul berita tetang audit eksternal</h5>
              </a>
              <!-- <a href="#" class="text-dark"><p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p></a> -->
              <span class="card-text"><small class="text-muted"><svg class="bi mb-1" width="15" height="15"
                    fill="currentColor">
                    <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#clock')}}" />
                  </svg> Last updated 3 mins ago, Author</small></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END BARITA AUDIT EKSTERNAL -->
@endsection



 
