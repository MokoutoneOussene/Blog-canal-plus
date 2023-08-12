<nav class="main-header navbar navbar-expand navbar-white navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item" style="color: #002a54;font-weight:bold">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-dark"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <h1 class="nav-link text-dark" style="color: #002a54; font-weight:bold">Tableau de bord</h1>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="nav-link text-dark btn" style="color: #002a54;font-weight:bold">
                    <i class="fa fa-sign-out-alt text-dark"></i> Deconnexion
                </button>
            </form>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt text-dark"></i>
            </a>
        </li>
    </ul>
</nav>
