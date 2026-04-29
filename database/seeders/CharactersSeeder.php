<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharactersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('characters')->insert([
            [
                'user_id' => 1, // Aethelgard
                'name' => 'Aethelgard',
                'content' => json_encode([
                    'level' => 80,
                    'class' => 'Paladin',
                    'race' => 'Human',
                    'faction' => 'Alliance',
                    'achievement_points' => 6847,
                    'guild' => 'Enigma',
                    'spec' => 'Protection'
                ]),
                'realm_id' => 1, // Frostcrown PvP
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // Frostreaver
                'name' => 'Frostreaver',
                'content' => json_encode([
                    'level' => 80,
                    'class' => 'Death Knight',
                    'race' => 'Orc',
                    'faction' => 'Horde',
                    'achievement_points' => 6521,
                    'guild' => 'Bloodaxe Clan',
                    'spec' => 'Frost'
                ]),
                'realm_id' => 1, // Frostcrown PvP
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3, // Shadowstepz
                'name' => 'Shadowstepz',
                'content' => json_encode([
                    'level' => 80,
                    'class' => 'Rogue',
                    'race' => 'Night Elf',
                    'faction' => 'Alliance',
                    'achievement_points' => 2847,
                    'guild' => 'Shadow Council',
                    'spec' => 'Combat'
                ]),
                'realm_id' => 1, // Frostcrown PvP
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4, // GuildMaster
                'name' => 'Archon',
                'content' => json_encode([
                    'level' => 80,
                    'class' => 'Warrior',
                    'race' => 'Dwarf',
                    'faction' => 'Alliance',
                    'achievement_points' => 4521,
                    'guild' => 'Enigma',
                    'spec' => 'Fury'
                ]),
                'realm_id' => 2, // Frostcrown PvE
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1, // Aethelgard's alt
                'name' => 'Aethelpriest',
                'content' => json_encode([
                    'level' => 75,
                    'class' => 'Priest',
                    'race' => 'Human',
                    'faction' => 'Alliance',
                    'achievement_points' => 2156,
                    'guild' => 'Enigma',
                    'spec' => 'Holy'
                ]),
                'realm_id' => 2, // Frostcrown PvE
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
