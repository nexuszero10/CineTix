<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            [
                'title'        => 'Pabrik Gulan',
                'duration'     => 128,
                'director'     => 'Awi Suryadi',
                'cast'         => 'Arbani Yasiz, Ersya Aurelia, Erika Carlina, Bukie B. Mansyur, Wavi Zihan',
                'realese_date' => 2025,
                'price'        => 45000,
                'synopsis'     => 'A group of seasonal laborers who come to an old sugar factory in the countryside to work during the harvest season.',
                'image_path' => 'storage/images/pabrik-gulan.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/O76onpa-A7Y',
                'category_id'  => 4
            ],
            [
                'title'        => '13 Bom Jakarta',
                'duration'     => 143,
                'director'     => 'Angga Dwimas Sasongko',
                'cast'         => 'Ardhito Pramono, Lutesha, Chicco Kurniawan',
                'realese_date' => 2023,
                'price'        => 45000,
                'synopsis'     => 'An organization races against time to uncover the mastermind behind the placement of 13 bombs in Jakarta before the city falls into chaos',
                'image_path' => 'storage/images/13-bom-jakarta.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/AdjedKX9nas',
                'category_id'  => 3
            ],
            [
                'title'        => 'Sekawan Limo',
                'duration'     => 112,
                'director'     => 'Krishto D. Alam',
                'cast'         => 'Tio Pakusadewo, Adipati Dolken, Aliando Syarief',
                'realese_date' => 2017,
                'price'        => 45000,
                'synopsis'     => 'Four brothers Ibra, Elzan, Amar, and Ical attempting to collect money for their father medical. Always get stalemate, the brothers eventually took a very reckless decision',
                'image_path' => 'storage/images/pertaruhan.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/1QVU66XwgiM',
                'category_id'  => 3
            ],
            [
                'title'        => 'Pertaruhan',
                'duration'     => 106,
                'director'     => 'Bayu Skak',
                'cast'         => 'Bayu Skak, Nadya Arina, Keisya Levronka',
                'realese_date' => 2024,
                'price'        => 45000,
                'synopsis'     => 'Trapped on Mount Madyopuro because they violated a myth, Bagas, Lenni, Dicky, Juna and Andrew became suspicious of each other that one of them was a ghost.',
                'image_path' => 'storage/images/sekawan-limo.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/ERZncVUuKlk',
                'category_id'  => 2
            ],
            [
                'title'        => 'Dilan 1990',
                'duration'     => 107,
                'director'     => 'Fajar Bustomi',
                'cast'         => 'Iqbaal Ramadhan, Vanesha Prescilla, Jeremy Thomas, Tio Pakusadewo',
                'realese_date' => 2018,
                'price'        => 45000,
                'synopsis'     => 'Dilan, a high school student in Bandung, falls in love with Milea, a new girl in town, while navigating the challenges of teenage life in the 90s.',
                'image_path'   => 'storage/images/dilan-1990.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/X_b-wNkz4DU',
                'category_id'  => 2
            ],            
            [
                'title'        => 'Jumbo',
                'duration'     => 102,
                'director'     => 'Ryan Adriandhy',
                'cast'         => 'Budi, Don, Sarah, Rina',
                'realese_date' => 2025,
                'price'        => 45000,
                'synopsis'     => 'Jumbo tells the story of Don, a 10-year-old boy who, after losing his parents, embarks on an adventure with a magical book to find his purpose in life.',
                'image_path'   => 'storage/images/jumbo-film.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/yMqDgbZmBdk',
                'category_id'  => 1, 
            ],
            [
                'title'        => 'Avatar: The Way of Water',
                'duration'     => 192,
                'director'     => 'James Cameron',
                'cast'         => 'Sam Worthington, Zoe Saldaña, Sigourney Weaver, Stephen Lang, Kate Winslet',
                'realese_date' => 2022,
                'price'        => 60000,
                'synopsis'     => 'Jake Sully dan Neytiri kini menjadi orang tua dan hidup damai di Pandora, hingga ancaman baru dari manusia memaksa mereka meninggalkan rumah dan menjelajahi wilayah air serta menghadapi konflik yang lebih besar demi melindungi keluarga dan suku mereka.',
                'image_path'   => 'storage/images/avatar-2.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/d9MyW72ELq0',
                'category_id'  => 3
            ],        
            [
                'title'        => 'Spider-Man: No Way Home',
                'duration'     => 148,
                'director'     => 'Jon Watts',
                'cast'         => 'Tom Holland, Zendaya, Benedict Cumberbatch, Willem Dafoe, Alfred Molina, Andrew Garfield, Tobey Maguire',
                'realese_date' => 2021,
                'price'        => 60000,
                'synopsis'     => 'Setelah identitas Spider-Man terbongkar, Peter Parker meminta bantuan Doctor Strange untuk memperbaikinya. Namun, sihir yang gagal membuka multiverse dan membawa musuh-musuh dari dimensi lain, memaksa Peter menghadapi tantangan terbesar dalam hidupnya.',
                'image_path'   => 'storage/images/spiderman-no-way-home.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/JfVOs4VSpmA',
                'category_id'  => 3
            ],   
            [
                'title'        => 'Blade Runner 2049',
                'duration'     => 164,
                'director'     => 'Denis Villeneuve',
                'cast'         => 'Ryan Gosling, Harrison Ford, Ana de Armas, Jared Leto',
                'realese_date' => 2017,
                'price'        => 60000,
                'synopsis'     => 'Seorang Blade Runner bernama K menemukan rahasia lama yang bisa menghancurkan masyarakat, yang membawanya pada pencarian mantan Blade Runner Rick Deckard yang telah menghilang selama 30 tahun.',
                'image_path'   => 'storage/images/blade-runner-2049.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/gCcx85zbxz4',
                'category_id'  => 4
            ],
            [
                'title'        => 'Avengers: Infinity War',
                'duration'     => 149,
                'director'     => 'Anthony Russo, Joe Russo',
                'cast'         => 'Robert Downey Jr., Chris Hemsworth, Chris Evans, Scarlett Johansson, Josh Brolin',
                'realese_date' => 2018,
                'price'        => 60000,
                'synopsis'     => 'Avengers dan sekutu mereka berjuang melawan Thanos, yang berusaha mengumpulkan semua Infinity Stones untuk melenyapkan separuh kehidupan di alam semesta.',
                'image_path'   => 'storage/images/avengers-infinity-war.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/6ZfuNTqbHE8',
                'category_id'  => 3
            ],
            [
                'title'        => 'Guardians of the Galaxy',
                'duration'     => 121,
                'director'     => 'James Gunn',
                'cast'         => 'Chris Pratt, Zoe Saldaña, Dave Bautista, Vin Diesel, Bradley Cooper',
                'realese_date' => 2014,
                'price'        => 60000,
                'synopsis'     => 'Petualangan sekelompok penjahat ruang angkasa yang bersatu untuk menyelamatkan galaksi dari ancaman Ronan, sang penghancur.',
                'image_path'   => 'storage/images/guardians-of-the-galaxy.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/d96cjJhvlMA',
                'category_id'  => 2
            ],  
            [
                'title'        => 'Yowis Ben',
                'duration'     => 99,
                'director'     => 'Fajar Nugros, Bayu Skak',
                'cast'         => 'Bayu Skak, Brandon Salim, Joshua Suherman, Tutus Thomson',
                'realese_date' => 2018,
                'price'        => 60000,
                'synopsis'     => 'Bayu, seorang pelajar biasa, membentuk band bersama teman-temannya untuk merebut hati gadis pujaan dan menghadapi tantangan hidup remaja.',
                'image_path'   => 'storage/images/yowis-ben-1.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/yeWM2n7LuL4',
                'category_id'  => 2
            ],
            [
                'title'        => 'Yowis Ben 2',
                'duration'     => 102,
                'director'     => 'Fajar Nugros, Bayu Skak',
                'cast'         => 'Bayu Skak, Brandon Salim, Joshua Suherman, Tutus Thomson, Devina Aureel',
                'realese_date' => 2019,
                'price'        => 60000,
                'synopsis'     => 'Setelah sukses di Malang, band Yowis Ben menghadapi konflik internal dan ujian persahabatan saat mencoba menembus pasar nasional.',
                'image_path'   => 'storage/images/yowis-ben-2.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/Tl2Jva5me-E',
                'category_id'  => 2
            ],
            [
                'title'        => 'Yowis Ben 3',
                'duration'     => 108,
                'director'     => 'Fajar Nugros, Bayu Skak',
                'cast'         => 'Bayu Skak, Brandon Salim, Joshua Suherman, Tutus Thomson, Devina Aureel',
                'realese_date' => 2021,
                'price'        => 60000,
                'synopsis'     => 'Konflik cinta dan masa depan karier membuat Bayu harus memilih antara cinta, persahabatan, dan band Yowis Ben yang mulai goyah.',
                'image_path'   => 'storage/images/yowis-ben-3.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/EFqlzkYrjvQ',
                'category_id'  => 2
            ],
            [
                'title'        => 'Ipar Adalah Maut',
                'duration'     => 110,
                'director'     => 'Hanung Bramantyo',
                'cast'         => 'Zee JKT48, Dimas Anggara, Anya Geraldine',
                'realese_date' => 2024,
                'price'        => 60000,
                'synopsis'     => 'Drama keluarga yang mengungkap perselingkuhan antara ipar yang awalnya dekat karena keluarga, berubah menjadi bencana yang mengguncang rumah tangga.',
                'image_path'   => 'storage/images/ipar-adalah-maut.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/x8Xgsz1Ydkw',
                'category_id'  => 4
            ],
            [
                'title'        => 'Main Api',
                'duration'     => 98,
                'director'     => 'Timo Tjahjanto',
                'cast'         => 'Aurora Ribero, Chicco Jerikho, Luna Maya',
                'realese_date' => 2023,
                'price'        => 60000,
                'synopsis'     => 'Seorang wanita terjebak dalam hubungan berbahaya dan penuh rahasia yang memaksanya memilih antara cinta dan keselamatan dirinya.',
                'image_path'   => 'storage/images/main-api.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/Hw2WZr94N7c',
                'category_id'  => 4
            ],
            [
                'title'        => 'Norman',
                'duration'     => 104,
                'director'     => 'Joko Anwar',
                'cast'         => 'Iqbaal Ramadhan, Angga Yunanda, Adhisty Zara',
                'realese_date' => 2025,
                'price'        => 60000,
                'synopsis'     => 'Norman adalah pemuda yang mengalami keanehan setelah sebuah kecelakaan, membuatnya mampu melihat masa depan dalam kilasan-kilasan yang mengubah hidupnya.',
                'image_path'   => 'storage/images/norman.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/A4OjstdB-ao',
                'category_id'  => 3
            ],
            [
                'title'        => 'Satu Hari Nanti',
                'duration'     => 112,
                'director'     => 'Ario Bayu',
                'cast'         => 'Adinia Wirasti, Ringgo Agus Rahman, Ayushita, Deva Mahenra',
                'realese_date' => 2017,
                'price'        => 60000,
                'synopsis'     => 'Dua pasangan muda Indonesia di Swiss menghadapi krisis eksistensial dan hubungan, ketika kehidupan mereka saling bersinggungan dan menguji kesetiaan.',
                'image_path'   => 'storage/images/satu-hari-nanti.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/wKJTQDyCD5I',
                'category_id'  => 3
            ],
            [
                'title'        => 'Mangkujiwo',
                'duration'     => 106,
                'director'     => 'Azhar Kinoi Lubis',
                'cast'         => 'Sujiwo Tejo, Yasamin Jasem, Roy Marten',
                'realese_date' => 2020,
                'price'        => 60000,
                'synopsis'     => 'Asal usul sekte Mangkujiwo yang memanfaatkan ilmu hitam dan kekuatan gaib untuk membalaskan dendam lama.',
                'image_path'   => 'storage/images/mangkujiwo.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/G-F_8OZcQV8',
                'category_id'  => 3
            ],
            [
                'title'        => 'Sewu Dino',
                'duration'     => 103,
                'director'     => 'Kimo Stamboel',
                'cast'         => 'Mikha Tambayong, Marthino Lio, Gisellma Firmansyah',
                'realese_date' => 2023,
                'price'        => 60000,
                'synopsis'     => 'Gadis muda direkrut ke dalam keluarga misterius untuk merawat seseorang yang terkena kutukan Sewu Dino.',
                'image_path'   => 'storage/images/sewu-dino.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/12sXNFbQa6I',
                'category_id'  => 3
            ],
            [
                'title'        => 'Hello Ghost',
                'duration'     => 97,
                'director'     => 'Indra Gunawan',
                'cast'         => 'Onadio Leonardo, Enzy Storia, Indro Warkop',
                'realese_date' => 2023,
                'price'        => 60000,
                'synopsis'     => 'Seorang pria yang ingin mengakhiri hidupnya malah bisa melihat hantu dan harus membantu mereka menyelesaikan urusan duniawi mereka.',
                'image_path'   => 'storage/images/hello-ghost.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/ICoxxRSFFgs',
                'category_id'  => 2
            ],
            [
                'title'        => 'Sosok Ketiga',
                'duration'     => 95,
                'director'     => 'Anggy Umbara',
                'cast'         => 'Celine Evangelista, Samuel Rizal, Erika Carlina',
                'realese_date' => 2023,
                'price'        => 60000,
                'synopsis'     => 'Seorang istri yang baru menikah dihantui oleh kehadiran roh dari masa lalu suaminya.',
                'image_path'   => 'storage/images/sosok-ketiga.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/Uoo5B6uRSco',
                'category_id'  => 3
            ],
            [
                'title'        => 'Perjanjian Gaib',
                'duration'     => 100,
                'director'     => 'Rizal Mantovani',
                'cast'         => 'Denira Wiraguna, Aditya Zoni, Epy Kusnandar',
                'realese_date' => 2023,
                'price'        => 60000,
                'synopsis'     => 'Pasangan muda pindah ke rumah warisan dan menemukan bahwa rumah itu menyimpan perjanjian gaib dengan konsekuensi mengerikan.',
                'image_path'   => 'storage/images/perjanjian-gaib.jpg',
                'url_traileer_embed' => 'https://www.youtube.com/embed/TEIJbYKjUnE',
                'category_id'  => 3
            ],                                           
        ]);
    }
}
