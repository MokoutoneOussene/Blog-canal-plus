    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('accueil') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('font/img/Canal_logo.png') }}" alt="">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ route('accueil') }}">Accueil</a></li>
                    <li><a href="{{ route('pubs') }}">Publication</a></li>
                    <li><a href="{{ route('all_prog') }}">Projet</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('about') }}">A propos</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>

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

                        {{-- <li>
                            <a class="dropdown-item d-flex align-items-center" href="">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li> --}}

                        {{-- <li>
                            <hr class="dropdown-divider">
                        </li> --}}

                        @can('manage_comments')
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('dash') }}">
                                    <i class="bi bi-person"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                        @endcan

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('my_site') }}">
                                <i class="bi bi-person"></i>
                                <span>My site</span>
                            </a>
                        </li>

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
