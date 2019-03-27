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
            'name' => 'Amanite Phalloïde',
            'nameLatin' => 'Amanita Phalloides',
            'chapeau' => 'Vert jaunâtre à vert bronzé. Reste de voile général rare, vergeté radialement de grisâtre, hémisphérique à plan [5-10 (12) cm]',
            'lames' => 'Blanches, serrées et libres',
            'pied' => 'Blanc, chiné ou zébré de gros olivâtre, anneau blanc membraneux, volve blanche en sac blanc pur, cylindrique [5-10(15) x 1-2(3) cm]',
            'chair' => 'Blanche, sans odeur (ou odeur de rose en vieillisant), goût agréable',
            'surnom' => '',
            'odeur' => '93',
            'comestible' => '4',
            'ecologie' => '15',
            'groupe' => '',
            'image' => 'Amanita-phalloides-(YD)-6516.jpg'
        ]);
        DB::table('mushrooms')->insert([
            'name' => 'Trompette de la Mort',
            'nameLatin' => 'Craterellus Cornucopioide',
            'chapeau' => "Jeune, il s'apparente à un tube, puis il s'ouvre en formant un pavillon creusé jusqu'à la base du pied",
            'lames' => 'Hym. sublisse gris a noir (jaune pour la var. flavicans Sacc.).',
            'pied' => '',
            'chair' => 'légèrement pelucheuse, gris cendrée à gris bleuté, couverte de quelques rides plus ou moins saillantes',
            'surnom' => 'Chanterelle Noire',
            'odeur' => 50,
            'comestible' => 1,
            'ecologie' => 14,
            'groupe' => '1',
            'image' => '333_1_112527.jpg'
        ]);
    }
}
