<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    public function run(): void
    {
        $baseDate = '2025-06-16'; // Senin

        $scheduleTemplate = [
            'Monday'    => [
                '10:00:00' => [null, 1],
                '13:00:00' => [null, 2],
                '16:00:00' => [null, null],
                '19:00:00' => [null, null],
            ],
            'Tuesday'   => [
                '10:00:00' => [null, 4],
                '13:00:00' => [null, null],
                '16:00:00' => [3, null],
                '19:00:00' => [null, null],
            ],
            'Wednesday' => [
                '10:00:00' => [null, null],
                '13:00:00' => [6, null],
                '16:00:00' => [null, null],
                '19:00:00' => [7, null],
            ],
            'Thursday'  => [
                '10:00:00' => [null, null],
                '13:00:00' => [8, null],
                '16:00:00' => [null, null],
                '19:00:00' => [9, null],
            ],
            'Friday'    => [
                '10:00:00' => [null, null],
                '13:00:00' => [null, null],
                '16:00:00' => [11, null],
                '19:00:00' => [null, 15],
            ],
            'Saturday'  => [
                '10:00:00' => [null, 12],
                '13:00:00' => [null, 13],
                '16:00:00' => [null, null],
                '19:00:00' => [null, null],
            ],
            'Sunday'    => [
                '10:00:00' => [10, null],
                '13:00:00' => [14, null],
                '16:00:00' => [null, null],
                '19:00:00' => [5, null],
            ],
        ];

        $daysOfWeek = array_keys($scheduleTemplate);

        foreach ($daysOfWeek as $i => $dayName) {
            $currentDate = date('Y-m-d', strtotime("$baseDate +$i days"));
            $slots = $scheduleTemplate[$dayName];

            foreach ($slots as $time => [$movieA, $movieB]) {
                // Studio A
                Schedule::create([
                    'movie_id'  => $movieA,
                    'studio_id' => 1,
                    'date'      => $currentDate,
                    'time'      => $time,
                    'day'       => $dayName,
                    'capacity'  => 40,
                    'status'    => $movieA ? 'showing' : 'not_showing',
                ]);

                // Studio B
                Schedule::create([
                    'movie_id'  => $movieB,
                    'studio_id' => 2,
                    'date'      => $currentDate,
                    'time'      => $time,
                    'day'       => $dayName,
                    'capacity'  => 40,
                    'status'    => $movieB ? 'showing' : 'not_showing',
                ]);
            }
        }
    }
}
