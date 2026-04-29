<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RealmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('realms')->insert([
            [
                'name' => 'Frostcrown',
                'type' => 'PvP',
                'connection' => 'logon.frostcrown.net:3724',
            ],
            [
                'name' => 'Frostcrown PvE',
                'type' => 'PvE',
                'connection' => 'logon.frostcrown.net:3725',
            ],
            [
                'name' => 'Frostcrown RP',
                'type' => 'RP',
                'connection' => 'logon.frostcrown.net:3726',
            ],
        ]);
    }
}
