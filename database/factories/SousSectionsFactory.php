<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Section; // Ajoutez cette ligne

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SousSections>
 */
class SousSectionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'section_id' => Section::factory(),
            'titre' => $this->faker->sentence(3),
            'slug' => $this->faker->slug(),
            'contenu' => $this->faker->paragraphs(3, true),
            'ordre' => $this->faker->numberBetween(1, 10),
        ];
    }
}