@extends('admin.layouts.main')

@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Veillez renseignez les champs</h5>

      <!-- Multi Columns Form -->
      <form class="row g-3" method="POST" action="{{url ('updateCom', [$finds->id])}}">
          @csrf
        <div class="col-md-6">
          <label for="inputName5" class="form-label">Nom de l'article</label>
          <input type="text" value="{{$finds->article->nom}}" class="form-control" id="inputEmail5" readonly>
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Quantité commandée</label>
            <input type="number" value="{{$finds->qte}}" class="form-control" id="inputEmail5" readonly>
        </div>
        <div class="col-md-6">
          <label for="inputEmail5" class="form-label">Nom du client</label>
          <input type="text" value="{{$finds->nom}}" class="form-control" id="inputEmail5" readonly>
        </div>
        <div class="col-md-6">
            <label for="inputEmail5" class="form-label">Statut</label>
            <select id="inputState" name="statut" class="form-select">
                <option value="valider">Valider la commande</option>
            </select>
        </div>
        <div class="text-center mt-5">
          <button type="submit" class="btn btn-success">Accepter</button>
          <button type="reset" class="btn btn-danger">Annuler</button>
        </div>
      </form><!-- End Multi Columns Form -->
    </div>
  </div>

@endsection
