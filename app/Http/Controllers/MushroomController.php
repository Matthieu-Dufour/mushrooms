<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mushroom;

class MushroomController extends Controller
{
    public function showAllMushrooms(){
        $mushrooms = Mushroom::all();

        //dump($mushrooms);

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
        return view('mushroomAdd');
    }

    public function addTraitement()
    {
        $mushroom = Mushroom::create([
            'name' => request('name'),
        ]);
    
        flash('Le champignon à été ajouté.')->success();

        return redirect('/');
    }
}
