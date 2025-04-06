<?php

namespace Database\Factories;

use App\Models\Projet;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjetFactory extends Factory
{
    protected $model = Projet::class;
    
    public function definition()
    {
        $titre = $this->faker->sentence(3);
        return [
            'titre' => $titre,
            'slug' => Str::slug($titre),
            'description' => $this->faker->paragraphs(5, true),
            'image' => $this->faker->imageUrl(),
            'status' => $this->faker->randomElement(['en cours', 'terminé']),
            'coordonnee_x' => $this->faker->latitude(),
            'coordonnee_y' => $this->faker->longitude(),
            'icone_domaine' => $this->faker->randomElement(['batiment', 'route', 'pont', 'tunnel']),
        ];
    }
}