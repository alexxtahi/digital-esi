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
                    'abrev_spec' => "INFO",
                    'lib_spec' => "Informatique",
                    'description_spec' => "Le parcours des passionnés des technologies du digital: Développement, Sécurité informatique, Conception de SI, Bases de données, Intelligence artificielle, etc.",
                    'id_filiere' => 1,
                ],
                [
                    'abrev_spec' => "EIT",
                    'lib_spec' => "Electronique et Informatique Industrielle",
                    'description_spec' => "Formation sur les technologies embarquées, les systèmes électroniques et informatiques, les réseaux et la télécommunication.",
                    'id_filiere' => 1,
                ],
                // Spécialités en STGI
                [
                    'abrev_spec' => "PMSI",
                    'lib_spec' => "Production et Maintenance des Systèmes Industriels",
                    'description_spec' => "Formation sur les sytèmes et outils de production de masse dans l'industrie, les chaines de production et bien d'autres.",
                    'id_filiere' => 2,
                ],
                [
                    'abrev_spec' => "MA",
                    'lib_spec' => "Mécatronique et Automobile",
                    'description_spec' => "Cette spécialité a pour but de former des mecaniciens capables d'intervenir sur des véhicules intelligents dotés de calculateurs électroniques et de systèmes informatisés.",
                    'id_filiere' => 2,
                ],
                [
                    'abrev_spec' => "EAI",
                    'lib_spec' => "Electrotechnique et Automatisme Industriel",
                    'description_spec' => "Formation pour les intéressés des circuits éléectriques, du courant et de ses applications dans nos équipements.",
                    'id_filiere' => 2,
                ],
                // Spécialités en STGP
                [
                    'abrev_spec' => "CI",
                    'lib_spec' => "Chimie Industrielle",
                    'description_spec' => "zazazazazazzzz",
                    'id_filiere' => 3,
                ],
                [
                    'abrev_spec' => "STA",
                    'lib_spec' => "Sciences et Technologies des Aliments",
                    'description_spec' => "Formation aux métiers de l'alimentation, de la nutrition et des sciences de production.",
                    'id_filiere' => 3,
                ],
            ]
        );
    }
}
