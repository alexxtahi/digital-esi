<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertion des enregistrements par défaut
        DB::table('users')->insert([
            [
                'nom_user' => "TAHI",
                'prenom_user' => "Alexandre",
                'tel_user' => '0584649825',
                'role_user' => 'Admin',
                'email' => 'alexandretahi7@gmail.com',
                'password' => bcrypt('P@ssword@123456'),
                'created_at' => now(),
            ],
            [
                'nom_user' => "TANOH",
                'prenom_user' => "Aka",
                'tel_user' => null,
                'role_user' => 'Directeur',
                'email' => 'tanohaka@esi.com',
                'password' => bcrypt('ESI@2022@'),
                'created_at' => now(),
            ],
            [
                'nom_user' => "KONE",
                'prenom_user' => "Siriky",
                'tel_user' => ' 0747260505',
                'role_user' => 'Directeur des études',
                'email' => 'siriky.kone@inphb.ci',
                'password' => bcrypt('ESI@2022@'),
                'created_at' => now(),
            ],
            // Etudiants
            [
                'nom_user' => "Zoza",
                'prenom_user' => "Carra",
                'tel_user' => null,
                'role_user' => 'Etudiant',
                'email' => 'zozacarra@esi.com',
                'password' => bcrypt('ESI@2022@'),
                'created_at' => now(),
            ],
            [
                'nom_user' => "Titi",
                'prenom_user' => "Lago",
                'tel_user' => null,
                'role_user' => 'Etudiant',
                'email' => 'titilago@esi.ci',
                'password' => bcrypt('ESI@2022@'),
                'created_at' => now(),
            ],
            [
                'nom_user' => "oijoij",
                'prenom_user' => "pokpok",
                'tel_user' => null,
                'role_user' => 'Etudiant',
                'email' => 'iuh@esi.com',
                'password' => bcrypt('ESI@2022@'),
                'created_at' => now(),
            ],
            [
                'nom_user' => "66sef",
                'prenom_user' => "s5df7sd",
                'tel_user' => null,
                'role_user' => 'Etudiant',
                'email' => 'sfdf@esi.ci',
                'password' => bcrypt('ESI@2022@'),
                'created_at' => now(),
            ],
            [
                'nom_user' => "sd6f78s",
                'prenom_user' => "ed5r7g",
                'tel_user' => null,
                'role_user' => 'Etudiant',
                'email' => 's6fd@esi.com',
                'password' => bcrypt('ESI@2022@'),
                'created_at' => now(),
            ],
            [
                'nom_user' => "s6ed8f4",
                'prenom_user' => "sd6f4",
                'tel_user' => null,
                'role_user' => 'Etudiant',
                'email' => 'sd6f45@esi.ci',
                'password' => bcrypt('ESI@2022@'),
                'created_at' => now(),
            ],
        ]);
    }
}
