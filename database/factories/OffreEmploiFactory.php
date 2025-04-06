<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OffresEmploi>
 */
class OffreEmploiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'titre' => $this->faker->jobTitle(),
        'slug' => $this->faker->slug(),
        'description' => $this->faker->paragraphs(5, true),
        'date_expiration' => $this->faker->dateTimeBetween('now', '+1 year'),
    ];
}
}
