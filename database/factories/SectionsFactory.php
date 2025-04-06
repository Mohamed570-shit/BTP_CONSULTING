<?php

namespace Database\Factories;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SectionFactory extends Factory
{
    protected $model = Section::class;

    public function definition()
    {
        $titre = $this->faker->unique()->words(2, true);
        return [
            'titre' => $titre,
            'slug' => Str::slug($titre),
            'ordre' => $this->faker->unique()->numberBetween(1, 10),
        ];
    }
}