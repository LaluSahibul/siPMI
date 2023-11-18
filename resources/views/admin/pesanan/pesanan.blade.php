  @extends('admin.partials.main')
  @section('content_admin')
  @section('title', 'Admin|Pesanan')
  <main id="main" class="main">

      <div class="pagetitle">
          <h1 class="text-danger">Pasien</h1>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <!-- Table with stripped rows -->
                          <div class="table-responsive">
                              <table class="table datatable table-danger">
                                  <thead>
                                      <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Nama Pemesan</th>
                                          <th scope="col">Alamat</th>
                                          <th scope="col">Nomor WhatsApp</th>
                                          <th scope="col">Gologan Darah</th>
                                          <th scope="col">Stok Darah Dibutuhkan</th>
                                          <th scope="col">Status</th>
                                          <th scope="col">Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($pesandaripmis as $pesandaripmi)
                                          <tr>
                                              <th scope="row">{{ $loop->iteration }}</th>
                                              <td>{{ $pesandaripmi->pasien->nama }}</td>
                                              <td>{{ $pesandaripmi->pasien->alamat }}</td>
                                              <td>{{ $pesandaripmi->pasien->no_wa }}</td>
                                              <td>{{ $pesandaripmi->pasien->golongan_darah }}</td>
                                              <td>{{ $pesandaripmi->pasien->stok_darah }} Kantong</td>
                                              <td>{{ $pesandaripmi->status }}</td>
                                              <td class="d-flex my-1">
                                                  <a href="" class="btn btn-success"><i
                                                          class='bx bx-check'></i>Setujui</a>
                                                  <a href="" class="btn btn-warning"><i
                                                          class='bx bx-check'></i>Tolak</a>
                                                  <form action="/pasien/{{ $pesandaripmi->id }}" method="post">
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
