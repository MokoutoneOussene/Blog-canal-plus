@extends('admin.layouts.mainlayout')

@section('maincontent')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Publication N°
                            {{ $finds->id }}</a></li>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                        <!-- Post -->
                        <div class="post">
                            <div class="user-block">
                                <span class="username">
                                    <a href="#">{{ $finds->nom_pub }}</a>
                                </span>
                                <span class="description">{{ $finds->lieu }} - {{ $finds->date }} à {{ $finds->heure }}</span>
                            </div>

                            <div class="user-block">
                                <span class="username">
                                    <a href="#">Categorie de la publication</a>
                                </span>
                                <span class="description">{{ $finds->Categorie->nom_cat }}</span>
                            </div>

                            <div class="user-block">
                                <span class="username">
                                    <a href="#">Service lié</a>
                                </span>
                                <span class="description">{{ $finds->Service->nom_service }}</span>
                            </div>

                            <div class="user-block">
                                <span class="username">
                                    <a href="#">Statut de la publication</a>
                                </span>
                                <span class="description">{{ $finds->statut }}</span>
                            </div>

                            <p> {{ $finds->descript }} </p>

                        </div>
                        <div class="post">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="{{ asset('storage') . '/' . $finds->img }}"
                                    alt="User Image">
                                <span class="username">
                                    <a href="#">Image de publication</a>
                                    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                </span>
                                <span class="description">{{ $finds->date }}</span>
                            </div>
                            <!-- /.user-block -->
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <img class="img-fluid" src="{{ asset('storage') . '/' . $finds->img }}" alt="Photo">
                                </div>
                                <!-- /.col -->
                            </div>
                        </div>
                    </div>
                </div><!-- /.card-body -->
            </div>

            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="m-3">
            <button class="btn btn-warning" data-toggle="modal"
                data-target="#editpubmodal-lg{{ $finds->id }}">Modifier</button>
            <button class="btn btn-danger" data-toggle="modal" data-target="#deletpubmodal">Supprimer</button>
        </div>
    </div>

    <div class="modal fade" id="deletpubmodal">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                    <h4 class="modal-title">Verification</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h3>Voulez-vous vraiment supprimer cette publication ?</h3>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-outline-light">
                        <a class="text-light" href="{{ url('destroyPub/' . $finds->id) }}">Supprimer</a>
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade bd-example-modal-lg" id="editpubmodal-lg{{ $finds->id }}" role="dialog">
        <div class="modal-dialog modal-lg">
            <form action="{{ route('gestion_publication.update', [$finds->id]) }}" method="POST" class="modal-content"
                enctype="multipart/form-data">
                @method('PATCH')
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="exampleModalLabel">Modification de la publication N° : {{ $finds->id }}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                @csrf
                <div class="modal-body">
                    <input name="users_id" type="text" value="{{ Auth::User()->id }}" hidden>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Nom publication</label>
                            <input type="text" name="nom_pub" value="{{ $finds->nom_pub }}" class="form-control"
                                id="inputEmail5">
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label">Lieu</label>
                            <input type="text" name="lieu" value="{{ $finds->lieu }}" class="form-control"
                                id="inputEmail5">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label">Categorie</label>
                            <select id="inputState" name="categories_id" class="form-control">
                                @foreach (App\Models\Categorie::all() as $cate)
                                    <option value="{{ $cate->id }}">{{ $cate->nom_cat }}</option>
                                @endforeach
                            </select>
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
                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label">Statut</label>
                            <select id="inputState" name="statut" class="form-control">
                                <option value="a venir">A venir</option>
                                <option value="en cours">En cours</option>
                                <option value="termine">Termine</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label">Voir par autres services</label>
                            <select id="inputState" name="voir_plus" class="form-control">
                                <option value="Oui">Oui</option>
                                <option value="Non">Non</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Date</label>
                            <input type="date" name="date" value="{{ $finds->date }}" class="form-control"
                                id="inputEmail5">
                        </div>

                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Heure</label>
                            <input type="time" name="heure" value="{{ $finds->heure }}" class="form-control"
                                id="inputEmail5">
                        </div>

                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Image</label>
                            <input type="file" name="img" class="form-control" id="inputEmail5">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label for="inputState" class="form-label">Description</label>
                            <textarea class="form-control" name="descript" value="{{ $finds->nom_pub }}" cols="30" rows="5">{{ $finds->descript }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-dark">Modifier</button>
                </div>
            </form>
        </div>
    </div>
@endsection
