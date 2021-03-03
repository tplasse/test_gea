@extends('layout')

@section('title', 'Clients')

@section('content')

<h1>Liste Clients</h1>

<div class="mb-5 p-2 border">
    <form action="" method="get">
        <div class="form-group">
            <label for="villes">Filtrer par ville</label>
            <select class="form-control" id="villes" name="ville">
                <option value="0">
                    Toutes
                </option>
                @foreach ($villes as $ville)
                    <option value="{{$ville}}" {{request('ville') == $ville ? 'selected' : ''}}>
                        {{$ville}}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">
            Appliquer
        </button>
    </form>
</div>

<table class="table table-hover table-light border border-secondary">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col" style="width:100px">Voir</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
            <tr>
                <th scope="row">{{$client->id}}</th>
                <td>{{$client->nom}}</td>
                <td>{{$client->prenom}}</td>
                <td>
                    <a href="{{route('clients.show', $client->id)}}" class="btn btn-primary">
                        <i class="fas fa-eye"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection
