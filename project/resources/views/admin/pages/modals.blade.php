<!-- modal-service -->
<div class="modal fade" id="modal-service">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Nouveau service</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('gestion_service.store') }}" method="POST">
                    @csrf
                    <div class="card shadow">
                        <div class="card-body">

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="inputState" class="form-label">Nom service</label>
                                    <input type="text" name="nom_service" class="form-control" id="inputEmail5">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="inputEmail5" class="form-label">Direction du service</label>
                                    <select id="inputState" name="directions_id" class="form-control">
                                        @foreach (App\Models\Direction::all() as $diect)
                                            <option value="{{ $diect->id }}">{{ $diect->nom_direction }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer justify-content-between">
                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-dark">Sauvegarder</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!-- modal-direction -->
<div class="modal fade" id="modal-direction">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Nouvelle Direction</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('gestion_direction.store') }}" method="POST">
                    @csrf
                    <div class="card shadow">
                        <div class="card-body">

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="inputState" class="form-label">Nom direction</label>
                                    <input type="text" name="nom_direction" class="form-control" id="inputEmail5">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="inputEmail5" class="form-label">Filliale concernée</label>
                                    <select id="inputState" name="filiales_id" class="form-control">
                                        @foreach (App\Models\Filiale::all() as $fil)
                                            <option value="{{ $fil->id }}">{{ $fil->nom_filiale }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer justify-content-between">
                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-dark">Sauvegarder</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!-- modal-filliales -->
<div class="modal fade" id="modal-filliale">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Nouvelle Filliale</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('gestion_filliale.store') }}" method="POST">
                    @csrf
                    <div class="card shadow">
                        <div class="card-body">

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="inputState" class="form-label">Nom du filliale</label>
                                    <input type="text" name="nom_filiale" class="form-control" id="inputEmail5">
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer justify-content-between">
                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-dark">Sauvegarder</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!-- modal-filliales -->
<div class="modal fade" id="modal-categorie">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Nouvelle categorie</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('gestion_categorie.store') }}" method="POST">
                    @csrf
                    <div class="card shadow">
                        <div class="card-body">

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="inputState" class="form-label">Nom de la categorie</label>
                                    <input type="text" name="nom_cat" class="form-control" id="inputEmail5">
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer justify-content-between">
                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-dark">Sauvegarder</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
