<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CineTix - Bioskop Profesional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    @vite([
        'resources/css/homepage/native.css',
        'resources/css/homepage/animation.css',
        'resources/css/homepage/responsive.css',
        'resources/js/homepage.js',
    ])
<body>

    <nav class="w-full glass-navbar fixed top-0 left-0 z-50 shadow-lg" data-aos="fade-down" data-aos-duration="1000">
        <div class="w-full px-6 py-3 flex justify-between items-center">
            <!-- Logo -->
            <a href="/" class="text-4xl font-bold brand no-underline">
                <span class="text-[#FF3C3C]">CINE</span><span class="text-yellow-400">Tix</span>
            </a>

            <!-- Desktop -->
            <div class="d-none d-md-flex align-items-center gap-3">
                <a href="#" class="px-4 py-2 rounded-pill bg-[#ff3c61] text-white fw-semibold btn-glow">
                    <i class="fas fa-sign-in-alt me-2"></i> Login
                </a>
                <a href="#" class="px-4 py-2 rounded-pill bg-yellow-400 text-white fw-semibold btn-glow">
                    <i class="fas fa-user-plus me-2"></i> Register
                </a>
            </div>

            <!-- Hamburger -->
            <div class="d-md-none">
                <button id="menu-btn" class="hamburger focus:outline-none">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="d-md-none d-none flex flex-column px-5 pb-4 pt-3 mobile-menu fade-slide">
            <a href="#" class="menu-link">
                <i class="fas fa-sign-in-alt icon-red"></i><span class="text-red">Login</span>
            </a>
            <a href="#" class="menu-link">
                <i class="fas fa-user-plus icon-yellow"></i><span class="text-yellow">Register</span>
            </a>
            <a href="#" class="menu-link">
                <i class="fas fa-film icon-cyan"></i><span class="text-cyan">Film</span>
            </a>
            <a href="#" class="menu-link">
                <i class="fas fa-utensils icon-green"></i><span class="text-green">Food</span>
            </a>
            <a href="#" class="menu-link">
                <i class="fas fa-tags icon-pink"></i><span class="text-pink">Promo</span>
            </a>
            <a href="#" class="menu-link">
                <i class="fas fa-newspaper icon-purple"></i><span class="text-purple">News</span>
            </a>
        </div>
    </nav>

    <div class="h-20"></div>

    <main>
        <div class="cinetix-search-bar">
            <i class="fas fa-search cinetix-search-icon"></i>
            <input class="cinetix-search-input" placeholder="Cari judul film ">
            <div class="cinetix-anim-particles"></div>
        </div>


        <div class="cinetix-category-container">
            <!-- category items as links -->
            <a href="film.html" class="cinetix-category-item">
                <div class="cinetix-category-icon cinetix-cat-film"><i class="fas fa-film"></i></div>
                <div class="cinetix-category-label">Film</div>
            </a>
            <a href="food.html" class="cinetix-category-item">
                <div class="cinetix-category-icon cinetix-cat-food"><i class="fas fa-hamburger"></i></div>
                <div class="cinetix-category-label">Food</div>
            </a>
            <a href="promo.html" class="cinetix-category-item">
                <div class="cinetix-category-icon cinetix-cat-promo"><i class="fas fa-tags"></i></div>
                <div class="cinetix-category-label">Promo</div>
            </a>
            <a href="news.html" class="cinetix-category-item">
                <div class="cinetix-category-icon cinetix-cat-news"><i class="fas fa-newspaper"></i></div>
                <div class="cinetix-category-label">News</div>
            </a>
        </div>
    </main>

    <!-- Container -->
    <div class="container py-4">
        <!-- Slider -->
        <div id="movieCarousel" class="carousel slide carousel-cinematic mb-5" data-bs-ride="carousel">
            <div class="carousel-inner carousel-cinematic-inner">
                <div class="carousel-item active">
                    <img src="https://i.ibb.co.com/xqvdvzgL/bom.jpg" class="d-block w-100" alt="Film 1">
                </div>
                <div class="carousel-item">
                    <img src="https://i.ibb.co.com/rR612Pg4/marvel-slide.webp" class="d-block w-100" alt="Film 2">
                </div>
                <div class="carousel-item">
                    <img src="https://i.ibb.co.com/QvG1DrTb/pengabdi-slide.jpg" class="d-block w-100" alt="Film 3">
                </div>
            </div>

            <button class="carousel-control-prev carousel-cinematic-prev" type="button"
                data-bs-target="#movieCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next carousel-cinematic-next" type="button"
                data-bs-target="#movieCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

            <div class="carousel-indicators carousel-cinematic-indicators">
                <button type="button" data-bs-target="#movieCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#movieCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#movieCarousel" data-bs-slide-to="2"></button>
            </div>
        </div>

        <!-- Sedang Tren -->
        <h2 class="section-title text-white mb-4">Sedang Tren</h2>
        <div class="movie-row">
            <div class="movie-card">
                <div class="age-badge">17+</div>
                <img src="https://i.ibb.co.com/dwnzxTXD/agent.webp" class="movie-poster" alt="Night Agent">
                <div class="movie-info">
                    <div>
                        <h5 class="text-white">The Night Agent</h5>
                        <p class="rating">Rating: 8.2/10</p>
                        <p class="text-light">Agen FBI yang menemukan konspirasi besar setelah menerima panggilan
                            misterius...</p>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="#" class="btn btn-custom btn-sm">Beli Tiket</a>
                        <a href="#" class="btn btn-detail btn-sm">Detail</a>
                    </div>
                </div>
            </div>

            <div class="movie-card">
                <div class="age-badge">17+</div>
                <img src="https://i.ibb.co.com/0yVNV3rz/sekawan.jpg" class="movie-poster" alt="Sekawan Limo">
                <div class="movie-info">
                    <div>
                        <h5 class="text-white">Sekawan Limo</h5>
                        <p class="rating">Rating: 8.1/10</p>
                        <p class="text-light">Sekelompok pemuda menghadapi misteri yang mengancam persahabatan
                            mereka...</p>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="#" class="btn btn-custom btn-sm">Beli Tiket</a>
                        <a href="#" class="btn btn-detail btn-sm">Detail</a>
                    </div>
                </div>
            </div>

            <div class="movie-card">
                <div class="age-badge">17+</div>
                <img src="https://i.ibb.co.com/4ZjDxzKW/dilan.jpg" class="movie-poster" alt="Dilan 1990">
                <div class="movie-info">
                    <div>
                        <h5 class="text-white">Dilan 1990</h5>
                        <p class="rating">Rating: 7.8/10</p>
                        <p class="text-light">Kisah cinta remaja antara Dilan dan Milea yang penuh romantisme khas
                            tahun 90an...</p>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="#" class="btn btn-custom btn-sm">Beli Tiket</a>
                        <a href="#" class="btn btn-detail btn-sm">Detail</a>
                    </div>
                </div>
            </div>



            <div class="movie-card">
                <div class="age-badge">17+</div>
                <img src="https://i.ibb.co.com/cXQVBKpF/jumbo.webp" class="movie-poster" alt="Dilan 1990">
                <div class="movie-info">
                    <div>
                        <h5 class="text-white">Jumbo</h5>
                        <p class="rating">Rating: 9/10</p>
                        <p class="text-light">Kasih Sayang sepanjang masa, semua yang baik akan mendapat kebaikan nya
                            masing masing ... </p>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="#" class="btn btn-custom btn-sm">Beli Tiket</a>
                        <a href="#" class="btn btn-detail btn-sm">Detail</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Film Gila Terbaik Luar Negeri -->
        <div class="container mt-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="section-title mb-3">Film Terbaik Luar Negeri</h2>
                <a href="#" class="see-more-link">Lainnya</a>
            </div>

            <!-- .film-scroll-wrapper -->
            <div class="film-scroll-wrapper">
                <div class="film-item card bg-dark text-white border-0">
                    <img src="https://i.ibb.co.com/tMP2Kk02/avatar.jpg" class="card-img-top rounded" alt="Avatar"
                        style="height: 300px; object-fit: cover;">
                    <div class="card-body text-center">
                        <p class="card-title fw-semibold mt-3 mb-0 p-0">AVATAR</p>
                    </div>
                </div>

                <div class="film-item card bg-dark text-white border-0">
                    <img src="https://i.ibb.co.com/cc6LBR0W/blade.jpg" class="card-img-top rounded"
                        alt="Blade Runner" style="height: 300px; object-fit: cover;">
                    <div class="card-body text-center">
                        <p class="card-title fw-semibold mt-3 mb-0">BLADE RUNNER 2049</p>
                    </div>
                </div>

                <div class="film-item card bg-dark text-white border-0">
                    <img src="https://i.ibb.co.com/3ysTdpVt/spiderman.png" class="card-img-top rounded"
                        alt="Spider-Man" style="height: 300px; object-fit: cover;">
                    <div class="card-body text-center">
                        <p class="card-title fw-semibold mt-3 mb-0">SPIDER-MAN NO WAY HOME</p>
                    </div>
                </div>

                <div class="film-item card bg-dark text-white border-0">
                    <img src="https://i.ibb.co.com/rgWSV8K/avenger.jpg" class="card-img-top rounded" alt="Avengers"
                        style="height: 300px; object-fit: cover;">
                    <div class="card-body text-center">
                        <p class="card-title fw-semibold mt-3 mb-0">AVENGERS INFINITY WAR</p>
                    </div>
                </div>

                <div class="film-item card bg-dark text-white border-0">
                    <img src="https://i.ibb.co.com/Kxx1ZrWG/guardians.webp" class="card-img-top rounded"
                        alt="Guardians" style="height: 300px; object-fit: cover;">
                    <div class="card-body text-center">
                        <p class="card-title fw-semibold mt-3 mb-0">GUARDIANS OF THE GALAXY</p>
                    </div>
                </div>
            </div> 
        </div> <!-- .container -->


        <!-- Section: Yowis Ben : The Series -->
        <section class="film-section py-4">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="section-title">Yowis Ben : The Series</h3>
                    <a href="#" class="see-more-link">Lainnya</a>
                </div>
                <div class="row g-4">
                    <div class="col-12 col-sm-6 col-md-4 text-center">
                        <div class="film-card">
                            <img src="https://i.ibb.co.com/Qjrdt3KC/yowis1.jpg"
                                class="img-fluid rounded shadow-sm poster-img" alt="Yowis Ben 1">
                            <p class="film-title">YOWIS BEN 1 : THE SERIES</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 text-center">
                        <div class="film-card">
                            <img src="https://i.ibb.co.com/hJHpYwJk/yowis2.jpg"
                                class="img-fluid rounded shadow-sm poster-img" alt="Yowis Ben 2">
                            <p class="film-title">YOWIS BEN 2 : THE SERIES</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 text-center">
                        <div class="film-card">
                            <img src="https://i.ibb.co.com/bjvTBmtC/yowis3.jpg"
                                class="img-fluid rounded shadow-sm poster-img" alt="Yowis Ben 3">
                            <p class="film-title">YOWIS BEN 3 : THE SERIES</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION EMOSI FILM -->
        <section class="section-emosi-film mt-0 py-4 text-white">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="fw-bold">Emosional Penuh Misteri</h4>
                    <a href="#" class="see-more-link">Lainnya</a>
                </div>
                <div class="emosi-scroll-wrapper">
                    <div class="card-film-emosi animate-emosi-fade delay-0">
                        <div class="card-film-img">
                            <img src="https://i.ibb.co.com/0Vr32xWS/ipar.png" alt="IPAR ADALAH MAUT">
                        </div>
                        <div class="card-film-body text-center">
                            <p class="film-title fw-semibold">IPAR ADALAH MAUT</p>
                        </div>
                    </div>
                    <div class="card-film-emosi animate-emosi-fade delay-1">
                        <div class="card-film-img">
                            <img src="https://i.ibb.co.com/q3XLBsWg/api.png" alt="MAIN API">
                        </div>
                        <div class="card-film-body text-center">
                            <p class="film-title fw-semibold">MAIN API</p>
                        </div>
                    </div>
                    <div class="card-film-emosi animate-emosi-fade delay-2">
                        <div class="card-film-img">
                            <img src="https://i.ibb.co.com/twzDCwcm/norma.png" alt="NORMA">
                        </div>
                        <div class="card-film-body text-center">
                            <p class="film-title fw-semibold">NORMA</p>
                        </div>
                    </div>
                    <div class="card-film-emosi animate-emosi-fade delay-3">
                        <div class="card-film-img">
                            <img src="https://i.ibb.co.com/0y88rjvz/satu.png" alt="SATU HARI NANTI">
                        </div>
                        <div class="card-film-body text-center">
                            <p class="film-title fw-semibold">SATU HARI NANTI</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--SECTION FILM HOROR-->

        <section class="section-horror-indo py-4">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="fw-bold">Koleksi Film Horor Indonesia</h4>
                    <a href="#" class="see-more-link">Lainnya</a>
                </div>
                <div class="horror-scroll-wrapper">
                    <button class="horror-scroll-button-left">&#8592;</button>
                    <!-- Cards -->
                    <div class="horror-scroll-container">
                        <div class="card-horror-indonesia" style="--delay: 0.4s">
                            <div class="card-horror-img">
                                <img src="https://i.ibb.co.com/LDrgsbyn/sitjin.jpg" alt="SIJJIN">
                            </div>
                            <div class="card-horror-body">
                                <p class="horror-title">SIJJIN</p>
                            </div>
                        </div>

                        <div class="card-horror-indonesia" style="--delay: 0.4s">
                            <div class="card-horror-img">
                                <img src="https://i.ibb.co.com/tp2rFGNC/perewangan.jpg" alt="Perewangan">
                            </div>
                            <div class="card-horror-body">
                                <p class="horror-title">Perewangan</p>
                            </div>
                        </div>

                        <div class="card-horror-indonesia" style="--delay: 0.4s">
                            <div class="card-horror-img">
                                <img src="https://i.ibb.co.com/vvqJFrCk/pamali.png" alt="Pamali">
                            </div>
                            <div class="card-horror-body">
                                <p class="horror-title">Pamali</p>
                            </div>
                        </div>

                        <div class="card-horror-indonesia" style="--delay: 0.4s">
                            <div class="card-horror-img">
                                <img src="https://i.ibb.co.com/fGCmwwqF/pengabdi-setan.png" alt="Pengabdi Setan">
                            </div>
                            <div class="card-horror-body">
                                <p class="horror-title">Pengabdi Setan</p>
                            </div>
                        </div>

                        <div class="card-horror-indonesia" style="--delay: 0.4s">
                            <div class="card-horror-img">
                                <img src="https://i.ibb.co.com/KcRPQN3n/mangkujiwo.jpg" alt="Mangkujiwo">
                            </div>
                            <div class="card-horror-body">
                                <p class="horror-title">Mangkujiwo</p>
                            </div>
                        </div>

                        <div class="card-horror-indonesia" style="--delay: 0.4s">
                            <div class="card-horror-img">
                                <img src="https://i.ibb.co.com/fVddGjkB/sewu.jpg" alt="Sewu Dino">
                            </div>
                            <div class="card-horror-body">
                                <p class="horror-title">Sewu Dino</p>
                            </div>
                        </div>

                        <div class="card-horror-indonesia" style="--delay: 0.4s">
                            <div class="card-horror-img">
                                <img src="https://i.ibb.co.com/gF3wBdt9/ghost.jpg" alt="Hello Ghost">
                            </div>
                            <div class="card-horror-body">
                                <p class="horror-title">Hello Ghost</p>
                            </div>
                        </div>

                        <div class="card-horror-indonesia" style="--delay: 0.4s">
                            <div class="card-horror-img">
                                <img src="https://i.ibb.co.com/kswG8bHD/sosok.jpg" alt="Sosok Ketiga">
                            </div>
                            <div class="card-horror-body">
                                <p class="horror-title">Sosok Ketiga</p>
                            </div>
                        </div>

                        <div class="card-horror-indonesia" style="--delay: 0.4s">
                            <div class="card-horror-img">
                                <img src="https://i.ibb.co.com/21tfYDGk/janji.jpg" alt="Perjanjian Gaib">
                            </div>
                            <div class="card-horror-body">
                                <p class="horror-title">Perjanjian Gaib</p>
                            </div>
                        </div>
                    </div>

                    <!-- End of Cards -->
                    <button class="horror-scroll-button-right">&#8594;</button>
                </div>
            </div>
        </section>

        <!--Section Berita-->

        <section class="container py-5 berita-film text-white">
            <div class="row">
                <!-- HOT NEWS (4 Berita Kiri) -->
                <div class="col-lg-8">
                    <h4 class="fw-bold mb-4">Hot News</h4>

                    <!-- BERITA 1 -->
                    <div class="card mb-4 bg-transparent border-0 berita-item" data-aos="fade-up">
                        <div class="row g-0 align-items-stretch">
                            <div class="col-md-5">
                                <img src="https://i.ibb.co.com/xqvdvzgL/bom.jpg" class="img-fluid rounded-start"
                                    alt="berita 1">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Pertaruhan: Kisah Kelam Persaudaraan yang Berjuang
                                        Demi Hidup Bapaknya</h5>
                                    <small class="text-muted">Selasa, 25 Mei 2025</small>
                                    <p class="card-text mt-2">Menceritakan perjuangan empat bersaudara laki-laki yang
                                        berjuang untuk menyelamatkan ayah mereka...</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BERITA 2 -->
                    <div class="card mb-4 bg-transparent border-0 berita-item" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="row g-0 align-items-stretch">
                            <div class="col-md-5">
                                <img src="https://i.ibb.co.com/4wfRzkM2/jumbo-berita.png"
                                    class="img-fluid rounded-start" alt="berita 2">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Jumbo: Film Petualangan Terlaris ke-4 Sepanjang Masa
                                        2025</h5>
                                    <small class="text-muted">Selasa, 25 Mei 2025</small>
                                    <p class="card-text mt-2">Don, seorang anak yatim piatu yang sering diolok karena
                                        badannya yang besar...</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BERITA 3 -->
                    <div class="card mb-4 bg-transparent border-0 berita-item" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="row g-0 align-items-stretch">
                            <div class="col-md-5">
                                <img src="https://i.ibb.co.com/sdrWrM4r/b1g1.png" class="img-fluid rounded-start"
                                    alt="berita 3">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">BUY 1 GET 1 FREE: Gunakan Kode Voucher “GLITBRUX”
                                    </h5>
                                    <small class="text-muted">Selasa, 25 Mei 2025</small>
                                    <p class="card-text mt-2">Masukkan kode voucher saat pembelian untuk menikmati
                                        penawaran menarik ini...</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BERITA 4 -->
                    <div class="card mb-4 bg-transparent border-0 berita-item" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="row g-0 align-items-stretch">
                            <div class="col-md-5">
                                <img src="https://i.ibb.co.com/pj17fxt0/mandiri.png" class="img-fluid rounded-start"
                                    alt="berita 4">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">PROMO CASHBACK: Gunakan Mandiri Payment</h5>
                                    <small class="text-muted">Selasa, 25 Mei 2025</small>
                                    <p class="card-text mt-2">Promo berlaku untuk transaksi dengan Mandiri Payment.
                                        Jangan lewatkan kesempatan ini...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MORE NEWS -->
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-4">More News</h5>
                    <ul class="list-unstyled more-news-list">
                        <li class="mb-3 border-bottom pb-2" data-aos="fade-left">
                            <a href="#" class="berita-link">Spider-Man: No Way Home" Pecahkan Rekor Penjualan
                                Tiket Global</a>
                        </li>
                        <li class="mb-3 border-bottom pb-2" data-aos="fade-left" data-aos-delay="100">
                            <a href="#" class="berita-link">The Matrix Resurrections" Kembali Hadir di Dunia
                                Sci-Fi</a>
                        </li>
                        <li class="mb-3 border-bottom pb-2" data-aos="fade-left" data-aos-delay="200">
                            <a href="#" class="berita-link">Film Animasi "Encanto" Sukses Menjadi Favorit
                                Keluarga</a>
                        </li>
                        <li class="mb-3 border-bottom pb-2" data-aos="fade-left" data-aos-delay="300">
                            <a href="#" class="berita-link">Dune" Tampilkan Visual Memukau, Dapat Pujian Dunia
                                Perfilman</a>
                        </li>
                        <li class="mb-3 border-bottom pb-2" data-aos="fade-left" data-aos-delay="400">
                            <a href="#" class="berita-link">Film Drama "Nomadland" Menangkan Piala Oscar
                                2021</a>
                        </li>
                        <li class="mb-3 border-bottom pb-2" data-aos="fade-left" data-aos-delay="500">
                            <a href="#" class="berita-link">Fast and Furious 10" Tampilkan Aksi Mendebarkan di
                                Layar Lebar</a>
                        </li>
                        <li class="mb-3 border-bottom pb-2" data-aos="fade-left" data-aos-delay="600">
                            <a href="#" class="berita-link">The Batman" Hadirkan Interpretasi Baru Sang Pahlawan
                                Kota Gotham</a>
                        </li>
                    </ul>

                    <a href="#"
                        class="btn btn-outline-light mt-3 d-inline-flex align-items-center gap-2 transition"
                        data-aos="fade-left" data-aos-delay="700">
                        LIHAT BERITA LAINNYA <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>

        <section class="trailer-film py-5">
            <div class="container">
                <h2 class="text-white mb-5 fw-bold text-center">Video &amp; Trailers</h2>
                <div class="row g-4 justify-content-center">

                    <!-- Video Card 1 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="cinematic-frame position-relative rounded-4 overflow-hidden">
                            <img src="https://img.youtube.com/vi/6GmQqchjTzw/hqdefault.jpg" class="img-fluid w-100"
                                alt="Trailer Modal Nekad" role="button" data-bs-toggle="modal"
                                data-bs-target="#videoModal1">
                            <div class="cinematic-play-btn">
                                <i class="bi bi-play-circle-fill text-white fs-1"></i>
                            </div>
                        </div>
                        <p class="text-white mt-3 fw-semibold text-center cinematic-text">Para Pemeran Di Balik Layar :
                            Modal Nekad</p>
                    </div>

                    <!-- Video Card 2 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="cinematic-frame position-relative rounded-4 overflow-hidden">
                            <img src="https://img.youtube.com/vi/BpvnEiG9bTE/hqdefault.jpg" class="img-fluid w-100"
                                alt="Official Trailer" role="button" data-bs-toggle="modal"
                                data-bs-target="#videoModal2">
                            <div class="cinematic-play-btn">
                                <i class="bi bi-play-circle-fill text-white fs-1"></i>
                            </div>
                        </div>
                        <p class="text-white mt-3 fw-semibold text-center cinematic-text">OFFICIAL TRAILER : Komang</p>
                    </div>

                    <!-- Video Card 3 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="cinematic-frame position-relative rounded-4 overflow-hidden">
                            <img src="https://img.youtube.com/vi/-sAOWhvheK8/hqdefault.jpg" class="img-fluid w-100"
                                alt="Marvel Trailer" role="button" data-bs-toggle="modal"
                                data-bs-target="#videoModal3">
                            <div class="cinematic-play-btn">
                                <i class="bi bi-play-circle-fill text-white fs-1"></i>
                            </div>
                        </div>
                        <p class="text-white mt-3 fw-semibold text-center cinematic-text">Marvel Studios’ Thunderbolts
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Modal Video 1 -->
        <div class="modal fade" id="videoModal1" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content bg-black border-0">
                    <div class="modal-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/6GmQqchjTzw?si=xzaV8S_jodG5-dut"
                                title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen referrerpolicy="strict-origin-when-cross-origin"
                                frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Video 2 -->
        <div class="modal fade" id="videoModal2" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content bg-black border-0">
                    <div class="modal-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/BpvnEiG9bTE?si=k2yqv7MyA247DwPD"
                                title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen referrerpolicy="strict-origin-when-cross-origin"
                                frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Video 3 -->
        <div class="modal fade" id="videoModal3" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content bg-black border-0">
                    <div class="modal-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/-sAOWhvheK8?si=zVHnTov8yyeFGm5B"
                                title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen referrerpolicy="strict-origin-when-cross-origin"
                                frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--PARTNERSHIP-->
        <section class="partner-section">
            <div class="container text-center">
                <h2 class="mb-5 fw-bold text-white">
                    <i class="bi bi-people-fill me-2"></i>PARTNER KAMI
                </h2>

                <!-- Teks Deskripsi dengan Penataan Lebih Elegan -->
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 col-md-10">
                        <div class="partner-description">
                            <p class="text-light fs-4 mb-4">
                                Kami bangga dapat berkolaborasi dengan berbagai perusahaan terkemuka di industri ini.
                                Setiap langkah kami didukung oleh mitra yang memiliki visi dan misi yang sama dalam
                                memberikan solusi terbaik untuk pelanggan kami. Bersama partner- partner ini, kami terus
                                berkembang untuk menghadirkan layanan yang lebih inovatif dan berkualitas.
                            </p>
                            <p class="text-light fs-4">
                                <strong>Berikut adalah partner terpercaya kami yang sangat berperan dalam perjalanan
                                    sukses kami.</strong>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Galeri Logo Partner -->
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 justify-content-center">
                    <div class="col">
                        <div class="partner-logo">
                            <img src="https://i.ibb.co.com/PvL8qs38/webmonei.png" alt="WebMoney">
                        </div>
                    </div>
                    <div class="col">
                        <div class="partner-logo">
                            <img src="https://i.ibb.co.com/HppQthSw/vidio.png" alt="Vidio">
                        </div>
                    </div>
                    <div class="col">
                        <div class="partner-logo">
                            <img src="https://i.ibb.co.com/B53c34ZK/dana.png" alt="DANA">
                        </div>
                    </div>
                    <div class="col">
                        <div class="partner-logo">
                            <img src="https://i.ibb.co.com/2Y0SGrr9/mandiri.webp" alt="mandiri">
                        </div>
                    </div>
                    <div class="col">
                        <div class="partner-logo">
                            <img src="https://i.ibb.co.com/B2Txz8f4/SPAY.png" alt="SPAY">
                        </div>
                    </div>
                    <div class="col">
                        <div class="partner-logo">
                            <img src="https://i.ibb.co.com/LzR2tcH4/ShopPay.png" alt="OPAY">
                        </div>
                    </div>
                    <div class="col">
                        <div class="partner-logo">
                            <img src="https://i.ibb.co.com/Fby5XQ5h/Mastercard.png" alt="Mastercard">
                        </div>
                    </div>
                    <div class="col">
                        <div class="partner-logo">
                            <img src="https://i.ibb.co.com/mrRQjbgV/bni.png" alt="BNI">
                        </div>
                    </div>
                    <div class="col">
                        <div class="partner-logo">
                            <img src="https://i.ibb.co.com/kjnf7Zx/indomaret.png" alt="indomaret">
                        </div>
                    </div>
                    <div class="col">
                        <div class="partner-logo">
                            <img src="https://i.ibb.co.com/tMR4BSG1/seabank.png" alt="seabank">
                        </div>
                    </div>
                    <div class="col">
                        <div class="partner-logo">
                            <img src="https://i.ibb.co.com/gMMyZ95V/netflix.png" alt="netflix">
                        </div>
                    </div>
                    <div class="col">
                        <div class="partner-logo">
                            <img src="https://i.ibb.co.com/FLfFY8cb/alfamart.png" alt="alfa">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Footer-->
        <footer class="text-white pt-16 pb-10 px-6"
            style=" font-family: 'Poppins', sans-serif; opacity: 0; transform: translateY(100px);" id="footer">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-10 border-b border-gray-700 pb-10">

                <!-- Logo & Deskripsi -->
                <div>
                    <div class="flex items-center text-3xl font-extrabold mb-4">
                        <i class="fas fa-film text-red-500 mr-2 animate-pulse"></i>
                        <span>
                            <span class="text-red-500">CINE</span><span class="text-yellow-400">Tix</span>
                        </span>
                    </div>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Platform tiket bioskop dan hiburan modern yang menyatukan kemewahan dan kenyamanan dalam satu
                        klik. Jadikan pengalaman Anda tak terlupakan!
                    </p>
                </div>

                <!-- Navigasi -->
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-yellow-400">Navigasi</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#"
                                class="hover:text-yellow-400 transition duration-300 ease-in-out transform hover:scale-110"><i
                                    class="fas fa-home mr-2 text-yellow-400"></i>Beranda</a></li>
                        <li><a href="#"
                                class="hover:text-red-400 transition duration-300 ease-in-out transform hover:scale-110"><i
                                    class="fas fa-ticket-alt mr-2 text-red-400"></i>Tiket</a></li>
                        <li><a href="#"
                                class="hover:text-green-400 transition duration-300 ease-in-out transform hover:scale-110"><i
                                    class="fas fa-utensils mr-2 text-green-400"></i>Makanan</a></li>
                        <li><a href="#"
                                class="hover:text-blue-400 transition duration-300 ease-in-out transform hover:scale-110"><i
                                    class="fas fa-tags mr-2 text-blue-400"></i>Promo</a></li>
                    </ul>
                </div>

                <!-- Bantuan -->
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-red-400">Bantuan</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#"
                                class="hover:text-red-400 transition duration-300 ease-in-out transform hover:scale-110"><i
                                    class="fas fa-question-circle mr-2 text-red-400"></i>FAQ</a></li>
                        <li><a href="#"
                                class="hover:text-red-400 transition duration-300 ease-in-out transform hover:scale-110"><i
                                    class="fas fa-headset mr-2 text-red-400"></i>Hubungi Kami</a></li>
                        <li><a href="#"
                                class="hover:text-red-400 transition duration-300 ease-in-out transform hover:scale-110"><i
                                    class="fas fa-info-circle mr-2 text-red-400"></i>Tentang Kami</a></li>
                    </ul>
                </div>

                <!-- Sosial Media -->
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-blue-400">Ikuti Kami</h4>
                    <div class="flex gap-5 text-xl">
                        <a href="#"
                            class="hover:text-blue-500 transition duration-300 transform hover:scale-125"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#"
                            class="hover:text-pink-500 transition duration-300 transform hover:scale-125"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#"
                            class="hover:text-sky-400 transition duration-300 transform hover:scale-125"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#"
                            class="hover:text-red-500 transition duration-300 transform hover:scale-125"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center text-sm text-gray-500 mt-8">
                &copy; 2025 <span>CINETix</span>. Hak Cipta Kelompok Kami.
            </div>
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
