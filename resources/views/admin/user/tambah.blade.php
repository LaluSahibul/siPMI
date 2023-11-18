  @extends('admin.partials.main')
  @section('content_admin')
  @section('title', 'Admin|Edit User')
  <main id="main" class="main">

      <div class="pagetitle">
          <h1 class="text-danger">User</h1>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title text-danger">Tambah User</h5>

                          <!-- No Labels Form -->
                          <form class="row g-3" action="/user" method="POST">
                              @csrf
                              @method('post')
                              <div class="col-md-6">
                                  <label for="">Nama User</label>
                                  <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                              </div>
                              <div class="col-md-6">
                                  <label for="">Username</label>
                                  <input type="text" class="form-control" name="username"
                                      value="{{ old('username') }}">
                              </div>
                              <div class="col-md-6">
                                  <label for="">Password</label>
                                  <input type="password" class="form-control" name="password">
                              </div>
                              <div class="text-center">
                                  <button type="submit" class="btn btn-danger"><i class='bx bx-save'></i>
                                      SIMPAN</button>
                                  <a href="/user" class="btn btn-danger"><i class='bx bx-save'></i>
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
