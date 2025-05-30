<?php

namespace Database\Seeders;

use App\Models\Snack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SnackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foods = [
            ['name' => 'Popcorn Asin', 'price' => 25000],
            ['name' => 'Popcorn Mentega', 'price' => 26000],
            ['name' => 'Popcorn Karamel', 'price' => 27000],
            ['name' => 'Popcorn Keju', 'price' => 27000],
            ['name' => 'Popcorn Mix', 'price' => 30000],
            ['name' => 'Chicken Nugget', 'price' => 28000],
        ];

        $drinks = [
            ['name' => 'Cola - Cola', 'price' => 15000],
            ['name' => 'Fanta', 'price' => 15000],
            ['name' => 'Sprite', 'price' => 15000],
            ['name' => 'Fresh Tea', 'price' => 16000],
            ['name' => 'Milkshake Cokelat', 'price' => 20000],
            ['name' => 'Milkshake Vanilla', 'price' => 20000],
            ['name' => 'Milkshake Strawberry', 'price' => 20000],
            ['name' => 'Es Karamel Machiato', 'price' => 23000],
            ['name' => 'Es Kopi Latte', 'price' => 21000],
            ['name' => 'Air Mineral', 'price' => 10000],
        ];

        foreach ($foods as $food) {
            Snack::create([
                'name' => $food['name'],
                'category' => 'food',
                'price' => $food['price'],
            ]);
        }

        foreach ($drinks as $drink) {
            Snack::create([
                'name' => $drink['name'],
                'category' => 'drink',
                'price' => $drink['price'],
            ]);
        }
    }
}
