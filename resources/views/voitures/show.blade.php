@extends('layout')

@section('title', 'Clients')

@section('content')


<div class="card text-white bg-secondary mb-3">
    <div class="card-header">
        <h4 class="card-title mb-0">{{$voiture->marque}} {{$voiture->modele}}</h4>
    </div>
    <div class="card-body">
        <p class="mb-0">{{$voiture->annee}}</p>
        <p>{{$voiture->immat}}</p>

    </div>
</div>


<div class="card text-white bg-secondary mb-3">
    <div class="card-header">
        <h4 class="card-title mb-0">
            Client : {{$voiture->client->nom}} {{$voiture->client->prenom}}
        </h4>
    </div>
    <div class="card-body">
        <p class="mb-0">Adresse : {{$voiture->client->adresse}}</p>
        <p class="mb-0">{{$voiture->client->ville}}</p>
        <p class="mb-0">Téléphone : {{$voiture->client->telephone}}</p>
        <p>Mail : {{$voiture->client->email}}</p>
    </div>
</div>

@if (count($voiture->mecaniciens))
    <div class="card text-white bg-secondary mb-3">
        <div class="card-header">liste mécaniciens</div>
        <div class="card-body">
            <ul>
                @foreach ($voiture->mecaniciens as $mecanicien)
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


<div class="card text-white bg-secondary mb-3">
    <div class="card-header">Associer mécaniciens</div>
    <div class="card-body">
        <form action="{{route('voitures.update', $voiture->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="mecanicien">Mecanicien</label>
                <select class="form-control" id="mecanicien" name="mecanicien_id">
                    @foreach ($optionMecaniciens as $mecanicien)
                        <option value="{{$mecanicien->id}}">
                            {{$mecanicien->nom}} {{$mecanicien->prenom}}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</div>





@endsection
