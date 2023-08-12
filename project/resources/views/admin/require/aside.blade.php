<!-- ======= Mobile nav toggle button ======= -->
<!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">
    <nav id="navbar" class="navbar nav-menu">
        <ul>
            <li><a href="{{ route('dash') }}" class="nav-link scrollto active"><i class="bx bx-home"></i>
                    <span>Accueil</span></a></li>
            <li>
                <a href="{{ route('gestion_publication.index') }}" class="nav-link scrollto">
                    <i class="bx bx-file-blank"></i> <span>Publications</span>
                </a>
            </li>
            <li>
                <a href="{{ route('gestion_projet.index') }}" class="nav-link scrollto">
                    <i class="bx bx-book-content"></i> <span>Projets</span>
                </a>
            </li>
            <li>
                <a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>MODELES</span>
                </a>
            </li>
            <li>
                <a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>CONTACTS</span>
                </a>
            </li>
            <li>
                <a href="" class="nav-link scrollto"><i class="bx bx-user"></i> <span>CLIENT</span>
                </a>
            </li>
            <li>
                <form id="logout-form" action="{{ route('logout') }}" method="GET">
                    @csrf
                    <button type="submit" class="btn-danger"><i class="bx bx-user"></i></button>
                </form>
            </li>
        </ul>
    </nav><!-- .nav-menu -->
</header><!-- End Header -->
