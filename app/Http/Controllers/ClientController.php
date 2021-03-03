<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function index(Request $request) {
        $clients = Client::all();
        $villes = $clients->pluck('ville');
        $clients = $clients->when(!empty($request->ville), function($collection) use($request){
            return $collection->where('ville', $request->ville);
        });

        return view('clients.index', compact('clients','villes'));
    }

    public function show($id) {
        $client = Client::find($id);

        $mecaniciens = $client->voitures->flatMap(function($voiture) {
            return $voiture->mecaniciens;
        })->unique('id');

        return view('clients.show', compact('client', 'mecaniciens'));
    }

}
