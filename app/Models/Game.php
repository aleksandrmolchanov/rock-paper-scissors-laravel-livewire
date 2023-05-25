<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function players(): HasMany
    {
        return $this->hasMany(Player::class);
    }
}
