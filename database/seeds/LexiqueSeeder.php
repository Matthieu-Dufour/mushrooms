<?php

use Illuminate\Database\Seeder;

class LexiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lexiques')->insert([
            'mot' => "Face",
            'definition' => "
            Utilisé surtout en mycologie pour désigner le flanc des lames. Peut se dire aussi en microscopie pour une spore vue de côté mais dans le sens opposé à l'apicule. Dans ce cas, elle est perpendiculaire au profil de la spore. Pour une spore vue par son extrémité on parlera de vue du bout.",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Facial",
            'definition' => "
            Qui appartient à la face. S'emploie surtout pour désigner les cystides de la face des lames mais il vaut mieux, dans ce cas, employer le terme de pleurocystide.",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Faciès",
            'definition' => "
            (= Habitus) Apparence générale",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Fagicole",
            'definition' => "
            Qui croît sur ou avec les hêtres (Fagus)",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Falciforme",
            'definition' => "
            En forme de faux, s'emploie surtout pour désigner des lames de champignon. Elle sont arquées, atténuées à l'insertion est assez collées au pied.",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Famille",
            'definition' => "
            Rang hiérarchique du règne fongique. Se termine en 'aceae' (ex: pezizaceae, boletaceae.)",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Farci",
            'definition' => "
            (Stipe) Se dit d'un stipe contenant un tissu léger, mou, et qui aura tendance à se creuser, la partie extérieure restant dure (genre Russula).",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Farineux",
            'definition' => "
            (Odeur et saveur) qui rappelle la farine. (Aspect) qui est recouvert d'un très fin poudroiement à peine visible à la loupe. Par extension, ce terme est parfois employé dans le sens de pruineux voire poudré.",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Farinolent",
            'definition' => "
            Dont l'odeur rappelle la farine. Ce néologisme devrait être abandonné au profit de farineux.",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Fasciculé",
            'definition' => "
            Se dit de champignons qui poussent en touffes souvent denses, soudés par le pied, au moins à la base et comme réunis en faisceaux. Plus ou moins synonyme de cespiteux (touffe plus lâche, plus aérée).",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Fauve",
            'definition' => "
            Ce terme paraît évident mais il est en fait, très ambigu. Dans la littérature, il fut employé pour des teintes allant du jaune doré au brun roux (sic). Il convient de ne l'utiliser que pour une teinte d'un roux chaud.",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Favéolé",
            'definition' => "
            Vient du 'mot miel (favus). Il est utilisé surtout pour l'hymenium de certains polypores creusés d'alvéoles contigus et réguliers.",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Fendillé",
            'definition' => "
            (= Craquelé, crevassé, Gercé) A surface finement fendue",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Ferme",
            'definition' => "
            Solide, stable, fixe, compact, résistant (différent de mou)",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Ferrugineux",
            'definition' => "
            Couleur de rouille",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Fertile",
            'definition' => "
            Se dit d'un champignon mûr, d'une portion ou d'un élément formant des spores",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Festonné",
            'definition' => "
            (Marge, chapeau) Bordé de festons, c'est à dire d'ondulations, de crénelures aux contours très arrondis",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Feuillet",
            'definition' => "
            Synonyme de lame ou lamelle",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Feutré",
            'definition' => "
            Dont l'aspect rappelle celui du feutre, c'est à dire dont la surface est essentiellement mate du fait de poils plutôt courts, mous, nullement isolés ou dressés, mais au contraire aplatis les uns sur les autres en tous sens, de façon à former un revêtement enchevêtré et apprimé, sans éléments bien individualisables",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Fibres",
            'definition' => "
            Eléments ou association d'éléments filamenteux",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Fibreux",
            'definition' => "
            Qui est formé de fibres assemblées longitudinalement et formant un ensemble résistant, voire coriace, nullement fragile. A distinguer de fibrilleux, qui désigne un type de revêtement externe.",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Fibrille",
            'definition' => "
            Petite fibre, ou filament extrêmement fin revêtant certains tissus",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Fibrilleux",
            'definition' => "Dont la surface est ornée de fibrilles, de fins filaments. A ne pas confondre avec fibreux qui s'applique à la texture même de la chair dans sa masse ; tandis que fibrilleux s'emploie pour définir un caractère de la surface.",
        ]);

        DB::table('lexiques')->insert([
            'mot' => "Filamenteux",
            'definition' => "
            Formé de filaments",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Filiforme",
            'definition' => "
            (Stipe) En forme de fil, aussi grêle qu'un fil",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Fimbrié",
            'definition' => "
            A bord finement déchiqueté, frangé",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Fimicole",
            'definition' => "
            (= Coprophile) Se dit d'une espèce poussant sur du fumier, sur excréments",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Fissile",
            'definition' => "
            Qui se fend facilement. Se dit du pied quand il peut se découper longitudinalement et des lames quand elles se clivent parallèlement à leur plan de symétrie (=scissiles).",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Fistuleux",
            'definition' => "
            Qui est creusé d'un petit canal",
        ]);

        DB::table('lexiques')->insert([
            'mot' => "Flagelle",
            'definition' => "Appendice en forme de fouet",
        ]);

        DB::table('lexiques')->insert([
            'mot' => "Flasque",
            'definition' => "
            Mou, dépourvu de fermeté, d'élasticité",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Flexueux",
            'definition' => "
            Qui est infléchi ou courbé irrégulièrement (marge piléique, poils, hyphes, cystides, stipe)",
        ]);


        DB::table('lexiques')->insert([
            'mot' => "Floriforme",
            'definition' => "
            En forme de fleur",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Flouve",
            'definition' => "
            La flouve (Anthoxanthum odoratum) est une graminée (poacée) vivace utilisée comme fourrage et qui donne au foin son odeur remarquable lorsqu'il est coupé, odeur très semblable à l'odeur de coumarine.",
        ]);


        DB::table('lexiques')->insert([
            'mot' => "Fondamental",
            'definition' => "
            On l'emploie en microscopie pour désigner les tissus principaux du champignons (exemple Hyphes fondamentales)",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Fongique",
            'definition' => "
            Qui se rapporte aux champignons",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Formol",
            'definition' => "
            Réactif. Utiliser du formol commercial sans addition d'eau. Donne des indications de premier ordre avec certaines espèces. Réactions souvent très tardives (plusieurs heures).",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Fossette",
            'definition' => "
            Petite dépression à contour plus ou moins arrondi qu'on peut trouver sur le chapeau et surtout sur le pied (différent de alvéolé, qui est plus profondément creusé)",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Fourchu",
            'definition' => "
            Divisé à l'extrémité en deux branches. En cas de divisions multiples, on dit plutôt ramifié.",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Fragile",
            'definition' => "
            Aisé à rompre, sujet à se casser, à se détériorer",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Frangé",
            'definition' => "
            Dont les bords sont dilacérés ou abondamment appendiculés et, de ce fait, semblent ornés d'une frange irrégulière",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Friable",
            'definition' => "
            Qui se brise ou s'écrase aisément en se réduisant en menus fragments",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Froncé",
            'definition' => "
            Orné de rides, de plis très accusés",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Fugace",
            'definition' => "
            Structure qui disparaît rapidement sur un organe (ex. voile ou anneau chez certains champignons)",
        ]);
        DB::table('lexiques')->insert([
            'mot' => "Fuligineux",
            'definition' => "
            Couleur de suie. En mycologie d'un gris sombre, gris bistré.",
        ]);

        DB::table('lexiques')->insert([
            'mot' => "Funicule",
            'definition' => "Faisceau filamenteux d’hyphes fixant les péridioles à la couche interne de la fructification",
        ]);
    }
}
