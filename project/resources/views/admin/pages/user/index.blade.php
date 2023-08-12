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
    <div class="mb-3">
        <button class="btn btn-dark" type="button">
            <a class="text-light" href="{{ route('gestion_user.create') }}">Nouveau utilisateur</a>
        </button>
    </div>
    <table id="example1" class="table table-bordered table-striped">
        <h3 class="text-center text-danger">Liste des utilisateurs</h3>
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Service</th>
                <th scope="col">statut</th>
                <th scope="col">Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $use)
                <tr>
                    <td>{{ $use->id }}</td>
                    <td>{{ $use->name }}</td>
                    <td>{{ $use->email }}</td>
                    <td>{{ $use->Service->nom_service }}</td>
                    <td>{{ $use->statut }}</td>
                    <td>
                        <a href="{{ route('gestion_user.show', [$use->id]) }}">
                            <i class="fa fa-eye text-success"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
