<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mecanicien;

class MecanicienController extends Controller
{
    public function index() {
        $mecaniciens = Mecanicien::all();
        return view('mecaniciens.index', compact('mecaniciens'));
    }

    public function show($id) {
        $mecanicien = Mecanicien::find($id);
        return view('mecaniciens.show', compact('mecanicien'));
    }

}
