@extends('admin.layouts.mainlayout')

@section('maincontent')
    <table id="example1" class="table table-bordered table-striped">
        <h3 class="text-center text-danger">Liste des document</h3>
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Nom du fichier</th>
                <th scope="col">Voir par tous le monde</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($documents as $pub)
                <tr>
                    <td>{{ $pub->id }}</td>
                    <td>{{ $pub->nom_fichier }}</td>
                    <td>{{ $pub->voir_plus }}</td>
                    <td>
                        <i class="btn fa fa-edit text-warning" data-toggle="modal"
                            data-target="#editdocmodal-lg{{ $pub->id }}"></i>
                        <div class="modal fade bd-example-modal-lg" id="editdocmodal-lg{{ $pub->id }}" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <form action="{{ route('gestion_document.update', [$pub->id]) }}" method="POST"
                                    class="modal-content" enctype="multipart/form-data">
                                    @method('PATCH')
                                    <div class="modal-header bg-light">
                                        <h5 class="modal-title" id="exampleModalLabel">Modification du document N° :
                                            {{ $pub->id }}
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    @csrf
                                    <div class="modal-body">
                                        <input name="users_id" type="text" value="{{ Auth::User()->id }}" hidden>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="inputState" class="form-label">Nom document</label>
                                                <input type="text" name="nom_fichier" value="{{ $pub->nom_fichier }}" class="form-control"
                                                    id="inputEmail5">
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
                                            <div class="col-md-6">
                                                <label for="inputEmail5" class="form-label">Service</label>
                                                <select id="inputState" name="services_id" class="form-control">
                                                    @foreach (App\Models\Service::all() as $serv)
                                                        <option value="{{ $serv->id }}">{{ $serv->nom_service }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputState" class="form-label">Fichier</label>
                                                <input type="file" name="file" class="form-control" id="inputEmail5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-dark">Modifier</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </td>

                    <td>
                        <i class="btn fa fa-window-close text-danger" data-toggle="modal" data-target="#deletpubmodal"></i>
                    </td>
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
                                    <h3>Voulez-vous vraiment supprimer cet document ?</h3>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-light"
                                        data-dismiss="modal">Annuler</button>
                                    <button type="button" class="btn btn-outline-light">
                                        <a class="text-light" href="{{ url('destroyDocument/' . $pub->id) }}">Supprimer</a>
                                    </button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
