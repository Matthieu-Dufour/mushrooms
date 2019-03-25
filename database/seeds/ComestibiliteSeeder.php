<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ComestibiliteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Comestibilité')->insert([
            'nom' => 'Comestible',
        ]);
        DB::table('Comestibilité')->insert([
            'nom' => 'Sans valeur',
        ]);
        DB::table('Comestibilité')->insert([
            'nom' => 'Comestible bien cuit',
        ]);
        DB::table('Comestibilité')->insert([
            'nom' => 'Mortel',
        ]);
        DB::table('Comestibilité')->insert([
            'nom' => 'Toxique/comestible avec recommandation',
        ]);
        DB::table('Comestibilité')->insert([
            'nom' => 'Suspect',
        ]);
        DB::table('Comestibilité')->insert([
            'nom' => 'Toxique',
        ]);
    }
}