  @extends('admin.partials.main')
  @section('content_admin')
  @section('title', 'Admin|Tambah Stok Darah PMI')
  <main id="main" class="main">

      <div class="pagetitle">
          <h1 class="text-danger">Stok Darah PMI</h1>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title text-danger">Tambah Stok Darah PMI</h5>

                          <!-- No Labels Form -->
                          <form class="row g-3" action="/stokdarahpmi" method="POST">
                              @csrf
                              @method('post')
                              <div class="col-md-6">
                                  <label for="nama_pmi">Nama PMI</label>
                                  <input type="text" class="form-control" id="nama_pmi" name="nama_pmi">
                              </div>
                              <div class="col-md-6">
                                  <label for="stok_darah_a">Stok Darah A</label>
                                  <input type="number" class="form-control" id="stok_darah_a" name="stok_darah_a">
                              </div>
                              <div class="col-md-6">
                                  <label for="stok_darah_b">Stok Darah B</label>
                                  <input type="number" class="form-control" id="stok_darah_b" name="stok_darah_b">
                              </div>
                              <div class="col-md-6">
                                  <label for="stok_darah_ab">Stok Darah AB</label>
                                  <input type="number" class="form-control" id="stok_darah_ab" name="stok_darah_ab">
                              </div>
                              <div class="col-md-6">
                                  <label for="stok_darah_o">Stok Darah O</label>
                                  <input type="number" class="form-control" id="stok_darah_o" name="stok_darah_o">
                              </div>
                              <div class="col-md-6">
                                  <label for="stok_darah_am">Stok Darah A-</label>
                                  <input type="number" class="form-control" id="stok_darah_am" name="stok_darah_am">
                              </div>
                              <div class="col-md-6">
                                  <label for="stok_darah_bm">Stok Darah B-</label>
                                  <input type="number" class="form-control" id="stok_darah_bm" name="stok_darah_bm">
                              </div>
                              <div class="col-md-6">
                                  <label for="stok_darah_abm">Stok Darah AB-</label>
                                  <input type="number" class="form-control" id="stok_darah_abm" name="stok_darah_abm">
                              </div>
                              <div class="col-md-6">
                                  <label for="stok_darah_om">Stok Darah O-</label>
                                  <input type="number" class="form-control" id="stok_darah_om" name="stok_darah_om">
                              </div>
                              <div class="text-center">
                                  <button type="submit" class="btn btn-danger"><i class='bx bx-save'></i>
                                      SIMPAN</button>
                                  <a href="/stokdarahpmi" class="btn btn-danger"><i class='bx bx-save'></i>
                                      KEMBALI</a>
                              </div>
                          </form><!-- End No Labels Form -->

                      </div>
                  </div>

              </div>
          </div>
      </section>

  </main><!-- End #main -->
@endsection
