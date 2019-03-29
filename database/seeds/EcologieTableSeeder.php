<?php

use Illuminate\Database\Seeder;

class EcologieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Ecologie')->insert([
            'region' => ''
        ]);
        DB::table('Ecologie')->insert([
            'region' => 'Sous châtaigniers'
        ]);
        DB::table('Ecologie')->insert([
            'region' => 'Milieux herbeux'
        ]);
        DB::table('Ecologie')->insert([
            'region' => 'Sous mélèzes'
        ]);
        DB::table('Ecologie')->insert([
            'region' => 'Sous frênes'
        ]);
        DB::table('Ecologie')->insert([
            'region' => 'Sous épicéas'
        ]);
        DB::table('Ecologie')->insert([
             'region' => 'En sphaigne'
        ]);
        DB::table('Ecologie')->insert([
              'region' => 'Sous peupliers tremble'
        ]);
        DB::table('Ecologie')->insert([
            'region' => 'Autre'
        ]);
        DB::table('Ecologie')->insert([
            'region' => 'Sous chênes'
        ]);
        DB::table('Ecologie')->insert([
            'region' => 'Sous érables'
        ]);
        DB::table('Ecologie')->insert([
            'region' => 'Sous hêtres'
        ]);
        DB::table('Ecologie')->insert([
            'region' => 'Dans les prés'
        ]);
        DB::table('Ecologie')->insert([
            'region' => 'Sous pins'
        ]);
        DB::table('Ecologie')->insert([
            'region' => 'Forêts'
        ]);
        DB::table('Ecologie')->insert([
            'region' => 'Sous feuillus'
        ]);
        DB::table('Ecologie')->insert([
            'region' => 'Sous conifère'
        ]);
        DB::table('Ecologie')->insert([
            'region' => 'Sous bouleaux'
        ]);
    }
}