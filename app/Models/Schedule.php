<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Schedule extends Model
{
    protected $fillable = [
        'movie_id',
        'studio_id',
        'date',
        'time',
        'day',
        'capacity',
        'status'
    ];

    // relasi many to one ke tabel movie
    public function movie(): BelongsTo {
        return $this->belongsTo(Movie::class);
    }

    // relasi many to one ke tabel studio
    public function studio(): BelongsTo {
        return $this->belongsTo(Studio::class);
    }

    // relasi many to one ke tabel ticket
    public function tickets(): HasMany {
        return $this->hasMany(Ticket::class);
    }

    // relasi one many ke table orders 
    public function orders(): HasMany {
        return $this->hasMany(Order::class);
    }
}
