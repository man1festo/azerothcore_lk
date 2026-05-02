<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::factory()->create([
            'content' => 'Welcome to Frostcrown! Our Wrath of the Lich King private server is now live with blizzlike rates and anti-cheat protection.',
        ]);

        News::factory()->create([
            'content' => 'Server Maintenance: We will be performing routine maintenance this Sunday from 2 AM to 4 AM EST. Expected downtime: 2 hours.',
        ]);

        News::factory()->create([
            'content' => 'New Guild: Congratulations to the guild "Enigma" for reaching 150 members! They are now the largest guild on Frostcrown.',
        ]);

        News::factory()->create([
            'content' => 'Patch 3.3.5a: The latest patch has been deployed successfully. All known bugs have been fixed and balance changes implemented.',
        ]);
    }
}
