<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Aethelgard',
            'email' => 'aethelgard@frostcrown.net',
        ]);

        User::factory()->create([
            'name' => 'Frostreaver',
            'email' => 'frostreaver@frostcrown.net',
        ]);

        User::factory()->create([
            'name' => 'Shadowstepz',
            'email' => 'shadowstepz@frostcrown.net',
        ]);

        User::factory()->create([
            'name' => 'GuildMaster',
            'email' => 'guildmaster@frostcrown.net',
        ]);
    }
}
