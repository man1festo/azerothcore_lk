<?php

namespace App\DTOs\Characters;

use Spatie\LaravelData\Data;

class CharacterData extends Data
{
    public function __construct(
        public int $level,
        public string $class,
        public string $race,
        public string $gender,
        public string $faction,
        public string $spec,
        public string $guild,
        public int $achievementPoints,
    ){}

    public static function rules(): array
    {
        return [
            'level' => 'required|int',
            'class' => 'required|string',
            'race' => 'required|string',
            'gender' => 'required|string',
            'faction' => 'required|string',
            'spec' => 'required|string',
            'guild' => 'required|string',
            'achievementPoints' => 'required|int',
        ];
    }
}
