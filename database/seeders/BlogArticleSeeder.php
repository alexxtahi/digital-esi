<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertion du 1er article par défaut
        DB::table('blog_articles')->insert([
            'titre_article' => "Lancement de la plateforme officielle de communication de l'ESI !",
            'resume_article' => "L'Ecole formatrice d'ingénieurs et de techniciens supérieurs dans les domaines de l'industrie vous dévoile sa plateforme digitale.",
            'contenu_article' => "L'Ecole formatrice d'ingénieurs et de techniciens supérieurs dans les domaines de l'industrie vous dévoile sa plateforme digitale.",
            'date_publication' => now(),
            'id_user' => 1,
            'created_at' => now(),
        ]);
    }
}
