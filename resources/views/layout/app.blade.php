<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PestGuard</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('tmplt/images/logos/seodashlogo.png') }}" />
    <link rel="stylesheet" href="{{ asset('tmplt/css/styles.min.css') }}" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Link Bootstrap's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">


    <!-- Scripts ================================================== -->
    <script src="{{ asset('tmplt/js/modernizr.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example2" tabindex="0">


    <!-- nav bar start  -->
    @include('partials.navbar')

    <!-- billboard start  -->
    @yield('content')

    <!-- Footer start  -->
    @include('partials.footer')


    <script src="{{ asset('tmplt/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('tmplt/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('tmplt/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('tmplt/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('tmplt/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('tmplt/js/app.min.js') }}"></script>
    <script src="{{ asset('tmplt/js/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
