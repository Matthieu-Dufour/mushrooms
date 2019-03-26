<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Odeur;
use App\Comestibilite;
use App\Ecologie;
use App\TypeTrophique;
use App\Groupe;

class MushroomAttributesController extends Controller
{
    public function showAllAttributes(){
        $odeurs = Odeur::all();
        $comestibilites = Comestibilite::all();
        $ecologies = Ecologie::all();
        $groupes = Groupe::all();
        $trophiques = TypeTrophique::all();

        return view('mushroomAdd', [
            'odeurs' => $odeurs,
            'comestibilites' => $comestibilites,
            'ecologie' => $ecologies,
            'trophiques' => $trophiques,
            'groupes' => $groupes,
        ]);
    }
}
