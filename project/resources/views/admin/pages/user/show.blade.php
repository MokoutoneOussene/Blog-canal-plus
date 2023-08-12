@extends('admin.layouts.mainlayout')

@section('maincontent')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
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
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="{{ asset('storage') . '/' . $finds->photo }}" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{ $finds->name }}</h3>

                            <p class="text-muted text-center">{{ $finds->Role->nom }}</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Email</b> <a class="float-right">{{ $finds->email }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Identifiant</b> <a class="float-right">{{ $finds->identifiant }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Matricule</b> <a class="float-right">{{ $finds->code }}</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">A propos de l'utilisateur</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Service</strong>

                            <p class="text-muted">
                                {{ $finds->Service->nom_service }}
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Role</strong>

                            <p class="text-muted">{{ $finds->Role->nom }}</p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Statut</strong>

                            <p class="text-muted">
                                <span class="tag tag-danger">{{ $finds->statut }}</span>
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
                                <li class="nav-item"><a class="nav-link active" href="#activity"
                                        data-toggle="tab">Activités</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="user-block">
                                            <h3 class="username">
                                                <a href="#">Publications</a>
                                            </h3>
                                        </div>
                                        <!-- /.user-block -->
                                        @forelse($posts as $post)
                                            <p>
                                                {{ $post->libelle }}
                                            </p>
                                        @empty
                                            <p class="text-danger">Aucune publication</p>
                                        @endforelse
                                    </div>
                                    <div class="post">
                                        <div class="user-block">
                                            <h3 class="username">
                                                <a href="#">Commentaires</a>
                                            </h3>
                                        </div>
                                        <!-- /.user-block -->
                                        @forelse($comments as $comment)
                                            <p>
                                                {{ $comment->libelle }}
                                            </p>
                                        @empty
                                            <p class="text-danger">Aucun commentaire</p>
                                        @endforelse
                                    </div>
                                </div>
                            </div><!-- /.card-body -->
                        </div>

                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="m-3">
                        <button class="btn btn-warning" data-toggle="modal"
                            data-target="#editventemodal-lg{{ $finds->id }}">Modifier</button>
                        <button class="btn btn-danger" data-toggle="modal" data-target="#deletventemodal">Supprimer</button>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="deletventemodal">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                    <h4 class="modal-title">Verification</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h3>Voulez-vous vraiment supprimer l'utilisateur ?</h3>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-outline-light">
                        <a class="text-light" href="{{ url('destroyUser/' . $finds->id) }}">Supprimer</a>
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    <div class="modal fade bd-example-modal-lg" id="editventemodal-lg{{ $finds->id }}" role="dialog">
        <div class="modal-dialog modal-lg">
            <form action="{{ route('gestion_user.update', [$finds->id]) }}" method="POST" class="modal-content">
                @method('PATCH')
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="exampleModalLabel">Modification de l'utilisateur N° : {{ $finds->id }}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                @csrf
                <div class="modal-body">
                    <div class="row mb-3">
                        <input type="text" name="statut" value="Validé" hidden>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Nom Prénom</label>
                            <input type="text" name="name" value="{{ $finds->name }}" class="form-control"
                                id="inputEmail5">
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label">Email</label>
                            <input type="text" name="email" value="{{ $finds->email }}" class="form-control"
                                id="inputEmail5">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label">Password</label>
                            <input type="password" name="password" value="{{ $finds->password }}" class="form-control"
                                id="inputEmail5">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label">Service</label>
                            <select id="inputState" name="services_id" class="form-control">
                                @foreach (App\Models\Service::all() as $serv)
                                    <option value="{{ $serv->id }}">{{ $serv->nom_service }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="inputEmail5" class="form-label">Role</label>
                            <select id="inputState" name="roles_id" class="form-control">
                                @foreach (App\Models\Role::all() as $role)
                                    <option value="{{ $role->id }}">{{ $role->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Identifiant</label>
                            <input type="text" name="identifiant" value="{{ $finds->identifiant }}"
                                class="form-control" id="inputEmail5">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Matricule</label>
                            <input type="text" name="code" value="{{ $finds->code }}" class="form-control"
                                id="inputEmail5">
                        </div>
                    </div>
                    <div class="row mb-3">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-dark">Modifier</button>
                </div>
            </form>
        </div>
    </div>
@endsection
