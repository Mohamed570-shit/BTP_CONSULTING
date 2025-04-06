<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\OffreEmploi; // Ajoutez cette ligne

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidatures>
 */
class CandidatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'offre_id' => OffreEmploi::factory(),
            'nom' => $this->faker->name(),
            'email' => $this->faker->email(),
            'cv' => 'cvs/' . $this->faker->uuid() . '.pdf',
            'status' => $this->faker->randomElement(['en attente', 'accepté', 'refusé']),
        ];
    }
}