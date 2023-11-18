@extends('admin.partials.main')
@section('content_admin')
@section('title', 'Admin|Profile')

<main id="main" class="main">
    <div class="pagetitle">
        <h1 class="text-danger">Profil</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-4">
                <form action="/profile_update/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    @if (isset($user->foto))
                        <img src="/storage/{{ $user->foto }}" width="300" alt="" srcset="">
                    @else
                        <img src="/assets/img/anya.jpg" width="300" alt="" srcset="">
                    @endif
                    <div class="input-group mt-2">
                        <input type="file" class="form-control" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="foto">
                        <button class="btn btn-danger" type="submit" id="inputGroupFileAddon04">Ganti
                            Profil</button>
                </form>
                {{-- <form action="/profile/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('delete')
                    <button class="btn btn-info" type="submit"
                        onclick="return confirm('Hapus foto profil?')">Hapus</button>
                </form> --}}
            </div>

        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-danger">Profil</h5>

                    <!-- No Labels Form -->
                    <form class="row g-3" action="/profile/{{ $user->id }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="col-md-6">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $user->nama }}">
                        </div>
                        <div class="col-md-6">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username" value="{{ $user->username }}">
                        </div>
                        <div class="text-center">
                            <a href="/home" class="btn btn-warning mt-2"><i class='bx bx-arrow-back'></i>
                                Kembali</a>
                            <button type="submit" class="btn btn-danger mt-2"><i class='bx bx-save'></i>
                                SIMPAN</button>
                            <a href="/password/{{ $user->id }}" class="btn btn-success mt-2"><i
                                    class='bx bxs-key'></i>
                                Ganti Password</a>
                        </div>
                    </form><!-- End No Labels Form -->

                </div>
            </div>

        </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection
