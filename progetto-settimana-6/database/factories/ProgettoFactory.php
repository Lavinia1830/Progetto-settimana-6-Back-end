<?php

namespace Database\Factories;

use App\Models\Attivita;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Progetto>
 */
class ProgettoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->text(20),
            'year' => fake()->numberBetween(1960, 2023),
            'attivita_id' => Attivita::get()->random()->id,
            'user_id' => User::get()->random()->id,
            'created_at' => fake()->datetime()
        ];
    }
}
