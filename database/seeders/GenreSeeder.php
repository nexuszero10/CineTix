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
            'Quest', 'Action', 'Adventure', 'Comedy', 'Horror',
            'Teen', 'Drama', 'Romance', 'Animation', 'Supernatural',
            'Family', 'Fantasy', 'Politics', 'Crime', 'Sci-Fi', 
            'Superhero', 'Spy', 'Thriller', 'Artificial Intellegence', 'Cyberpunk',
            'Documentary', 'Music', 'Bography', 'Mystery'
        ];

        foreach ($genres as $genre){
            Genre::create([
                'genre_name' => $genre,
            ]);
        }
    }
}
