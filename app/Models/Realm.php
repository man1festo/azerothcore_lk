<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'type', 'connection'])]
class Realm extends Model
{
    use HasFactory;

    protected $table = 'realms';

    public $timestamps = false;

    /**
     * Get all characters that belong to this realm.
     */
    public function characters(): HasMany
    {
        return $this->hasMany(Character::class);
    }
}

