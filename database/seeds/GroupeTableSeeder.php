<?php

use Illuminate\Database\Seeder;

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
            'nom' => 'Cantharellaceae',
        ]);
    
    }
}
