@extends('admin.layouts.mainlayout')

@section('maincontent')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Paramettrage</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Setting</a></li>
                        <li class="breadcrumb-item active">Accueil</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            {{-- <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src=""
                                    alt="User profile picture">
                            </div> --}}

                            <h3 class="profile-username text-center">{{ Auth::User()->name }}</h3>

                            <p class="text-muted text-center">{{ Auth::User()->Role->nom }}</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Email</b> <a class="float-right">{{ Auth::User()->email }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Identifiant</b> <a class="float-right">{{ Auth::User()->identifiant }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Matricule</b> <a class="float-right">{{ Auth::User()->code }}</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">A propos de moi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Service</strong>

                            <p class="text-muted">
                                {{ Auth::User()->Service->nom_service }}
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Role</strong>

                            <p class="text-muted">{{ Auth::User()->Role->nom }}</p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Statut</strong>

                            <p class="text-muted">
                                <span class="tag tag-danger">{{ Auth::User()->statut }}</span>
                            </p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Gestion
                                        des Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Gestion des
                                        Directions</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Gestion des
                                        filliales</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#category" data-toggle="tab">Gestion des
                                        Categories</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="user-block">
                                            <span class="username">
                                                <button type="button" class="btn btn-dark" data-toggle="modal"
                                                    data-target="#modal-service">
                                                    <i class="fas fa-plus"></i>
                                                </button>

                                                <a href="#">Liste des services</a>
                                                <a href="#" class="float-right btn-tool"><i
                                                        class="fas fa-times"></i></a>
                                            </span>
                                            <span class="description">Ouagadougou - {{ date('d/m/Y') }}</span>
                                        </div>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">N°</th>
                                                    <th scope="col">Nom service</th>
                                                    <th scope="col">Direction</th>
                                                    <th scope="col">Detail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (App\Models\Service::all() as $pub)
                                                    <tr>
                                                        <td>{{ $pub->id }}</td>
                                                        <td>{{ $pub->nom_service }}</td>
                                                        <td>{{ $pub->Direction->nom_direction }}</td>
                                                        <td>
                                                            <a href="{{ route('gestion_publication.show', [$pub->id]) }}"><i
                                                                    class="fa fa-eye text-success"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">

                                    <div class="post">
                                        <div class="user-block">
                                            <span class="username">
                                                <button type="button" class="btn btn-dark" data-toggle="modal"
                                                    data-target="#modal-direction">
                                                    <i class="fas fa-plus"></i>
                                                </button>

                                                <a href="#">Liste des direction</a>
                                                <a href="#" class="float-right btn-tool"><i
                                                        class="fas fa-times"></i></a>
                                            </span>
                                            <span class="description">Ouagadougou - {{ date('d/m/Y') }}</span>
                                        </div>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">N°</th>
                                                    <th scope="col">Nom Direction</th>
                                                    <th scope="col">Filliale</th>
                                                    <th scope="col">Detail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (App\Models\Direction::all() as $pub)
                                                    <tr>
                                                        <td>{{ $pub->id }}</td>
                                                        <td>{{ $pub->nom_direction }}</td>
                                                        <td>{{ $pub->Filliale->nom_filiale }}</td>
                                                        <td>
                                                            <a href="{{ route('gestion_publication.show', [$pub->id]) }}"><i
                                                                    class="fa fa-eye text-success"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">
                                    <div class="post">
                                        <div class="user-block">
                                            <span class="username">
                                                <button type="button" class="btn btn-dark" data-toggle="modal"
                                                    data-target="#modal-filliale">
                                                    <i class="fas fa-plus"></i>
                                                </button>

                                                <a href="#">Liste des filliale</a>
                                                <a href="#" class="float-right btn-tool"><i
                                                        class="fas fa-times"></i></a>
                                            </span>
                                            <span class="description">Ouagadougou - {{ date('d/m/Y') }}</span>
                                        </div>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">N°</th>
                                                    <th scope="col">Nom du filliale</th>
                                                    <th scope="col">Detail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (App\Models\Filiale::all() as $pub)
                                                    <tr>
                                                        <td>{{ $pub->id }}</td>
                                                        <td>{{ $pub->nom_filiale }}</td>
                                                        <td>
                                                            <a href="{{ route('gestion_filliale.show', [$pub->id]) }}"><i
                                                                    class="fa fa-eye text-success"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="category">
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="user-block">
                                            <span class="username">
                                                <button type="button" class="btn btn-dark" data-toggle="modal"
                                                    data-target="#modal-categorie">
                                                    <i class="fas fa-plus"></i>
                                                </button>

                                                <a href="#">Liste des categories</a>
                                                <a href="#" class="float-right btn-tool"><i
                                                        class="fas fa-times"></i></a>
                                            </span>
                                            <span class="description">Ouagadougou - {{ date('d/m/Y') }}</span>
                                        </div>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">N°</th>
                                                    <th scope="col">Nom service</th>
                                                    <th scope="col">Detail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (App\Models\Categorie::all() as $cat)
                                                    <tr>
                                                        <td>{{ $cat->id }}</td>
                                                        <td>{{ $cat->nom_cat }}</td>
                                                        <td>
                                                            <a href="{{ route('gestion_categorie.show', [$cat->id]) }}"><i
                                                                    class="fa fa-eye text-success"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    @include('admin.pages.modals')
@endsection
