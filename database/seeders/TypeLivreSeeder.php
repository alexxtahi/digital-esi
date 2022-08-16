<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeLivreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertion des enregistrements par défaut
        DB::table('type_livres')->insert([
            [
                'lib_type_livre' => "Rapport de stage",
                'created_at' => now(),
            ],
            [
                'lib_type_livre' => "Mémoire",
                'created_at' => now(),
            ],
            [
                'lib_type_livre' => "Rapport de projet interne",
                'created_at' => now(),
            ],
            [
                'lib_type_livre' => "Support de cours",
                'created_at' => now(),
            ],
            [
                'lib_type_livre' => "Autre",
                'created_at' => now(),
            ],
        ]);
    }
}
