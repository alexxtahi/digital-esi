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
        // Insertion des utilisateurs par défaut
        DB::table('users')->insert([
            'nom_user' => "TAHI",
            'prenom_user' => "Alexandre",
            'tel_user' => '0584649825',
            'role_user' => 'Admin',
            'email_user' => 'alexandretahi7@gmail.com',
            'password_user' => bcrypt('P@ssword@123456'),
            'created_at' => now(),
        ]);

        DB::table('users')->insert([
            'nom_user' => "TANOH",
            'prenom_user' => "Aka",
            'role_user' => 'Directeur',
            'email_user' => 'tanohaka@esi.com',
            'password_user' => bcrypt('ESI@2022@'),
            'created_at' => now(),
        ]);

        DB::table('users')->insert([
            'nom_user' => "KONE",
            'prenom_user' => "Siriky",
            'role_user' => 'Directeur des études',
            'tel_user' => ' 0747260505',
            'email_user' => 'siriky.kone@inphb.ci',
            'password_user' => bcrypt('ESI@2022@'),
            'created_at' => now(),
        ]);
    }
}
