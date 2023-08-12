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
        <h3 class="text-center text-danger">Liste des publications</h3>
            <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Date</th>
                    <th scope="col">Lieu</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($publications as $pub)
                    <tr>
                        <td>{{ $pub->id }}</td>
                        <td>{{ $pub->nom_pub }}</td>
                        <td>{{ $pub->date }}</td>
                        <td>{{ $pub->lieu }}</td>
                        <td>
                            <a href="{{ route('gestion_publication.show', [$pub->id]) }}"><i class="fa fa-eye text-success"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
