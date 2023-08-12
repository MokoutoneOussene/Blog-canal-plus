<!DOCTYPE html>
<html lang="en">

<head>
    <title>My site</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('font/img/Canal_logo.png') }}" rel="icon">
    <link href="{{ asset('font/img/Canal_logo.png') }}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('font/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('font/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font.vendor.aos.aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="{{ asset('font/css/variables.css') }}" rel="stylesheet">
    <link href="{{ asset('font/css/main.css') }}" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('accueil') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('font/img/Canal_logo.png') }}" alt="">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ route('accueil') }}">Accueil</a></li>
                    <li><a href="#pubs">Publication</a></li>
                    <li><a href="#projects">Projet</a></li>
                    <li><a href="#docs">Documents</a></li>
                </ul>
            </nav>
            <!-- .navbar -->

            <ul class="d-flex align-items-center">
                <li style="list-style: none">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2 text-dark">{{ Auth::User()->name }}</span>
                    </a><!-- End Profile Iamge Icon -->
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ Auth::User()->name }}</h6>
                            <span>{{ Auth::User()->Role->nom }}</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        @can('manage_comments')
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('dash') }}"
                                    target="_blank">
                                    <i class="bi bi-person"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                        @endcan

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="nav-link text-dark btn"
                                    style="color: #002a54;font-weight:bold">
                                    <i class="fa fa-sign-out-alt text-dark"></i> Deconnexion
                                </button>
                            </form>
                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
            </ul>
        </div>
    </header>
    <!-- End Header -->

    <main id="main">

        @yield('content')

    </main>

    @include('internaut.require.footer')

    <!-- Vendor JS Files -->
    <script src="{{ asset('font/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('font/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('font/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('font/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('font/js/main.js') }}"></script>

</body>

</html>
