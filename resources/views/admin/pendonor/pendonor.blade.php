  @extends('admin.partials.main')
  @section('content_admin')
  @section('title', 'Admin|Pendonor')
  <main id="main" class="main">
      <div class="pagetitle">
          <h1 class="text-danger">Pendonor</h1>
      </div><!-- End Page Title -->
      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title text-danger">Data Pendonor</h5>
                          <a href="/pendonor/create" class="btn btn-danger mb-3"><i class='bx bxs-add-to-queue'></i>
                              Tambah Pendonor</a>
                          <a href="/pendonor/create" class="btn btn-danger mb-3"><i class='bx bx-envelope'></i>
                              Lihat Pesanan</a>
                          <!-- Table with stripped rows -->
                          <div class="table-responsive">
                              <table class="table datatable table-danger">
                                  <thead>
                                      <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Pendonor</th>
                                          <th scope="col">Username</th>
                                          <th scope="col">Alamat</th>
                                          <th scope="col">Nomor Telpon</th>
                                          <th scope="col">Stok Darah</th>
                                          <th scope="col">Gologan Darah</th>
                                          <th scope="col">Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($pendonors as $pendonor)
                                          <tr>
                                              <th scope="row">{{ $loop->iteration }}</th>
                                              <td>{{ $pendonor->nama }}</td>
                                              <td>{{ $pendonor->username }}</td>
                                              <td>{{ $pendonor->alamat }}</td>
                                              <td>{{ $pendonor->nomor_hp }}</td>
                                              <td>{{ $pendonor->stok_darah }} Kantong</td>
                                              <td>{{ $pendonor->golongan_darah }}</td>
                                              <td class="d-flex my-1">
                                                  <a href="/pendonor/{{ $pendonor->id }}/edit"
                                                      class="btn btn-warning"><i class='bx bx-edit'></i>
                                                      Ubah</a>
                                                  <form action="/pendonor/{{ $pendonor->id }}" method="post">
                                                      @csrf
                                                      @method('delete')
                                                      <button type="submit"
                                                          onclick="return confirm('yakin data pendonor di hapus ?')"
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
