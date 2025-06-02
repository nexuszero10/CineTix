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
                // sekawan limo
                'movie_id'  => 1,
                'studio_id' => 2,
                'date'      => '2025-06-02',
                'time'      => '10:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Jumbo
                'movie_id'  => 2,
                'studio_id' => 2,
                'date'      => '2025-06-02',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Thunderbolts
                'movie_id'  => 3,
                'studio_id' => 1,
                'date'      => '2025-06-02',
                'time'      => '16:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Avatar The Way Of Water
                'movie_id'  => 4,
                'studio_id' => 2,
                'date'      => '2025-06-03',
                'time'      => '10:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Bad Genius
                'movie_id'  => 5,
                'studio_id' => 1,
                'date'      => '2025-06-04',
                'time'      => '10:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Mickey 17
                'movie_id'  => 6,
                'studio_id' => 1,
                'date'      => '2025-06-04',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Sesuai Aplikasi
                'movie_id'  => 7,
                'studio_id' => 1,
                'date'      => '2025-06-04',
                'time'      => '19:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Agak Laen
                'movie_id'  => 8,
                'studio_id' => 1,
                'date'      => '2025-06-05',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Ipar Adalah Maut
                'movie_id'  => 9,
                'studio_id' => 1,
                'date'      => '2025-06-05',
                'time'      => '19:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Norma
                'movie_id'  => 10,
                'studio_id' => 1,
                'date'      => '2025-06-06',
                'time'      => '10:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // MIracle in Cell No. 7
                'movie_id'  => 11,
                'studio_id' => 1,
                'date'      => '2025-06-06',
                'time'      => '16:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Mencuri Raden Saleh
                'movie_id'  => 12,
                'studio_id' => 2,
                'date'      => '2025-06-06',
                'time'      => '19:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Pabrik Gula
                'movie_id'  => 13,
                'studio_id' => 1,
                'date'      => '2025-06-07',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Perewangan
                'movie_id'  => 14,
                'studio_id' => 2,
                'date'      => '2025-06-07',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
            [
                // Perjanjian Gaib
                'movie_id'  => 15,
                'studio_id' => 1,
                'date'      => '2025-06-08',
                'time'      => '13:00:00',
                'day'       => '',
                'capacity'  => 40,
                'status'    => 'ongoing',
            ],
        ];

        foreach ($schedules as $schedule) {
            Schedule::create($schedule);
        }
    }
}
