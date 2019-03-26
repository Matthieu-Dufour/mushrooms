<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mushroom;
use App\Odeur;
use App\Comestibilite;
use App\Ecologie;
use App\TypeTrophique;
use App\Groupe;

class MushroomController extends Controller
{
    public function showAllMushrooms(){
        $mushrooms = Mushroom::all();

        return view('mushrooms', [
            'mushrooms' => $mushrooms,
        ]);
    }

    public function showMushroom(){
        $id = request('id');

        $mushroom = Mushroom::where('id', $id)->first();

        return view('mushroom',[
            'mushroom' => $mushroom,
        ]);
    }

    public function editFormulaire(){
        $id = request('id');

        $mushroom = Mushroom::where('id', $id)->first();

        return view('editMushroom',[
            'mushroom' => $mushroom,
        ]);
    }

    public function editTraitement(){

        $id = request('id');

        $mushroom = Mushroom::where('id', $id)->first();

        $mushroom->name = request('name');

        $mushroom->save();

        return redirect('mushroom/'.$mushroom->id);
    }

    public function addFormulaire()
    {
        $odeurs = DB::table('Odeur')->get();
        $comestibilites = DB::table('Comestibilité')->get();
        $ecologies = DB::table('Ecologie')->get();
        $groupes = DB::table('Groupe')->get();
        $trophiques = DB::table('Type_Trophique')->get();

        return view('mushroomAdd', [
            'odeurs' => $odeurs,
            'comestibilites' => $comestibilites,
            'ecologies' => $ecologies,
            'trophiques' => $trophiques,
            'groupes' => $groupes, 
        ]);
    }

    public function addTraitement()
    {
        $mushroom = Mushroom::create([
            'name' => request('name'),
            'nameLatin' => request('nameLatin'),
            'surnom' => request('surnom'),
            'odeur' => request('odeur'),
            'comestible' => request('comestibilite'),
            'ecologie' => request('ecologie'),
            'chapeau' => request('chapeau'),
            'lames' => request('lames'),
            'pied' => request('pied'),
            'chair' => request('chair'),
            'type_trophique' => request('trophique'),
            'groupe' => request('groupe'),
            'image' => request('image'),
        ]);
    
        flash('Le champignon à été ajouté.')->success();

        return redirect('/');
    }
}
