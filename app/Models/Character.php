<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

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

    protected function casts(): array
    {
        return [
            'content' => 'array',
        ];
    }

    /**
     * Get and set the character's level.
     */
    protected function level(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->content['level'] ?? 1,
            set: fn ($value) => ['content' => json_encode(array_merge($this->content ?? [], ['level' => $value]))]
        );
    }

    /**
     * Get and set the character's class.
     */
    protected function class(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->content['class'] ?? '',
            set: fn ($value) => ['content' => json_encode(array_merge($this->content ?? [], ['class' => $value]))]
        );
    }

    /**
     * Get and set the character's race.
     */
    protected function race(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->content['race'] ?? '',
            set: fn ($value) => ['content' => json_encode(array_merge($this->content ?? [], ['race' => $value]))]
        );
    }

    /**
     * Get and set the character's faction.
     */
    protected function faction(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->content['faction'] ?? '',
            set: fn ($value) => ['content' => json_encode(array_merge($this->content ?? [], ['faction' => $value]))]
        );
    }

    /**
     * Get and set the character's achievement points.
     */
    protected function achievementPoints(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->content['achievement_points'] ?? 0,
            set: fn ($value) => ['content' => json_encode(array_merge($this->content ?? [], ['achievement_points' => $value]))]
        );
    }

    /**
     * Get and set the character's guild.
     */
    protected function guild(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->content['guild'] ?? null,
            set: fn ($value) => ['content' => json_encode(array_merge($this->content ?? [], ['guild' => $value]))]
        );
    }

    /**
     * Get and set the character's specialization.
     */
    protected function spec(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->content['spec'] ?? null,
            set: fn ($value) => ['content' => json_encode(array_merge($this->content ?? [], ['spec' => $value]))]
        );
    }

    /**
     * Get and set the character's experience.
     */
    protected function experience(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->content['experience'] ?? 0,
            set: fn ($value) => ['content' => json_encode(array_merge($this->content ?? [], ['experience' => $value]))]
        );
    }

    /**
     * Get and set the character's gender.
     */
    protected function gender(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->content['gender'] ?? 0,
            set: fn ($value) => ['content' => json_encode(array_merge($this->content ?? [], ['gender' => $value]))]
        );
    }
}
