<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CINETix - Movie List</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    @vite(['resources/css/movie-detail/native.css', 'resources/js/movie-detail.js', 'resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="pt-32">
    <nav class="w-full fixed top-0 left-0 z-50 shadow-lg bg-[#011C3C]/70 backdrop-blur-md border-b border-white/10">
        <div class="max-w-screen-xl mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Logo -->
            <a href="{{ route('CineTix.homepage') }}"
                class="text-3xl font-bold tracking-wide flex items-center logo-hover transition">
                <span class="text-[#FF3C3C]">CINE</span><span class="text-yellow-400">Tix</span>
            </a>

            <!-- Desktop Button -->
            <div class="hidden md:flex items-center space-x-4">

                @guest
                    <!-- Register & Login when not authenticated -->
                    <a href="{{ route('register') }}"
                        class="px-5 py-2 rounded-full bg-[#ffcc00] font-bold text-base flex items-center gap-2 btn-shimmer">
                        <i class="fas fa-user-plus"></i> Register
                    </a>
                    <a href="{{ route('login') }}"
                        class="px-5 py-2 rounded-full text-yellow-400 border border-yellow-400 font-bold text-base flex items-center gap-2 btn-shimmer">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                @endguest

                @auth
                    <!-- Username & Icon -->
                    <div class="flex items-center gap-2">
                        <a href="{{ route('dashboard') }}" class="hover:underline text-white">
                            {{ Auth::user()->username }}
                        </a>
                        <!-- SVG Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-9" viewBox="0 0 512 512">
                            <path fill="#ffffff"
                                d="M399 384.2C376.9 345.8 335.4 320 288 320l-64 0c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z" />
                        </svg>
                    </div>
                @endauth

            </div>

            <!-- Mobile Menu Toggle -->
            <button id="menu-toggle" class="md:hidden focus:outline-none hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden px-6 pb-4">
            <div class="flex flex-col gap-4 text-white text-lg pl-4">

                <a href="#" class="flex items-center gap-3 mobile-link hover:text-red-600">
                    <i class="fas fa-sign-in-alt text-red-600"></i> <span class="font-bold">Login</span>
                </a>
                <a href="#" class="flex items-center gap-3 mobitulisale-link hover:text-yellow-600">
                    <i class="fas fa-user-plus text-yellow-600"></i> <span class="font-bold">Register</span>
                </a>

                <a href="#"
                    class="flex items-center gap-3 mobile-link hover:text-cyan-400 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-film text-cyan-400 text-xl"></i> <span class="font-bold">Film</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 mobile-link hover:text-emerald-400 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-utensils text-emerald-400 text-xl"></i> <span class="font-bold">Food</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 mobile-link hover:text-fuchsia-400 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-tags text-fuchsia-400 text-xl"></i> <span class="font-bold">Promo</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 mobile-link hover:text-violet-600 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-newspaper text-violet-600 text-xl"></i> <span class="font-bold">News</span>
                </a>
            </div>
        </div>
    </nav>


    <!-- Serach by Title -->
    <div class="container max-w-md mx-auto">
        <div class="relative">
            <input type="text" id="searchInput"
                class="form-control bg-[#1a2332] text-white pl-10 pr-4 py-2 rounded w-full text-sm placeholder-gray-400 border border-gray-600 focus:ring-2 focus:bg-[#1a2332]"
                placeholder="Cari film..." data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off">
            <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
            <ul id="searchDropdown"
                class="dropdown-menu w-100 bg-[#1a2332] mt-2 rounded shadow-lg text-sm text-white divide-y divide-gray-700"
                style="max-height: 200px; overflow-y: auto;">
            </ul>
        </div>
    </div>

    <!-- Search By Genre -->

    <!-- Search By Category -->


    <!-- Setion Nav Tab By Timelines -->
    <section class="py-2 w-[90%] my-7 mx-auto">
        <div class="flex gap-4 text-sm justify-start pl-12">
            <button id="tabNowShowing" class="py-2 px-4 rounded-full font-semibold bg-yellow-400 text-black"
                onclick="showTab('now-showing')">Now Showing</button>
            <button id="tabComingSoon" class="py-2 px-4 rounded-full font-semibold bg-[#0e1726] text-yellow-400"
                onclick="showTab('coming-soon')">Coming Soon</button>
        </div>
    </section>


    <!-- Film Now Showing -->
    <section id="contentNowShowing">
        <div class="container mt-5 mx-auto">
            <div class="d-flex justify-content-between align-items-center mb-3 w-[92%] mx-auto">
                <h2 class="font-semibold text-xl mb-7 text-white">Film Sedang Tayang</h2>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-5 px-3 ">
                @foreach ($nowShowing as $movie)
                    <div
                        class="relative group overflow-hidden rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:translate-y-1 hover:cursor-pointer bg-black">
                        <img src="{{ asset('storage/images/movies/poster/' . $movie->image_path) }}"
                            alt="{{ $movie->title }}"
                            class="w-full h-full object-cover brightness-90 transition duration-300 ease-in-out" />

                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 text-sm hidden group-hover:block transition duration-300">
                            <h3 class="text-lg font-bold">{{ $movie->title }}</h3>

                            @php
                                $genreList =
                                    $movie->genres->count() > 1
                                        ? $movie->genres->take(3)->pluck('genre_name')->implode(', ')
                                        : $movie->genres->pluck('genre_name')->first();
                            @endphp
                            <p class="text-sm">{{ $genreList }}</p>

                            @php
                                $hours = floor($movie->duration / 60);
                                $minutes = $movie->duration % 60;
                            @endphp
                            <p class="text-xs mt-1">{{ $hours }}h {{ $minutes }}m •
                                {{ $movie->category->category_name }}</p>

                            <a href="{{ route('CineTix.movie-detail', ['id' => $movie->id]) }}"
                                class="inline-block mt-2 px-3 py-0.5 text-m bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Film Coming Soon -->
    <section id="contentComingSoon">
        <div class="container mt-5 mx-auto">
            <div class="d-flex justify-content-between align-items-center mb-3 w-[92%] mx-auto">
                <h2 class="font-semibold text-xl mb-7 text-white">Film Coming Soon</h2>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-5 px-3 ">
                @foreach ($comingSoon as $movie)
                    <div
                        class="relative group overflow-hidden rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:translate-y-1 hover:cursor-pointer bg-black">
                        <img src="{{ asset('storage/images/movies/poster/' . $movie->image_path) }}"
                            alt="{{ $movie->title }}"
                            class="w-full h-full object-cover brightness-90 transition duration-300 ease-in-out" />

                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 text-sm hidden group-hover:block transition duration-300">
                            <h3 class="text-lg font-bold">{{ $movie->title }}</h3>

                            @php
                                $genreList =
                                    $movie->genres->count() > 1
                                        ? $movie->genres->take(3)->pluck('genre_name')->implode(', ')
                                        : $movie->genres->pluck('genre_name')->first();
                            @endphp
                            <p class="text-sm">{{ $genreList }}</p>

                            @php
                                $hours = floor($movie->duration / 60);
                                $minutes = $movie->duration % 60;
                            @endphp
                            <p class="text-xs mt-1">{{ $hours }}h {{ $minutes }}m •
                                {{ $movie->category->category_name }}</p>

                            <a href="{{ route('CineTix.movie-detail', ['id' => $movie->id]) }}"
                                class="inline-block mt-2 px-3 py-0.5 text-m bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer class="text-white px-6 md:px-16 py-10 text-sm">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">

            <!-- CINETix -->
            <div>
                <a href="#"
                    class="text-2xl font-bold text-white flex items-center space-x-2 hover:text-yellow-400 hover:drop-shadow-[0_0_6px_rgba(255,255,0,0.6)] transition duration-200">
                    <i data-lucide="film" class="w-7 h-7 text-red-500"></i>
                    <span><span class="text-red-500">CINE</span><span class="text-yellow-400">Tix</span></span>
                </a>
                <p class="text-gray-300 mt-4 leading-relaxed">
                    Platform tiket bioskop dan hiburan modern yang menyatukan kemewahan dan kenyamanan. Jadikan
                    pengalaman Anda
                    tak terlupakan!
                </p>
            </div>

            <!-- Navigasi -->
            <div class="hidden md:block">
                <h3 class="text-lg font-bold text-yellow-400 mb-3">Navigasi</h3>
                <ul class="space-y-3 text-gray-200 font-semibold">
                    <li>
                        <a href="#"
                            class="flex items-center space-x-2 group hover:text-sky-400 transition duration-200">
                            <i data-lucide="video" class="w-5 h-5 text-sky-300 group-hover:text-sky-400"></i>
                            <span>Film</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center space-x-2 group hover:text-rose-400 transition duration-200">
                            <i data-lucide="utensils" class="w-5 h-5 text-rose-300 group-hover:text-rose-400"></i>
                            <span>Food</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center space-x-2 group hover:text-yellow-400 transition duration-200">
                            <i data-lucide="percent" class="w-5 h-5 text-yellow-300 group-hover:text-yellow-400"></i>
                            <span>Promo</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center space-x-2 group hover:text-green-400 transition duration-200">
                            <i data-lucide="newspaper" class="w-5 h-5 text-green-300 group-hover:text-green-400"></i>
                            <span>News</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Bantuan -->
            <div>
                <h3 class="text-lg font-bold text-rose-400 mb-3">Bantuan</h3>
                <ul class="space-y-3 text-gray-200 font-semibold">
                    <li>
                        <a href="#"
                            class="flex items-center space-x-2  hover:text-rose-400 transition duration-200">
                            <i data-lucide="help-circle" class="w-5 h-5 group-hover:text-white"></i>
                            <span>FAQ</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center space-x-2  hover:text-rose-400 transition duration-200">
                            <i data-lucide="headphones" class="w-5 h-5 group-hover:text-white"></i>
                            <span>Hubungi Kami</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center space-x-2  hover:text-rose-400 transition duration-200">
                            <i data-lucide="info" class="w-5 h-5 group-hover:text-white"></i>
                            <span>Tentang Kami</span>
                        </a>
                    </li>
                </ul>
            </div>


            <!-- Ikuti Kami -->
            <div>
                <h3 class="text-lg font-bold text-sky-400 mb-3">Ikuti Kami</h3>
                <div class="flex space-x-4">
                    <a href="#" class="transition duration-200 group">
                        <i data-lucide="facebook" class="w-5 h-5 text-white group-hover:text-[#1877F2]"></i>
                    </a>
                    <a href="#" class="transition duration-200 group">
                        <i data-lucide="instagram" class="w-5 h-5 text-white group-hover:text-[#C13584]"></i>
                    </a>
                    <a href="#" class="transition duration-200 group">
                        <i data-lucide="twitter" class="w-5 h-5 text-white group-hover:text-[#1DA1F2]"></i>
                    </a>
                    <a href="#" class="transition duration-200 group">
                        <i data-lucide="youtube" class="w-5 h-5 text-white group-hover:text-[#FF0000]"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Garis -->
        <hr class="my-8 border-gray-700 max-w-7xl mx-auto" />

        <!-- Copyright -->
        <p class="text-center text-gray-400 text-sm">
            © 2025 <span class="font-semibold">CINETix</span>. Hak Cipta Kelompok 7
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        lucide.createIcons();
        AOS.init();
    </script>
    <script>
        const filmList = [
            "Avatar",
            "Blade Runner 2049",
            "Spider-Man No Way Home",
            "Avengers Infinity War",
            "Guardians of the Galaxy",
            "The Godfather",
            "The Dark Knight",
            "12 Angry Men",
            "The Lord of the Rings: The Return of the King",
            "The Shawshank Redemption",
            "YOWIS BEN 1 : THE SERIES",
            "YOWIS BEN 2 : THE SERIES",
            "YOWIS BEN 3 : THE SERIES",
            "Lara Ati",
            "Cocote Tonggo",
            "Sekawan Limo",
            "SIJJIN",
            "Perewangan",
            "Pamali",
            "Pengabdi Setan",
            "Mangkujiwo",
            "Sewu Dino",
            "Hello Ghost",
            "Perjanjian Gaib",
            "Passing",
            "Trauma",
            "Lalu",
            "Suatu Hari Nanti",
            "Lily",
            "Ininnawa",
            "Diana",
            "Sosok Ketiga",
            "Le Film de Mon Père",
            "Sly Lives",
            "Luther: Never Too Much",
            "Dahomey",
            "Year of the Cat",
            "Jumbo",
            "The Motherload",
            "We Were the Scenery",
            "Wallace & Gromit",
            "The Wild Robot",
            "Leo",
            "The Sea Beast",
            "Tastefully Yours",
            "Bad Influence",
            "Love Unlike in K-Dramas (Cinta Tak Seindah Drama Korea)",
            "Sampai Jumpa, Selamat Tinggal",
            "The Architecture of Love",
            "Heartbreak Motel",
            "Eleanor the Great",
            "The Phoenician Scheme",
            "Sentimental Value",
            "Kung Fu Panda 4",
            "Wish",
            "No Other Land",
            "Ocean",
            "Elemental",
            "Migration",
            "Nimona"
        ];

        const searchInput = document.getElementById("searchInput");
        const searchDropdown = document.getElementById("searchDropdown");

        searchInput.addEventListener("input", () => {
            const value = searchInput.value.toLowerCase();
            searchDropdown.innerHTML = "";
            if (value) {
                const filtered = filmList.filter(film => film.toLowerCase().includes(value));
                filtered.forEach(film => {
                    const item = document.createElement("li");
                    item.classList.add("dropdown-item");
                    item.classList.add("text-white");
                    item.textContent = film;
                    item.onclick = () => {
                        searchInput.value = film;
                        searchDropdown.innerHTML = "";
                    };
                    searchDropdown.appendChild(item);
                });
            }
        });

        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            if (!mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('show');
            } else {
                mobileMenu.classList.remove('show');
            }
            menuToggle.classList.toggle('open');
        });


        function openModal(videoUrl) {
            const modal = document.getElementById('videoModal');
            const iframe = document.getElementById('videoFrame');
            iframe.src = videoUrl + "?autoplay=1";
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModal() {
            const modal = document.getElementById('videoModal');
            const iframe = document.getElementById('videoFrame');
            iframe.src = "";
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }

        // toggle section 
        function showTab(tab) {
            const tabNowShowing = document.getElementById("tabNowShowing");
            const tabComingSoon = document.getElementById("tabComingSoon");
            const contentNowShowing = document.getElementById("contentNowShowing");
            const contentComingSoon = document.getElementById("contentComingSoon");
            const heroTitle = document.getElementById("heroTitle");

            if (tab === "now-showing") {
                tabNowShowing.classList.add("bg-yellow-400", "text-black");
                tabNowShowing.classList.remove("bg-[#0e1726]", "text-yellow-400");

                tabComingSoon.classList.add("bg-[#0e1726]", "text-yellow-400");
                tabComingSoon.classList.remove("bg-yellow-400", "text-black");

                contentNowShowing.classList.remove("hidden");
                contentComingSoon.classList.add("hidden");

                heroTitle.innerHTML =
                    `<i class="fa-solid fa-clapperboard fa-beat text-yellow-400"></i>&nbsp;Film Sedang Tayang`;
            } else if (tab === "coming-soon") {
                tabComingSoon.classList.add("bg-yellow-400", "text-black");
                tabComingSoon.classList.remove("bg-[#0e1726]", "text-yellow-400");

                tabNowShowing.classList.add("bg-[#0e1726]", "text-yellow-400");
                tabNowShowing.classList.remove("bg-yellow-400", "text-black");

                contentComingSoon.classList.remove("hidden");
                contentNowShowing.classList.add("hidden");

                heroTitle.innerHTML = `<i class="fa-solid fa-film fa-beat text-yellow-400"></i>&nbsp;Film Coming Soon`;
            }
        }
    </script>
</body>

</html>
