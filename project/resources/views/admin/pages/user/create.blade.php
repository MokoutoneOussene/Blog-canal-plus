@extends('admin.layouts.mainlayout')

@section('maincontent')
    <div class="mb-3">
        <button class="btn btn-dark" type="button">
            <a class="text-light" href="{{ route('gestion_user.index') }}">Liste des utilisateurs</a>
        </button>
    </div>
    
    <form action="{{ route('gestion_user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card shadow">
            <h3 class="text-center text-danger">Ajout de nouveau utilisateur</h3>
            <div class="card-body">

                <div class="row mb-3">
                    <div class="col-md-4">
                        <input type="text" name="statut" value="valide" hidden>
                        <label for="inputState" class="form-label">Nom Prénom</label>
                        <input type="text" name="name" class="form-control" id="inputEmail5">
                    </div>

                    <div class="col-md-4">
                        <label for="inputEmail5" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="inputEmail5">
                    </div>

                    <div class="col-md-4">
                        <label for="inputEmail5" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputEmail5">
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
                        <label for="inputEmail5" class="form-label">Role</label>
                        <select id="inputState" name="roles_id" class="form-control">
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Identifiant</label>
                        <input type="text" name="identifiant" class="form-control" id="inputEmail5">
                    </div>

                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Matricule</label>
                        <input type="text" name="code" class="form-control" id="inputEmail5">
                    </div>

                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Avatar</label>
                        <input type="file" name="photo" class="form-control" id="inputEmail5">
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
