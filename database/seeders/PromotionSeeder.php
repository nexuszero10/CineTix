<?php

namespace Database\Seeders;

use App\Models\Promotion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $promotions = [
            [
                'code' => 'NONGKRONG',
                'type' => 'harga',
                'minimum_price' => 50000,
                'discount' => 5000,
            ],
            [
                'code' => 'NOBAR',
                'type' => 'harga',
                'minimum_price' => 125000,
                'discount' => 10000,
            ],
            [
                'code' => 'RAMEAN',
                'type' => 'harga',
                'minimum_price' => 250000,
                'discount' => 15000,
            ],
            [
                'code' => 'SOLO',
                'type' => 'diskon',
                'minimum_price' => 50000,
                'discount' => 5,
            ],
            [
                'code' => 'SQUAD',
                'type' => 'diskon',
                'minimum_price' => 150000,
                'discount' => 10,
            ],
            [
                'code' => 'PARTY',
                'type' => 'diskon',
                'minimum_price' => 250000,
                'discount' => 15,
            ],
        ];

        foreach ($promotions as $promo){
            Promotion::create($promo);
        }
    }
}
