<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class InscriptionController extends Controller
{
    public function formulaire()
    {
        return view('inscription');
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
        ], [
            'password.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire :min caractères minimum.'
        ]);
    
        $user = User::create([
            'email' => request ('email'),
            'password' => bcrypt(request('password')),
            
        ]);
        $user->roles()->attach(Role::where('name', 'User')->first());
    
        return redirect('/connection');
    }
}
