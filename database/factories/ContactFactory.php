<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contacts>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'nom' => $this->faker->name(),
        'email' => $this->faker->email(),
        'message' => $this->faker->paragraphs(3, true),
        'status' => $this->faker->randomElement(['non lu', 'lu']),
    ];
}
}
