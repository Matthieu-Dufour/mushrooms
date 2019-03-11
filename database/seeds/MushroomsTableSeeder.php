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
        DB::table('mushrooms')->insert([
            'name' => 'Amanite phalloïde',
            'nameLatin' => 'Amanita phalloides',
            'sporee' => 'Blanche',
            'chapeau' => 'Vert jaunâtre à vert bronzé. Reste de voile général rare, vergeté radialement de grisâtre, hémisphérique à plan [5-10 (12) cm]',
            'lames' => 'Blanches, serrées et libres',
            'pied' => 'Blanc, chiné ou zébré de gros olivâtre, anneau blanc membraneux, volve blanche en sac blanc pur, cylindrique [5-10(15) x 1-2(3) cm]',
            'chair' => 'Blanche, sans odeur (ou odeur de rose en vieillisant), goût agréable',
            'ecologie' => 'Feuillus, parfois conifères, argilo-calcaire.',
            'cosmetible' => "Mortel",
            'odeur' => 'odeur1',
        ]);
        DB::table('mushrooms')->insert([
            'name' => 'Lactarius controversus',
            'odeur' => 'odeur1'
        ]);
        DB::table('mushrooms')->insert([
            'name' => 'bbbbbb',
            'odeur' => 'odeur1'
        ]);
        DB::table('mushrooms')->insert([
            'name' => 'ccccccaa',
            'odeur' => 'odeur2'
        ]);
    }
}
