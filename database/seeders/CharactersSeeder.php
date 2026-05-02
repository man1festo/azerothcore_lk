<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\User;
use App\Models\Realm;
use Illuminate\Database\Seeder;

class CharactersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = User::where('email', 'aethelgard@frostcrown.net')->first();
        $user2 = User::where('email', 'frostreaver@frostcrown.net')->first();
        $user3 = User::where('email', 'shadowstepz@frostcrown.net')->first();
        $user4 = User::where('email', 'guildmaster@frostcrown.net')->first();

        $realm1 = Realm::where('name', 'Frostcrown')->first();
        $realm2 = Realm::where('name', 'Frostcrown PvE')->first();

        Character::factory()->create([
            'user_id' => $user1->id,
            'name' => 'Aethelgard',
            'realm_id' => $realm1->id,
            'content' => [
                'level' => 80,
                'class' => 'Paladin',
                'race' => 'Human',
                'faction' => 'Alliance',
                'achievement_points' => 6847,
                'guild' => 'Enigma',
                'spec' => 'Protection'
            ],
        ]);

        Character::factory()->create([
            'user_id' => $user2->id,
            'name' => 'Frostreaver',
            'realm_id' => $realm1->id,
            'content' => [
                'level' => 80,
                'class' => 'Death Knight',
                'race' => 'Orc',
                'faction' => 'Horde',
                'achievement_points' => 6521,
                'guild' => 'Bloodaxe Clan',
                'spec' => 'Frost'
            ],
        ]);

        Character::factory()->create([
            'user_id' => $user3->id,
            'name' => 'Shadowstepz',
            'realm_id' => $realm1->id,
            'content' => [
                'level' => 80,
                'class' => 'Rogue',
                'race' => 'Night Elf',
                'faction' => 'Alliance',
                'achievement_points' => 2847,
                'guild' => 'Shadow Council',
                'spec' => 'Combat'
            ],
        ]);

        Character::factory()->create([
            'user_id' => $user4->id,
            'name' => 'Archon',
            'realm_id' => $realm2->id,
            'content' => [
                'level' => 80,
                'class' => 'Warrior',
                'race' => 'Dwarf',
                'faction' => 'Alliance',
                'achievement_points' => 4521,
                'guild' => 'Enigma',
                'spec' => 'Fury'
            ],
        ]);

        Character::factory()->create([
            'user_id' => $user1->id,
            'name' => 'Aethelpriest',
            'realm_id' => $realm2->id,
            'content' => [
                'level' => 75,
                'class' => 'Priest',
                'race' => 'Human',
                'faction' => 'Alliance',
                'achievement_points' => 2156,
                'guild' => 'Enigma',
                'spec' => 'Holy'
            ],
        ]);
    }
}
