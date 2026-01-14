@extends('layouts.app')

@section('content')
    @include('partials.header')
    <!-- TENTANG POLIMARIM -->
    <section class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-7 pt-5 mt-5">
                    <h3 class="display-4 font-weight-bold">Tentang Universitas</h3>
                    <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active pl-0" id="deskripsi-tab" data-toggle="tab" href="#deskripsi"
                                role="tab" aria-controls="deskripsi" aria-selected="true">
                                <svg class="bi mb-1" width="20" height="20" fill="currentColor">
                                    <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#easel-fill')}}" />
                                </svg> Deskripsi</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tujuan-tab" data-toggle="tab" href="#tujuan" role="tab"
                                aria-controls="tujuan" aria-selected="false">
                                <svg class="bi mb-1" width="16" height="16" fill="currentColor">
                                    <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#trophy-fill')}}" />
                                </svg> Tujuan</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="deskripsi" role="tabpanel"
                            aria-labelledby="deskripsi-tab">
                            <p class="lead mt-3">Universitas Akademik Website telah diakui oleh BAN-PT dan mendapatkan
                                bintang 4
                                atau akreditasi institusi “B”, yang memiliki 4 program Diploma yaitu D4 Transportasi Laut,
                                D3 Manajemen
                                Pelabuhan, D3 Permesinan Kapal dan D3 Studi Nautika.</p>
                        </div>
                        <div class="tab-pane fade" id="tujuan" role="tabpanel" aria-labelledby="tujuan-tab">
                            <p class="lead mt-3">Menjadikan lulusan atau alumni siap bekerja dan menjadi pengusaha bisang
                                perkapalan
                                serta menjadikan lulusan atau alumni yang berbakat, berdedikasi, disiplin, sopan santun dan
                                unggul serta
                                bertanggung jawab.</p>
                        </div>
                    </div>
                    <a href="#" class="text-decoration-none">
                        <svg class="bi mb-1 rounded-circle" width="47" height="47" fill="currentColor">
                            <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#caret-right-square-fill')}}" />
                        </svg> <span class="text-secondary">Putar dan nonto video.</span>
                    </a>
                </div>
                <div class="col-md-5">
                    <div class="py-5 mb-5 text-right">
                        <div class="d-none d-lg-block position-absolute h-100"
                            style="top: 45px; left: 0%; width: 95%; height: 95%; z-index: 0; background-image: url('{{asset('img/ABOUT.png')}}'); background-repeat: no-repeat;">
                        </div>
                        <div class="row no-gutters mx-n2 pt-lg-4">
                            <div class="col-sm-6 px-2 mb-3">
                                <a class="card shadow-sm btn card-body py-5 border-0 mb-3 text-decoration-none"
                                    data-filetype="tetang-hover" data-toggle="modal" data-target="#exampleModal">
                                    <svg class="bi mb-1 mx-auto text-primary" width="35" height="35"
                                        fill="currentColor">
                                        <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#vector-pen')}}" />
                                    </svg>
                                    <h3 class="h5 mb-0 mt-2 text-primary tetang">Sejarah</h3>
                                </a>
                                <!-- Modal sejarah -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content border-0 rounded">
                                            <div class="modal-header bg-warning">
                                                <h5 class="modal-title" id="exampleModalLabel">Sejarah Singkat</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                Yayasan Perguruan Tinggi Karya Dharma membina 3(tiga) perguruan tinggi
                                                yaitu: Universitas
                                                Veteran Republik Indonesia (UVRI), Akademi Maritim Veteran Republik
                                                Indonesia (AMI Veteran) dan 
                                                Akademi Teknik. Akademi Maritim Veteran Republik Indonesia (AMI Veteran)
                                                sebenarnya sejak
                                                tanggal 1 September 1963 telah dibentuk, namun peresmian dan penetapannya
                                                diundur sehubungan
                                                dengan peringatan Hari Bahari Nasional waktu itu, maka peresmian berdirinya
                                                AMI Veteran
                                                ditetapkan bertepatan dengan tanggal pelaksanaan Hari Bahari Nasional
                                                tersebut dan secara
                                                langsung diresmikan oleh Yang Mulia Menteri Perhubungan Laut Bapak Ir. Abdul
                                                Muttalib yang
                                                dihadiri oleh tokoh-tokoh pejuang kemerdekaan Negara Republik Indonesia
                                                sekaligus pendiri
                                                Yayasan Perguruan Tinggi Karya Dharma.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Close</button>
                                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end modal sejarah -->
                                <a class="card shadow-sm btn card-body py-5 border-0 text-center text-decoration-none"
                                    data-filetype="tetang-hover" data-toggle="modal" data-target="#exampleModalIdentitas">
                                    <svg class="bi mb-1 mx-auto text-primary" width="35" height="35"
                                        fill="currentColor">
                                        <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#star-half')}}" />
                                    </svg>
                                    <h3 class="h5 mb-0 mt-2 text-primary">Identitas</h3>
                                </a>
                                <!-- Modal identitas -->
                                <div class="modal fade" id="exampleModalIdentitas" tabindex="-1"
                                    aria-labelledby="exampleModalIdentitasLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content border-0 rounded">
                                            <div class="modal-header bg-warning">
                                                <h5 class="modal-title" id="exampleModalIdentitasLabel">Identitas</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                Yayasan Perguruan Tinggi Karya Dharma membina 3(tiga) perguruan tinggi
                                                yaitu: Universitas
                                                Veteran Republik Indonesia (UVRI), Akademi Maritim Veteran Republik
                                                Indonesia (AMI Veteran) dan
                                                Akademi Teknik. Akademi Maritim Veteran Republik Indonesia (AMI Veteran)
                                                sebenarnya sejak
                                                tanggal 1 September 1963 telah dibentuk, namun peresmian dan penetapannya
                                                diundur sehubungan
                                                dengan peringatan Hari Bahari Nasional waktu itu, maka peresmian berdirinya
                                                AMI Veteran
                                                ditetapkan bertepatan dengan tanggal pelaksanaan Hari Bahari Nasional
                                                tersebut dan secara
                                                langsung diresmikan oleh Yang Mulia Menteri Perhubungan Laut Bapak Ir. Abdul
                                                Muttalib yang
                                                dihadiri oleh tokoh-tokoh pejuang kemerdekaan Negara Republik Indonesia
                                                sekaligus pendiri
                                                Yayasan Perguruan Tinggi Karya Dharma.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Close</button>
                                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end modal identitas -->
                            </div>
                            <div class="col-sm-6 px-2 mb-3"><a
                                    class="card btn shadow-sm h-100 card-body py-5 justify-content-center border-0 text-center text-decoration-none"
                                    data-filetype="tetang-hover" data-toggle="modal" data-target="#exampleModalVisiMisi">
                                    <svg class="bi mb-1 mx-auto text-primary" width="35" height="35"
                                        fill="currentColor">
                                        <use xlink:href="{{asset('build/assets/bootstrap-icons.svg#award')}}" />
                                    </svg>
                                    <h3 class="h5 mb-0 mt-2 text-primary">Visi &amp; Misi</h3>
                                </a>
                                <!-- Modal VisiMisi -->
                                <div class="modal fade" id="exampleModalVisiMisi" tabindex="-1"
                                    aria-labelledby="exampleModalVisiMisiLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content border-0 rounded">
                                            <div class="modal-header bg-warning">
                                                <h5 class="modal-title" id="exampleModalVisiMisiLabel">Visi &amp; Misi
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <h6 class="display-4">Visi</h6>
                                                <p class="text-center">Pada tahun 2040 Universitas Akademik Website akan
                                                    unggul dan terdepan
                                                    dalam pengembangan sumber daya manusia yang profesional, berani, ulung,
                                                    bertanggungjawab dan
                                                    senantiasa berorientasi pada ilmu pengetetahuan dan teknologi
                                                    kemaritiman bertaraf
                                                    internasional.</p>
                                                <h4 class="display-4 pt-3">Misi</h4>
                                                <ol type="1">
                                                    <li>Menyelenggarakan pendidikan/pengajaran, penelitian serta pengabdian
                                                        pada masyarakat yang
                                                        mendukung pelaksanaan Pembangunan Nasional, khususnya bidang
                                                        kemaritiman.</li>
                                                    <li>Mengembangkan ilmu pengetahuan dan Teknologi Kemaritiman dan
                                                        memberdayakan sumber daya
                                                        yang ada untuk meningkatkan daya saing berdsarkan peraturan Nasional
                                                        maupun Internasional
                                                    </li>
                                                    <li>Meningkatkan hubungan kerjsama dengan berbagai instansi terkait
                                                        untuk kebutuhan
                                                        pengembangan sarana dan prasarana, kerjasama terkait lapangan kerja
                                                        lulusan, baik di dalam
                                                        maupun di luar Negeri.</li>
                                                </ol>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Close</button>
                                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end modal VisiMisi -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SELESAI -->

    <!-- COUNTER -->
    <section class="container-fluid" style="background-color: #FaFaFa;">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-4 mt-5 mb-5 text-center">
                    <h3 class="display-3">450+</h3>
                    <p class="lead">Taruna/i Aktif</p>
                </div>
                <div class="col-md-4 mt-5 mb-5 text-center">
                    <h3 class="display-3">3k+</h3>
                    <p class="lead">Sertifikat COP/COC</p>
                </div>
                <div class="col-md-4 mt-5 mb-5 text-center">
                    <h3 class="display-3">2k+</h3>
                    <p class="lead">Alumni</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <section class="container-fluid">
        <div class="container">
            <div class="row mt-5 pt-5 mb-3">
                <div class="col-md-4 py-5">
                    <h2 class="text-dark font-weight-bold">Tim ICT</h2>
                    <p>Universitas Akademik Website</p>
                </div>
                <div class="col-md-8">
                    <p class="lead">TIm ICT Universitas Akademik Website adalah sebuah tim kelompok kecil yang menangagi
                        teknologi informasi dan jaringan di lingkungan Universitas Akademik Website, dengan terbentuknya tim
                        ICT
                        ini diharapkan teknologi informasi dari sisi aplikasi website dan mobile akan pelan-pelan dibuat
                        sehingga
                        memudahkan antra pengurusan administrasi, dosen dan taruna/i.</p>
                </div>
            </div>
            <hr style="width: 70%;">
        </div>
    </section>

    <section class="container-fluid">
        <div class="container mt-5 mb-5">
            <h6 class="lead text-center mb-5">Kami bekerja sama dengan institusi top Indonesia</h6>
            <div class="row text-center">
                <div class="col-md-3 mb-2">
                    <div class="card shadow-sm">
                        <div class="card-body img-imo">
                            <img src="img/dishub.png" width="124" height="124" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body img-imo">
                            <img src="img/ristekdikti.png" width="124" height="124" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body img-imo">
                            <img src="{{asset('img/banpt.png')}}" width="123" height="123" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body img-imo">
                            <img src="{{asset('img/sucofindo.png')}}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
