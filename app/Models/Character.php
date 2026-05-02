<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['user_id', 'realm_id', 'name', 'content'])]
class Character extends Model
{
    use HasFactory;

    protected $table = 'characters';

    /**
     * Get the user that owns the character.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the realm that the character belongs to.
     */
    public function realm(): BelongsTo
    {
        return $this->belongsTo(Realm::class);
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'content' => 'json',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}

