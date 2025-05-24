<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
usE App\Models\Movie;

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
                'title'        => 'Uncharted',
                'duration'     => 116,
                'director'     => 'Ruben Fiescher',
                'cast'         => 'Tom Holland, Mark Wahlberg, Antonio Banderas',
                'release_year' => 2022,
                'price'        => 45000,
                'synopsis'     => 'Street-smart Nathan Drake is recruited by seasoned treasure hunter Victor "Sully" Sullivan to recover a fortune amassed by Ferdinand Magellan, and lost 500 years ago by the House of Moncada.',
                'image_path' => 'uncharted.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/eHp3MbsCbMg',
                'category_id'  => 2
            ],
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
                'title'        => 'Dilan 1990',
                'duration'     => 107,
                'director'     => 'Fajar Bustomi',
                'cast'         => 'Iqbaal Ramadhan, Vanesha Prescilla, Jeremy Thomas, Tio Pakusadewo',
                'release_year' => 2018,
                'price'        => 45000,
                'synopsis'     => 'Dilan, a high school student in Bandung, falls in love with Milea, a new girl in town, while navigating the challenges of teenage life in the 90s.',
                'image_path'   => 'dilan-1990.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/X_b-wNkz4DU',
                'category_id'  => 2
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
            [
                'title'        => 'Back In Action',
                'duration'     => 114,
                'director'     => 'Seth Gordon',
                'cast'         => 'Jamie Foxx, Cameron Diaz, McKenna Roberts',
                'release_year' => 2025,
                'price'        => 45000,
                'synopsis'     => 'Former CIA spies Emily and Matt are pulled back into espionage after their secret identities are exposed.',
                'image_path'   => 'back-in-action.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/MV2nYw6gL_w',
                'category_id'  => 2
            ],
            [
                'title'        => 'Bullet Train',
                'duration'     => 127,
                'director'     => 'David Leitch',
                'cast'         => 'Brad Pittm, Joey King, Aaron Taylor-Johnson',
                'release_year' => 2022,
                'price'        => 45000,
                'synopsis'     => 'Five assassins aboard a swiftly-moving bullet train find out that their missions have something in common.',
                'image_path'   => 'bullet-train.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/0IOsk2Vlc4o',
                'category_id'  => 3
            ],
            [
                'title'        => 'Edge of Tomorrow',
                'duration'     => 113,
                'director'     => 'Doug Liman',
                'cast'         => 'Tom Cruise, Emily Blunt, Bill Paxton',
                'release_year' => 2014,
                'price'        => 45000,
                'synopsis'     => 'A man fighting in a war against aliens must relive the same day every time he dies until he can find a way to stop their power source with the help of an elite soldier.',
                'image_path'   => 'edge-of-tomorrow.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/yUmSVcttXnI',
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
                'title'        => 'Blade Runner 2049',
                'duration'     => 164,
                'director'     => 'Denis Villeneuve',
                'cast'         => 'Ryan Gosling, Harrison Ford, Ana de Armas, Jared Leto',
                'release_year' => 2017,
                'price'        => 40000,
                'synopsis'     => 'Seorang Blade Runner bernama K menemukan rahasia lama yang bisa menghancurkan masyarakat, yang membawanya pada pencarian mantan Blade Runner Rick Deckard yang telah menghilang selama 30 tahun.',
                'image_path'   => 'blade-runner-2049.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/gCcx85zbxz4',
                'category_id'  => 4
            ],     
            [
                'title'        => 'Spider-Man: No Way Home',
                'duration'     => 148,
                'director'     => 'Jon Watts',
                'cast'         => 'Tom Holland, Zendaya, Benedict Cumberbatch, Willem Dafoe, Alfred Molina, Andrew Garfield, Tobey Maguire',
                'release_year' => 2021,
                'price'        => 40000,
                'synopsis'     => 'Setelah identitas Spider-Man terbongkar, Peter Parker meminta bantuan Doctor Strange untuk memperbaikinya. Namun, sihir yang gagal membuka multiverse dan membawa musuh-musuh dari dimensi lain, memaksa Peter menghadapi tantangan terbesar dalam hidupnya.',
                'image_path'   => 'spiderman-no-way-home.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/JfVOs4VSpmA',
                'category_id'  => 3
            ],  
            [
                'title'        => 'Avengers: Infinity War',
                'duration'     => 149,
                'director'     => 'Anthony Russo, Joe Russo',
                'cast'         => 'Robert Downey Jr., Chris Hemsworth, Chris Evans, Scarlett Johansson, Josh Brolin',
                'release_year' => 2018,
                'price'        => 40000,
                'synopsis'     => 'Avengers dan sekutu mereka berjuang melawan Thanos, yang berusaha mengumpulkan semua Infinity Stones untuk melenyapkan separuh kehidupan di alam semesta.',
                'image_path'   => 'avengers-infinity-war.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/6ZfuNTqbHE8',
                'category_id'  => 3
            ], 
            [
                'title'        => 'Guardians of the Galaxy',
                'duration'     => 121,
                'director'     => 'James Gunn',
                'cast'         => 'Chris Pratt, Zoe Saldaña, Dave Bautista, Vin Diesel, Bradley Cooper',
                'release_year' => 2014,
                'price'        => 40000,
                'synopsis'     => 'Petualangan sekelompok penjahat ruang angkasa yang bersatu untuk menyelamatkan galaksi dari ancaman Ronan, sang penghancur.',
                'image_path'   => 'guardians-of-the-galaxy.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/d96cjJhvlMA',
                'category_id'  => 2
            ], 
            [
                'title'        => 'God the Father',
                'duration'     => 121,
                'director'     => 'Simon Fellows',
                'cast'         => 'Tom Benedict Knight, Amanda Fernando Stevens, Robert Ashby',
                'release_year' => 2014,
                'price'        => 40000,
                'synopsis'     => 'Michael Franzese, the son of John "Sonny" Franzese, an underboss of the Colombo crime family, recounts his spiritual transformation.',
                'image_path'   => 'god-the-father.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/noyP7PeIc_w',
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
                'title'        => 'Guardians of the Galaxy Vol. 2',
                'duration'     => 136,
                'director'     => 'James Gunn',
                'cast'         => 'Chris Pratt, Zoe Saldaña, Dave Bautista',
                'release_year' => 2017,
                'price'        => 40000,
                'synopsis'     => "The Guardians struggle to keep together as a team while dealing with their personal family issues, notably Star-Lord's encounter with his father, the ambitious celestial being Ego.",
                'image_path'   => 'guardians-of-galaxy-vol-2.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/wUn05hdkhjM',
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
                'title'        => 'Yowis Ben',
                'duration'     => 99,
                'director'     => 'Fajar Nugros, Bayu Skak',
                'cast'         => 'Bayu Skak, Brandon Salim, Joshua Suherman, Tutus Thomson',
                'release_year' => 2018,
                'price'        => 35000,
                'synopsis'     => 'Bayu, seorang pelajar biasa, membentuk band bersama teman-temannya untuk merebut hati gadis pujaan dan menghadapi tantangan hidup remaja.',
                'image_path'   => 'yowis-ben-1.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/PvjiH2U6G-Q',
                'category_id'  => 2
            ],
            [
                'title'        => 'Yowis Ben 2',
                'duration'     => 102,
                'director'     => 'Fajar Nugros, Bayu Skak',
                'cast'         => 'Bayu Skak, Brandon Salim, Joshua Suherman, Tutus Thomson, Devina Aureel',
                'release_year' => 2019,
                'price'        => 35000,
                'synopsis'     => 'Setelah sukses di Malang, band Yowis Ben menghadapi konflik internal dan ujian persahabatan saat mencoba menembus pasar nasional.',
                'image_path'   => 'yowis-ben-2.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/mkHCkYvgRVo',
                'category_id'  => 2
            ],
            [
                'title'        => 'Yowis Ben 3',
                'duration'     => 108,
                'director'     => 'Fajar Nugros, Bayu Skak',
                'cast'         => 'Bayu Skak, Brandon Salim, Joshua Suherman, Tutus Thomson, Devina Aureel',
                'release_year' => 2021,
                'price'        => 35000,
                'synopsis'     => 'Konflik cinta dan masa depan karier membuat Bayu harus memilih antara cinta, persahabatan, dan band Yowis Ben yang mulai goyah.',
                'image_path'   => 'yowis-ben-3.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/r3dNhAPE4TQ',
                'category_id'  => 2
            ],
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
                'title'        => 'Kaka Boss',
                'duration'     => 121,
                'director'     => 'Arie Kriting',
                'cast'         => 'Godfred Orindeod, Glory Hillary, Ernest Prakasa',
                'release_year' => 2024,
                'price'        => 35000,
                'synopsis'     => 'Centers on a ruthless debt collector experiencing a change of heart and pursuing his passion for singing.',
                'image_path'   => 'kaka-boss.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/H-KcoVgkEbE',
                'category_id'  => 2
            ],
            [
                'title'        => 'Gampang Cuan',
                'duration'     => 118,
                'director'     => 'Rahabi Mandra',
                'cast'         => 'Vino G. Bastian, Anya Geraldine, Alzi Markers',
                'release_year' => 2023,
                'price'        => 35000,
                'synopsis'     => "Amidst the family's never-ending financial difficulties, Sultan and his younger sister, Bilqis, must overcome their late father's massive debt",
                'image_path'   => 'gampang-cuan.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/hVUm7hqesek',
                'category_id'  => 1
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
            [
                'title'        => 'Ngeri Ngeri Sedap',
                'duration'     => 114,
                'director'     => 'Bene Dion Rajagukguk',
                'cast'         => 'Arswendy Bening Swara, Tika Panggabean, Boris Bokir',
                'release_year' => 2022,
                'price'        => 35000,
                'synopsis'     => "A married couple stages their divorce in order to encourage their estranged adult children to return to their hometown.",
                'image_path'   => 'ngeri-ngeri-sedap.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/io5YgKdEON8',
                'category_id'  => 2
            ], 
            [
                'title'        => 'Pasutri Gaje',
                'duration'     => 109,
                'director'     => 'Fajar Bustomi',
                'cast'         => 'Reza Rahadian, Bunga Citra Lestari, Indro Warkop',
                'release_year' => 2024,
                'price'        => 35000,
                'synopsis'     => "The hustle and bustle of the newlyweds, Adimas and Adelia, is full of domestic drama mixed with hilarious behavior from both of them.",
                'image_path'   => 'pasutri-gaje.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/6JH7j9XSrNY',
                'category_id'  => 2
            ], 
    
            // Emosional Penuh Misteri
            [
                'title'        => 'Sleep Call',
                'duration'     => 100,
                'director'     => 'Fajar Nugros',
                'cast'         => 'Laura Basuki, Juan Bio One, Kristo Immanuel, Bront Palarae',
                'release_year' => 2023,
                'price'        => 35000,
                'synopsis'     => 'Dina, seorang wanita terjerat utang pinjol, menemukan pelarian dari kesepiannya melalui hubungan dengan pria misterius di aplikasi kencan, hingga semuanya menjadi mimpi buruk.',
                'image_path'   => 'sleep-call.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/zcvYRcx5FKo',
                'category_id'  => 4
            ],
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
                'title'        => 'Satu Hari Nanti',
                'duration'     => 112,
                'director'     => 'Salman Aristo',
                'cast'         => 'Adinia Wirasti, Ringgo Agus Rahman, Ayushita, Deva Mahenra',
                'release_year' => 2017,
                'price'        => 35000,
                'synopsis'     => 'Dua pasangan muda Indonesia di Swiss menghadapi krisis eksistensial dan hubungan, ketika kehidupan mereka saling bersinggungan dan menguji kesetiaan.',
                'image_path'   => 'satu-hari-nanti.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/wKJTQDyCD5I',
                'category_id'  => 3
            ],
            [
                'title'        => 'Bila Esok Ibu Tiasa',
                'duration'     => 104,
                'director'     => 'Rudy Soedjarwo',
                'cast'         => 'Christine Hakim, Adinia Wirasti, Fedi Nuril',
                'release_year' => 2024,
                'price'        => 35000,
                'synopsis'     => 'The story of 4 children who are starting to get busy with their own lives. Small problems always become big conflicts. Their mother, whose heart is broken, is confused about what to do. She just misses the laughter and harmony like before.',
                'image_path'   => 'bila-esok-ibu-tiada.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/UQURtWvSt9o',
                'category_id'  => 2
            ],
            [
                'title'        => 'Larkar Pelangi',
                'duration'     => 124,
                'director'     => 'Riri Riza',
                'cast'         => 'Cut Mini Theo, Zulfanny, Ikranagara',
                'release_year' => 2008,
                'price'        => 35000,
                'synopsis'     => 'In the 1970s, a group of 10 students struggles with poverty and develop hopes for the future in Gantong Village on the farming and tin mining island of Belitung off the east coast of Sumatra',
                'image_path'   => 'laskar-pelangi.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/9mJDLWp3W1Y',
                'category_id'  => 1
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
            [
                'title'        => 'Sayap Sayap Patah',
                'duration'     => 110,
                'director'     => 'Rudy Soedjarwo',
                'cast'         => 'Nicholas Saputra, Ariel Tatum, Iwa K.',
                'release_year' => 2022,
                'price'        => 35000,
                'synopsis'     => 'When violence erupts at a detention center, a police officer combats armed prisoners - as his wife goes into labor without him. Inspired by real events.',
                'image_path'   => 'sayap-sayap-patah.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/jiK1A3BhEBQ',
                'category_id'  => 2
            ],
            [
                'title'        => 'Teman Tapi Menikah',
                'duration'     => 102,
                'director'     => 'Rako Prijanto, Andhika Triyadi',
                'cast'         => 'Adipati Dolken, Vanesha Prescilla, Refal Hady',
                'release_year' => 2018,
                'price'        => 35000,
                'synopsis'     => "Ayudia (Vanesha Prescilla) and Ditto (Adipati Dolken) have been best friends for 12 years. And for all those times, Ditto has been secretly in love with her. Until one day, Ayudia told him that she's gonna get married.",
                'image_path'   => 'teman-tapi-menikah.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/8CpvovvXlLQ',
                'category_id'  => 1
            ],

            // Horror Indonesia
            [
                'title'        => 'Sijjin',
                'duration'     => 100,
                'director'     => 'Dradah Daeang Ratu',
                'cast'         => 'Ibrahim Risyad, Anggika Bolsterli, Messi Gusti',
                'release_year' => 2023,
                'price'        => 40000,
                'synopsis'     =>" A young woman who uses black magic to threaten her cousin's wife.",
                'image_path'   => 'sijjin.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/WyU4MbsCjYo',
                'category_id'  => 2
            ],
            [
                'title'        => 'Pamali: Dusun Pocong',
                'duration'     => 97,
                'director'     => 'Bobby Prasetyo',
                'cast'         => 'Fajar Nugra, Yasamin Jasem, Arla Ai-lani',
                'release_year' => 2023,
                'price'        => 40000,
                'synopsis'     =>" A gravedigger and students breaking a taboo by whistling at night face a horde of pocong apparitions.",
                'image_path'   => 'pamali-dusun-pocong.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/noFWKx8laVA',
                'category_id'  => 2
            ],
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
                'title'        => 'Pengabdi Setan 2: Communion',
                'duration'     => 119,
                'director'     => 'Joko Anwar',
                'cast'         => 'Tara Basro, Endy Arfian, Nasar Annuz',
                'release_year' => 2022,
                'price'        => 40000,
                'synopsis'     => "When the heavy storm hits, it wasn't the storm that a family should fear but the people and non-human entities who are out for them.",
                'image_path'   => 'pengabdi-setan-2.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/8LIHcd7WfWI?si',
                'category_id'  => 4
            ], 
            [
                'title'        => 'Mangkujiwo',
                'duration'     => 106,
                'director'     => 'Azhar Kinoi Lubis',
                'cast'         => 'Sujiwo Tejo, Yasamin Jasem, Roy Marten',
                'release_year' => 2020,
                'price'        => 40000,
                'synopsis'     => 'Asal usul sekte Mangkujiwo yang memanfaatkan ilmu hitam dan kekuatan gaib untuk membalaskan dendam lama.',
                'image_path'   => 'mangkujiwo.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/G-F_8OZcQV8',
                'category_id'  => 3
            ],
            [
                'title'        => 'Sewu Dino',
                'duration'     => 103,
                'director'     => 'Kimo Stamboel',
                'cast'         => 'Mikha Tambayong, Marthino Lio, Gisellma Firmansyah',
                'release_year' => 2023,
                'price'        => 40000,
                'synopsis'     => 'Gadis muda direkrut ke dalam keluarga misterius untuk merawat seseorang yang terkena kutukan Sewu Dino.',
                'image_path'   => 'sewu-dino.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/12sXNFbQa6I',
                'category_id'  => 3
            ],
            [
                'title'        => 'Hello Ghost',
                'duration'     => 97,
                'director'     => 'Indra Gunawan',
                'cast'         => 'Onadio Leonardo, Enzy Storia, Indro Warkop',
                'release_year' => 2023,
                'price'        => 40000,
                'synopsis'     => 'Seorang pria yang ingin mengakhiri hidupnya malah bisa melihat hantu dan harus membantu mereka menyelesaikan urusan duniawi mereka.',
                'image_path'   => 'hello-ghost.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/ICoxxRSFFgs',
                'category_id'  => 2
            ],
            [
                'title'        => 'Sosok Ketiga',
                'duration'     => 95,
                'director'     => 'Anggy Umbara',
                'cast'         => 'Celine Evangelista, Samuel Rizal, Erika Carlina',
                'release_year' => 2023,
                'price'        => 40000,
                'synopsis'     => 'Seorang istri yang baru menikah dihantui oleh kehadiran roh dari masa lalu suaminya.',
                'image_path'   => 'sosok-ketiga.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/Uoo5B6uRSco',
                'category_id'  => 3
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
            [
                'title'        => 'Jailangkung: sandekala',
                'duration'     => 92,
                'director'     => 'Kimo Stamboel',
                'cast'         => 'Titi Kamal, Dwi Sasono, Syifa Hadju',
                'release_year' => 2022,
                'price'        => 40000,
                'synopsis'     => 'The supernatural terror centers on a small family consisting of Adrian and his wife Sandra, along with their two children, Niki and Kinan, who are on vacation out of town.',
                'image_path'   => 'jailangkung-sandekala.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/LdLSid_nOh0',
                'category_id'  => 2
            ],

            // film action
            [
                'title'        => 'John Wick 3 - Parabellum',
                'duration'     => 130,
                'director'     => 'Chad Stahelski',
                'cast'         => 'Keanu Reeves, Halle Berry, Ian McShane',
                'release_year' => 2019,
                'price'        => 40000,
                'synopsis'     => "John Wick is on the run after killing a member of the international assassins' guild, and with a $14 million price tag on his head, he is the target of hit men and women everywhere.",
                'image_path'   => 'john-wick-3-parabellum.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/M7XM597XO94',
                'category_id'  => 3
            ],
            [
                'title'        => 'Extraction II',
                'duration'     => 122,
                'director'     => 'Sam Hargrave',
                'cast'         => 'Chris Hemsworth, Golshifteh Farahani, Adam Bessa',
                'release_year' => 2023,
                'price'        => 40000,
                'synopsis'     => "After barely surviving his grievous wounds from his mission in Dhaka, Bangladesh, Tyler Rake is back, and his team is ready to take on their next mission.",
                'image_path'   => 'extraction-ii.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/mO0OuR26IZM',
                'category_id'  => 3
            ],
            [
                'title'        => 'The Big 4',
                'duration'     => 121,
                'director'     => 'Timo Tjahjanto',
                'cast'         => 'Abimana Aryasatya, Putri Marino, Lutesha',
                'release_year' => 2022,
                'price'        => 40000,
                'synopsis'     => "A by-the-book detective investigates the death of her father and follows a clue to a remote tropical island, only to find out his true identity as a leader of a group of assassins",
                'image_path'   => 'the-big-4.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/TTXS8Vy7f6I',
                'category_id'  => 3
            ],
            [
                'title'        => 'Ben & Jody',
                'duration'     => 114,
                'director'     => 'Angga Dwimas Sasongko',
                'cast'         => 'Chicco Jerikho, Rio Dewanto, Hana Malasan',
                'release_year' => 2022,
                'price'        => 40000,
                'synopsis'     => "Since deciding to leave Filosofi Kopi, Ben has lived in his hometown and actively defending farmer groups whose lands have been taken over by the Company.",
                'image_path'   => 'ben-and-jody.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/RHTrW0LN3E4',
                'category_id'  => 2
            ],
            [
                'title'        => 'The Night Comes for Us',
                'duration'     => 121,
                'director'     => 'Timo Tjahjanto',
                'cast'         => 'Iko Uwais, Sunny Pang, Joe Taslim',
                'release_year' => 2018,
                'price'        => 40000,
                'synopsis'     => "Ito, a gangland enforcer, is caught amidst a treacherous and violent insurrection within his Triad crime family upon his return home from a stint abroad.",
                'image_path'   => 'the-night-comes-for-us.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/O8CFn_8u9Hk',
                'category_id'  => 4
            ],
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
        ];

        foreach ($movies as $movie){
            Movie::create($movie);
        }
    }
}
