<?php

namespace Database\Factories;

use App\Models\Character;
use App\Models\User;
use App\Models\Realm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'realm_id' => Realm::factory(),
            'name' => fake()->firstName(),
            'content' => [
                'level' => fake()->numberBetween(1, 80),
                'class' => fake()->randomElement(['Warrior', 'Paladin', 'Hunter', 'Rogue', 'Priest', 'Death Knight', 'Shaman', 'Mage', 'Warlock', 'Druid']),
                'race' => fake()->randomElement(['Human', 'Orc', 'Dwarf', 'Night Elf', 'Undead', 'Tauren', 'Gnome', 'Troll', 'Goblin', 'Draenei']),
                'experience' => fake()->numberBetween(0, 1000000),
            ],
            'created_at' => fake()->dateTimeThisYear(),
            'updated_at' => fake()->dateTimeThisYear(),
        ];
    }

    /**
     * Create a high-level character.
     */
    public function highLevel(): static
    {
        return $this->state(function (array $attributes) {
            return [
                'content' => array_merge($attributes['content'] ?? [], [
                    'level' => fake()->numberBetween(70, 80),
                    'achievement_points' => fake()->numberBetween(5000, 10000),
                ]),
            ];
        });
    }

    /**
     * Create a character of specific class.
     */
    public function ofClass(string $class): static
    {
        return $this->state(function (array $attributes) use ($class) {
            return [
                'content' => array_merge($attributes['content'] ?? [], [
                    'class' => $class,
                ]),
            ];
        });
    }

    /**
     * Create a character of specific race.
     */
    public function ofRace(string $race): static
    {
        return $this->state(function (array $attributes) use ($race) {
            return [
                'content' => array_merge($attributes['content'] ?? [], [
                    'race' => $race,
                ]),
            ];
        });
    }

    /**
     * Create a character in a guild.
     */
    public function inGuild(string $guild): static
    {
        return $this->state(function (array $attributes) use ($guild) {
            return [
                'content' => array_merge($attributes['content'] ?? [], [
                    'guild' => $guild,
                ]),
            ];
        });
    }
}
