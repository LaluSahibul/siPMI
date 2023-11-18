  @extends('pendonor.partials.main')
  @section('content_pendonor')
  @section('title', 'Pendonor|Pesanan')
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
                                      @foreach ($pesandaripendonors as $pesandaripendonor)
                                          <tr>
                                              <th scope="row">{{ $loop->iteration }}</th>
                                              <td>{{ $pesandaripendonor->pasien->nama }}</td>
                                              <td>{{ $pesandaripendonor->pasien->alamat }}</td>
                                              <td>{{ $pesandaripendonor->pasien->no_wa }}</td>
                                              <td>{{ $pesandaripendonor->pasien->golongan_darah }}</td>
                                              <td>{{ $pesandaripendonor->pasien->stok_darah }} Kantong</td>
                                              <td>{{ $pesandaripendonor->status }}</td>
                                              <td class="d-flex my-1">
                                                  <a href="" class="btn btn-success"><i
                                                          class='bx bx-check'></i>Setujui</a>
                                                  <a href="" class="btn btn-warning"><i
                                                          class='bx bx-check'></i>Tolak</a>
                                                  <form action="/pasien/{{ $pesandaripendonor->id }}" method="post">
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
