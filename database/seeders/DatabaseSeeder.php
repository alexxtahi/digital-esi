<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class); // Créer les users par défaut
        $this->call(BlogArticleSeeder::class); // Créer les articles de blog par défaut
        $this->call(FiliereSeeder::class); // Créer les filières par défaut
        $this->call(SpecialiteSeeder::class); // Créer les spécialités par défaut
        $this->call(EtudiantSeeder::class); // Créer les spécialités par défaut
        \App\Models\OffreEmploi::factory(10)->create();
        \App\Models\Livre::factory(15)->create();
        $this->call(ClasseSeeder::class); // Créer les spécialités par défaut
        \App\Models\Enquete::factory(10)->create();
    }
}
