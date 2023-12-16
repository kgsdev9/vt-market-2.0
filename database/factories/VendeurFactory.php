<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vendeur>
 */
class VendeurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->name(),
            'slug' => fake()->name(),
            'prenom' => fake()->firstName(),
            'telephone' => fake()->phoneNumber(),
            'whatsapp' => fake()->phoneNumber(),
            'city_id' => rand(1, 10),
            'country_id' => rand(1, 10),
            'photo' => fake()->image(),
            'piece_identite' => fake()->image(),
        ];
    }
}
