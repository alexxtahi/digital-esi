<?php

namespace Database\Seeders;

use App\Models\Classe;
use App\Models\Filiere;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filieres = Filiere::where('deleted_at', null)->get();
        foreach ($filieres as $filiere) {
            Classe::create([
                'lib_classe' => $filiere->lib_filiere,
                'id_filiere' => $filiere->id,
            ]);
        }
    }
}
