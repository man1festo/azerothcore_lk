<?php

namespace App\Services;

use App\DTOs\Characters\CharacterCreateData;
use App\DTOs\Characters\CharacterData;
use App\Models\Character;
use App\Repositories\CharacterRepository;
use Illuminate\Database\Eloquent\Collection;

class CharacterService
{
    public function __construct(private readonly CharacterRepository $repository)
    {

    }

    public function getAll(): Collection
    {
        return $this->repository->getAll();
    }

    public function update(CharacterData $data, Character $character): void
    {
        //$character->update($data->all());
        $character->level = $data->level;
        $character->class = $data->class;
        $character->race = $data->race;
        $character->gender = $data->gender;
        $character->faction = $data->faction;
        $character->spec = $data->spec;
        $character->guild = $data->guild;
        $character->achievementPoints = $data->achievementPoints;
        $character->save();
        $a = 11;
    }

    public function create(CharacterCreateData $data): Character
    {
        $character = new Character();
        $character->user_id = $data->user_id;
        $character->realm_id = $data->realm_id;
        $character->name = $data->name;
        $character->level = $data->level;
        $character->class = $data->class;
        $character->race = $data->race;
        $character->faction = $data->faction;
        $character->achievementPoints = $data->achievement_points;
        $character->guild = $data->guild;
        $character->spec = $data->spec;
        $character->experience = $data->experience;
        $character->gender = $data->gender;
        $character->save();

        return $character;
    }

    public function delete(Character $character): void
    {
        $character->delete();
    }
}
