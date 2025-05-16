<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Film - JUMBO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="home_animasi.css">
    <link rel="stylesheet" href="home._responsive.css">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/movie-detail/native.css', 'resources/css/movie-detail/responsive.css'])
    <style>
        * {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        body {
            background-color: #011228;
            color: white;
            font-family: 'Segoe UI', sans-serif;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out both;
        }
    </style>
</head>

<body>
    <nav class="cinetix-navbar">
        <a class="cinetix-navbar-brand-text">
            <span class="cinetix-brand-cine">CINE</span><span class="cinetix-brand-tix">Tix</span>
        </a>

        <div class="cinetix-navbar-right">
            <a class="cinetix-navbar-link">
                <i class="fas fa-handshake cinetix-navbar-icon"></i>Partnership
            </a>
            <a href="login.html" class="btn btn-login">Login</a>
            <a href="register.html" class="btn btn-register">Register</a>
        </div>
    </nav>

    <section class="relative ">
        <!-- Background -->
        <div class="absolute inset-0">
            <img src="{{ asset('storage/images/movies/background/jumbo-bg.jpg') }}" alt="Background Jumbo"
                class="w-full h-full object-cover opacity-50">
        </div>

        <div class="container relative z-10 py-5 w-[90%] mx-auto relative">
            <div class="row align-items-center">
                <!-- Poster -->
                <div class="col-md-3 text-center relative h-[400px]"> <!-- Atur tinggi di sini -->
                    <img src="{{ asset('storage/images/movies/poster/jumbo.jpg') }}" alt="Poster Jumbo"
                        class="w-full h-full object-cover rounded-xl shadow-lg">
                </div>

                <!-- Detail -->
                <div class="col-md-8">
                    <h1 class="text-4xl font-bold mb-3">JUMBO</h1>
                    <div class="flex gap-2 mb-4">
                        <span class="bg-yellow-600 text-black px-2 py-1 rounded font-bold">XXI</span>
                        <span class="bg-red-600 text-white px-2 py-1 rounded font-bold">CGV</span>
                        <span class="bg-blue-700 text-white px-2 py-1 rounded font-bold">Cinépolis</span>
                    </div>
                    <p class="mb-4">
                        Don (Prince Poetriary), anak gemuk yang sering diolok-olok dengan panggilan "Jumbo" ingin
                        membalas perbuatan anak yang suka merundungnya, tapi sesosok arwah bernama Meri (Quinn Salman)
                        meminta pertolongan Don untuk disatukan kembali dengan makam keluarganya yang dirusak.
                    </p>
                    <div class="mt-3">
                        ⭐⭐⭐⭐⭐☆☆☆☆☆ <span class="ms-2 text-white">(318,999 Votes)</span>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex items-center gap-4 mt-4">
                            <button type="button"
                                class="bg-white text-black px-4 py-2 rounded-full font-semibold shadow hover:bg-gray-200 transition-transform duration-300 hover:scale-105"
                                data-bs-toggle="modal" data-bs-target="#trailerModal">WATCH THE TRAILER</button>
                            <span>1h 42min</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="trailerModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content bg-black border-0">
                    <div class="modal-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/yMqDgbZmBdk?si=yoV9R9gSfOYrnPen"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 w-[90%] mx-auto relative">
        <div class="container px-4 mx-auto">
            <h2 class="text-2xl font-bold mb-6 border-b border-gray-300 pb-2 text-white">JUMBO</h2>

            <div class="flex flex-col md:flex-row gap-8">
                <!-- Kiri: Detail Info -->
                <div class="w-full md:w-1/3 text-sm text-white space-y-2">
                    <div class="grid grid-cols-2 border-b border-white/10 py-2">
                        <span class="text-gray-400 font-medium">Director:</span>
                        <span class="text-right">Ryan Adriandhy</span>
                    </div>
                    <div class="grid grid-cols-2 border-white/10 py-2">
                        <span class="text-gray-400 font-medium">Starring:</span>
                        <span class="text-right">Prince Poetriay<br>Quinn Salman</span>
                    </div>
                    <div class="grid grid-cols-2 border-white/10 py-2">
                        <span class="text-gray-400 font-medium">Censor Rating:</span>
                        <span class="text-right">SU</span>
                    </div>
                    <div class="grid grid-cols-2 border-white/10 py-2">
                        <span class="text-gray-400 font-medium">Genre:</span>
                        <span class="text-right">Animation</span>
                    </div>
                    <div class="grid grid-cols-2  border-white/10 py-2">
                        <span class="text-gray-400 font-medium">Language:</span>
                        <span class="text-right">Bahasa Indonesia</span>
                    </div>
                    <div class="grid grid-cols-2  border-white/10 py-2">
                        <span class="text-gray-400 font-medium">Subtitle:</span>
                        <span class="text-right">None</span>
                    </div>
                    <div class="grid grid-cols-2 border-white/10 py-2">
                        <span class="text-gray-400 font-medium">Duration:</span>
                        <span class="text-right">102 Minutes</span>
                    </div>
                </div>

                <!-- Kanan: Cast -->
                <div class="w-full md:w-2/3 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Ulangi blok ini untuk tiap cast -->
                    <div
                        class="flex items-center gap-4 p-3 bg-white/5 rounded-xl shadow-md backdrop-blur-sm hover:scale-105 transition-all duration-300 animate-fadeInUp">
                        <img src="https://i.ibb.co.com/j0TPSdy/don-cast.jpg" alt="Jason Momoa"
                            class="w-14 h-14 rounded-full object-cover shadow">
                        <div>
                            <p class="text-xs text-gray-300">Cast</p>
                            <p class="font-semibold text-white">Den Bagus Satrio Sasono</p>
                        </div>
                    </div>

                    <div
                        class="flex items-center gap-4 p-3 bg-white/5 rounded-xl shadow-md backdrop-blur-sm hover:scale-105 transition-all duration-300 animate-fadeInUp delay-100">
                        <img src="https://i.ibb.co.com/hJbhbY5Q/don-mom-cast.jpg" alt="Jack Black"
                            class="w-14 h-14 rounded-full object-cover shadow">
                        <div>
                            <p class="text-xs text-gray-300">Cast</p>
                            <p class="font-semibold text-white">Bunga Citra Lestari</p>
                        </div>
                    </div>

                    <div
                        class="flex items-center gap-4 p-3 bg-white/5 rounded-xl shadow-md backdrop-blur-sm hover:scale-105 transition-all duration-300 animate-fadeInUp delay-200">
                        <img src="https://i.ibb.co.com/jv8fFG1y/don-father-cast.jpg" alt="Emma Myers"
                            class="w-14 h-14 rounded-full object-cover shadow">
                        <div>
                            <p class="text-xs text-gray-300">Cast</p>
                            <p class="font-semibold text-white">Nazril Irham</p>
                        </div>
                    </div>

                    <div
                        class="flex items-center gap-4 p-3 bg-white/5 rounded-xl shadow-md backdrop-blur-sm hover:scale-105 transition-all duration-300 animate-fadeInUp delay-300">
                        <img src="https://i.ibb.co.com/nMXtcjDP/acil-cast.jpg" alt="Kate McKinnon"
                            class="w-14 h-14 rounded-full object-cover shadow">
                        <div>
                            <p class="text-xs text-gray-300">Cast</p>
                            <p class="font-semibold text-white">Angga Yunanda</p>
                        </div>
                    </div>

                    <div
                        class="flex items-center gap-4 p-3 bg-white/5 rounded-xl shadow-md backdrop-blur-sm hover:scale-105 transition-all duration-300 animate-fadeInUp delay-400">
                        <img src="https://i.ibb.co.com/VWMgwLVk/rusli-cast.jpg" alt="Sebastian Eugene Hansen"
                            class="w-14 h-14 rounded-full object-cover shadow">
                        <div>
                            <p class="text-xs text-gray-300">Cast</p>
                            <p class="font-semibold text-white">Kiki Narendra</p>
                        </div>
                    </div>

                    <div
                        class="flex items-center gap-4 p-3 bg-white/5 rounded-xl shadow-md backdrop-blur-sm hover:scale-105 transition-all duration-300 animate-fadeInUp delay-500">
                        <img src="https://i.ibb.co.com/JRysdVbK/meri-mom-cast.jpg" alt="Matt Berry"
                            class="w-14 h-14 rounded-full object-cover shadow">
                        <div>
                            <p class="text-xs text-gray-300">Cast</p>
                            <p class="font-semibold text-white">Cinta Laura</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="trailer-film py-5">
        <div class="container">
            <h2 class="text-white mb-5 fw-bold text-center">Video &amp; Trailers</h2>
            <div class="row g-4 justify-content-center">

                <!-- Video Card 1 -->
                <div
                    class="w-64 flex-shrink-0 p-3 rounded-xl hover:scale-105 transition-all duration-300 animate-fadeInUp">
                    <div class="relative w-full h-[150px] rounded-lg overflow-hidden">
                        <img src="https://i.ibb.co.com/rG1KR0Hs/bcl.jpg" alt="Video 1"
                            class="object-cover w-full h-full">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/40">
                            <button
                                class="bg-white w-10 h-10 rounded-full text-black flex items-center justify-center shadow">
                                ▶
                            </button>
                        </div>
                    </div>
                    <p class="mt-2 text-sm font-medium text-white">BCL - Selalu Ada di Nadimu</p>
                </div>

                <!-- Ulangi blok di atas -->
                <div
                    class="w-64 flex-shrink-0 p-3  rounded-xl hover:scale-105 transition-all duration-300 animate-fadeInUp delay-100">
                    <div class="relative w-full h-[150px] rounded-lg overflow-hidden">
                        <img src="https://i.ibb.co.com/nKVn6CV/teaser-jumbo.jpg" alt="Video 2"
                            class="object-cover w-full h-full">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/40">
                            <button
                                class="bg-white w-10 h-10 rounded-full text-black flex items-center justify-center shadow">
                                ▶
                            </button>
                        </div>
                    </div>
                    <p class="mt-2 text-sm font-medium text-white">Official Teaser Trailer - JUMBO</p>
                </div>

                <div
                    class="w-64 flex-shrink-0 p-3 rounded-xl hover:scale-105 transition-all duration-300 animate-fadeInUp delay-200">
                    <div class="relative w-full h-[150px] rounded-lg overflow-hidden">
                        <img src="https://i.ibb.co.com/396z7p8d/download-4.jpg" alt="Video 3"
                            class="object-cover w-full h-full">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/40">
                            <button
                                class="bg-white w-10 h-10 rounded-full text-black flex items-center justify-center shadow">
                                ▶
                            </button>
                        </div>
                    </div>
                    <p class="mt-2 text-sm font-medium text-white">Official Trailer 1</p>
                </div>

                <div
                    class="w-64 flex-shrink-0 p-3 rounded-xl hover:scale-105 transition-all duration-300 animate-fadeInUp delay-300">
                    <div class="relative w-full h-[150px] rounded-lg overflow-hidden">
                        <img src="https://i.ibb.co.com/xtmrk0QR/download-5.jpg" alt="Video 4"
                            class="object-cover w-full h-full">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/40">
                            <button
                                class="bg-white w-10 h-10 rounded-full text-black flex items-center justify-center shadow">
                                ▶
                            </button>
                        </div>
                    </div>
                    <p class="mt-2 text-sm font-medium text-white">Dialog Oma Yang Bikin Ngena Di Hati</p>
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
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/0LvE0XeAvrQ?si=cdD36zXZa49M1L7e"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/YW3sQ16oksY?si=ZeCIpZTMzBFjt4A_"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Video 3-->
    <div class="modal fade" id="videoModal3" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-black border-0">
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/6sbUuHw0Y-4?si=RZaYNWthEGIAU3Cl"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Video 4 -->
    <div class="modal fade" id="videoModal4" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-black border-0">
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/xwjcgBSfG04?si=v5B9G5bfnTfNDUN8"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <footer class="text-white pt-16 pb-10 px-6"
        style=" font-family: 'Poppins', sans-serif; opacity: 1; transform: translateY(100px);" id="footer">
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
                    <a href="#" class="hover:text-blue-500 transition duration-300 transform hover:scale-125"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-pink-500 transition duration-300 transform hover:scale-125"><i
                            class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-sky-400 transition duration-300 transform hover:scale-125"><i
                            class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-red-500 transition duration-300 transform hover:scale-125"><i
                            class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center text-sm text-gray-500 mt-8">
            &copy; 2025 <span>CINETix</span>. Hak Cipta Kelompok Kami.
        </div>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
