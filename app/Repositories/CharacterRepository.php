<?php

namespace App\Repositories;

use App\Models\Character;
use Illuminate\Database\Eloquent\Collection;

class CharacterRepository
{
    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Character::all();
    }
}
