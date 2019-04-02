<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MushroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*CONFUSION : Russule verdoyante */
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

        /*CONFUSION : AMANITE PHALLOIDE */
        DB::table('mushrooms')->insert([
            'name' => 'Russule verdoyante',
            'nameLatin' => 'Russula virescens',
            'chapeau' => 'Cuticule veloutée et craquelée, vert bleuté ou vert de gris (vert moisissure) sur fond blanchâtre [5-10 (15) cm]',
            'lames' => 'Blanches non décurrentes, peu serrées, flexibles, lardacées.',
            'pied' => 'Blanc, cyindrique, taché de roulle à la base, cassant comme un bâton de craie (5-10 x 1-2 cm)',
            'chair' => 'Sans odeur particulière, à goût de noisette',
            'surnom' => '',
            'type_trophique' => 1,
            'odeur' => 49,
            'comestible' => 2,
            'ecologie' => 15,
            'groupe' => '',
            'image' => ''
        ]);

        /*CONFUSION : AMANITE PHALLOIDE
                      Amanite citrine */
        DB::table('mushrooms')->insert([
            'name' => 'Amanite jonquille',
            'nameLatin' => 'Amanite junquillea',
            'chapeau' => 'Jaune paille à crème, parfois lambeaux blancs de voile général, marge striée. Convexe à plan (5-10 cm)',
            'lames' => 'Blanches, libres, serrées',
            'pied' => 'Blanc, anneau blanc très fragile, volve blanche en débris formant des bourrelets, cylindrique légèrement en massue (5-10 x 1-2 cm)',
            'chair' => 'Blanche, saveur agréable.',
            'surnom' => '',
            'odeur' => 87,
            'type_trophique' => 1,
            'comestible' => 5,
            'ecologie' => 16,
            'groupe' => '',
            'image' => ''
        ]);

        /*CONFUSION : AMANITE PHALLOIDE 
                      AMANITE JONQUILLE*/
        DB::table('mushrooms')->insert([
            'name' => 'Amanite citrine',
            'nameLatin' => 'Amanita citrina',
            'chapeau' => 'Jaune citrin, reste de voile général formant des plaques ou des flocons plus ou moins réguliers, blanchâtres ocracés, convexe ou étalé, marge lisse (6-10 cm)',
            'lames' => 'Serrées, blanchâtres à jaunâtres, libres.',
            'pied' => 'Blanchâtre à jaunâtre, anneau concolore et volve en bulbe marginée, cylindrique (6-10 x 1-2 cm)',
            'chair' => 'Blanchâtre, jaunâtre à odeur de pomme de terre ou de rave et saveur désagréable.',
            'surnom' => '',
            'odeur' => 87,
            'type_trophique' => 1,
            'comestible' => 6,
            'ecologie' => 16,
            'groupe' => '',
            'image' => ''
        ]);

        /*CONFUSION : AMANITE PHALLOIDE 
                      Agaric jaunissant*/
        DB::table('mushrooms')->insert([
            'name' => 'Agaric des bois',
            'nameLatin' => 'Agaricus silvicole',
            'chapeau' => 'Blanchâtre à jaune orangé intense chez spécimens âgés. Glabre, lisse. Convexe puis étalé à plat (5-10 cm)',
            'lames' => 'Libres, rose pâle à gris brun',
            'pied' => 'Blanc soyeux, jaunissant, anneau fragile, souvent en lambeaux. (5-10 x 1-2 cm), élargi vers la base',
            'chair' => 'Blanche, puis jaunissante à odeur anisée.',
            'surnom' => '',
            'odeur' => 5,
            'type_trophique' => 1,
            'comestible' => 2,
            'ecologie' => 15,
            'groupe' => '',
            'image' => ''
        ]);

        /*CONFUSION : Agaric des prés  */
        DB::table('mushrooms')->insert([
            'name' => 'Agaric jaunissant',
            'nameLatin' => 'Agaricus xanthoderma',
            'chapeau' => 'Blanc, jaunissement vif et rapide au froissement de la marge en particulier. Lisse ou rayé de grisâtre dans certaines variétés, typiquement tronconique, parfois craquelé (5-10 cm)',
            'lames' => 'Rose vif, puis brun chocolat, libres.',
            'pied' => 'Blanc, jaunissant. Anneau ample à roue dentée en dessous, bulbeux [8-10 x 1,5 (2) cm]',
            'chair' => 'Blanche, jaunissant fortement vers la base, odeur iodée en d\'encre (surtout à la chaleur).',
            'surnom' => '',
            'odeur' => 38,
            'type_trophique' => 1,
            'comestible' => 7,
            'ecologie' => 12,
            'groupe' => '',
            'image' => ''
        ]);

        /*CONFUSION : agaric jaunissant */
        DB::table('mushrooms')->insert([
            'name' => 'Agaric des prés',
            'nameLatin' => 'Agaricus campestris',
            'chapeau' => 'Blanc à blanchâtre, légèrement ocracé avec l\'âge, lisse à fibreux, soyeux parfois avec petits squames. Convexe à marge enroulées (5-10 cm).',
            'lames' => 'Libres, serrées, rosée vif, puis bistres.',
            'pied' => 'Blanc, anneau cotonneux, fragile, fusiforme atténué vers la base.',
            'chair' => 'Blanchâtre un peu rosissante, odeur et saveur agréables.',
            'surnom' => '',
            'odeur' => 38,
            'type_trophique' => 1,
            'comestible' => 2,
            'ecologie' => 12,
            'groupe' => '',
            'image' => ''
        ]);


        DB::table('mushrooms')->insert([
            'name' => 'Amanite printanière',
            'nameLatin' => 'Amanita verna',
            'chapeau' => 'Blanc, lisse',
            'lames' => 'Blanches, serrées, libres.',
            'pied' => 'Blanc, lissa à soyeux. Anneau membraneux blanc et volve blanche, légèrement évasé vers la base.',
            'chair' => 'Blanche',
            'surnom' => '',
            'odeur' => 38,
            'type_trophique' => 1,
            'comestible' => 4,
            'ecologie' => 14,
            'groupe' => '',
            'image' => ''
        ]);
    }
}
