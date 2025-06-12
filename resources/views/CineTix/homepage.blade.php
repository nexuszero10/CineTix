<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CINETix - Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    @vite(['resources/css/homepage/native.css', 'resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <nav class="w-full fixed top-0 left-0 z-50 shadow-lg bg-[#011C3C]/70 backdrop-blur-md border-b border-white/10">
        <div class="max-w-screen-xl mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Logo -->
            <a href="{{ route('CineTix.homepage') }}"
                class="text-3xl font-bold tracking-wide flex items-center logo-hover transition">
                <span class="text-[#FF3C3C]">CINE</span><span class="text-yellow-400">Tix</span>
            </a>

            <div class="hidden md:flex gap-8 text-white font-semibold text-base">
                <a href="{{ route('CineTix.movies') }}" class="hover:text-yellow-400 transition">Movies</a>
                <a href="{{ route('CineTix.snacks') }}" class="hover:text-yellow-400 transition">Snacks</a>
                <a href="{{ route('CineTix.promotions') }}" class="hover:text-yellow-400 transition">Promotions</a>
                <a href="{{ route('CineTix.news') }}" class="hover:text-yellow-400 transition">News</a>
            </div>

            <!-- Desktop Section -->
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
                        <!-- SVG Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-9" viewBox="0 0 512 512">
                            <path fill="#ffffff"
                                d="M399 384.2C376.9 345.8 335.4 320 288 320l-64 0c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z" />
                        </svg>
                        <a href="{{ route('dashboard') }}" class="hover:underline text-white">
                            Welcome, {{ Auth::user()->username }} !
                        </a>
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

        <!-- Mobile Menu (Belum disesuaikan, hanya desktop) -->
        <div id="mobile-menu" class="hidden md:hidden px-6 pb-4">
            <div class="flex flex-col gap-4 text-white text-lg pl-4">

                <a href="#" class="flex items-center gap-3 mobile-link hover:text-red-600">
                    <i class="fas fa-sign-in-alt text-red-600"></i> <span class="font-bold">Login</span>
                </a>
                <a href="#" class="flex items-center gap-3 mobile-link hover:text-yellow-600">
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


    <section class="min-h-screen pt-24 flex flex-col items-center justify-center text-white px-6">

        <!-- Judul -->
        <h1 class="text-[3.2rem] mb-1 text-center font-bold text-white animate-fade-in-down">
            Temukan Pengalaman Menonton Terbaik
        </h1>

        <!-- Search Bar -->
        <div class="relative w-full max-w-xl mx-auto my-12 animate__animated animate__pulse animate__infinite">
            <!-- Icon -->
            <div
                class="absolute left-4 top-1/2 transform -translate-y-1/2 text-cyan-400 text-xl drop-shadow-[0_0_5px_#00f7ff]">
                <i class="fas fa-search"></i>
            </div>

            <!-- Neon Input -->
            <input type="text" placeholder="Cari film sesuka anda"
                class="w-full pl-12 pr-4 py-3 rounded-full text-white bg-[#0f172a]/40 border-2 border-cyan-400 placeholder-cyan-300 placeholder:drop-shadow-[0_0_5px_#00f7ff] text-lg font-semibold shadow-[0_0_10px_#00f7ff] focus:shadow-[0_0_25px_#00f7ff,0_0_50px_#00f7ff] focus:outline-none transition-all duration-500 ease-in-out" />
        </div>

        <!-- Menu -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12 px-4" data-aos="fade-up" data-aos-delay="300">

            <!-- Film -->
            <a href="{{ route('CineTix.movies') }}"
                class="group text-center cursor-pointer transform transition duration-300 hover:scale-105">
                <div
                    class="bg-cyan-400 text-white p-5 md:p-6 rounded-2xl text-3xl shadow-xl group-hover:shadow-cyan-500/50">
                    <i class="fas fa-film animate-pulse"></i>
                </div>
                <p class="mt-2 text-sm font-semibold group-hover:text-cyan-400 transition">Film</p>
            </a>

            <!-- Food -->
            <a href="{{ route('CineTix.snacks') }}"
                class="group text-center cursor-pointer transform transition duration-300 hover:scale-105">
                <div
                    class="bg-red-400 text-white p-5 md:p-6 rounded-2xl text-3xl shadow-xl group-hover:shadow-red-500/50">
                    <i class="fas fa-hamburger animate-pulse"></i>
                </div>
                <p class="mt-2 text-sm font-semibold group-hover:text-red-400 transition">Food</p>
            </a>

            <!-- Promo -->
            <a href="{{ route('CineTix.promotions') }}"
                class="group text-center cursor-pointer transform transition duration-300 hover:scale-105">
                <div
                    class="bg-yellow-400 text-white p-5 md:p-6 rounded-2xl text-3xl shadow-xl group-hover:shadow-yellow-400/50">
                    <i class="fas fa-tags animate-pulse"></i>
                </div>
                <p class="mt-2 text-sm font-semibold group-hover:text-yellow-400 transition">Promo</p>
            </a>

            <!-- News -->
            <a href="{{ route('CineTix.news') }}"
                class="group text-center cursor-pointer transform transition duration-300 hover:scale-105">
                <div
                    class="bg-green-400 text-white p-5 md:p-6 rounded-2xl text-3xl shadow-xl group-hover:shadow-green-400/50">
                    <i class="fas fa-newspaper animate-pulse"></i>
                </div>
                <p class="mt-2 text-sm font-semibold group-hover:text-green-400 transition">News</p>
            </a>
        </div>
    </section>

    <!--SLIDER-->
    <section class="py-5 px-4 mt-10 md:mt-0">
        <div class="max-w-6xl mx-auto relative group w-full">
            <div
                class="swiper mySwiper w-full aspect-video rounded-3xl overflow-hidden shadow-[0_20px_60px_-15px_rgba(255,255,255,0.1)] ring-1 ring-white/10">
                <div class="swiper-wrapper w-full h-full">
                    <div class="swiper-slide w-full h-full">
                        <a href="#avengers">
                            <img src="{{ asset('storage/images/movies/background/pengabdi-setan-2.jpg') }}"
                                alt="pengabdi-setan-bg" class="w-full h-full object-cover" />
                        </a>
                    </div>
                    <div class="swiper-slide w-full h-full">
                        <a href="#another">
                            <img src="{{ asset('storage/images/movies/background/jumbo.jpg') }}" alt="jumbo-bg"
                                class="w-full h-full object-cover" />
                        </a>
                    </div>
                    <div class="swiper-slide w-full h-full">
                        <a href="#another">
                            <img src="{{ asset('storage/images/movies/background/thunderbolts.jpg') }}"
                                alt="thunderbolts-bg" class="w-full h-full object-cover" />
                        </a>
                    </div>
                </div>

                <!-- Indikator garis -->
                <div class="swiper-pagination absolute bottom-3 left-0 right-0 flex justify-center space-x-2 z-10">
                </div>
            </div>
        </div>
    </section>

    <!--SEDANG TREN-->
    <section class="py-10 px-4 sm:px-8 md:px-12 overflow-visible">
        <h2 class="text-white text-2xl font-semibold mb-6">Sedang Tren</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-5 overflow-visible">
            @php
                $hoverShadows = [
                    'hover:shadow-pink-400',
                    'hover:shadow-blue-400',
                    'hover:shadow-green-400',
                    'hover:shadow-purple-500',
                    'hover:shadow-yellow-400',
                ];

                $genreGradients = [
                    'from-pink-500 to-pink-700',
                    'from-blue-500 to-blue-700',
                    'from-green-400 to-green-600',
                    'from-purple-500 to-purple-700',
                    'from-yellow-400 to-yellow-600',
                ];
            @endphp

            @foreach ($hot_movies as $index => $movie)
                @php
                    $hoverShadow = $hoverShadows[$index % count($hoverShadows)];
                    $genreGradient = $genreGradients[$index % count($genreGradients)];
                @endphp

                <div
                    class="bg-slate-900 rounded-3xl shadow-md {{ $hoverShadow }} transform hover:scale-[1.05] transition-all duration-500 ease-in-out overflow-hidden max-w-[280px] mx-auto py-3">

                    <img src="{{ asset('storage/images/movies/poster/' . $movie->image_path) }}"
                        alt="{{ $movie->title }}" class="rounded-t-3xl w-full h-72 object-cover shadow-sm mb-3" />

                    <div class="p-4 flex flex-col justify-center items-center text-center h-[200px]">
                        <h3 class="text-white font-bold text-lg mb-2">{{ $movie->title }}</h3>

                        <div class="flex justify-center items-center text-xs text-yellow-400 mb-2 flex-wrap gap-2">
                            <span class="px-2 py-0.5 bg-red-600 text-white font-bold rounded-full shadow">
                                {{ $movie->category->category_name }}
                            </span>

                            @foreach ($movie->genres->take(2) as $genre)
                                @php
                                    $genreBgColors = [
                                        'Action' => 'bg-yellow-500',
                                        'Adventure' => 'bg-green-500',
                                        'Comedy' => 'bg-blue-500',
                                    ];

                                    $genreBg = $genreBgColors[$genre->genre_name] ?? 'bg-slate-500';
                                @endphp
                                <span
                                    class="px-2 py-0.5 bg-gradient-to-r {{ $genreBg }} text-white font-semibold rounded-full shadow-sm border border-white/10">
                                    {{ $genre->genre_name }}
                                </span>
                            @endforeach
                        </div>

                        <p class="text-gray-300 text-sm leading-snug">
                            {{ \Illuminate\Support\Str::limit($movie->synopsis, 80) }}
                        </p>

                        <div class="mt-3 flex justify-center space-x-3 flex-wrap gap-2">
                            <a href="{{ route('CineTix.movie-detail', ['id' => $movie->id]) }}"
                                class="px-3 py-1.5 bg-blue-600 rounded-full text-white font-semibold shadow hover:bg-blue-700 transition text-sm">Beli
                                Tiket</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <!--SECTION MORE MOVIES-->
    <section class="px-4 sm:px-8 md:px-12 py-10">
        <div class="flex justify-between items-center mb-6 px-1 sm:px-4">
            <h2 class="text-white text-base md:text-2xl font-semibold">Film Tayang Lainnya</h2>
            <a href="{{ route('CineTix.movies') }}"
                class="text-red-400 text-sm font-semibold hover:underline">Lainnya</a>
        </div>

        <!-- Mobile Scroll -->
        <div class="flex space-x-6 overflow-x-auto scrollbar-hide py-4 sm:-mx-6 -mx-4 px-6 sm:px-8 md:hidden">
            @foreach ($more_movies as $movie)
                <div
                    class="group flex-none w-44 bg-slate-900 p-2 border border-slate-800 rounded-xl shadow-md transition-all duration-300 hover:scale-105 hover:border-red-700 hover:drop-shadow-[0_0_20px_rgba(255,0,0,0.6)] active:scale-105">
                    <a href="#" class="block overflow-visible rounded-xl">
                        <img src="{{ asset('storage/images/movies/poster/' . $movie->image_path) }}"
                            class="w-full h-60 object-cover rounded-lg transition-all duration-500 ease-in-out group-hover:brightness-125 group-hover:saturate-200 group-hover:animate-[horrorShake_0.4s_ease-in-out]" />
                    </a>
                    <p
                        class="text-white text-sm font-semibold text-center mt-3 tracking-wide transition-all duration-300 group-hover:text-red-500 group-hover:animate-[horrorShake_0.4s_ease-in-out]">
                        {{ $movie->title }}
                    </p>
                </div>
            @endforeach
        </div>

        <!-- Desktop Slider with Arrows -->
        <div class="relative hidden md:block">
            <!-- Scroll Container -->
            <div id="horrorSlider" class="flex space-x-6 overflow-x-auto scrollbar-hide py-4 px-4 scroll-smooth">
                @foreach ($more_movies as $movie)
                    <div
                        class="group flex-none w-1/6 bg-slate-900 p-2 border border-slate-800 rounded-xl shadow-md transition-all duration-300 hover:scale-105 hover:border-red-700 hover:drop-shadow-[0_0_20px_rgba(255,0,0,0.6)]">
                        <a href="{{ route('CineTix.movie-detail', ['id' => $movie->id]) }}" class="block overflow-visible rounded-xl">
                            <img src="{{ asset('storage/images/movies/poster/' . $movie->image_path) }}"
                                class="w-full h-[240px] object-cover rounded-lg transition-all duration-500 ease-in-out group-hover:brightness-125 group-hover:saturate-200 group-hover:animate-[horrorShake_0.4s_ease-in-out]" />
                        </a>
                        <p
                            class="text-white text-sm font-semibold text-center mt-3 tracking-wide transition-all duration-300 group-hover:text-red-500 group-hover:animate-[horrorShake_0.4s_ease-in-out]">
                            {{ $movie->title }}
                        </p>
                    </div>
                @endforeach
            </div>

            <!-- Left Arrow -->
            <button onclick="scrollSlider('left')"
                class="absolute top-1/2 -translate-y-1/2 left-2 bg-slate-800 text-white p-2 rounded-full shadow-md hover:bg-yellow-400 hover:text-slate-800 transition z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Right Arrow -->
            <button onclick="scrollSlider('right')"
                class="absolute top-1/2 -translate-y-1/2 right-2 bg-slate-800 text-white p-2 rounded-full shadow-md hover:bg-yellow-400 hover:text-slate-800 transition z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </section>

    <!--SECTION NEWS-->
    <section class="text-white py-12 px-4 sm:px-6 lg:px-16">
        <div class="grid lg:grid-cols-3 gap-10">

            <!-- HOT NEWS -->
            <div class="lg:col-span-2">
                <h2 class="text-white text-xl font-bold border-l-4 border-yellow-400 pl-4 mb-6">🔥 Hot News</h2>

                <!-- LIST BERITA HOT -->
                <div class="space-y-6">

                    <!-- ITEM HOT NEWS -->
                    @foreach ($hot_news as $news)
                        <div
                            class="group flex flex-col sm:flex-row bg-[#061A32] rounded-xl overflow-hidden transition-transform duration-300 transform hover:scale-[1.02] hover:shadow-[0_8px_30px_rgb(255,215,0,0.2)] hover:ring-2 hover:ring-yellow-400/50">
                            <div class="overflow-hidden w-full sm:w-[320px] h-52 sm:h-auto">
                                <img src="{{ asset('storage/images/news/' . $news->image_path) }}"
                                    alt="{{ Str::slug($news->title) }}"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            </div>
                            <div class="p-5 flex-1">
                                <div class="flex items-center mb-2 text-yellow-400">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 0l3.5 7.1L24 8.3l-6 5.8 1.4 8.1L12 18.6 4.6 22.2 6 14.1 0 8.3l8.5-1.2z" />
                                    </svg>
                                    <span class="text-sm text-gray-400">
                                        {{ \Carbon\Carbon::parse($news->created_at)->translatedFormat('l, d F Y') }}
                                    </span>
                                </div>
                                <h3
                                    class="text-lg font-bold mb-2 relative group-hover:text-yellow-300 transition duration-300">
                                    <a href="{{ route('CineTix.news-detail', ['id' => $news->id]) }}">
                                        <span
                                            class="absolute bottom-0 left-0 w-0 h-[2px] bg-yellow-400 transition-all duration-300 group-hover:w-full"></span>
                                        {{ $news->title }}
                                    </a>
                                </h3>
                                <p class="text-sm text-gray-300">
                                    {{ \Illuminate\Support\Str::limit($news->description, 150) }}
                                </p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <!-- MORE NEWS -->
            <div>
                <h2 class="text-white text-xl font-bold border-l-4 border-yellow-400 pl-4 mb-6">📰 More News</h2>
                <ul class="space-y-4 text-sm">
                    @foreach ($any_news as $news)
                        <li><a href="{{ route('CineTix.news-detail', ['id' => $news->id]) }}"
                                class="block border-b border-white/20 pb-2 hover:text-yellow-400 hover:pl-2 transition-all duration-300">
                                {{ $news->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="mt-6">
                    <a href="{{ route('CineTix.news') }}"
                        class="inline-block relative overflow-hidden group text-sm font-bold px-6 py-2 rounded-full bg-gradient-to-r from-yellow-400 to-yellow-500 hover:from-yellow-500 hover:to-yellow-400 text-black transition-all duration-300 shadow-md hover:shadow-lg">
                        <span class="relative z-10">LIHAT BERITA LAINNYA →</span>
                        <spanclass="absolute inset-0 opacity-0 group-hover:opacity-10 bg-white transition duration-300"></span>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!--SECTION VIDEO & TRAILERS-->
    <section class="pt-16 pb-10 px-6 md:px-12 text-white text-center">
        <h2 class="text-4xl font-extrabold mb-12 drop-shadow-lg tracking-wide">Video & Trailers</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl mx-auto">

            <!-- CARD 1: shadow kuning -->
            <div onclick="openModal('https://www.youtube.com/embed/-sAOWhvheK8?si=E1iu5kGEQlZxPssj')"
                class="cursor-pointer rounded-2xl overflow-hidden bg-[#1c1f2f] transition-transform duration-500 ease-in-out transform hover:scale-105 hover:shadow-lg hover:shadow-yellow-400">
                <div class="relative">
                    <img src="{{ asset('storage/images/movies/background/thunderbolts.jpg') }}" alt="Thumbnail" class="w-full h-52 object-cover">
                    <div class="absolute inset-0 flex items-center justify-center bg-black/20">
                        <div class="text-white text-4xl">&#9658;</div>
                    </div>
                </div>
                <div class="px-5 py-4">
                    <p class="font-semibold text-lg">Thunderbolts Marvel Studio</p>
                </div>
            </div>

            <!-- CARD 2: shadow biru -->
            <div onclick="openModal('https://www.youtube.com/embed/YW3sQ16oksY?si=G5YU90oCgLUr_B9g')"
                class="cursor-pointer rounded-2xl overflow-hidden bg-[#1c1f2f] transition-transform duration-500 ease-in-out transform hover:scale-105 hover:shadow-lg hover:shadow-blue-500">
                <div class="relative">
                    <img src="{{ asset('storage/images/movies/background/jumbo.jpg') }}" alt="Thumbnail"
                        class="w-full h-52 object-cover">
                    <div class="absolute inset-0 flex items-center justify-center bg-black/20">
                        <div class="text-white text-4xl">&#9658;</div>
                    </div>
                </div>
                <div class="px-5 py-4">
                    <p class="font-semibold text-lg">JUMBO ~ ANIMASI KARYA </p>
                </div>
            </div>

            <!-- CARD 3: shadow merah -->
            <div onclick="openModal('https://www.youtube.com/embed/GV9AEEIeHrQ?si=vgbGesp8R0AWKC5L&amp')"
                class="cursor-pointer rounded-2xl overflow-hidden bg-[#1c1f2f] transition-transform duration-500 ease-in-out transform hover:scale-105 hover:shadow-lg hover:shadow-red-500">
                <div class="relative">
                    <img src="{{ asset('storage/images/movies/background/civil-war.jpeg') }}" alt="Thumbnail" class="w-full h-52 object-cover">
                    <div class="absolute inset-0 flex items-center justify-center bg-black/20">
                        <div class="text-white text-4xl">&#9658;</div>
                    </div>
                </div>
                <div class="px-5 py-4">
                    <p class="font-semibold text-lg">BATTLE SCENE CIVIL WAR</p>
                </div>
            </div>

        </div>
    </section>

    <!--MODALOPEN POPUP VIDEO-->
    <div id="videoModal"
        class="fixed inset-0 bg-black bg-opacity-80 hidden items-center justify-center z-50 transition-opacity duration-300">
        <div
            class="bg-[#101927] rounded-3xl shadow-[0_0_60px_rgba(255,255,255,0.1)] p-4 w-[95%] md:w-[85%] lg:w-[75%] xl:w-[70%] max-w-[1280px] relative animate-fade-in">
            <button onclick="closeModal()"
                class="absolute top-4 right-4 text-white text-3xl hover:text-red-500 transition">&times;</button>
            <div class="aspect-video rounded-xl overflow-hidden">
                <iframe id="videoFrame" class="w-full h-full" src="" frameborder="0"
                    allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!--PARTNERSHIP-->
    <section id="partner" class="mt-19 pt-12 pb-20 max-w-6xl mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-white">Partner Kami</h2>
        <p class="text-yellow-400 mb-10">Kami didukung oleh berbagai mitra terpercaya untuk memberikan layanan terbaik
            bagi
            Anda.</p>

        <!-- Mobile Scrollable -->
        <div class="block lg:hidden space-y-4 overflow-x-auto overflow-visible pb-2 scrollbar-hide">
            <!-- Baris 1 -->
            <div class="flex space-x-3 min-w-full px-1 pt-2 pb-4">
                <div
                    class="min-w-[100px] p-2 bg-white rounded-xl shadow-md hover:shadow-yellow-300/50 transition transform hover:-translate-y-1 hover:scale-105">
                    <img src="img/partnership/shopepay.webp" alt="Partner 1" class="mx-auto h-10 object-contain" />
                </div>
                <div
                    class="min-w-[100px] p-2 bg-white rounded-xl shadow-md hover:shadow-yellow-300/50 transition transform hover:-translate-y-1 hover:scale-105">
                    <img src="img/partnership/gopay.png" alt="Partner 2" class="mx-auto h-10 object-contain" />
                </div>
                <div
                    class="min-w-[100px] p-2 bg-white rounded-xl shadow-md hover:shadow-yellow-300/50 transition transform hover:-translate-y-1 hover:scale-105">
                    <img src="img/partnership/ovo.png" alt="Partner 3" class="mx-auto h-10 object-contain" />
                </div>
                <div
                    class="min-w-[100px] p-2 bg-white rounded-xl shadow-md hover:shadow-yellow-300/50 transition transform hover:-translate-y-1 hover:scale-105">
                    <img src="img/partnership/bni.png" alt="Partner 4" class="mx-auto h-10 object-contain" />
                </div>
                <div
                    class="min-w-[100px] p-2 bg-white rounded-xl shadow-md hover:shadow-yellow-300/50 transition transform hover:-translate-y-1 hover:scale-105">
                    <img src="img/partnership/dana.png" alt="Partner 5" class="mx-auto h-10 object-contain" />
                </div>
                <div
                    class="min-w-[100px] p-2 bg-white rounded-xl shadow-md hover:shadow-yellow-300/50 transition transform hover:-translate-y-1 hover:scale-105">
                    <img src="img/partnership/mandiri.webp" alt="Partner 6" class="mx-auto h-10 object-contain" />
                </div>
            </div>
            <!-- Baris 2 -->
            <div class="flex space-x-3 min-w-full px-1 pt-2 pb-4">
                <div
                    class="min-w-[100px] p-2 bg-white rounded-xl shadow-md hover:shadow-yellow-300/50 transition transform hover:-translate-y-1 hover:scale-105">
                    <img src="img/partnership/Mastercard.png" alt="Partner 7" class="mx-auto h-10 object-contain" />
                </div>
                <div
                    class="min-w-[100px] p-2 bg-white rounded-xl shadow-md hover:shadow-yellow-300/50 transition transform hover:-translate-y-1 hover:scale-105">
                    <img src="img/partnership/seabank.png" alt="Partner 8" class="mx-auto h-10 object-contain" />
                </div>
                <div
                    class="min-w-[100px] p-2 bg-white rounded-xl shadow-md hover:shadow-yellow-300/50 transition transform hover:-translate-y-1 hover:scale-105">
                    <img src="img/partnership/qris.png" alt="Partner 9" class="mx-auto h-10 object-contain" />
                </div>
                <div
                    class="min-w-[100px] p-2 bg-white rounded-xl shadow-md hover:shadow-yellow-300/50 transition transform hover:-translate-y-1 hover:scale-105">
                    <img src="img/partnership/danamon-seeklogo.png" alt="Partner 10"
                        class="mx-auto h-10 object-contain" />
                </div>
                <div
                    class="min-w-[100px] p-2 bg-white rounded-xl shadow-md hover:shadow-yellow-300/50 transition transform hover:-translate-y-1 hover:scale-105">
                    <img src="img/partnership/alfamart.png" alt="Partner 11" class="mx-auto h-10 object-contain" />
                </div>
                <div
                    class="min-w-[100px] p-2 bg-white rounded-xl shadow-md hover:shadow-yellow-300/50 transition transform hover:-translate-y-1 hover:scale-105">
                    <img src="img/partnership/indomaret.png" alt="Partner 12" class="mx-auto h-10 object-contain" />
                </div>
            </div>
        </div>

        <!-- Desktop Grid (6 columns x 2 rows) -->
        <div class="hidden lg:grid grid-cols-6 gap-6">
            @foreach ($patners as $patner)
                <div
                    class="p-6 bg-white rounded-2xl shadow-lg hover:shadow-yellow-300/50 transition transform hover:-translate-y-1 hover:scale-105">
                    <img src="{{ asset('storage/images/patner/' . $patner->image) }}" alt="{{ $patner->name }}"
                        class="mx-auto h-14 object-contain" />
                </div>
            @endforeach
    </section>


    <!--FOOTERRRRR-->
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
                        <a href="{{ route('CineTix.movies') }}"
                            class="flex items-center space-x-2 group hover:text-sky-400 transition duration-200">
                            <i data-lucide="video" class="w-5 h-5 text-sky-300 group-hover:text-sky-400"></i>
                            <span>Film</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('CineTix.snacks') }}"
                            class="flex items-center space-x-2 group hover:text-rose-400 transition duration-200">
                            <i data-lucide="utensils" class="w-5 h-5 text-rose-300 group-hover:text-rose-400"></i>
                            <span>Food</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('CineTix.promotions') }}"
                            class="flex items-center space-x-2 group hover:text-yellow-400 transition duration-200">
                            <i data-lucide="percent" class="w-5 h-5 text-yellow-300 group-hover:text-yellow-400"></i>
                            <span>Promo</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('CineTix.news') }}"
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
                        <a href="{{ route('CineTix.faq') }}"
                            class="flex items-center space-x-2 hover:text-rose-400 transition duration-200">
                            <i data-lucide="help-circle" class="w-5 h-5 group-hover:text-white"></i>
                            <span>FAQ</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('CineTix.contact-us') }}"
                            class="flex items-center space-x-2 hover:text-rose-400 transition duration-200">
                            <i data-lucide="headphones" class="w-5 h-5 group-hover:text-white"></i>
                            <span>Hubungi Kami</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('CineTix.about-us') }}"
                            class="flex items-center space-x-2 hover:text-rose-400 transition duration-200">
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


    <script>
        lucide.createIcons();
    </script>
    <script src="https://kit.fontawesome.com/your-api-key.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
    <script>
        const swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                renderBullet: function(index, className) {
                    return '<span class="' + className + ' custom-bullet"></span>';
                },
            },
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

        function scrollSlider(direction) {
            const slider = document.getElementById('horrorSlider');
            const scrollAmount = 300; // px
            slider.scrollBy({
                left: direction === 'left' ? -scrollAmount : scrollAmount,
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>
