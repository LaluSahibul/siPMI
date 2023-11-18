  @extends('admin.partials.main')
  @section('content_admin')
  @section('title', 'Admin|User')
  <main id="main" class="main">

      <div class="pagetitle">
          <h1 class="text-danger">User</h1>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title text-danger">Data User</h5>
                          <a href="/user/create" class="btn btn-danger mb-3"><i class='bx bxs-add-to-queue'></i>
                              Tambah User</a>
                          <!-- Table with stripped rows -->
                          <div class="table-responsive">
                              <table class="table datatable table-danger">
                                  <thead>
                                      <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Nama</th>
                                          <th scope="col">Username</th>
                                          <th scope="col">Role</th>
                                          <th scope="col">Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @php
                                          $authuser = Auth::user();
                                      @endphp
                                      @foreach ($users as $user)
                                          <tr>
                                              <th scope="row">{{ $loop->iteration }}</th>
                                              <td>{{ $user->nama }}</td>
                                              <td>{{ $user->username }}</td>
                                              <td>{{ $user->role }}</td>
                                              @if ($user->role === 'super admin')
                                                  @if ($authuser->role === 'super admin')
                                                      <td class="d-flex my-1">
                                                          <a href="/user/{{ $user->id }}/edit"
                                                              class="btn btn-warning"><i class='bx bx-edit'></i>
                                                              Ubah</a>
                                                          {{-- <form action="/user/{{ $user->id }}" method="post">
                                                              @csrf
                                                              @method('delete')
                                                              <button type="submit"
                                                                  onclick="return confirm('yakin data user di hapus ?')"
                                                                  class="btn btn-danger"><i class='bx bx-trash'></i>
                                                                  Hapus</button>
                                                          </form> --}}
                                                      </td>
                                                  @else
                                                      <td class="d-flex my-1">
                                                          <strong>Super Admin</strong>
                                                      </td>
                                                  @endif
                                              @else
                                                  <td class="d-flex my-1">
                                                      <a href="/user/{{ $user->id }}/edit"
                                                          class="btn btn-warning"><i class='bx bx-edit'></i>
                                                          Ubah</a>
                                                      <form action="/user/{{ $user->id }}" method="post">
                                                          @csrf
                                                          @method('delete')
                                                          <button type="submit"
                                                              onclick="return confirm('yakin data user di hapus ?')"
                                                              class="btn btn-danger"><i class='bx bx-trash'></i>
                                                              Hapus</button>
                                                      </form>
                                                  </td>
                                              @endif
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
