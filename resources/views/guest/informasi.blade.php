@extends('guest.partials.main')
@section('content_guest')
@section('title', 'Guest|Informasi')
<main id="main">
    <!-- ======= Services Section ======= -->
    <section id="informasi" class="services">
        <div class="container">
            <div class="container mt-5">
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

        </div>
    </section><!-- End Services Section -->
</main><!-- End #main -->
@endsection
