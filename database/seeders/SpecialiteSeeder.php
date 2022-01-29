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
                    'lib_spec' => "Informatique",
                    'description_spec' => "",
                    'id_filiere' => 1,
                ],
                [
                    'lib_spec' => "EIT",
                    'description_spec' => "",
                    'id_filiere' => 1,
                ],
                // Spécialités en STGI
                [
                    'lib_spec' => "PMSI",
                    'description_spec' => "",
                    'id_filiere' => 2,
                ],
                [
                    'lib_spec' => "MA",
                    'description_spec' => "",
                    'id_filiere' => 2,
                ],
                [
                    'lib_spec' => "Electo-tech",
                    'description_spec' => "",
                    'id_filiere' => 2,
                ],
                // Spécialités en STGP
                [
                    'lib_spec' => "STA",
                    'description_spec' => "",
                    'id_filiere' => 3,
                ],
            ]
        );
    }
}
