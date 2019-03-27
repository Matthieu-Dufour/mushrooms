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

        $odeurs = DB::table('Odeur')->get();
        $comestibilites = DB::table('Comestibilité')->get();
        $ecologies = DB::table('Ecologie')->get();
        $groupes = DB::table('Groupe')->get();
        $trophiques = DB::table('Type_Trophique')->get();

        return view('mushroom',[
            'mushroom' => $mushroom,
            'odeurs' => $odeurs,
            'comestibilites' => $comestibilites,
            'ecologies' => $ecologies,
            'trophiques' => $trophiques,
            'groupes' => $groupes, 
        ]);
    }

    public function editFormulaire(){
        $id = request('id');

        $mushroom = Mushroom::where('id', $id)->first();
        $odeurs = DB::table('Odeur')->get();
        $comestibilites = DB::table('Comestibilité')->get();
        $ecologies = DB::table('Ecologie')->get();
        $groupes = DB::table('Groupe')->get();
        $trophiques = DB::table('Type_Trophique')->get();

        return view('editMushroom',[
            'mushroom' => $mushroom,
            'odeurs' => $odeurs,
            'comestibilites' => $comestibilites,
            'ecologies' => $ecologies,
            'trophiques' => $trophiques,
            'groupes' => $groupes, 
        ]);
    }

    public function editTraitement(Request $request){

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
        if($file != null){
            $mushroom->image = $file->getClientOriginalName();
            $file->move('./img',$file->getClientOriginalName());
        }
        $mushroom->save();
        //dd($mushroom->image);
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

    public function addTraitement(Request $request)
    {
        $file = $request->file('image');
        if($file != null){
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
    
            $file->move('./img',$file->getClientOriginalName());
        }
        else{
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

    
        flash('Le champignon à été ajouté.')->success();

        return redirect('/');
    }

    public function deleteMushroom(){
        $id = request('id');

        $mushroom = Mushroom::where('id', $id)->first();

        $mushroom->delete();

        return redirect(route('GETmushrooms'));
    }
}
