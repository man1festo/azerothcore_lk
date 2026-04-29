<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('news')->insert([
            [
                'content' => 'Welcome to Frostcrown! Our Wrath of the Lich King private server is now live with blizzlike rates and anti-cheat protection.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'Server Maintenance: We will be performing routine maintenance this Sunday from 2 AM to 4 AM EST. Expected downtime: 2 hours.',
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subDays(2),
            ],
            [
                'content' => 'New Guild: Congratulations to the guild "Enigma" for reaching 150 members! They are now the largest guild on Frostcrown.',
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(5),
            ],
            [
                'content' => 'Patch 3.3.5a: The latest patch has been deployed successfully. All known bugs have been fixed and balance changes implemented.',
                'created_at' => now()->subDays(7),
                'updated_at' => now()->subDays(7),
            ],
        ]);
    }
}
