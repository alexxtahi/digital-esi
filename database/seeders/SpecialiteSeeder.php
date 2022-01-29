<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertion des spécialités par défaut
        DB::table('specialites')->insert(
            [
                // Spécialités en STIC
                [
                    'lib_spec' => "INFO",
                    'description_spec' => "Le parcours des passionnés des technologies du digital: Développement, Sécurité informatique, Conception de SI, Bases de données, Intelligence artificielle, etc.",
                    'id_filiere' => 1,
                ],
                [
                    'lib_spec' => "EIT",
                    'description_spec' => "Formation sur les technologies embarquées, les systèmes électroniques et informatiques, les réseaux et la télécommunication.",
                    'id_filiere' => 1,
                ],
                // Spécialités en STGI
                [
                    'lib_spec' => "PMSI",
                    'description_spec' => "Formation sur les sytèmes et outils de production de masse dans l'industrie, les chaines de production et bien d'autres.",
                    'id_filiere' => 2,
                ],
                [
                    'lib_spec' => "MA",
                    'description_spec' => "Cette spécialité a pour but de former des mecaniciens capables d'intervenir sur des véhicules intelligents dotés de calculateurs électroniques et de systèmes informatisés.",
                    'id_filiere' => 2,
                ],
                [
                    'lib_spec' => "EAI",
                    'description_spec' => "Formation pour les intéressés des circuits éléectriques, du courant et de ses applications dans nos équipements.",
                    'id_filiere' => 2,
                ],
                // Spécialités en STGP
                [
                    'lib_spec' => "CI",
                    'description_spec' => "zazazazazazzzz",
                    'id_filiere' => 3,
                ],
                [
                    'lib_spec' => "STA",
                    'description_spec' => "Formation aux métiers de l'alimentation, de la nutrition et des sciences de production.",
                    'id_filiere' => 3,
                ],
            ]
        );
    }
}
