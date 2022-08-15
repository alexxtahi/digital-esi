<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_etudiants = User::where('role_user', 'Etudiant')->get();
        $filieres = ['ING EIT', 'ING INFO', 'ING HEA', 'ING ILT', 'ING TLR'];
        $trualse = [true, false];
        foreach ($users_etudiants as $etudiant) {
            $est_diplome = array_rand($trualse);
            Etudiant::create([
                'matri_etud' => date('y') . 'INP' . $etudiant->id,
                'date_naiss_etud' => now(),
                'bio' => "Ceci est la biographie d'un étudiant venu tester le système CFIT3",
                'id_user' => $etudiant->id,
                'id_classe' => 1,
                'est_diplome' => $trualse[$est_diplome],
                'filiere_diplome' => $est_diplome ? $filieres[array_rand($filieres)] : NULL,
                'created_at' => now(),
            ]);
        }
    }
}
