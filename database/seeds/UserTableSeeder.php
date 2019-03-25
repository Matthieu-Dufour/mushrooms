<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $role_mycologue = Role::where('name', 'mycologist')->first();

        $user = new User();
        $user->email = "user@user.fr";
        $user->password = bcrypt("azertyuiop");
        $user->save();
        $user->roles()->attach($role_user);

        $admin = new User();
        $admin->email = "admin@admin.fr";
        $admin->password = bcrypt("azertyuiop");
        $admin->save();
        $admin->roles()->attach($role_admin);
        $admin->roles()->attach($role_mycologue);
        $admin->roles()->attach($role_user);

        $mycologue = new User();
        $mycologue->email = "mycologue@mycologue.fr";
        $mycologue->password = bcrypt("azertyuiop");
        $mycologue->save();
        $mycologue->roles()->attach($role_mycologue);
        $mycologue->roles()->attach($role_user);
    }
}
