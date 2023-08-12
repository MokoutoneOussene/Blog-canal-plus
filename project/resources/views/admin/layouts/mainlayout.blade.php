<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.style')
    <style>
        .note-editable {
            height: 270px;
        }

        .navbar-light {
            background: #ffc107 !important;
        }

        .page-link {
            color: rgb(0, 149, 52) !important;
        }

        .layout-navbar-fixed .wrapper .main-header {
            left: 0;
            position: fixed;
            right: 0;
            top: 0;
            z-index: 1037;
        }

        .select2 {
            height: 100%;
            border: none;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed" style="font-family: 'calibri';">
    <div class="wrapper">
        <!-- Navbar -->
        @include('admin.layouts.navbar')
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar main-sidebar-custom sidebar-light-dark elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('accueil') }}" class="brand-link">
                <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="Canal+ Logo" class="brand-image elevation-3">
                <span class="brand-text font-weight-light">.</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <i class="fa fa-user fa-lg"></i>
                    </div>
                    <div class="info">
                        <a href="#" class="d-block" style="font-weight:bold">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-shopping-bag"></i>
                                <p>PUBLICATION<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('gestion_publication.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Creer publication</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('gestion_publication.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Liste publication</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-folder-open"></i>
                                <p>PROJET<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('gestion_projet.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Creer projet</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('gestion_projet.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Liste projet</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-shopping-basket"></i>
                                <p>DOCUMENTS<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('gestion_document.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Nouveau document</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('gestion_document.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Liste des documents</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-header">SUPLEMENTAIRES</li>
                        @can('manage_setting')
                            <li class="nav-item">
                                <a href="{{ route('gestion_user.index') }}" class="nav-link">
                                    <i class="fa fa-user-circle"></i>
                                    <p class="text">Utilisateur</p>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="fa fa-users"></i>
                                    <p>Commentaire</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon far fa-circle text-info"></i>
                                    <p>Informational</p>
                                </a>
                            </li> --}}
                        @endcan
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->

            <div class="sidebar-custom">
                @can('manage_setting')
                    <a href="{{ route('setting') }}" class="btn btn-link">
                        <i class="fas fa-cogs text-dark"></i>
                    </a>
                @endcan
                <a href="{{ route('dash') }}" class="btn btn-dark hide-on-collapse pos-right">Dashboard</a>
            </div>
            <!-- /.sidebar-custom -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{ $title ?? '' }}</h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('maincontent')
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
            
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer bg-dark">
            <strong class="text-light">Copyright &copy; {{ date('Y') }} Canal+</strong>
            <div class="float-right d-none d-sm-inline-block text-light">
                <b>Version</b> 1.0.0
            </div>
        </footer>
    </div>
    @include('admin.layouts.js')
</body>

</html>
