<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'title' => "Pertaruhan: Kisah Kelam Persaudaraan yang Berjuang Demi Hidup Bapaknya",
                'description' => "
                    Pertaruhan merupakan film drama aksi yang menggambarkan perjuangan keras empat bersaudara yang hidup dalam tekanan ekonomi dan sosial. Setelah ditinggal ibu mereka dan menyaksikan ayah yang sakit keras, mereka harus menanggung beban hidup yang seharusnya belum waktunya mereka pikul. Dalam keterbatasan, keempatnya dipaksa untuk bertumbuh lebih cepat, menghadapi kenyataan pahit bahwa dunia tidak selalu adil bagi mereka yang miskin dan tak berdaya
                    Desakan hidup yang semakin menghimpit membuat mereka mengambil langkah ekstrem: mempertaruhkan masa depan, kebebasan, bahkan nyawa demi menyelamatkan ayah yang menjadi satu-satunya figur keluarga yang tersisa. Film ini menyuguhkan berbagai konflik yang kompleks, mulai dari pertempuran batin hingga konfrontasi brutal dengan kekuatan jahat yang jauh lebih besar dari mereka. Namun di balik itu semua, sorotan utama tetap tertuju pada nilai kekeluargaan yang mengikat erat keempat bersaudara ini.
                    Pertaruhan bukan hanya soal aksi dan kekerasan, tapi juga menyampaikan pesan kuat tentang loyalitas, cinta, dan pengorbanan. Ia menggambarkan bahwa dalam kondisi tersulit sekalipun, keluarga bisa menjadi satu-satunya alasan seseorang untuk tetap bertahan dan melawan. Penonton akan dibawa dalam perjalanan emosional yang menyentuh, penuh ketegangan dan rasa haru, sekaligus menggugah kesadaran akan pentingnya solidaritas dan harapan di tengah keputusasaan
                "
            ],
            [
                'title' => "Jumbo: Film Petualangan Terlaris ke-4 Sepanjang Masa 2025",
                'description' => 
            ],
            [
                'title' => "BUY 1 GET 1 FREE: Gunakan Kode Voucher 'GLITBRUX' ",
                'description' => 
            ],
            [
                'title' => " 'Spider-Man: No Way Home' Pecahkan Rekor Penjualan Tiket Global",
                'description' => 
            ],
            [
                'title' => " 'The Matrix Resurrections' Kembali Hadir di Dunia Sci-Fi",
                'description' => 
            ],
            [
                'title' => " Film Animasi 'Encanto' Sukses Menjadi Favorit Keluarga",
                'description' => 
            ],
            [
                'title' => " 'Spider-Man: No Way Home' Pecahkan Rekor Penjualan Tiket Global",
                'description' => 
            ],
            [
                'title' => " 'Dune' Tampilkan Visual Memukau, Dapat Pujian Dunia Perfilman",
                'description' => 
            ],
            [
                'title' => " Film Drama 'Nomadland' Menangkan Piala Oscar 2021",
                'description' => 
            ],
            [
                'title' => " 'Fast and Furious 10' Tampilkan Aksi Mendebarkan di Layar Lebar",
                'description' => 
            ],
            [
                'title' => " 'The Batman' Hadirkan Interpretasi Baru Sang Pahlawan Kota Gotham",
                'description' => 
            ],

        ]);
    }
}
