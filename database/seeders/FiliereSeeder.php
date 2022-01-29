<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertion des filères par défaut
        DB::table('filieres')->insert(
            [
                [ // Filière STIC
                    'lib_filiere' => "STIC",
                    'description_filiere' => "Sciences et Technologie de l'Information et de la Communication",
                ],
                [ // Filière STGI
                    'lib_filiere' => "STGI",
                    'description_filiere' => "Sciences et Technologie de du Génie Industriel",
                ],
                [ // Filière STGP
                    'lib_filiere' => "STGP",
                    'description_filiere' => "Sciences et Technologie du Génie des Procédés",
                ],
            ]
        );
    }
}
