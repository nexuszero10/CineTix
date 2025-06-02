<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            // trending
            [
                'title'        => 'Sekawan Limo',
                'duration'     => 112,
                'director'     => 'Krishto D. Alam',
                'cast'         => 'Tio Pakusadewo, Adipati Dolken, Aliando Syarief',
                'release_year' => 2017,
                'price'        => 45000,
                'synopsis'     => 'Four brothers Ibra, Elzan, Amar, and Ical attempting to collect money for their father medical. Always get stalemate, the brothers eventually took a very reckless decision',
                'image_path' => 'pertaruhan.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/ERZncVUuKlk',
                'category_id'  => 3
            ],
            [
                'title'        => 'Jumbo',
                'duration'     => 102,
                'director'     => 'Ryan Adriandhy',
                'cast'         => 'Budi, Don, Sarah, Rina',
                'release_year' => 2025,
                'price'        => 45000,
                'synopsis'     => 'Jumbo tells the story of Don, a 10-year-old boy who, after losing his parents, embarks on an adventure with a magical book to find his purpose in life.',
                'image_path'   => 'jumbo-film.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/yMqDgbZmBdk',
                'category_id'  => 1,
            ],
            [
                'title'        => 'Thunderbolts',
                'duration'     => 127,
                'director'     => 'Jake Schereier',
                'cast'         => 'Florence Pugh, Sebastian Stan, Julia Louis-Dreyfus',
                'release_year' => 2025,
                'price'        => 45000,
                'synopsis'     => 'After finding themselves ensnared in a death trap, an unconventional team of antiheroes must go on a dangerous mission that will force them to confront the darkest corners of their pasts.',
                'image_path'   => 'thunderbolts.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/-sAOWhvheK8',
                'category_id'  => 2
            ],
            // Film Terbaik Luar Negeri
            [
                'title'        => 'Avatar: The Way of Water',
                'duration'     => 192,
                'director'     => 'James Cameron',
                'cast'         => 'Sam Worthington, Zoe Saldaña, Sigourney Weaver, Stephen Lang, Kate Winslet',
                'release_year' => 2022,
                'price'        => 40000,
                'synopsis'     => 'Jake Sully dan Neytiri kini menjadi orang tua dan hidup damai di Pandora, hingga ancaman baru dari manusia memaksa mereka meninggalkan rumah dan menjelajahi wilayah air serta menghadapi konflik yang lebih besar demi melindungi keluarga dan suku mereka.',
                'image_path'   => 'avatar-2.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/d9MyW72ELq0',
                'category_id'  => 3
            ],
            [
                'title'        => 'Bad Genius',
                'duration'     => 96,
                'director'     => 'J.C. Lee',
                'cast'         => 'Callina Liang, Benedict Wong, Jabari Banks',
                'release_year' => 2024,
                'price'        => 40000,
                'synopsis'     => 'A group of seniors of an entrepreneurial high school team up to take down a rigged college admissions system.',
                'image_path'   => 'bad-genius.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/0XryxGl8ZNQ',
                'category_id'  => 2
            ],
            [
                'title'        => 'Mickey 17',
                'duration'     => 137,
                'director'     => 'Bong Joon Ho',
                'cast'         => 'CRobert Pattinson, Steven Yeun, Michael Monroe',
                'release_year' => 2025,
                'price'        => 40000,
                'synopsis'     => 'During a human expedition to colonize space, Mickey 17, a so-called "expendable" employee, is sent to explore an ice planet.',
                'image_path'   => 'mickey-17.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/osYpGSz_0i4',
                'category_id'  => 3
            ],

            // Komedi
            [
                'title'        => 'Sesuai Apliaksi',
                'duration'     => 89,
                'director'     => 'Andink Lituwang',
                'cast'         => 'Valentino Peter, Lolox, Titi Kamal',
                'release_year' => 2018,
                'price'        => 35000,
                'synopsis'     => 'Two online motorcycle taxi drivers, Pras and Duras have their own dependents. When the pair of thieves Sakti and Sandra were targeting the diamond belonging to Ci Asiu carried by the dangdut diva Sofiyah.',
                'image_path'   => 'sesuai-aplikasi.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/aPBoctGF0BA',
                'category_id'  => 3
            ],
            [
                'title'        => 'Agak Laen',
                'duration'     => 119,
                'director'     => 'Muhadkly Acho',
                'cast'         => 'Bene Dion Rajagukguk, Oki Rengga, Indra Jegel',
                'release_year' => 2024,
                'price'        => 35000,
                'synopsis'     => "An old man dies in a failing haunted house ride. The operators bury his body on site, turning it into a popular attraction.",
                'image_path'   => 'agak-laen.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/0YLSPyGA4h0',
                'category_id'  => 2
            ],

            // Emosional Penuh Misteri
            [
                'title'        => 'Ipar Adalah Maut',
                'duration'     => 110,
                'director'     => 'Hanung Bramantyo',
                'cast'         => 'Zee JKT48, Dimas Anggara, Anya Geraldine',
                'release_year' => 2024,
                'price'        => 35000,
                'synopsis'     => 'Drama keluarga yang mengungkap perselingkuhan antara ipar yang awalnya dekat karena keluarga, berubah menjadi bencana yang mengguncang rumah tangga.',
                'image_path'   => 'ipar-adalah-maut.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/9M3VN0J5ffM',
                'category_id'  => 4
            ],
            [
                'title'        => 'Norman',
                'duration'     => 134,
                'director'     => 'Guntur Soeharjanto',
                'cast'         => 'Tissa Biani Azzahra, Yusuf Mahardika, Wulan Guritno',
                'release_year' => 2025,
                'price'        => 35000,
                'synopsis'     => 'Norman adalah pemuda yang mengalami keanehan setelah sebuah kecelakaan, membuatnya mampu melihat masa depan dalam kilasan-kilasan yang mengubah hidupnya.',
                'image_path'   => 'norman.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/A4OjstdB-ao',
                'category_id'  => 3
            ],
            [
                'title'        => 'Miracle in Cell No. 7',
                'duration'     => 145,
                'director'     => 'Hanung Bramantyo',
                'cast'         => 'Vino G. Bastian, Graciella Abigail, Mawar Eva de Jongh',
                'release_year' => 2022,
                'price'        => 35000,
                'synopsis'     => 'A mentally ill man faces the consequences of a corrupt Indonesian politician as he is wrongly accused of murder, and all he wishes is to see his daughter again.',
                'image_path'   => 'miracle-in-cell-no-7.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/0uf6QUacVgs',
                'category_id'  => 1
            ],

            // Horror Indonesia
            [
                'title'        => 'Pabrik Gula',
                'duration'     => 133,
                'director'     => 'Awi Suryadi',
                'cast'         => 'Arbani Yasiz, Ersya Aurelia, Erika Carlina, Bukie B. Mansyur, Wavi Zihan',
                'release_year' => 2025,
                'price'        => 40000,
                'synopsis'     => 'A group of seasonal laborers who come to an old sugar factory in the countryside to work during the harvest season.',
                'image_path' => 'pabrik-gulan.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/O76onpa-A7Y',
                'category_id'  => 4
            ],
            [
                'title'        => 'Perewangan',
                'duration'     => 109,
                'director'     => 'Awi Suryadi',
                'cast'         => 'Davina Karamoy, Ully Triani, Shanty',
                'release_year' => 2024,
                'price'        => 40000,
                'synopsis'     => "A girl named Maya who is terrorized by various unusual things. Ironically, Maya's father died. All this terrible terror occurred after Maya's mother fell ill.",
                'image_path'   => 'perewangan.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/u-QOjVp4ob0',
                'category_id'  => 4
            ],
            [
                'title'        => 'Perjanjian Gaib',
                'duration'     => 100,
                'director'     => 'Rizal Mantovani',
                'cast'         => 'Denira Wiraguna, Aditya Zoni, Epy Kusnandar',
                'release_year' => 2023,
                'price'        => 40000,
                'synopsis'     => 'Pasangan muda pindah ke rumah warisan dan menemukan bahwa rumah itu menyimpan perjanjian gaib dengan konsekuensi mengerikan.',
                'image_path'   => 'perjanjian-gaib.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/TEIJbYKjUnE',
                'category_id'  => 3
            ],

            // film action

            [
                'title'        => 'Mencuri Raden Saleh',
                'duration'     => 154,
                'director'     => 'Angga Dwimas Sasongko',
                'cast'         => 'Iqbaal Dhiafakhri Ramadhan, Angga Yunanda, Rachel Amanda',
                'release_year' => 2022,
                'price'        => 40000,
                'synopsis'     => "To save his father, a master forger sets out to steal an invaluable painting with the help of a motley crew of specialists.",
                'image_path'   => 'mencuri-raden-saleh.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/DN3sRz_veBU',
                'category_id'  => 2
            ],

            // film coming soon
            [
                'title'        => 'Avatar 3: Fire and Ash',
                'duration'     => 201,
                'director'     => 'James Cameron',
                'cast'         => 'Kate Winslet, Zoe Saldaña, David Thewlis',
                'release_year' => 2025,
                'price'        => 60000,
                'synopsis'     => "Jake and Neytiri's family grapples with grief after Neteyam's death, encountering a new, aggressive Na'vi tribe, the Ash People, who are led by the fiery Varang, as the conflict on Pandora escalates and a new moral focus emerges.",
                'image_path'   => 'avatar-3-fire-and-ash.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/TNeu5EyGvq8',
                'category_id'  => 2
            ],
            [
                'title'        => 'Wake Up Dead Man',
                'duration'     => 141,
                'director'     => 'Rian Johnson',
                'cast'         => 'Daniel Craig, Josh Brolin, Jeremy Renner',
                'release_year' => 2025,
                'price'        => 60000,
                'synopsis'     => "Benoit Blanc returns for his most dangerous case yet. Sequel to 'Glass Onion (2022)'.",
                'image_path'   => 'wake-up-dead-man.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/sRqU2276eaQ',
                'category_id'  => 2
            ],
            [
                'title'        => 'Anaconda',
                'duration'     => 141,
                'director'     => 'Tom Gormican',
                'cast'         => 'Thandiwe Newton, Paul Rudd, Jack Black',
                'release_year' => 2025,
                'price'        => 60000,
                'synopsis'     => "A group of friends is going through a mid-life crisis. They decide to remake a favorite movie from their youth but encounter unexpected events when they enter the jungle.",
                'image_path'   => 'anaconda.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/AmigPZXfvso',
                'category_id'  => 2
            ],
            [
                'title'        => 'Cinta Tak Seindah Drama Korea',
                'duration'     => 118,
                'director'     => 'Meira Anastasya',
                'cast'         => 'Lutesha, Jerome Kurnia, Ganindra Bimo',
                'release_year' => 2024,
                'price'        => 60000,
                'synopsis'     => "Dhea receives a special gift from her boyfriend, Bimo, in the form of a trip to Seoul, South Korea, with her friends. There, she accidentally meets her long-lost first love. Who will Dhea choose? Will this be a real love triangle drama?",
                'image_path'   => 'cinta-tak-seindah-drama-korea.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/o-S6lNvttno',
                'category_id'  => 2
            ],
            [
                'title'        => 'Sampai Nanti Hanna',
                'duration'     => 110,
                'director'     => 'Agung Sentausa',
                'cast'         => 'Febby Rastanty, Juan Bione Subiantoro, Ibrahim Risyad',
                'release_year' => 2024,
                'price'        => 60000,
                'synopsis'     => "Gani who believes that true love only comes once in a lifetime. On the other hand, Gani has kept his feelings for Hanna for years.",
                'image_path'   => 'sampai-nanti-hanna.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/o-XhqhxsvTB50',
                'category_id'  => 3
            ],
        ];

        foreach ($movies as $movie) {
            Movie::create($movie);
        }
    }
}
