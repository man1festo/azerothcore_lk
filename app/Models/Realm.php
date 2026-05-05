<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\Attribute;

#[Fillable(['name', 'type', 'connection'])]
class Realm extends Model
{
    use HasFactory;

    protected $table = 'realms';

    public $timestamps = false;

    /**
     * Поле connection хранит адрес сервера в формате "hostname:port"
     * Пример: "logon.frostcrown.net:3724"
     * Используется игровыми клиентами для подключения к серверу realm.
     */

    /**
     * Получить всех персонажей, принадлежащих этому realm.
     */
    public function characters(): HasMany
    {
        return $this->hasMany(Character::class);
    }

    /**
     * Получить и установить строку подключения к серверу realm.
     * Формат: hostname:port (например, "logon.frostcrown.net:3724")
     */
    protected function serverAddress(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->connection,
            set: fn ($value) => ['connection' => $value]
        );
    }

    /**
     * Получить часть hostname из строки подключения.
     */
    protected function hostname(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => explode(':', $this->connection)[0] ?? '',
        );
    }

    /**
     * Получить часть port из строки подключения.
     */
    protected function port(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => (int) (explode(':', $this->connection)[1] ?? 0),
        );
    }
}
