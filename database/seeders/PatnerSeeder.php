<?php

namespace Database\Seeders;

use App\Models\Patner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $patners = [
            ['name' => 'Shopee Pay', 'image' => 'shopee-pay.png'],
            ['name' => 'Gopay', 'image' => 'goapy.png'],
            ['name' => 'OVO', 'image' => 'ovo.png'],
            ['name' => 'BNI', 'image' => 'bni.png'],
            ['name' => 'DANA', 'image' => 'dana.png'],
            ['name' => 'Mandiri', 'image' => 'mandiri.png'],
            ['name' => 'Sea Bank', 'image' => 'seabank.png'],
            ['name' => 'Mater Card', 'image' => 'master-card.png'],
            ['name' => 'QRIS', 'image' => 'qris.png'],
            ['name' => 'Danamon', 'image' => 'danamaon.png'],
            ['name' => 'Alfamrt', 'image' => 'alfamart.png'],
            ['name' => 'Indomaret', 'image' => 'indomaret.png'],
        ];

        foreach ($patners as $patner){
            Patner::create($patner);
        }
    }
}
