<?php

namespace Database\Factories;

use App\Models\Realm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Realm>
 */
class RealmFactory extends Factory
{
    /**
     * Определить состояние модели по умолчанию.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word() . ' Realm',
            'type' => fake()->randomElement(['PvP', 'PvE', 'RP', 'RP-PvP']),
            'connection' => fake()->domainName() . ':' . fake()->numberBetween(3000, 4000),
        ];
    }
}
