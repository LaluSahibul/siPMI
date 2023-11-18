<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!--<link href="/assets/img/favicon.png" rel="icon">-->
    <!--<link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->
    <link href="/assets/img/blood.png" rel="icon">
    <link href="/assets/img/blood.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        .bg-darah {
            background-color: #b60205 !important;
        }

        .bg-darah-link {
            background-color: #b60205 !important;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center bg-danger">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- <img src="/assets/img/logo.png" alt=""> -->
                <span class="d-none d-lg-block text-light">{{ strtoupper(Auth::user()->role) }}</span>
            </a>
            <i class="bi bi-list text-light toggle-sidebar-btn"></i>
        </div><!-- End Logo -->
        @include('pendonor.partials.navbar')
        @include('pendonor.partials.sidebar')
        @yield('content_pendonor')
        @include('pendonor.partials.footer')
        <!-- Vendor JS Files -->
        <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="/assets/vendor/quill/quill.min.js"></script>
        <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="/assets/vendor/tinymce/tinymce.min.js"></script>
        <script src="/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="/assets/js/main.js"></script>
        <script>
            const totalPendonor = {{ DB::table('pendonors')->count() }};
            const totalPasien = {{ DB::table('pasiens')->count() }};
            const totalDarahPMI = {{ DB::table('stokdarah_pmis')->count() }};
            const ctx = document.getElementById('reportsChart');

            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Total Pendonor', 'Total Pasien', 'Total Darah PMI'],
                    datasets: [{
                        label: 'Total',
                        data: [totalPendonor, totalPasien, totalDarahPMI],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
</body>

</html>
