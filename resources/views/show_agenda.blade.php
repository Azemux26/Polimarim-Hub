@extends('layouts.app')
@section('content')
    <section class="container-fluid bg-light">
        <div class="container pb-3">
            <h6 class="display-4 pt-3 mb-2">Agenda</h6>
        </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="container mt-3 mb-5">
            <div class="d-flex flex-column bd-highlight mb-3 text-center">
                <div class="p-2 bd-highlight">
                    <h2>Penandatangan MOU dengan: "Perusahaan Pelayaran yang Berada di Korea Selatan dan Juga Amerika Latin
                        dengan
                        Perusahaan Pelayaran di Banggai Laut."</h2>
                </div>
                <div class="p-2 bd-highlight text-secondary">Penandatangan MOU dilakukan di kampus Polimarim</div>
                <div class="p-2 bd-highlight text-secondary">Tema Agenda: "Penandatangan MOU"</div>
            </div>
            <div class="row">
                <div class="d-flex col-md-12 flex-column bd-highlight mb-3">
                    <div class="d-flex">
                        <div class="col col-sm-4 col-md-4">
                            <div class="p-2 bd-highlight">
                                <div class="d-print-none text-secondary">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                        class=" text-dark bi bi-person-badge-fill mb-1" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z" />
                                    </svg> Oleh
                                </div>
                                <div class="d-print-none d-print-block font-weight-bold">Tribun Timur</div>
                            </div>
                        </div>
                        <div class="col col-sm-4 col-md-4">
                            <div class="p-2 bd-highlight">
                                <div class="d-print-none text-secondary">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi mb-1 text-dark bi-clock-fill" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    </svg> Jam mulai
                                </div>
                                <div class="d-print-none d-print-block font-weight-bold">15.00 s.d 16.00 PM</div>
                            </div>
                        </div>
                        <div class="col col-sm-4 col-md-4">
                            <div class="p-2 bd-highlight">
                                <div class="d-print-none text-secondary">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi mb-1 text-dark bi-calendar3-week-fill" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M2 0a2 2 0 0 0-2 2h16a2 2 0 0 0-2-2H2zm14 3H0v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3zm-2 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2zM4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg> Tanggal mulai
                                </div>
                                <div class="d-print-none d-print-block font-weight-bold">20 Agustus 2020 s.d 20 Agustus 2020
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <div class="col col-sm-4 col-md-4">
                            <div class="p-2 bd-highlight">
                                <div class="d-print-none text-secondary">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi mb-1 text-dark bi-geo-fill" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
                                    </svg> Alamat
                                </div>
                                <div class="d-print-none d-print-block font-weight-bold">Polimarim</div>
                            </div>
                        </div>
                        <div class="col col-sm-4 col-md-4">
                            <div class="p-2 bd-highlight">
                                <div class="d-print-none text-secondary">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi mb-1 text-dark bi-telephone-forward-fill" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.761.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z" />
                                    </svg> Kontak
                                </div>
                                <div class="d-print-none d-print-block font-weight-bold">0411 - 836860</div>
                            </div>
                        </div>
                        <div class="col col-sm-4 col-md-4">
                            <div class="p-2 bd-highlight">
                                <div class="d-print-none text-secondary">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi mb-1 text-dark bi-camera-reels-fill" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M0 8a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8z" />
                                        <circle cx="3" cy="3" r="3" />
                                        <circle cx="9" cy="3" r="3" />
                                    </svg> Media
                                </div>
                                <div class="d-print-none d-print-block font-weight-bold">VC Zoom Conferences</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-5 mb-2">Agenda lainnya.</h6>
            <div class="row mt-3">
                <div class="col-sm-4 col-md-4 sr-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text text-muted"><small><svg class="bi mb-1" width="13" height="13"
                                        fill="currentColor">
                                        <use
                                            xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#calendar-event-fill" />
                                    </svg> 20 Agustus 2020 - 20 Agustus 2020</small></p>
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text text-muted">Oleh Sumantri S</p>
                            <a href="/show-agenda" class="btn btn-primary" role="button">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 sr-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text text-muted"><small><svg class="bi mb-1" width="13" height="13"
                                        fill="currentColor">
                                        <use
                                            xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#calendar-event-fill" />
                                    </svg> 20 Agustus 2020 - 20 Agustus 2020</small></p>
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text text-muted">Oleh Sumantri S</p>
                            <a href="/show-agenda" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 sr-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text text-muted"><small><svg class="bi mb-1" width="13" height="13"
                                        fill="currentColor">
                                        <use
                                            xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#calendar-event-fill" />
                                    </svg> 20 Agustus 2020 - 20 Agustus 2020</small></p>
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text text-muted">Oleh Sumantri S</p>
                            <a href="/show-agenda" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
