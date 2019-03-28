<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mushroom;
use App\User;
use ChristianKuri\LaravelFavorite\Traits\Favoriteability;
use Auth;

class FavoriteController extends Controller
{
    public function toggleFavorite(){
        $id = request('id');
        $mushroom = Mushroom::where('id', $id)->first();

        $user = Auth::user();

        if($mushroom->isFavorited()){
            flash('Retiré des favoris.')->error();
        } else {
            flash('Ajouté aux favoris.')->success();
        }

        $user->toggleFavorite($mushroom);

        $test = Auth::user()->favorite(Mushroom::class);

        return back(); 
    }

    public function showListFavorite() {
        $user = Auth::user();
        $mushrooms = $user->favorite(Mushroom::class);

        return view('listFavorite', [
            'mushrooms' => $mushrooms,
        ]); 
    }
}
