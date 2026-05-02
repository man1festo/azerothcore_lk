<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            [
                'name' => 'Aethelgard',
                'email' => 'aethelgard@frostcrown.net',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Frostreaver',
                'email' => 'frostreaver@frostcrown.net',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shadowstepz',
                'email' => 'shadowstepz@frostcrown.net',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'GuildMaster',
                'email' => 'guildmaster@frostcrown.net',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
