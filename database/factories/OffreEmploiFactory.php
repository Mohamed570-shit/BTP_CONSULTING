<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OffreEmploiFactory extends Factory
{
    protected $model = \App\Models\OffreEmploi::class;

    public function definition()
    {
        $titre = $this->faker->jobTitle;
        return [
            'titre' => $titre,
            'slug' => Str::slug($titre),
            'description' => $this->faker->paragraph,
            'location' => $this->faker->city,
            'type' => $this->faker->randomElement(['CDI', 'CDD', 'Stage', 'Freelance']),
            'date_expiration' => $this->faker->dateTimeBetween('now', '+1 month'),
        ];
    }
}