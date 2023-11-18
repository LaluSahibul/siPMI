  @extends('admin.partials.main')
  @section('content_admin')
  @section('title', 'Admin|Tambah Pasien')
  <main id="main" class="main">

      <div class="pagetitle">
          <h1 class="text-danger">Pasien</h1>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title text-danger">Tambah Pasien</h5>

                          <!-- No Labels Form -->
                          <form class="row g-3" action="/pasien" method="POST">
                              @csrf
                              @method('post')
                              <div class="col-md-6">
                                  <label for="nama">Nama Pasien</label>
                                  <input type="text" class="form-control" id="nama" name="nama">
                              </div>
                              <div class="col-md-6">
                                  <label for="alamat">Alamat</label>
                                  <input type="text" class="form-control" id="alamat" name="alamat">
                              </div>
                              <div class="col-md-6">
                                  <label for="no_wa">Nomor HP</label>
                                  <input type="text" class="form-control" id="no_wa" name="no_wa">
                              </div>
                              <div class="col-md-6">
                                  <label for="golongan_darah">Golongan Darah</label>
                                  <select class="form-select" id="golongan_darah" name="golongan_darah">
                                      <option value="A">A</option>
                                      <option value="B">B</option>
                                      <option value="AB">AB</option>
                                      <option value="O-">O</option>
                                      <option value="A-">A-</option>
                                      <option value="B-">B-</option>
                                      <option value="AB-">AB-</option>
                                      <option value="O-">O-</option>
                                  </select>
                              </div>
                              <div class="col-md-6">
                                  <label for="stok_darah">Stok Darah</label>
                                  <input type="number" class="form-control" id="stok_darah" name="stok_darah">
                              </div>
                              <div class="text-center">
                                  <button type="submit" class="btn btn-danger"><i class='bx bx-save'></i>
                                      SIMPAN</button>
                                  <a href="/pasien" class="btn btn-danger"><i class='bx bx-save'></i>
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
