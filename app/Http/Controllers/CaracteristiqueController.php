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

class CaracteristiqueController extends Controller
{
    public function addFormulaire()
    {
        return view('caracteristiqueAdd');  
    }

    public function addTraitement(Request $request)
    {
        if($request->caracteristique == 'Odeur'){           
            DB::table('Odeur')->insert([
                'nom' => request('nom'),
            ]);
        }
        if($request->caracteristique == 'Environnement'){           
            DB::table('Ecologie')->insert([
                'region' => request('nom'),
            ]);
        }
        if($request->caracteristique == 'Type Trophique'){           
            DB::table('Type_Trophique')->insert([
                'status' => request('nom'),
            ]);
        }
        if($request->caracteristique == 'Groupe'){           
            DB::table('Groupe')->insert([
                'nom' => request('nom'),
            ]);
        }
        if($request->caracteristique == 'Comestibilité'){           
            DB::table('Comestibilité')->insert([
                'nom' => request('nom'),
            ]);
        }
        flash('La caractéristique à été ajoutée.')->success();
        return redirect(route('GETmushrooms'));
    }
}