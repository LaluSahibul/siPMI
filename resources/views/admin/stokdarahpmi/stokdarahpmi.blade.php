  @extends('admin.partials.main')
  @section('content_admin')
  @section('title', 'Admin|Stok Darah PMI')
  <main id="main" class="main">

      <div class="pagetitle">
          <h1 class="text-danger">Stok Darah PMI</h1>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title text-danger">Stok Darah PMI</h5>
                          <a href="/stokdarahpmi/create" class="btn btn-danger mb-3"><i class='bx bxs-add-to-queue'></i>
                              Tambah Stok Darah PMI</a>
                          <a href="/stokdarahpmi/create" class="btn btn-danger mb-3"><i class='bx bx-envelope'></i>
                              Lihat Pesanan</a>
                          <!-- Table with stripped rows -->
                          <div class="table-responsive">
                              <table class="table datatable table-danger">
                                  <thead>
                                      <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Nama PMI</th>
                                          <th scope="col">Stok Darah A</th>
                                          <th scope="col">Stok Darah B</th>
                                          <th scope="col">Stok Darah AB</th>
                                          <th scope="col">Stok Darah O</th>
                                          <th scope="col">Stok Darah A-</th>
                                          <th scope="col">Stok Darah B-</th>
                                          <th scope="col">Stok Darah AB-</th>
                                          <th scope="col">Stok Darah O-</th>
                                          <th scope="col">Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($stokdarahpmis as $stokdarahpmi)
                                          <tr>
                                              <th scope="row">{{ $loop->iteration }}</th>
                                              <td>{{ $stokdarahpmi->nama_pmi }}</td>
                                              <td>{{ $stokdarahpmi->stok_darah_a }} Kantong</td>
                                              <td>{{ $stokdarahpmi->stok_darah_b }} Kantong</td>
                                              <td>{{ $stokdarahpmi->stok_darah_ab }} Kantong</td>
                                              <td>{{ $stokdarahpmi->stok_darah_o }} Kantong</td>
                                              <td>{{ $stokdarahpmi->stok_darah_am }} Kantong</td>
                                              <td>{{ $stokdarahpmi->stok_darah_bm }} Kantong</td>
                                              <td>{{ $stokdarahpmi->stok_darah_abm }} Kantong</td>
                                              <td>{{ $stokdarahpmi->stok_darah_om }} Kantong</td>
                                              <td class="d-flex my-1">
                                                  <a href="/stokdarahpmi/{{ $stokdarahpmi->id }}/edit"
                                                      class="btn btn-warning"><i class='bx bx-edit'></i>
                                                      Ubah</a>
                                                  <form action="/stokdarahpmi/{{ $stokdarahpmi->id }}" method="post">
                                                      @csrf
                                                      @method('delete')
                                                      <button type="submit"
                                                          onclick="return confirm('yakin data di hapus ?')"
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
