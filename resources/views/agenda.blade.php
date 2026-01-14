@extends('layouts.app')
@section('content')

<section class="container-fluid bg-light">
      <div class="container pb-3">
        <h6 class="pt-3 display-4">Agenda &amp; Pengumuman</h6>
        <p class="text-secondary">Agenda berisi tentang kegiatan yang akan dijalankan atau berjalan dilingkungan
          POLIMARIM sehingga masyarakat umum dapat mengetahui jenis kegiatan apa saja yang di lakukan akademik tersebut.
          sedangkan pengumuman adalah serangkaian informasi yang disajikan kepada masyarakat umum berita sekitar
          Polimarim.</p>
        <ul class="nav mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
              aria-controls="pills-home" aria-selected="true">
              <div class="card border-0 shadow-sm" style="width: 17rem;">
                <div class="card-body text-dark text-center">
                  <svg class="bi mb-1" width="35" height="35" fill="currentColor">
                    <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#file-earmark-easel-fill')}}" />
                  </svg>
                  <h2>Agenda</h2>
                </div>
              </div>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
              aria-controls="pills-profile" aria-selected="false">
              <div class="card border-0 shadow-sm" style="width: 17rem;">
                <div class="card-body text-dark text-center">
                  <svg class="bi mb-1" width="35" height="35" fill="currentColor">
                    <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#clipboard-data')}}" />
                  </svg>
                  <h2>Pengumuman</h2>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
      </div>
    </section>

     <section class="container-fluid">
    <div class="container mt-5 mb-5">
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <h4><svg class="bi mb-1" width="25" height="25" fill="currentColor">
              <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#file-earmark-easel-fill')}}" />
            </svg> Daftar agenda</h4>
          <div class="row">
            <div class="col-sm-4 col-md-4 mb-3 sr-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-text text-muted"><small><svg class="bi mb-1" width="13" height="13"
                        fill="currentColor">
                        <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                      </svg> 20 Agustus 2020 - 20 Agustus 2020</small></p>
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text text-muted">Oleh Sumantri S</p>
                  <a href="/show-agenda" class="btn rounded-lg btn-sm btn-outline-primary" role="button">Lihat</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 sr-card mb-3">
              <div class="card">
                <div class="card-body">
                  <p class="card-text text-muted"><small><svg class="bi mb-1" width="13" height="13"
                        fill="currentColor">
                        <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                      </svg> 20 Agustus 2020 - 20 Agustus 2020</small></p>
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text text-muted">Oleh Sumantri S</p>
                  <a href="/show-agenda" class="btn rounded-lg btn-sm btn-outline-primary" role="button">Lihat</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 sr-card mb-3">
              <div class="card">
                <div class="card-body">
                  <p class="card-text text-muted"><small><svg class="bi mb-1" width="13" height="13"
                        fill="currentColor">
                        <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                      </svg> 20 Agustus 2020 - 20 Agustus 2020</small></p>
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text text-muted">Oleh Sumantri S</p>
                  <a href="/show-agenda" class="btn rounded-lg btn-sm btn-outline-primary" role="button">Lihat</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 sr-card mb-3">
              <div class="card">
                <div class="card-body">
                  <p class="card-text text-muted"><small><svg class="bi mb-1" width="13" height="13"
                        fill="currentColor">
                        <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#calendar-event-fill')}}" />
                      </svg> 20 Agustus 2020 - 20 Agustus 2020</small></p>
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text text-muted">Oleh Sumantri S</p>
                  <a href="/show-agenda" class="btn rounded-lg btn-sm btn-outline-primary" role="button">Lihat</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Pagination -->
          <nav aria-label="...">
            <ul class="pagination">
              <li class="page-item disabled">
                <span class="page-link">Previous</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active" aria-current="page">
                <span class="page-link">
                  2
                  <span class="sr-only">(current)</span>
                </span>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
          <!-- Pagination -->
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <h4><svg class="bi mb-1" width="25" height="25" fill="currentColor">
              <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#clipboard-data')}}" />
            </svg> Daftar pengumuman</h4>
          <div class="row">
            <div class="col-sm-4 col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <p class="card-text text-muted"><small><i class="fas fa-calendar-week"></i> 20 Agustus 2020 - 20
                      Agustus 2020</small></p>
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text text-muted">Oleh Sumantri S</p>
                  <a href="/show-agenda" class="btn rounded-lg btn-sm btn-outline-primary" role="button">Lihat</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <p class="card-text text-muted"><small><i class="fas fa-calendar-week"></i> 20 Agustus 2020 - 20
                      Agustus 2020</small></p>
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text text-muted">Oleh Sumantri S</p>
                  <a href="/show-agenda" class="btn rounded-lg btn-sm btn-outline-primary" role="button">Lihat</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <p class="card-text text-muted"><small><i class="fas fa-calendar-week"></i> 20 Agustus 2020 - 20
                      Agustus 2020</small></p>
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text text-muted">Oleh Sumantri S</p>
                  <a href="/show-agenda" class="btn rounded-lg btn-sm btn-outline-primary" role="button">Lihat</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Pagination -->
          <nav aria-label="...">
            <ul class="pagination">
              <li class="page-item disabled">
                <span class="page-link">Previous</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active" aria-current="page">
                <span class="page-link">
                  2
                  <span class="sr-only">(current)</span>
                </span>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
          <!-- Pagination -->
        </div>
      </div>
  </section>
@endsection


 

