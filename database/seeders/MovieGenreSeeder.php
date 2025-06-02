<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MovieGenre; // pastikan path model ini sesuai struktur project-mu

class MovieGenreSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            //sekawan limo
            ['movie_id' => 1, 'genre_id' => 3],
            ['movie_id' => 1, 'genre_id' => 4],
            ['movie_id' => 1, 'genre_id' => 5],

            //jumbo
            ['movie_id' => 2, 'genre_id' => 4],
            ['movie_id' => 2, 'genre_id' => 9],
            ['movie_id' => 2, 'genre_id' => 10],
            ['movie_id' => 2, 'genre_id' => 11],
            ['movie_id' => 2, 'genre_id' => 12],

            // thunderbolts
            ['movie_id' => 3, 'genre_id' => 2],
            ['movie_id' => 3, 'genre_id' => 3],
            ['movie_id' => 3, 'genre_id' => 7],
            ['movie_id' => 3, 'genre_id' => 12],
            ['movie_id' => 3, 'genre_id' => 13],
            ['movie_id' => 3, 'genre_id' => 14],
            ['movie_id' => 3, 'genre_id' => 13],
            ['movie_id' => 3, 'genre_id' => 16],
            
            //avatar: the way of water
            ['movie_id' => 4, 'genre_id' => 2],
            ['movie_id' => 4, 'genre_id' => 3],
            ['movie_id' => 4, 'genre_id' => 12],
            ['movie_id' => 4, 'genre_id' => 15],
            
            // Bad Genius
            ['movie_id' => 5, 'genre_id' => 18],
            
            // Mickey 17
            ['movie_id' => 6, 'genre_id' => 3],
            ['movie_id' => 6, 'genre_id' => 4],
            ['movie_id' => 6, 'genre_id' => 12],
            ['movie_id' => 6, 'genre_id' => 15],

            // Seesuai Aplkasi
            ['movie_id' => 7, 'genre_id' => 4],
            
            // Agak Laen
            ['movie_id' => 8, 'genre_id' => 4],

            // Ipar Adalah Maut
            ['movie_id' => 9, 'genre_id' => 7],
            ['movie_id' => 9, 'genre_id' => 8],

            // Miracle In Cell No. 7
            ['movie_id' => 11, 'genre_id' => 4],
            ['movie_id' => 11, 'genre_id' => 7],
            ['movie_id' => 11, 'genre_id' => 11],

            // Pabrik Gula
            ['movie_id' => 12, 'genre_id' => 5],
            ['movie_id' => 12, 'genre_id' => 10],
            ['movie_id' => 12, 'genre_id' => 18],

            // Perewangan
            ['movie_id' => 13, 'genre_id' => 5],
            ['movie_id' => 13, 'genre_id' => 10],
            ['movie_id' => 13, 'genre_id' => 18],
            ['movie_id' => 13, 'genre_id' => 24],

            // Perjanjian Gaib
            ['movie_id' => 14, 'genre_id' => 4],
            ['movie_id' => 14, 'genre_id' => 5],
            
            // Mencuri Raden Saleh
            ['movie_id' => 15, 'genre_id' => 2],
            ['movie_id' => 15, 'genre_id' => 6],
            ['movie_id' => 15, 'genre_id' => 7],
            ['movie_id' => 15, 'genre_id' => 14],
            
            // Avatar 3: Fire and Ash
            ['movie_id' => 16, 'genre_id' => 2],
            ['movie_id' => 16, 'genre_id' => 3],
            ['movie_id' => 16, 'genre_id' => 12],
            ['movie_id' => 16, 'genre_id' => 15],
            ['movie_id' => 16, 'genre_id' => 18],
            
            // Wake Up Dead Man
            ['movie_id' => 17, 'genre_id' => 4],
            ['movie_id' => 17, 'genre_id' => 7],
            ['movie_id' => 17, 'genre_id' => 14],
            ['movie_id' => 17, 'genre_id' => 18],
            ['movie_id' => 17, 'genre_id' => 24],
            
            // Anaconda
            ['movie_id' => 18, 'genre_id' => 2],
            ['movie_id' => 18, 'genre_id' => 3],
            ['movie_id' => 18, 'genre_id' => 4],
            ['movie_id' => 18, 'genre_id' => 5],
            ['movie_id' => 18, 'genre_id' => 18],
            
            // Cinta Tak Seindah Drama Korea
            ['movie_id' => 19, 'genre_id' => 4],
            ['movie_id' => 19, 'genre_id' => 7],
            ['movie_id' => 19, 'genre_id' => 8],
            
            // Sampai Nanti Hanna
            ['movie_id' => 20, 'genre_id' => 7],
            ['movie_id' => 20, 'genre_id' => 8],
        ];

        foreach ($data as $entry) {
            MovieGenre::create($entry);
        }
    }
}
