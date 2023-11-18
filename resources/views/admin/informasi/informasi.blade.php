  @extends('admin.partials.main')
  @section('content_admin')
  @section('title', 'Admin|Informasi')
  <main id="main" class="main">

      <div class="pagetitle">
          <h1 class="text-danger">Informasi</h1>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title text-danger">Daftar Informasi</h5>
                          <a href="/admin_informasi/create" class="btn btn-danger mb-3"><i
                                  class='bx bxs-add-to-queue'></i>
                              Tambah Informasi</a>
                          <!-- Table with stripped rows -->
                          <div class="table-responsive">
                              <table class="table datatable table-danger">
                                  <thead>
                                      <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Judul</th>
                                          <th scope="col">Foto</th>
                                          <th scope="col">Deskripsi</th>
                                          <th scope="col">Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($informasis as $informasi)
                                          <tr>
                                              <th scope="row">{{ $loop->iteration }}</th>
                                              <td>{{ $informasi->judul }}</td>
                                              <td><img src="storage/{{ $informasi->foto }}" width="60"
                                                      alt=""></td>
                                              <td>{!! Str::words($informasi->deskripsi, 3, '...') !!}</td>
                                              <td class="d-flex my-1">
                                                  <a href="/admin_informasi/{{ $informasi->id }}/edit"
                                                      class="btn btn-warning"><i class='bx bx-edit'></i>
                                                      Ubah</a>
                                                  <form action="/admin_informasi/{{ $informasi->id }}" method="post">
                                                      @csrf
                                                      @method('delete')
                                                      <button type="submit"
                                                          onclick="return confirm('yakin data informasi di hapus ?')"
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
