<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mushroom;

class CardController extends Controller
{
    public function showAll(){
        $mushrooms = Mushroom::all();

        return view('cards', [
            'mushrooms' => $mushrooms,
        ]);
    }
}
