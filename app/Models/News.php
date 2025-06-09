<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    protected $fillable = ['title', 'description', 'image_path'];

    protected static function booted()
    {
        static::creating(function ($news) {
            if (empty($news->image_path)) {
                $news->image_path = self::generateImagePath($news->title);
            }
        });

        static::updating(function ($news) {
            if (empty($news->image_path)) {
                $news->image_path = self::generateImagePath($news->title);
            }
        });
    }

    protected static function generateImagePath($title)
    {
        $firstThree = implode(' ', array_slice(explode(' ', $title), 0, 3));
        $slug = Str::slug($firstThree); 
        return "{$slug}.jpg";
    }
}
