<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genre extends Model
{
    protected $fillable = ['genre_name'];
    
    // relasi many to many ke tabel movie
    public function movies(): BelongsToMany {
        return $this->belongsToMany(Genre::class, 'movie_genre');
    }
}
