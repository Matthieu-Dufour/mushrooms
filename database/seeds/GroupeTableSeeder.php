<?php

use Illuminate\Database\Seeder;

class MushroomsTableSeeder extends Seeder
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
