@extends('guest.partials.main')
@section('content_guest')
@section('title', 'Guest|Home')
<main id="main">
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(guest/assets/img/slide/slide-1.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Selamat Datang Di Website Donor Darah</h2>
                            <p class="animate__animated animate__fadeInUp">Disini kita bisa meminta darah dari pmi atau
                                para relawan
                                pendonor darah</p>
                            <a href="#about"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Mulai</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(guest/assets/img/slide/slide-2.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Selamat Datang Di Website Donor Darah</h2>
                            <p class="animate__animated animate__fadeInUp">Disini kita bisa meminta darah dari pmi atau
                                para relawan
                                pendonor darah</p>
                            <a href="#about"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Mulai</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(guest/assets/img/slide/slide-3.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Selamat Datang Di Website Donor Darah</h2>
                            <p class="animate__animated animate__fadeInUp">Disini kita bisa meminta darah dari pmi atau
                                para relawan
                                pendonor darah</p>
                            <a href="#about"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Mulai</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->
    <!-- ======= Services Section ======= -->
    <section id="informasi" class="services">
        <div class="container">
            <h3 class="text-danger fw-bold mb-3">Informasi</h3>
            <div class="row">
                @foreach ($informasis as $informasi)
                    <div class="col-lg-3 mb-2">
                        <div class="card border-0 shadow">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <a href="/detail_informasi/{{ $informasi->id }}">
                                    <img src="{{ asset('storage/' . $informasi->foto) }}" class="informasi-img"
                                        width="200" alt="" srcset="">
                                </a>
                                <h5 class="text-center text-danger mt-2">{{ $informasi->judul }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Services Section -->

    <section id="pesan_pmi" class="services">
        <div class="container">
            <h3 class="text-danger fw-bold mb-3">Pesan Darah Di PMI</h3>
            <div class="table-responsive">
                <table class="table table-danger table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" rowspan="2" class="text-center vertical-center">#</th>
                            <th scope="col" rowspan="2" class="text-center vertical-center">Nama PMI</th>
                            <th scope="col" colspan="8" class="text-center">Stok Darah</th>
                            <th scope="col" rowspan="2" class="text-center vertical-center">Aksi</th>
                        </tr>
                        <tr>
                            <th scope="col">A</th>
                            <th scope="col">B</th>
                            <th scope="col">AB</th>
                            <th scope="col">O</th>
                            <th scope="col">A-</th>
                            <th scope="col">B-</th>
                            <th scope="col">AB-</th>
                            <th scope="col">O-</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stokdarahpmis as $stokdarahpmi)
                            <tr>
                                <th scope="row" class="text-center vertical-center">{{ $loop->iteration }}</th>
                                <td>{{ $stokdarahpmi->nama_pmi }}</td>
                                <td>{{ $stokdarahpmi->stok_darah_a }}</td>
                                <td>{{ $stokdarahpmi->stok_darah_b }}</td>
                                <td>{{ $stokdarahpmi->stok_darah_ab }}</td>
                                <td>{{ $stokdarahpmi->stok_darah_o }}</td>
                                <td>{{ $stokdarahpmi->stok_darah_am }}</td>
                                <td>{{ $stokdarahpmi->stok_darah_bm }}</td>
                                <td>{{ $stokdarahpmi->stok_darah_abm }}</td>
                                <td>{{ $stokdarahpmi->stok_darah_om }}</td>
                                <td>
                                    <a href="/pesan_pmi/create?id_pmi={{ $stokdarahpmi->id }}"
                                        class="btn btn-danger">Pesan</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </section>
    <section id="services" class="services">
        <div class="container">
            <h3 class="text-danger fw-bold mb-3">Pesan Darah Di Pendonor</h3>
            <div class="table-responsive">
                <table class="table table-danger table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Pendonor</th>
                            <th scope="col">Alamat Pendonor</th>
                            <th scope="col">Golongan Darah</th>
                            <th scope="col">Stok Darah</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($pendonors as $pendonor)
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $pendonor->nama }}</td>
                                <td>{{ $pendonor->alamat }}</td>
                                <td>{{ $pendonor->golongan_darah }}</td>
                                <td>{{ $pendonor->stok_darah }}</td>
                                <td>
                                    <a href="/pesan_pendonor/create?id_pendonor={{ $pendonor->id }}"
                                        class="btn btn-danger">Pesan</a>
                                </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main><!-- End #main -->
@endsection
