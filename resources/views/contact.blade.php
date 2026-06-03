@extends('layouts.app')

@section('content')
<section class="container-fluid bg-light rounded-bottom" id="kontak-box">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pt-5 text-kontak">
                <h1 class="text-dark font-weight-bold mb-5 pt-5">Kontak</h1>

                <div class="d-flex flex-row bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                        <svg class="bi mb-1" width="25" height="25" fill="currentColor">
                            <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#geo-fill') }}" />
                        </svg>
                    </div>
                    <div class="p-2 bd-highlight">
                        Jln. Nuri Baru No. 1, Kec. Mamajang, Kab. Makassar - Sulawesi Selatan - Indonesia.
                    </div>
                </div>

                <div class="d-flex flex-row bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                        <svg class="bi mb-1" width="20" height="20" fill="currentColor">
                            <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#telephone-inbound-fill') }}" />
                        </svg>
                    </div>
                    <div class="p-2 bd-highlight">0411 - 836860</div>
                </div>

                <div class="d-flex flex-row bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                        <svg class="bi mb-1" width="20" height="20" fill="currentColor">
                            <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#envelope-fill') }}" />
                        </svg>
                    </div>
                    <div class="p-2 bd-highlight">ami@polimarim.ac.id</div>
                </div>
            </div>

            <div class="col-md-6 pt-5 pb-5">
                <div class="card border-0 shadow-sm" style="z-index: 1;">
                    <div class="card-body">
                        <h3 class="text-center mt-3">Beri kami saran &amp; pertanyaan.</h3>
                        <p class="text-secondary text-center text-small">Kami biasanya merespons dalam 2 hari kerja.</p>

                        @if (session('success'))
                            <div class="alert alert-success mt-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form class="mt-5" action="{{ route('contact.send') }}" method="POST">
                            @csrf

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama">Nama lengkap</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                                        placeholder="Masukkan nama lengkap." id="nama" value="{{ old('nama') }}">
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" placeholder="person@example.com" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subjek">Subjek</label>
                                <input type="text" name="subjek" class="form-control @error('subjek') is-invalid @enderror"
                                    id="subjek" placeholder="Masukkan subjek Anda." value="{{ old('subjek') }}">
                                @error('subjek')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="pesan">Pesan</label>
                                <textarea name="pesan" class="form-control @error('pesan') is-invalid @enderror"
                                    id="pesan" placeholder="Masukkan pesan Anda." rows="7">{{ old('pesan') }}</textarea>
                                @error('pesan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">
                                <svg class="bi mb-1" width="20" height="20" fill="currentColor">
                                    <use xlink:href="{{ asset('build/assets/bootstrap-icons.svg#cursor-fill') }}" />
                                </svg>
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-5 text-map">
                <h4 class="text-dark font-weight-bold mb-3" style="margin-top: 120px;">Bagaimana caranya menuju ke Polimarim?</h4>
                <p class="lead text-secondary mb-4">
                    Cari saja di Google Maps kanal Jongaya Makassar, naik perahu mengikuti kanal, lalu perhatikan sisi kiri dan kanan kurang lebih 300 meter.
                </p>
                <h4 class="text-dark font-weight-bold mb-3">Kendaraan umum:</h4>
                <p class="lead text-secondary mb-4">Kendaraan pete-pete no #A dan no #B.</p>
                <h4 class="text-dark font-weight-bold mb-3">Jam kerja:</h4>
                <p class="lead text-secondary mb-4">Senin - Jum'at: 08.00 - 16.00</p>
                <p class="lead text-secondary mb-4">Sabtu: 10.00 - 14.00</p>
                <p class="lead text-secondary mb-4">Minggu: <span class="text-danger">Tutup</span></p>
            </div>

            <div class="col-md-7 my-5">
                <div class="embed-responsive shadow-sm rounded embed-responsive-1by1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.5890667062235!2d119.40368301421655!3d-5.169608653643383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2a98439df93%3A0x7173d025f4781313!2sPOLITEKNIK%20MARITIM%20AMI%20MAKASSAR%20(%20POLIMARIM%20)!5e0!3m2!1sid!2sid!4v1597736312538!5m2!1sid!2sid"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
