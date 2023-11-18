  @extends('admin.partials.main')
  @section('content_admin')
  @section('title', 'Admin|Edit Pendonor')
  <main id="main" class="main">

      <div class="pagetitle">
          <h1 class="text-danger">Pendonor</h1>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title text-danger">Tambah Pendonor</h5>

                          <!-- No Labels Form -->
                          <form class="row g-3" action="/pendonor/{{ $pendonor->id }}" method="POST">
                              @csrf
                              @method('put')
                              <div class="col-md-6">
                                  <label for="nama">Nama Pendonor</label>
                                  <input type="text" class="form-control" id="nama" name="nama"
                                      value="{{ $pendonor->nama }}">
                              </div>
                              <div class="col-md-6">
                                  <label for="username">Username</label>
                                  <input type="text" class="form-control" id="username" name="username"
                                      value="{{ $pendonor->username }}">
                              </div>
                              <div class="col-md-6">
                                  <label for="alamat">Alamat</label>
                                  <input type="text" class="form-control" id="alamat" name="alamat"
                                      value="{{ $pendonor->alamat }}">
                              </div>
                              <div class="col-md-6">
                                  <label for="nomor_hp">Nomor HP</label>
                                  <input type="text" class="form-control" id="nomor_hp" name="nomor_hp"
                                      value="{{ $pendonor->nomor_hp }}">
                              </div>
                              <div class="col-md-6">
                                  <label for="stok_darah">Stok Darah</label>
                                  <input type="number" class="form-control" id="stok_darah"
                                      name="stok_darah"value="{{ $pendonor->stok_darah }}">
                              </div>
                              <div class="col-md-6">
                                  <label for="golongan_darah">Golongan Darah</label>
                                  <select class="form-select" id="golongan_darah" name="golongan_darah">
                                      @php
                                          $golongandarah = ['A', 'B', 'AB', 'O', 'A-', 'B-', 'AB-', 'O-'];
                                          $no = 1;
                                      @endphp
                                      @foreach ($golongandarah as $row)
                                          @if ($pendonor->golongan_darah == $row)
                                              <option value="{{ $row }}" selected>{{ $row }}</option>
                                          @else
                                              <option value="{{ $row }}">{{ $row }}</option>
                                          @endif
                                          @php
                                              $no++;
                                          @endphp
                                      @endforeach
                                  </select>
                              </div>
                              <div class="text-center">
                                  <button type="submit" class="btn btn-danger"><i class='bx bx-save'></i>
                                      SIMPAN</button>
                                  <a href="/pendonor" class="btn btn-danger"><i class='bx bx-save'></i>
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
