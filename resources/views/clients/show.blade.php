@extends('layout')

@section('title', 'Clients')

@section('content')


<div class="card text-white bg-secondary mb-3">
    <div class="card-header">
        <h4 class="card-title">{{$client->nom}} {{$client->prenom}}</h4>
    </div>
    <div class="card-body">
        <p class="mb-0">Adresse : {{$client->adresse}}</p>
        <p>{{$client->ville}}</p>
        <p>Téléphone : {{$client->telephone}}</p>
        <p>Mail : {{$client->email}}</p>
    </div>
</div>

@if (count($client->voitures))
    <div class="card text-white bg-secondary mb-3">
        <div class="card-header">Véhicules Clients</div>
        <div class="card-body">
            <ul>
                @foreach ($client->voitures as $voiture)
                    <li>
                        <a href="{{route('voitures.show', $voiture->id)}}">
                            {{$voiture->marque}} {{$voiture->modele}} {{$voiture->annee}} - {{$voiture->immat}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@if (count($mecaniciens))
    <div class="card text-white bg-secondary mb-3">
        <div class="card-header">Mecaniciens en contact</div>
        <div class="card-body">
            <ul>
                @foreach ($mecaniciens as $mecanicien)
                    <li>
                        <a href="{{route('mecaniciens.show', $mecanicien->id)}}">
                            {{$mecanicien->nom}} {{$mecanicien->prenom}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif





@endsection
