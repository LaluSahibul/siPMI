  @extends('admin.partials.main')
  @section('content_admin')
  @section('title', 'Admin|Tambah Informasi')
  <main id="main" class="main">

      <div class="pagetitle">
          <h1 class="text-danger">Informasi</h1>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title text-danger">Tambah Informasi</h5>

                          <!-- No Labels Form -->
                          <form class="row g-3" action="/admin_informasi" method="POST" enctype="multipart/form-data">
                              @csrf
                              @method('post')
                              <div class="col-md-6">
                                  <label for="judul">Judul</label>
                                  <input type="text" class="form-control" id="judul" name="judul">
                              </div>
                              <div class="col-md-6">
                                  <label for="foto">Foto</label>
                                  <input type="file" class="form-control" id="foto" name="foto">
                              </div>
                              <div class="col-md-12">
                                  <label for="deskripsi">Deskripsi</label>
                                  <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"></textarea>
                              </div>
                              <div class="text-center">
                                  <button type="submit" class="btn btn-danger"><i class='bx bx-save'></i>
                                      SIMPAN</button>
                                  <a href="/admin_informasi" class="btn btn-danger"><i class='bx bx-save'></i>
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
