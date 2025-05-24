<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schedules = [
            [
                // uncharted
                'movie_id'  => 1,
                'studio_id' => 1,
                'date'      => '2025-05-26',
                'time'      => '10:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // sekawan limo
                'movie_id'  => 2,
                'studio_id' => 2,
                'date'      => '2025-05-26',
                'time'      => '10:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Dilan 1990
                'movie_id'  => 3,
                'studio_id' => 1,
                'date'      => '2025-05-26',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Jumbo
                'movie_id'  => 4,
                'studio_id' => 2,
                'date'      => '2025-05-26',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Thunderbolts
                'movie_id'  => 5,
                'studio_id' => 1,
                'date'      => '2025-05-26',
                'time'      => '16:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Back In Actions
                'movie_id'  => 6,
                'studio_id' => 2,
                'date'      => '2025-05-26',
                'time'      => '16:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Bullet Train
                'movie_id'  => 7,
                'studio_id' => 1,
                'date'      => '2025-05-26',
                'time'      => '19:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Ben & Jody
                'movie_id'  => 50,
                'studio_id' => 2,
                'date'      => '2025-05-26',
                'time'      => '19:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Edge Of Tomorrow
                'movie_id'  => 8,
                'studio_id' => 1,
                'date'      => '2025-05-27',
                'time'      => '10:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Avatar The Way Of Water
                'movie_id'  => 9,
                'studio_id' => 2,
                'date'      => '2025-05-27',
                'time'      => '10:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Blade Runner:2049
                'movie_id'  => 10,
                'studio_id' => 1,
                'date'      => '2025-05-27',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Sider-Man: No Way Home
                'movie_id'  => 11,
                'studio_id' => 2,
                'date'      => '2025-05-27',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Avengers: Infinity War
                'movie_id'  => 12,
                'studio_id' => 1,
                'date'      => '2025-05-27',
                'time'      => '16:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Guardians Of The Galaxy
                'movie_id'  => 13,
                'studio_id' => 2,
                'date'      => '2025-05-27',
                'time'      => '16:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // God the Father
                'movie_id'  => 14,
                'studio_id' => 1,
                'date'      => '2025-05-27',
                'time'      => '19:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Bad Genius
                'movie_id'  => 15,
                'studio_id' => 1,
                'date'      => '2025-05-28',
                'time'      => '10:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Guardians Of The Galaxy Vol. 2
                'movie_id'  => 16,
                'studio_id' => 2,
                'date'      => '2025-05-28',
                'time'      => '10:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Mickey 17
                'movie_id'  => 17,
                'studio_id' => 1,
                'date'      => '2025-05-28',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Yowis Ben 1
                'movie_id'  => 18,
                'studio_id' => 2,
                'date'      => '2025-05-28',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Yowis Ben 2
                'movie_id'  => 19,
                'studio_id' => 1,
                'date'      => '2025-05-28',
                'time'      => '16:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Yowis Ben 3
                'movie_id'  => 20,
                'studio_id' => 2,
                'date'      => '2025-05-28',
                'time'      => '16:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Sesuai Aplikasi
                'movie_id'  => 21,
                'studio_id' => 1,
                'date'      => '2025-05-28',
                'time'      => '19:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // The Night Comes For Us
                'movie_id'  => 51,
                'studio_id' => 2,
                'date'      => '2025-05-28',
                'time'      => '19:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Kaka Boss
                'movie_id'  => 22,
                'studio_id' => 1,
                'date'      => '2025-05-29',
                'time'      => '10:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Gampang Cuan
                'movie_id'  => 23,
                'studio_id' => 2,
                'date'      => '2025-05-29',
                'time'      => '10:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Agak Laen
                'movie_id'  => 24,
                'studio_id' => 1,
                'date'      => '2025-05-29',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Ngeri Ngeri Sedap
                'movie_id'  => 25,
                'studio_id' => 2,
                'date'      => '2025-05-29',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Pasutri Gaje
                'movie_id'  => 26,
                'studio_id' => 1,
                'date'      => '2025-05-29',
                'time'      => '16:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Sleep Call
                'movie_id'  => 27,
                'studio_id' => 2,
                'date'      => '2025-05-29',
                'time'      => '16:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Ipar Adalah Maut
                'movie_id'  => 28,
                'studio_id' => 1,
                'date'      => '2025-05-29',
                'time'      => '19:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Norma
                'movie_id'  => 29,
                'studio_id' => 1,
                'date'      => '2025-05-30',
                'time'      => '10:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Satu Hari Nanti
                'movie_id'  => 30,
                'studio_id' => 2,
                'date'      => '2025-05-30',
                'time'      => '10:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Bila Esok Ibu Tiada
                'movie_id'  => 31,
                'studio_id' => 1,
                'date'      => '2025-05-30',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Laskar Pelangi
                'movie_id'  => 32,
                'studio_id' => 2,
                'date'      => '2025-05-30',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // MIracle in Cell No. 7
                'movie_id'  => 33,
                'studio_id' => 1,
                'date'      => '2025-05-30',
                'time'      => '16:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Sayap Sayap Patah
                'movie_id'  => 34,
                'studio_id' => 2,
                'date'      => '2025-05-30',
                'time'      => '16:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Teman Tapi Menikah
                'movie_id'  => 25,
                'studio_id' => 1,
                'date'      => '2025-05-30',
                'time'      => '19:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Mencuri Raden Saleh
                'movie_id'  => 52,
                'studio_id' => 2,
                'date'      => '2025-05-30',
                'time'      => '19:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Sijjin
                'movie_id'  => 36,
                'studio_id' => 1,
                'date'      => '2025-05-31',
                'time'      => '10:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Pamali: Dusun Pocong
                'movie_id'  => 37,
                'studio_id' => 2,
                'date'      => '2025-05-31',
                'time'      => '10:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Pabrik Gula
                'movie_id'  => 38,
                'studio_id' => 1,
                'date'      => '2025-05-31',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Perewangan
                'movie_id'  => 39,
                'studio_id' => 2,
                'date'      => '2025-05-31',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // PengabdiSetan 2: Communion
                'movie_id'  => 40,
                'studio_id' => 1,
                'date'      => '2025-05-31',
                'time'      => '16:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Mangkujiwo
                'movie_id'  => 41,
                'studio_id' => 2,
                'date'      => '2025-05-31',
                'time'      => '16:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Sewu Dino
                'movie_id'  => 42,
                'studio_id' => 1,
                'date'      => '2025-05-31',
                'time'      => '19:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Hello Ghost
                'movie_id'  => 43,
                'studio_id' => 1,
                'date'      => '2025-06-01',
                'time'      => '10:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Sosok Ketiga
                'movie_id'  => 44,
                'studio_id' => 2,
                'date'      => '2025-06-01',
                'time'      => '10:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Perjanjian Gaib
                'movie_id'  => 45,
                'studio_id' => 1,
                'date'      => '2025-06-01',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Jailangkung: Sandelaka
                'movie_id'  => 46,
                'studio_id' => 2,
                'date'      => '2025-06-01',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // John Wick 3 - Parabellum
                'movie_id'  => 47,
                'studio_id' => 1,
                'date'      => '2025-06-01',
                'time'      => '16:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Extraction II
                'movie_id'  => 48,
                'studio_id' => 2,
                'date'      => '2025-06-01',
                'time'      => '16:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // The Big 4
                'movie_id'  => 49,
                'studio_id' => 1,
                'date'      => '2025-06-01',
                'time'      => '19:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
        ];

        foreach ($schedules as $schedule){
            Schedule::create($schedule);
        }
    }
}
