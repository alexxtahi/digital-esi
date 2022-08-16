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
        $this->call(UserSeeder::class);
        $this->call(BlogArticleSeeder::class);
        $this->call(FiliereSeeder::class);
        $this->call(SpecialiteSeeder::class);
        $this->call(EtudiantSeeder::class);
        \App\Models\OffreEmploi::factory(10)->create();
        $this->call(TypeLivreSeeder::class);
        \App\Models\Livre::factory(15)->create();
        $this->call(ClasseSeeder::class);
        \App\Models\Enquete::factory(10)->create();
        $this->call(StageSeeder::class);
    }
}
