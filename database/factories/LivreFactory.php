<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LivreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->title(),
            'resume' => $this->faker->text(),
            'auteur' => $this->faker->name() . ' ' . $this->faker->name(),
            'fichier' => 'documents/bibliotheque/livre0.pdf',
            'img_couverture' => 'img/entree-inp.jpg',
        ];
    }
}
