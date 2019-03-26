<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lexique;

class LexiqueController extends Controller
{
    public function showLexique(){
        $lexique = Lexique::all();

        return view('lexique', [
            'lexique' => $lexique,
        ]);
    }

    public function deleteLexique(){
        $id = request('id');

        $mot = Lexique::where('id', $id)->first();

        $mot->delete();

        flash('Mot supprimé')->warning();

        return redirect(route('GETlexique'));
    }

    public function addLexique(){
        return view('lexiqueAdd');
    }

    public function addLexiqueTraitement()
    {
        $lexique = Lexique::create([
            'mot' => request('mot'),
            'definition' => request('definition'),
        ]);
    
        flash('Le mot à été ajouté.')->success();

        return redirect('/lexique');
    }

    public function editLexique(){
        $id = request('id');

        $mot = Lexique::where('id', $id)->first();

        return view('lexiqueEdit', [
            'mot' => $mot,
        ] );
    }

    public function editLexiqueTraitement(){

        $id = request('id');

        $lexique = Lexique::where('id', $id)->first();

        $lexique->mot = request('mot');
        $lexique->definition = request('definition');

        $lexique->save();

        flash('Modifications terminées.')->success();

        return redirect('/lexique');

    }
}
