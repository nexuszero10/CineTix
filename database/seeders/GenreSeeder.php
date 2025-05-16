<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            'quest', 'action', 'adventure',
            'comedy', 'horror',
            'romance', 'drama', 'teen',
            'animation', 'fantasy', 'comedy', 'family',
            'action', 'sci-fi',
            'cyberpunk', 'thriller', 'mystery',
            'superhero', 'supernatural', 'urban',
            'music',
            'horror',
        ];

        foreach ($genres as $genre){
            Genre::create([
                'genre_name' => $genre,
            ]);
        }
    }
}
