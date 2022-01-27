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
    }
}
