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

    public function showAllMushrooms()
    {
        $mushrooms = Mushroom::all();
        $odeurs = DB::table('Odeur')->get();
        $comestibilites = DB::table('Comestibilité')->get();
        $ecologies = DB::table('Ecologie')->get();
        $groupes = DB::table('Groupe')->get();
        $trophiques = DB::table('Type_Trophique')->get();


        return view('mushrooms', [
            'mushrooms' => $mushrooms,
            'odeurs' => $odeurs,
            'comestibilites' => $comestibilites,
            'ecologies' => $ecologies,
            'trophiques' => $trophiques,
            'groupes' => $groupes,
        ]);
    }

    public function showMushroom()
    {
        $id = request('id');
        $mushroom = Mushroom::where('id', $id)->first();
        $liste = DB::table('mushrooms')->get();
        $confusions = DB::table('confusions')->where('mushroom1_id', $id)->get();
        $odeurs = DB::table('Odeur')->get();
        $comestibilites = DB::table('Comestibilité')->get();
        $ecologies = DB::table('Ecologie')->get();
        $groupes = DB::table('Groupe')->get();
        $trophiques = DB::table('Type_Trophique')->get();

        return view('mushroom', [
            'mushroom' => $mushroom,
            'odeurs' => $odeurs,
            'comestibilites' => $comestibilites,
            'ecologies' => $ecologies,
            'trophiques' => $trophiques,
            'groupes' => $groupes, 
            'confusions' => $confusions,
            'liste' => $liste,
        ]);
    }

    public function editFormulaire()
    {
        $id = request('id');
        $liste = DB::table('mushrooms')->get();
        $mushroom = Mushroom::where('id', $id)->first();
        $odeurs = DB::table('Odeur')->get();
        $comestibilites = DB::table('Comestibilité')->get();
        $ecologies = DB::table('Ecologie')->get();
        $groupes = DB::table('Groupe')->get();
        $trophiques = DB::table('Type_Trophique')->get();
        $confusions = DB::table('confusions')->where('mushroom1_id', $id)->get();

        return view('editMushroom', [
            'mushroom' => $mushroom,
            'odeurs' => $odeurs,
            'comestibilites' => $comestibilites,
            'ecologies' => $ecologies,
            'trophiques' => $trophiques,
<<<<<<< HEAD
            'groupes' => $groupes, 
            'liste' => $liste,
            'confusions' =>$confusions,
=======
            'groupes' => $groupes,
>>>>>>> master
        ]);
    }

    public function editTraitement(Request $request)
    {

        $file = $request->file('image');
        $id = request('id');
        $mushroom = Mushroom::where('id', $id)->first();

        $mushroom->name = request('name');
        $mushroom->nameLatin = request('nameLatin');
        $mushroom->surnom = request('surnom');
        $mushroom->odeur = request('odeur');
        $mushroom->comestible = request('comestibilite');
        $mushroom->ecologie = request('ecologie');
        $mushroom->chapeau = request('chapeau');
        $mushroom->lames = request('lames');
        $mushroom->pied = request('pied');
        $mushroom->chair = request('chair');
        $mushroom->type_trophique = request('trophique');
        $mushroom->groupe = request('groupe');
        if ($file != null) {
            $mushroom->image = $file->getClientOriginalName();
            $file->move('./img', $file->getClientOriginalName());
        }
        $mushroom->save();

        DB::table('confusions')
            ->where('mushroom1_id', $id)
            ->update(['mushroom2_id' => request('confusion')]);

        flash('Modifications terminées.')->success();

        return redirect('mushroom/' . $mushroom->id);
    }

    public function addFormulaire()
    {
        $odeurs = DB::table('Odeur')->get();
        $comestibilites = DB::table('Comestibilité')->get();
        $ecologies = DB::table('Ecologie')->get();
        $groupes = DB::table('Groupe')->get();
        $trophiques = DB::table('Type_Trophique')->get();
        $liste = DB::table('mushrooms')->get();
        return view('mushroomAdd', [
            'odeurs' => $odeurs,
            'comestibilites' => $comestibilites,
            'ecologies' => $ecologies,
            'trophiques' => $trophiques,
<<<<<<< HEAD
            'groupes' => $groupes, 
            'liste' => $liste,
=======
            'groupes' => $groupes,
>>>>>>> master
        ]);
    }

    public function addTraitement(Request $request)
    {
        $file = $request->file('image');
        if ($file != null) {
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
                'image' => $file->getClientOriginalName(),
            ]);

            $file->move('./img', $file->getClientOriginalName());
        } else {
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
            ]);
        }
<<<<<<< HEAD
        $confusion = DB::table('confusions')->insert([
            'mushroom1_id' => $mushroom->id,
            'mushroom2_id' => request('confusion'),
        ]);
    
=======


>>>>>>> master
        flash('Le champignon à été ajouté.')->success();

        return redirect('/');
    }

    public function deleteMushroom()
    {
        $id = request('id');

        $mushroom = Mushroom::where('id', $id)->first();

        $mushroom->delete();

        flash('Champignon supprimé')->warning();

        return redirect(route('GETmushrooms'));
    }
}
