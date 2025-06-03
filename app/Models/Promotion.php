<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Promotion extends Model
{
    protected $fillable = ['code', 'type', 'minimum_price', 'discount'];

    // relai oen to many ke tabel orders
    public function orders(): HasMany {
        return $this->hasMany(Order::class);
    }
}
