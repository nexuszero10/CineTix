<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MovieGenre; // pastikan path model ini sesuai struktur project-mu

class MovieGenreSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // uncharted
            ['movie_id' => 1, 'genre_id' => 1],
            ['movie_id' => 1, 'genre_id' => 2],
            ['movie_id' => 1, 'genre_id' => 3],

            //sekawan limo
            ['movie_id' => 2, 'genre_id' => 3],
            ['movie_id' => 2, 'genre_id' => 4],
            ['movie_id' => 2, 'genre_id' => 5],

            // dilan 1990
            ['movie_id' => 3, 'genre_id' => 6],
            ['movie_id' => 3, 'genre_id' => 7],
            ['movie_id' => 3, 'genre_id' => 8],

            //jumbo
            ['movie_id' => 4, 'genre_id' => 4],
            ['movie_id' => 4, 'genre_id' => 9],
            ['movie_id' => 4, 'genre_id' => 10],
            ['movie_id' => 4, 'genre_id' => 11],
            ['movie_id' => 4, 'genre_id' => 12],

            // thunderbolts
            ['movie_id' => 5, 'genre_id' => 2],
            ['movie_id' => 5, 'genre_id' => 3],
            ['movie_id' => 5, 'genre_id' => 7],
            ['movie_id' => 5, 'genre_id' => 12],
            ['movie_id' => 5, 'genre_id' => 13],
            ['movie_id' => 5, 'genre_id' => 14],
            ['movie_id' => 5, 'genre_id' => 15],
            ['movie_id' => 5, 'genre_id' => 16],

            // Back in Action
            ['movie_id' => 6, 'genre_id' => 2],
            ['movie_id' => 6, 'genre_id' => 4],
            ['movie_id' => 6, 'genre_id' => 17],

            // Bullet Train
            ['movie_id' => 7, 'genre_id' => 2],
            ['movie_id' => 7, 'genre_id' => 11],
            ['movie_id' => 7, 'genre_id' => 18],

            // Edge of Toomorrow
            ['movie_id' => 8, 'genre_id' => 2],
            ['movie_id' => 8, 'genre_id' => 3],
            ['movie_id' => 8, 'genre_id' => 15],
            
            //avatar: the way of water
            ['movie_id' => 9, 'genre_id' => 2],
            ['movie_id' => 9, 'genre_id' => 3],
            ['movie_id' => 9, 'genre_id' => 12],
            ['movie_id' => 9, 'genre_id' => 15],

            // blade runner 2049
            ['movie_id' => 10, 'genre_id' => 2],
            ['movie_id' => 10, 'genre_id' => 7],
            ['movie_id' => 10, 'genre_id' => 15],
            ['movie_id' => 10, 'genre_id' => 18],
            ['movie_id' => 10, 'genre_id' => 19],
            ['movie_id' => 10, 'genre_id' => 20],

            // Sipder-Man: No Way Home
            ['movie_id' => 11, 'genre_id' => 2],
            ['movie_id' => 11, 'genre_id' => 3],
            ['movie_id' => 11, 'genre_id' => 10],
            ['movie_id' => 11, 'genre_id' => 12],
            ['movie_id' => 11, 'genre_id' => 15],
            ['movie_id' => 11, 'genre_id' => 16],

            // Avenger Infinity War
            ['movie_id' => 12, 'genre_id' => 2],
            ['movie_id' => 12, 'genre_id' => 3],
            ['movie_id' => 12, 'genre_id' => 15],
            ['movie_id' => 12, 'genre_id' => 16],

            // Guardian of the Galaxy
            ['movie_id' => 13, 'genre_id' => 1],
            ['movie_id' => 13, 'genre_id' => 2],
            ['movie_id' => 13, 'genre_id' => 3],
            ['movie_id' => 13, 'genre_id' => 4],
            ['movie_id' => 13, 'genre_id' => 15],
            ['movie_id' => 13, 'genre_id' => 16],


            // God the Father
            ['movie_id' => 14, 'genre_id' => 21],
            
            // Bad Genius
            ['movie_id' => 15, 'genre_id' => 18],
            
            // Guardians of the Gaaxy Vol. 2
            ['movie_id' => 16, 'genre_id' => 2],
            ['movie_id' => 16, 'genre_id' => 3],
            ['movie_id' => 16, 'genre_id' => 4],
            ['movie_id' => 16, 'genre_id' => 15],
            ['movie_id' => 16, 'genre_id' => 16],

            // Mickey 17
            ['movie_id' => 17, 'genre_id' => 3],
            ['movie_id' => 17, 'genre_id' => 4],
            ['movie_id' => 17, 'genre_id' => 12],
            ['movie_id' => 17, 'genre_id' => 15],

            //Yowsi ben I
            ['movie_id' => 18, 'genre_id' => 4],
            ['movie_id' => 18, 'genre_id' => 8],
            ['movie_id' => 18, 'genre_id' => 22],

            // Yowis ben II
            ['movie_id' => 19, 'genre_id' => 4],
            ['movie_id' => 19, 'genre_id' => 7],
            ['movie_id' => 19, 'genre_id' => 8],
            ['movie_id' => 19, 'genre_id' => 22],

            // Yowis Ben III
            ['movie_id' => 20, 'genre_id' => 4],
            ['movie_id' => 20, 'genre_id' => 7],
            ['movie_id' => 20, 'genre_id' => 8],
            ['movie_id' => 20, 'genre_id' => 22],

            // Seesuai Aplkasi
            ['movie_id' => 21, 'genre_id' => 4],
            
            // Kaka Boss 
            ['movie_id' => 22, 'genre_id' => 4],
            ['movie_id' => 22, 'genre_id' => 7],
            
            // Gampang Cuan
            ['movie_id' => 23, 'genre_id' => 4],
            ['movie_id' => 23, 'genre_id' => 7],
            
            // Agak Laen
            ['movie_id' => 24, 'genre_id' => 4],
            
            // Ngeri - Ngeri Sedap
            ['movie_id' => 25, 'genre_id' => 4],
            ['movie_id' => 25, 'genre_id' => 7],

            // Pasutri Gaje
            ['movie_id' => 26, 'genre_id' => 4],
            ['movie_id' => 26, 'genre_id' => 7],
            ['movie_id' => 26, 'genre_id' => 8],

            // Sleep Call
            ['movie_id' => 27, 'genre_id' => 7],
            ['movie_id' => 27, 'genre_id' => 18],

            // Ipar Adalah Maut
            ['movie_id' => 28, 'genre_id' => 7],
            ['movie_id' => 28, 'genre_id' => 8],

            // Norma
            ['movie_id' => 29, 'genre_id' => 7],
            ['movie_id' => 29, 'genre_id' => 8],

            //Satu Hari Nanti
            ['movie_id' => 30, 'genre_id' => 7],
            ['movie_id' => 30, 'genre_id' => 8],
            
            // Bila Esok Ibu Tiada
            ['movie_id' => 31, 'genre_id' => 7],
            ['movie_id' => 31, 'genre_id' => 11],
            
            // Laskar Pelangi
            ['movie_id' => 32, 'genre_id' => 3],
            ['movie_id' => 32, 'genre_id' => 7],
            ['movie_id' => 32, 'genre_id' => 11],

            // Miracle In Cell No. 7
            ['movie_id' => 33, 'genre_id' => 4],
            ['movie_id' => 33, 'genre_id' => 7],
            ['movie_id' => 33, 'genre_id' => 11],
            
            // Sayap Sayap Patah
            ['movie_id' => 34, 'genre_id' => 2],
            ['movie_id' => 34, 'genre_id' => 7],
            ['movie_id' => 34, 'genre_id' => 8],
            ['movie_id' => 34, 'genre_id' => 18],
            
            // Teman Tapi Menikah
            ['movie_id' => 35, 'genre_id' => 4],
            ['movie_id' => 35, 'genre_id' => 7],
            ['movie_id' => 35, 'genre_id' => 8],
            ['movie_id' => 35, 'genre_id' => 23],

            //Sijjin
            ['movie_id' => 36, 'genre_id' => 5],
            ['movie_id' => 36, 'genre_id' => 18],

            // Pamali: Dusun Pocong
            ['movie_id' => 37, 'genre_id' => 5],
            ['movie_id' => 37, 'genre_id' => 24],

            // Pabrik Gulna
            ['movie_id' => 38, 'genre_id' => 5],
            ['movie_id' => 38, 'genre_id' => 10],
            ['movie_id' => 38, 'genre_id' => 18],

            // Perewangan
            ['movie_id' => 39, 'genre_id' => 5],
            ['movie_id' => 39, 'genre_id' => 10],
            ['movie_id' => 39, 'genre_id' => 18],
            ['movie_id' => 39, 'genre_id' => 24],

            // Pengabdi Setan 2
            ['movie_id' => 40, 'genre_id' => 5],
            ['movie_id' => 40, 'genre_id' => 7],
            ['movie_id' => 40, 'genre_id' => 24],

            // Mangkujiwo
            ['movie_id' => 41, 'genre_id' => 5],
            ['movie_id' => 41, 'genre_id' => 10],

            // Sewu Dino
            ['movie_id' => 42, 'genre_id' => 5],
            ['movie_id' => 42, 'genre_id' => 18],

            // hello Ghost
            ['movie_id' => 43, 'genre_id' => 4],
            ['movie_id' => 43, 'genre_id' => 7],

            // Sosok Ketiga
            ['movie_id' => 44, 'genre_id' => 5],
            ['movie_id' => 44, 'genre_id' => 7],
            ['movie_id' => 44, 'genre_id' => 10],
            ['movie_id' => 44, 'genre_id' => 18],

            // Perjanjian Gaib
            ['movie_id' => 45, 'genre_id' => 4],
            ['movie_id' => 45, 'genre_id' => 5],
            
            // Jailangkung: Sandekala
            ['movie_id' => 46, 'genre_id' => 5],
            
            // John Wick - 3
            ['movie_id' => 47, 'genre_id' => 2],
            ['movie_id' => 47, 'genre_id' => 14],
            ['movie_id' => 47, 'genre_id' => 18],
            
            // Extraction
            ['movie_id' => 48, 'genre_id' => 2],
            ['movie_id' => 48, 'genre_id' => 14],
            ['movie_id' => 48, 'genre_id' => 18],
            
            // The big 4
            ['movie_id' => 49, 'genre_id' => 2],
            ['movie_id' => 49, 'genre_id' => 4],
            ['movie_id' => 49, 'genre_id' => 14],
            ['movie_id' => 49, 'genre_id' => 18],
            
            // Ben & Joddy
            ['movie_id' => 50, 'genre_id' => 2],
            ['movie_id' => 50, 'genre_id' => 3],
            ['movie_id' => 50, 'genre_id' => 7],
            ['movie_id' => 50, 'genre_id' => 12],
            ['movie_id' => 50, 'genre_id' => 18],
            
            // The Night Come for Us
            ['movie_id' => 51, 'genre_id' => 2],
            ['movie_id' => 51, 'genre_id' => 14],
            ['movie_id' => 51, 'genre_id' => 18],
            
            // Mencuri Raden Saleh
            ['movie_id' => 52, 'genre_id' => 2],
            ['movie_id' => 52, 'genre_id' => 6],
            ['movie_id' => 52, 'genre_id' => 7],
            ['movie_id' => 52, 'genre_id' => 14],
            

        ];

        foreach ($data as $entry) {
            MovieGenre::create($entry);
        }
    }
}
