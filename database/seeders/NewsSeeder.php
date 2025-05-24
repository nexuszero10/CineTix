<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            // hot news 
            [
                'title' => "13 BOM DI JAKARTA MELEDAK !!!",
                'description' => "Film 13 Bom di Jakarta merupakan salah satu film sukses yang diadaptasi dari peristiwa nyata. Film ini berkisah tentang serangkaian bom mengancam keamanan warga Jakarta. Badan Intelijen dan agen rahasia segera menyelidiki, mengarahkan mereka pada Oscar dan William. Namun, misi mereka menjadi rumit ketika kecurigaan penyusup muncul dalam tim.
                Film 13 Bom di Jakarta merupakan salah satu film sukses yang diadaptasi dari peristiwa nyata. Film ini berkisah tentang serangkaian bom mengancam keamanan warga Jakarta. Badan Intelijen dan agen rahasia segera menyelidiki, mengarahkan mereka pada Oscar dan William. Namun, misi mereka menjadi rumit ketika kecurigaan penyusup muncul dalam tim.
                Ketegangan mencapai puncaknya ketika lokasi bom ke-13 berhasil ditemukan, tepat di jantung kota. Oscar dan William harus mengambil keputusan berani untuk menjinakkan bom dan mengungkap identitas sebenarnya sang penyusup. Film ini menyuguhkan ketegangan nonstop, intrik, serta pesan mendalam tentang pengorbanan dan kesetiaan. 13 Bom di Jakarta bukan sekadar aksi, tapi juga potret perjuangan melawan ancaman dari dalam.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Jumbo: Film Petualangan Terlaris ke-4 Sepanjang Masa 2025",
                'description' => "Film Jumbo mencatatkan sejarah baru dalam industri perfilman global dengan menjadi film petualangan terlaris ke-4 sepanjang masa pada tahun 2025. Disutradarai oleh Ava Renshaw dan diproduksi oleh studio raksasa NovaPix, Jumbo berhasil meraih pendapatan lebih dari 2,1 miliar dolar AS di seluruh dunia hanya dalam waktu tiga bulan penayangan. Film ini memikat penonton dengan perpaduan epik antara visual CGI mutakhir, alur cerita emosional, dan karakter utama seekor gajah raksasa cerdas yang berjuang menyelamatkan hutan dari kehancuran.
                Cerita Jumbo berfokus pada petualangan Maya, seorang gadis muda yang bersahabat dengan seekor gajah langka bernama Jumbo. Bersama-sama, mereka menjelajahi wilayah liar yang penuh bahaya demi mencegah perusahaan tambang jahat menghancurkan tanah kelahiran mereka. Dengan pesan kuat tentang perlindungan lingkungan dan kekuatan persahabatan, film ini mampu menyentuh hati berbagai kalangan usia. Kritikus memuji penulisan naskah yang solid, akting memikat, dan sinematografi memukau yang membuat Jumbo menjadi pengalaman sinematik tak terlupakan.
                Kesuksesan besar Jumbo bukan hanya terlihat dari sisi komersial, tetapi juga dari pengaruh budayanya. Film ini menginspirasi berbagai gerakan sosial dan kampanye pelestarian alam di media sosial, serta mendapat pujian dari organisasi lingkungan internasional. Merchandise bertema Jumbo laris manis di pasaran, dan rencana untuk sekuel maupun serial spin-off sudah diumumkan oleh NovaPix. Dengan pencapaian luar biasa ini, Jumbo membuktikan bahwa film petualangan yang bermakna masih memiliki tempat spesial di hati penonton dunia.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Pengabdi Setan 2: Communion, Gugatan Sosial dalam Selubung Horor",
                'description' => "Rayakan pembukaan resmi website kami dengan promo spesial: **BUY 1 GET 1 FREE** untuk semua tiket film! Gunakan kode voucher **CINETIX1G1** saat checkout dan nikmati pengalaman nonton seru bareng orang terdekat tanpa biaya tambahan. Promo ini berlaku untuk waktu terbatas, jadi jangan sampai ketinggalan!
                Dalam Pengabdi Setan 2: Communion, Joko Anwar menghadirkan lebih dari sekadar horor biasa. Di balik suasana mencekam dan nuansa kelam, terselip kritik terhadap relasi sosial, peran keluarga, hingga jarak antara masyarakat dan kekuasaan. Simbolisme dan atmosfer yang dibangun tak hanya membuat penonton tegang, tetapi juga mengajak berpikir tentang isu-isu kemanusiaan yang sering luput dari perhatian.
                Siapa sangka, di antara jerit ketakutan para penonton, tersembunyi narasi tentang kegelisahan sosial yang nyata. Film ini berhasil mengemas kritik sosial dalam balutan kisah horor yang kuat, menjadikannya bukan sekadar tontonan menegangkan, tetapi juga renungan akan dampak dari tindakan dan kelalaian manusia itu sendiri.",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // more news
            [
                'title' => "'Spider-Man: No Way Home' Pecahkan Rekor Penjualan Tiket Global",
                'description' => "'Spider-Man: No Way Home' mencatatkan prestasi luar biasa dengan memecahkan rekor penjualan tiket secara global. Film ini berhasil menarik jutaan penonton hanya dalam minggu pertama penayangannya. Antusiasme penggemar terlihat dari antrean panjang di bioskop seluruh dunia.
                Kombinasi nostalgia, aksi spektakuler, dan kejutan dari kemunculan karakter ikonik membuat film ini menjadi perbincangan hangat. Kritikus memuji kualitas cerita dan penampilan para aktor yang mengesankan. Efek visual yang memukau juga menambah pengalaman sinematik yang luar biasa.
                Dengan pencapaian tersebut, 'Spider-Man: No Way Home' masuk dalam jajaran film terlaris sepanjang masa. Studio Marvel dan Sony pun merencanakan kelanjutan dari semesta Spider-Man. Film ini membuktikan bahwa pahlawan super masih memiliki tempat istimewa di hati para penonton dunia.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "'The Matrix Resurrections' Kembali Hadir di Dunia Sci-Fi",
                'description' => "'The Matrix Resurrections' kembali hadir dengan alur cerita yang penuh misteri dan aksi futuristik. Film ini menyajikan kelanjutan dari saga legendaris yang menggabungkan teknologi dan filosofi dengan cara yang memukau. Penonton diajak menyelami dunia simulasi dan pertarungan antara manusia dan mesin dengan tingkat visual efek yang tinggi.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Film Animasi 'Encanto' Sukses Menjadi Favorit Keluarga",
                'description' => "Film animasi Encanto berhasil mencuri hati penonton dan menjadi favorit keluarga di seluruh dunia. Cerita hangat tentang keluarga Madrigal yang unik menyentuh banyak kalangan, dari anak-anak hingga orang dewasa. Lagu-lagu khas dari Lin-Manuel Miranda pun langsung melejit di tangga lagu global.
                Visual yang penuh warna dan budaya Kolombia yang kental menjadi daya tarik tersendiri bagi penonton. Setiap karakter memiliki kekuatan unik yang mencerminkan dinamika keluarga yang beragam. Keindahan animasi dan pesan moral yang kuat membuat Encanto mudah dikenang.
                Kesuksesan Encanto juga dibuktikan dengan berbagai penghargaan bergengsi yang berhasil diraih. Film ini menjadi pilihan utama untuk tontonan keluarga selama liburan. Encanto telah membuktikan bahwa keajaiban sejati datang dari dalam keluarga itu sendiri.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "'Dune' Tampilkan Visual Memukau, Dapat Pujian Dunia Perfilman",
                'description' => "Film Dune berhasil mencuri perhatian dunia dengan tampilan visualnya yang luar biasa. Setiap adegan disajikan dengan sinematografi megah dan detail dunia fiksi yang sangat imersif. Penonton dibuat terpukau oleh lanskap gurun planet Arrakis yang begitu nyata.
                Sutradara Denis Villeneuve mendapat banyak pujian atas keberhasilannya mengadaptasi novel legendaris karya Frank Herbert. Alur cerita yang kompleks berhasil disajikan dengan narasi yang kuat dan karakter yang mendalam. Aktor-aktor papan atas tampil gemilang dan memperkuat nuansa epik film ini.
                Pujian dari kritikus dan pencinta film datang dari berbagai penjuru dunia. Dune dianggap sebagai salah satu pencapaian sinematik terbaik dalam genre fiksi ilmiah modern. Film ini tidak hanya menjadi tontonan, tetapi juga pengalaman visual yang tak terlupakan.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Film Drama 'Nomadland' Menangkan Piala Oscar 2021",
                'description' => "Film drama Nomadland meraih kemenangan besar di ajang Piala Oscar 2021 dengan menyabet penghargaan Film Terbaik. Disutradarai oleh Chloé Zhao, film ini mengisahkan perjalanan seorang wanita yang hidup sebagai nomaden modern di Amerika. Cerita yang sederhana namun penuh makna berhasil menyentuh hati penonton dan kritikus.
                Penampilan Frances McDormand sebagai tokoh utama dipuji karena kejujuran dan kekuatan emosionalnya. Suasana sepi dan alam terbuka yang ditampilkan dalam film memberi nuansa reflektif yang mendalam. Gaya dokumenter yang digunakan menambah kesan nyata dan intim dalam setiap adegan.
                Kemenangan Nomadland menjadi simbol apresiasi terhadap kisah-kisah manusia biasa yang jarang diangkat. Film ini membuka ruang bagi genre drama kehidupan yang kontemplatif dan minim efek visual. Dengan keberhasilannya, Nomadland mengukuhkan diri sebagai karya sinema yang autentik dan penuh makna.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "'Fast and Furious 10' Tampilkan Aksi Mendebarkan di Layar Lebar",
                'description' => "Fast and Furious 10 kembali menghadirkan aksi penuh adrenalin yang memukau di layar lebar. Dari kejar-kejaran mobil berkecepatan tinggi hingga ledakan spektakuler, film ini tak henti-hentinya memacu detak jantung penonton. Dominic Toretto dan timnya kembali menunjukkan kekompakan dalam misi berbahaya yang menantang batas logika.
                Cerita dalam film ini menggabungkan unsur keluarga, pengkhianatan, dan balas dendam dengan intensitas tinggi. Lokasi syuting internasional menambah daya tarik visual dan skala aksi yang lebih besar dari sebelumnya. Setiap karakter mendapat porsi peran yang kuat, termasuk beberapa wajah baru yang langsung mencuri perhatian.
                Sebagai bagian dari waralaba yang telah berjalan lebih dari dua dekade, Fast X membuktikan bahwa aksi ekstrem masih diminati. Penonton global menyambut antusias, terbukti dari penjualan tiket yang tinggi di berbagai negara. Film ini sukses menjaga identitasnya sebagai tontonan aksi spektakuler yang tak pernah membosankan.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "'The Batman' Hadirkan Interpretasi Baru Sang Pahlawan Kota Gotham",
                'description' => "The Batman memperkenalkan versi baru dari sosok pahlawan Kota Gotham yang lebih gelap dan mendalam. Dibintangi oleh Robert Pattinson, film ini menampilkan sisi emosional Bruce Wayne yang penuh trauma dan misteri. Gaya noir yang kental memberi nuansa detektif yang berbeda dari film-film Batman sebelumnya.
                Sutradara Matt Reeves sukses menghadirkan atmosfer suram yang khas, lengkap dengan musik mencekam dan sinematografi bergaya klasik. Pertarungan intens dan penyelidikan rumit menjadikan The Batman lebih dari sekadar film superhero. Karakter penjahat seperti Riddler dan Penguin ditampilkan dengan pendekatan realistis dan menyeramkan.
                Penonton dan kritikus memberikan pujian tinggi atas pendekatan segar ini terhadap ikon DC Comics. Film ini dianggap berhasil menyegarkan waralaba Batman dengan nuansa yang lebih manusiawi dan relevan. The Batman membuktikan bahwa pahlawan kegelapan masih memiliki banyak sisi yang belum terungkap.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
