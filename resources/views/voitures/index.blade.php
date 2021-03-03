@extends('layout')

@section('title', 'Clients')

@section('content')

<h1>Liste Voitures</h1>

<table class="table table-hover table-light border border-secondary">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Marque</th>
            <th scope="col">Modele</th>
            <th scope="col">Année</th>
            <th scope="col">Immatriculation</th>
            <th scope="col" style="width:100px">Voir</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($voitures as $voiture)
            <tr>
                <th scope="row">{{$voiture->id}}</th>
                <td>{{$voiture->marque}}</td>
                <td>{{$voiture->modele}}</td>
                <td>{{$voiture->annee}}</td>
                <td>{{$voiture->immat}}</td>
                <td>
                    <a href="{{route('voitures.show', $voiture->id)}}" class="btn btn-primary">
                        <i class="fas fa-eye"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection
