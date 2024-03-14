<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attivita>
 */
class AttivitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $attivitas = ['Sviluppo', 'Progettazione', 'Requisiti', 'Configurazione', 'Gestione progetti', 'Sicurezza', 'Supporto'];
        return [
            'name' => fake()->randomElement($attivitas),
            'created_at' => fake()->datetime()
        ];
    }
}
