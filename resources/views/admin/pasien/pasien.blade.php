  @extends('admin.partials.main')
  @section('content_admin')
  @section('title', 'Admin|Pasien')
  <main id="main" class="main">

      <div class="pagetitle">
          <h1 class="text-danger">Pasien</h1>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title text-danger">Data Pasien</h5>
                          <a href="/pasien/create" class="btn btn-danger mb-3"><i class='bx bxs-add-to-queue'></i>
                              Tambah Pasien</a>
                          <a href="/pasien/create" class="btn btn-danger mb-3"><i class='bx bx-envelope'></i>
                              Lihat Pesanan</a>
                          <!-- Table with stripped rows -->
                          <div class="table-responsive">
                              <table class="table datatable table-danger">
                                  <thead>
                                      <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Pasien</th>
                                          <th scope="col">Alamat</th>
                                          <th scope="col">Nomor WhatsApp</th>
                                          <th scope="col">Gologan Darah</th>
                                          <th scope="col">Stok Darah Dibutuhkan</th>
                                          <th scope="col">Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($pasiens as $pasien)
                                          <tr>
                                              <th scope="row">{{ $loop->iteration }}</th>
                                              <td>{{ $pasien->nama }}</td>
                                              <td>{{ $pasien->alamat }}</td>
                                              <td>{{ $pasien->no_wa }}</td>
                                              <td>{{ $pasien->golongan_darah }}</td>
                                              <td>{{ $pasien->stok_darah }} Kantong</td>
                                              <td class="d-flex my-1">
                                                  <a href="/pasien/{{ $pasien->id }}/edit" class="btn btn-warning"><i
                                                          class='bx bx-edit'></i>
                                                      Ubah</a>
                                                  <form action="/pasien/{{ $pasien->id }}" method="post">
                                                      @csrf
                                                      @method('delete')
                                                      <button type="submit"
                                                          onclick="return confirm('yakin data pasien di hapus ?')"
                                                          class="btn btn-danger"><i
                                                              class='bx bx-trash'></i>Hapus</button>
                                                  </form>
                                              </td>
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                          <!-- End Table with stripped rows -->

                      </div>
                  </div>

              </div>
          </div>
      </section>

  </main><!-- End #main -->
@endsection
