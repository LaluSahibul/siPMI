@extends('admin.partials.main')
@section('content_admin')
@section('title', 'Admin|Dashboard')
<main id="main" class="main">

    <div class="pagetitle">
        <h1 class="text-danger">Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title text-danger">Total Pendonor </h5>

                                <div class="d-flex align-items-center">
                                    <i class="bx bx-group text-danger fs-1"></i>
                                    <div class="ps-3">
                                        <h6 class="text-danger">{{ DB::table('pendonors')->count() }}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card bg-danger">
                            <div class="card-body">
                                <h5 class="card-title text-light">Total Pasien </h5>

                                <div class="d-flex align-items-center">
                                    <i class="bx bx-hotel text-light fs-1"></i>
                                    <div class="ps-3">
                                        <h6 class="text-light">{{ DB::table('pasiens')->count() }}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title text-danger">Total Darah PMI</h5>

                                <div class="d-flex align-items-center">
                                    <i class="bx bxs-droplet text-danger fs-1"></i>
                                    <div class="ps-3">
                                        <h6 class="text-danger">{{ DB::table('stokdarah_pmis')->count() }}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                <h5 class="card-title text-danger fw-bold">Grafik <span>/ Total Data</span></h5>

                                <canvas style="height: 200px;" id="reportsChart"></canvas>

                                <!-- End Line Chart -->

                            </div>

                        </div>
                    </div><!-- End Reports -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->

        </div>
    </section>

</main><!-- End #main -->
@endsection
