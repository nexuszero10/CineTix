<?php

namespace Database\Seeders;

use App\Models\Timeline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timelines = [
            // Now Showing (id: 1–15)
            ['movie_id' => 1, 'status' => 'now_showing', 'start_date' => null],
            ['movie_id' => 2, 'status' => 'now_showing', 'start_date' => null],
            ['movie_id' => 3, 'status' => 'now_showing', 'start_date' => null],
            ['movie_id' => 4, 'status' => 'now_showing', 'start_date' => null],
            ['movie_id' => 5, 'status' => 'now_showing', 'start_date' => null],
            ['movie_id' => 6, 'status' => 'now_showing', 'start_date' => null],
            ['movie_id' => 7, 'status' => 'now_showing', 'start_date' => null],
            ['movie_id' => 8, 'status' => 'now_showing', 'start_date' => null],
            ['movie_id' => 9, 'status' => 'now_showing', 'start_date' => null],
            ['movie_id' => 10, 'status' => 'now_showing', 'start_date' => null],
            ['movie_id' => 11, 'status' => 'now_showing', 'start_date' => null],
            ['movie_id' => 12, 'status' => 'now_showing', 'start_date' => null],
            ['movie_id' => 13, 'status' => 'now_showing', 'start_date' => null],
            ['movie_id' => 14, 'status' => 'now_showing', 'start_date' => null],
            ['movie_id' => 15, 'status' => 'now_showing', 'start_date' => null],

            // Coming Soon (id: 16–20)
            ['movie_id' => 16, 'status' => 'coming_soon', 'start_date' => '2025-06-15'],
            ['movie_id' => 17, 'status' => 'coming_soon', 'start_date' => '2025-06-16'],
            ['movie_id' => 18, 'status' => 'coming_soon', 'start_date' => '2025-06-17'],
            ['movie_id' => 19, 'status' => 'coming_soon', 'start_date' => '2025-06-18'],
            ['movie_id' => 20, 'status' => 'coming_soon', 'start_date' => '2025-06-19'],
        ];

        foreach($timelines as $timelie){
            Timeline::create($timelie);
        }
    }
}
