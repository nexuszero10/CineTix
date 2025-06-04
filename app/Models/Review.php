<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{   
    protected $fillable = ['user_id', 'movie_id', 'rating', 'comment'];
    
    // relasi many to one ke tabel user
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    // relasi many to one ke table review
    public function movie(): BelongsTo {
        return $this->belongsTo(Movie::class);
    }
}
