@extends('guest.partials.main')
@section('content_guest')
    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container mt-5">
                <h3 class="text-danger fw-bold mb-3">Pendafataran Pasien Pendonor Darah</h3>
                <form action="/pesan_pmi" method="post">
                    @csrf
                    @method('post')
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="no_wa" class="form-label">Nomor WA</label>
                                <input type="text" class="form-control" id="no_wa" name="no_wa">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="golongan_darah" class="form-label">Golongan Darah</label>
                                <input type="text" class="form-control" id="golongan_darah" name="golongan_darah">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="stok_darah" class="form-label">Stok Darah</label>
                                <input type="text" class="form-control" id="stok_darah" name="stok_darah">
                            </div>
                        </div>
                        <input type="hidden" name="id_pmi" id="id_pmi" value="{{ $stokdarahpmi }}">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-danger">Daftar Pasien</button>
                        </div>
                    </div>
                </form>

            </div>
        </section><!-- End Services Section -->

    </main><!-- End #main -->
@endsection
