@extends('admin.layouts.mainlayout')

@section('maincontent')
    @if (session()->has('message'))
        <div class="alert alert-warning alert-dismissible show" role="alert">
            <span class="small">{{ session()->get('message') }}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <table id="example1" class="table table-bordered table-striped">
        <h3 class="text-center text-danger">Liste des projets</h3>
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Nom projet</th>
                <th scope="col">D debut</th>
                <th scope="col">D fin</th>
                <th scope="col">Lieu</th>
                <th scope="col">Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projets as $prog)
                <tr>
                    <td>{{ $prog->id }}</td>
                    <td>{{ $prog->nom_projet }}</td>
                    <td>{{ $prog->d_debut }}</td>
                    <td>{{ $prog->d_fin }}</td>
                    <td>{{ $prog->lieu_projet }}</td>
                    <td>
                        <a href="{{ route('gestion_projet.show', [$prog->id]) }}"><i class="fa fa-eye text-success"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
