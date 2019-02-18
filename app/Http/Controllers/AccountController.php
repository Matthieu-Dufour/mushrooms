<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function home()
    {
        if( auth()->guest() ){
            return redirect('/connection')->withErrors([
                'email' => 'Vous devez être connecté pour voir cette page.'
            ]);
        }

        return view('my-account');
    }

    public function disconnection()
    {
        auth()->logout();

        return redirect('/');
    }
}
