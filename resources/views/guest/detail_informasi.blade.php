@extends('guest.partials.main')
@section('content_guest')
@section('title', 'Guest|Detail Informasi')
<main id="main">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container mt-5">
            <h3 class="text-danger fw-bold mb-3">{{ $informasi->judul }}</h3>
            <img src="{{ asset('storage/' . $informasi->foto) }}" width="400" alt="">
            <p>{!! $informasi->deskripsi !!}</p>
        </div>
    </section><!-- End Services Section -->

</main><!-- End #main -->
@endsection
