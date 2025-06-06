<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Ramsey\Uuid\Type\Time;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'duration',
        'director',
        'cast',
        'release_year',
        'price',
        'syonpsis',
        'image_path',
        'trailer_url',
        'category_id'
    ];

    // relasi many to one ke tabel category
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    // relasi many to many ke tabel genre
    public function genres(): BelongsToMany {
        return $this->belongsToMany(Genre::class, 'movie_genre');
    }

    // relasi one to many ke tabel schedule
    public function schedules(): HasMany {
        return $this->hasMany(Schedule::class);
    } 

    // relase one to many ke tabel reviews
    public function reviews(): HasMany {
        return $this->hasMany(Review::class);
    }

    // relasi one to one ke tabel timeline
    public function timeline(): HasOne {
        return $this->hasOne(Timeline::class);
    }
}
