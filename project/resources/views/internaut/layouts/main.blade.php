<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog Canal +</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('font/img/Canal_logo.png')}}" rel="icon">
    <link href="{{asset('font/img/Canal_logo.png')}}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{asset('font/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('font/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('font/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('font.vendor.aos.aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="{{asset('font/css/variables.css')}}" rel="stylesheet">
    <link href="{{asset('font/css/main.css')}}" rel="stylesheet">
</head>

<body>

    @include('internaut.require.navbar')

    <main id="main">

        @yield('content')

    </main>

    @include('internaut.require.footer')

    <!-- Vendor JS Files -->
    <script src="{{asset('font/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('font/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('font/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('font/vendor/aos/aos.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('font/js/main.js')}}"></script>

</body>

</html>
