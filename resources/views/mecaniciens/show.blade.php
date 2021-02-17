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

@endsection
