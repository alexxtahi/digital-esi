<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EnqueteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'theme' => $this->faker->title(),
            'domaine' => $this->faker->domainName(),
            'description' => $this->faker->text(),
            'date_publication' => $this->faker->date(),
        ];
    }
}
