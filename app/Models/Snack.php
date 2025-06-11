<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Snack extends Model
{
    protected $fillable = ['name', 'category', 'price', 'image_path'];

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, 'order_snack')->withPivot('quantity')->withTimestamps();
    }

    protected static function booted()
    {
        static::creating(function ($snack) {
            if ($snack->image_path && $snack->name) {
                $snack->image_path = self::renameImageFile($snack->image_path, $snack->name, $snack->category);
            }
        });

        static::updating(function ($snack) {
            if ($snack->isDirty('image_path') && $snack->name) {
                $snack->image_path = self::renameImageFile($snack->image_path, $snack->name, $snack->category);
            }
        });
    }

    protected static function renameImageFile($originalPath, $name, $category)
    {
        $slug = Str::slug(implode(' ', array_slice(explode(' ', $name), 0, 3)));
        $newFilename = "{$slug}.jpg";
        $folder = $category === 'food' ? 'foods' : 'drinks';
        $newPath = "images/{$folder}/{$newFilename}";

        if (Storage::disk('public')->exists($originalPath)) {
            Storage::disk('public')->move($originalPath, $newPath);
        }

        return $newFilename;
    }
}
