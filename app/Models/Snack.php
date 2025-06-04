<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Snack extends Model
{
    protected $fillable = ['name', 'category', 'price'];

    public function orders(): BelongsToMany {
        return $this->belongsToMany(Order::class, 'order_snack')->withPivot('quantity')->withTimestamps();
    }
}
