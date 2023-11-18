@extends('pendonor.partials.main')
@section('content_pendonor')
@section('title', 'Pendonor|Profile')
<main id="main" class="main">
    <div class="pagetitle">
        <h1 class="text-danger">Profil</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-danger">Profil {{ Auth::user()->nama }} ({{ Auth::user()->role }})
                        </h5>

                        <!-- No Labels Form -->
                        <form class="row g-3" action="/update_passwordpendonor/{{ $pendonor->id }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="col-md-6">
                                <label for="pwlama">Password Lama</label>
                                <input type="text" class="form-control" id="pwlama" name="pwlama">
                            </div>
                            <div class="col-md-6">
                                <label for="pwbaru">Password Baru</label>
                                <input type="text" class="form-control" id="pwbaru" name="pwbaru">
                            </div>
                            <div class="col-md-6">
                                <label for="pwbaru2">Konformasi Password Baru</label>
                                <input type="text" class="form-control" id="pwbaru2" name="pwbaru2">
                            </div>
                            <div class="text-center">
                                <a href="/profile_pendonor/{{ $pendonor->id }}/edit" class="btn btn-warning"><i
                                        class='bx bx-arrow-back'></i>
                                    Kembali</a>
                                <button type="submit" class="btn btn-danger"><i class='bx bx-save'></i>
                                    SIMPAN</button>
                            </div>
                        </form><!-- End No Labels Form -->

                    </div>
                </div>

            </div>
        </div>
    </section>
</main><!-- End #main -->
@endsection
