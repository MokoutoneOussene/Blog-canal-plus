
@extends('admin.layouts.mainlayout')

@section('maincontent')
    <form action="{{ route('gestion_document.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card shadow">
            <h3 class="text-center text-danger">Nouveau document</h3>
            <div class="card-body">

                <input name="users_id" type="text" value="{{ Auth::User()->id }}" hidden>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Nom document</label>
                        <input type="text" name="nom_fichier" class="form-control" id="inputEmail5">
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
                            @foreach ($services as $serv)
                                <option value="{{ $serv->id }}">{{ $serv->nom_service }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Fichier</label>
                        <input type="file" name="file" class="form-control" id="inputEmail5">
                    </div>
                </div>

            </div>

            <div class="m-3">
                <button onClick="return confirm('You sure??');" class="btn btn-dark" type="submit">Enregistrer</button>
                <button class="btn btn-danger" type="reset">Annuler</button>
            </div>
        </div>
    </form>
@endsection
