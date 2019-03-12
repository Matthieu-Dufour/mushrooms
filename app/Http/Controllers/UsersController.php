<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users', [
            'users' => $users,
        ]);
    }

    public function assignRoles(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        if ($request['role_user']) {
            $user->roles()->attach(Role::where('name', 'user')->first());
        }
        if ($request['role_mycologist']) {
            $user->roles()->attach(Role::where('name', 'mycologist')->first());
        }
        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'admin')->first());
        }
        return redirect()->back();
    }
}
