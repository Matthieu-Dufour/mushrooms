<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Groupe')->insert([
            'nom' => '',
        ]);
        DB::table('Groupe')->insert([
            'nom' => 'Cantharellaceae',
        ]);
    }
}
