<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class News extends Model
{
    protected $fillable = ['title', 'description', 'image_path'];

    protected static function booted()
    {
        static::creating(function ($news) {
            if ($news->image_path && $news->title) {
                $news->image_path = self::renameImageFile($news->image_path, $news->title);
            }
        });

        static::updating(function ($news) {
            if ($news->isDirty('image_path') && $news->title) {
                $news->image_path = self::renameImageFile($news->image_path, $news->title);
            }
        });
    }

    protected static function renameImageFile($originalPath, $title)
    {
        $slug = Str::slug(implode(' ', array_slice(explode(' ', $title), 0, 3)));
        $newFilename = "{$slug}.jpg";
        $newPath = "images/news/{$newFilename}";

        if (Storage::disk('public')->exists($originalPath)) {
            Storage::disk('public')->move($originalPath, $newPath);
        }

        return $newFilename; 
    }
}
