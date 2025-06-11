<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Ramsey\Uuid\Type\Time;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Movie extends Model
{
    protected static function booted()
    {
        static::creating(function ($movie) {
            if ($movie->image_path && $movie->title) {
                $movie->image_path = self::renameImageFile($movie->image_path, $movie->title);
            }
        });

        static::updating(function ($movie) {
            if ($movie->isDirty('image_path') && $movie->title) {
                $movie->image_path = self::renameImageFile($movie->image_path, $movie->title);
            }
        });
    }

    protected static function renameImageFile($originalPath, $title)
    {
        $slug = Str::slug($title); // pakai full title
        $newFilename = "{$slug}.jpg";
        $newPath = "images/movies/poster/{$newFilename}";

        if (Storage::disk('public')->exists($originalPath)) {
            // Buat direktori tujuan jika belum ada
            Storage::disk('public')->makeDirectory('images/movies/poster');

            // Hapus file lama jika ada
            if (Storage::disk('public')->exists($newPath)) {
                Storage::disk('public')->delete($newPath);
            }

            Storage::disk('public')->move($originalPath, $newPath);
        }

        return $newFilename; // hanya nama file seperti "transformers-the-last-knight.jpg"
    }

    protected $fillable = [
        'title',
        'duration',
        'director',
        'cast',
        'release_year',
        'price',
        'category_id',
        'trailer_url',
        'image_path',
        'synopsis', // ⬅ Tambahkan ini
    ];

    // relasi many to one ke tabel category
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // relasi many to many ke tabel genre
    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class, 'movie_genre');
    }

    // relasi one to many ke tabel schedule
    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }

    // relase one to many ke tabel reviews
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    // relasi one to one ke tabel timeline
    public function timeline(): HasOne
    {
        return $this->hasOne(Timeline::class);
    }
}
