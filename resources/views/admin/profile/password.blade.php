@extends('admin.partials.main')
@section('content_admin')
@section('title', 'Admin|Profile')
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
                        <form class="row g-3" action="/update_password/{{ $user->id }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="col-md-6">
                                <label for="">Password Lama</label>
                                <input type="text" class="form-control" name="pwlama">
                            </div>
                            <div class="col-md-6">
                                <label for="">Password Baru</label>
                                <input type="text" class="form-control" name="pwbaru">
                            </div>
                            <div class="col-md-6">
                                <label for="">Konformasi Password Baru</label>
                                <input type="text" class="form-control" name="pwbaru2">
                            </div>
                            <div class="text-center">
                                <a href="/profile/{{ $user->id }}/edit" class="btn btn-warning"><i
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
