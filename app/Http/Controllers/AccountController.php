<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function home()
    {
        
        return view('my-account');
    }

    public function disconnection()
    {
        auth()->logout();

        flash('Vous êtes maintenant déconnecté.')->success();

        return redirect('/');
    }

    public function passwordChange()
    {

        request()->validate([
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
        ]);

        // dump(auth()->user());

        //$user = auth()->user();
        //$user->password = bcrypt(request('password'));
        //$user->save();

        auth()->user()->update([
            'password' => bcrypt(request('password')),
        ]);

        flash('Votre mot de passe a bien été mis à jour.')->success();

        return redirect('/my-account');
    }
}
