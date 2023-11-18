<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/guest/assets/img/favicon.png" rel="icon">
    <link href="/guest/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/guest/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/guest/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/guest/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/guest/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/guest/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/guest/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/guest/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/guest/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Sailor
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        th.text-center {
            text-align: center;
        }

        th.text-center.vertical-center {
            vertical-align: middle;
            min-height: 50px;
            /* Sesuaikan dengan tinggi yang Anda inginkan */
        }
    </style>
</head>

<body>
    @include('guest.partials.navbar')
    @yield('content_guest')
    @include('guest.partials.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/guest/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/guest/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/guest/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/guest/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/guest/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="/guest/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/guest/assets/js/main.js"></script>

</body>

</html>
