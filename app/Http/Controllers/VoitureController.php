<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voiture;
use App\Mecanicien;

class VoitureController extends Controller
{
    public function index() {
        $voitures = Voiture::all();
        return view('voitures.index', compact('voitures'));
    }

    public function show($id) {
        $voiture = Voiture::find($id)->load('client','mecaniciens');
        $optionMecaniciens = Mecanicien::whereNotIn('id', $voiture->mecaniciens->pluck('id')->toArray())->get();
        return view('voitures.show', compact('voiture', 'optionMecaniciens'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'mecanicien_id' => 'required',
        ]);

        $voiture = Voiture::find($id);
        $voiture->mecaniciens()->attach($request->mecanicien_id);

        return redirect()->route('voitures.show', $id)->with('success', 'Le mécanicien a bien été lié.');
    }
}
