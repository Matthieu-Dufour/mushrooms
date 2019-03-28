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
            'type_trophique' => 1,
            'odeur' => 93,
            'comestible' => 5,
            'ecologie' => 16,
            'groupe' => 1,
            'image' => 'Amanita-phalloides-(YD)-6516.jpg'
        ]);
        DB::table('mushrooms')->insert([
            'name' => 'Trompette de la Mort',
            'nameLatin' => 'Craterellus Cornucopioide',
            'chapeau' => "carpophore creux de 2 à 7/8 cm, tubulaire puis évasé, en trompette; revêtement gris-brun à noir, parcouru de fibrilles foncées; marge enroulée assez régulière puis très vite ondulée, dentelée ou déchirée",
            'lames' => 'Hym. sublisse gris a noir (jaune pour la var. flavicans Sacc.).',
            'pied' => "noirâtre, de 4 à 6 cm pour 1,5 cm de diamètre environ, creux comme tout le champignon, sans marque nette avec l'hyménium",
            'chair' => 'légèrement pelucheuse, gris cendrée à gris bleuté, couverte de quelques rides plus ou moins saillantes',
            'surnom' => 'Chanterelle Noire',
            'type_trophique' => 1,
            'odeur' => 51,
            'comestible' => 2,
            'ecologie' => 15,
            'groupe' => 2,
            'image' => '333_1_112527.jpg'
        ]);
    }
}
