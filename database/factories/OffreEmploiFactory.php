<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OffreEmploiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types_offre = ['Stage', 'Emploi'];
        $date_or_null = [$this->faker->date(), null];
        return [
            'titre' => $this->faker->title(),
            'entreprise' => $this->faker->domainName(),
            'type_offre' => $types_offre[array_rand($types_offre)],
            'domaine' => $this->faker->domainName(),
            'poste' => $this->faker->colorName(),
            'description' => $this->faker->text(),
            'date_publication' => $this->faker->date(),
            'date_limite' => $date_or_null[array_rand($date_or_null)],
        ];
    }
}
