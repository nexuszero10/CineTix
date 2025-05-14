<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        'url_trailer_embed',
        'category_id'
    ];

    // relasi many to one ke table category
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    // relasi many to many ke table genre
    public function genres(): BelongsToMany {
        return $this->belongsToMany(Genre::class);
    }

    // relasi one to many ke tabel schedule
    public function schedules(): HasMany {
        return $this->hasMany(Schedule::class);
    } 
}
