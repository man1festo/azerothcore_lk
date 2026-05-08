<?php

namespace App\DTOs\Characters;

use Spatie\LaravelData\Data;

class CharacterCreateData extends Data
{
    public function __construct(
        public int $user_id,
        public int $realm_id,
        public string $name,
        public ?int $level = 1,
        public ?string $class = '',
        public ?string $race = '',
        public ?string $faction = '',
        public ?int $achievement_points = 0,
        public ?string $guild = null,
        public ?string $spec = null,
        public ?int $experience = 0,
        public ?string $gender = '',
    ) {}

    public static function rules(): array
    {
        return [
            'user_id' => 'required|int|exists:users,id',
            'realm_id' => 'required|int|exists:realms,id',
            'name' => 'required|string|max:255',
            'level' => 'nullable|int|min:1|max:80',
            'class' => 'nullable|string',
            'race' => 'nullable|string',
            'faction' => 'nullable|string',
            'achievement_points' => 'nullable|int|min:0',
            'guild' => 'nullable|string',
            'spec' => 'nullable|string',
            'experience' => 'nullable|int|min:0',
            'gender' => 'nullable|int|in:0,1',
        ];
    }
}
