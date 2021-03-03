@extends('layout')

@section('title', 'Clients')

@section('content')


<div class="card text-white bg-secondary mb-3">
    <div class="card-header">
        <h4 class="card-title">{{$mecanicien->nom}} {{$mecanicien->prenom}}</h4>
    </div>
    <div class="card-body">
        <p class="mb-0">Mécanicien pour Grand Est Automobile</p>
    </div>
</div>

@if (count($mecanicien->voitures))
    <div class="card text-white bg-secondary mb-3">
        <div class="card-header">Liste voiture</div>
        <div class="card-body">
            <ul>
                @foreach ($mecanicien->voitures as $voiture)
                    <li>
                        <a href="{{route('voitures.show', $voiture->id)}}">
                            {{$voiture->marque}} {{$voiture->modele}} {{$voiture->annee}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@endsection
