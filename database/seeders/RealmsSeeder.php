<?php

namespace Database\Seeders;

use App\Models\Realm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RealmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Realm::factory()->create([
            'name' => 'Frostcrown',
            'type' => 'PvP',
            'connection' => 'logon.frostcrown.net:3724',
        ]);

        Realm::factory()->create([
            'name' => 'Frostcrown PvE',
            'type' => 'PvE',
            'connection' => 'logon.frostcrown.net:3725',
        ]);

        Realm::factory()->create([
            'name' => 'Frostcrown RP',
            'type' => 'RP',
            'connection' => 'logon.frostcrown.net:3726',
        ]);
    }
}
