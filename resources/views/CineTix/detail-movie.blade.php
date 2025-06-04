<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CINETix - {{ $movie->title }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    @vite(['resources/css/movie-detail/native.css', 'resources/js/movie-detail.js', 'resources/css/app.css', 'resources/js/app.js'])

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

    <section class="relative pt-24 pb-10">
        <div class="absolute inset-0">
            <img src="{{ asset('storage/images/movies/background/' . $movie->image_path) }}" alt="Background Jumbo"
                class="w-full h-full object-cover opacity-30">
        </div>

        <div class="container relative z-10 py-5 w-[90%] mx-auto">
            @php
                $genreColors = [
                    'bg-red-600 text-white',
                    'bg-green-500 text-white',
                    'bg-blue-500 text-white',
                    'bg-purple-500 text-white',
                    'bg-pink-500 text-white',
                ];
            @endphp

            <div class="flex flex-col md:flex-row justify-center">
                <div>
                    <img src="{{ asset('storage/images/movies/poster/' . $movie->image_path) }}"
                        alt="{{ $movie->title }}" class="rounded-xl mx-auto h-[22rem] object-cover">
                </div>

                <div class="flex-col w-2/3 mt-3 ml-7">
                    <h1 class="text-white text-5xl font-bold mb-3">{{ $movie->title }}</h1>
                    <span class="bg-yellow-400 text-[#121823] px-2 py-1 rounded font-bold">
                        {{ $movie->category->category_name }}
                    </span>

                    <div class="flex gap-2 mb-4 mt-3 flex-wrap">
                        @foreach ($movie->genres as $index => $genre)
                            @php
                                $color = $genreColors[$index] ?? $genreColors[array_rand($genreColors)];
                            @endphp
                            <span class="px-2 py-1 rounded font-bold {{ $color }}">
                                {{ $genre->genre_name }}
                            </span>
                        @endforeach
                    </div>

                    <p class="mb-4 text-white text-justify">{{ $movie->synopsis }}</p>
                    <div class="flex items-center gap-4 mt-7">
                        <button type="button"
                            class="bg-white text-black px-4 py-2 rounded-full font-semibold shadow hover:bg-gray-200 transition-transform duration-300 hover:scale-105"
                            onclick="openModal('{{ $movie->trailer_url }}')">WATCH THE TRAILER
                        </button>
                        @php
                            $hours = floor($movie->duration / 60);
                            $minutes = $movie->duration % 60;
                        @endphp
                        <span class="text-yellow-300">{{ $hours }}h {{ $minutes }}m </span>
                    </div>
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

    <!--Navbar Detail, Jadwal, Komentar-->
    <section class="py-2 w-[90%] mx-auto relative">
        <div class=" container px-4 mx-auto mt-6 ">
            <div class="flex gap-6 text-sm">
                <button id="tabJadwal" class="pb-2 border-b-2 border-white font-semibold"
                    onclick="showTab('jadwal')">Schedule</button>
                <button id="tabDetail" class="pb-2 text-gray-500" onclick="showTab('detail')">Detail</button>
                <button id="tabKomentar" class="pb-2 text-gray-500" onclick="showTab('komentar')">Reviews</button>
            </div>
        </div>
    </section>


    <!--Section Tab Jadwal-->
    <section id="contentJadwal" class="select-none">
        <div class="py-2 w-[90%] mx-auto relative">
            @foreach ($movie->schedules as $schedule)
                <div class="flex gap-10 mt-6 px-4">
                    <div class="w-1/5 flex flex-col gap-4 overflow-y-auto pb-2">
                        <div
                            class="w-full text-center px-4 py-3 bg-[#1a2332] text-white rounded-xl font-semibold cursor-pointer shadow">
                            {{ $schedule->day }}<br><span
                                class="text-base font-normal">{{ \Carbon\Carbon::parse($schedule->date)->format('d M Y') }}</span>
                        </div>
                    </div>

                    <div class="w-3/4">
                        <div class="bg-[#1a2332] p-6 rounded-xl shadow-lg text-gray-900">
                            <h3 class="text-xl font-bold text-yellow-400 mb-2">CineTix - Studio
                                {{ $schedule->studio->studio_code }}</h3>

                            <div class="space-y-3">
                                <div class="flex justify-between text-sm">
                                    <span class="text-gray-400 font-medium">Available Seats:
                                        {{ $schedule->capacity }}/40</span>
                                    <span class="text-gray-400">
                                        @if ($movie->price >= 1000)
                                            Rp{{ number_format($movie->price, 0, ',', '.') }}
                                        @else
                                            Rp{{ $movie->price }}
                                        @endif
                                    </span>
                                </div>

                                <div class="flex flex-wrap gap-3 mt-3">
                                    <div class="px-4 py-2 bg-[#121823] rounded-lg text-white font-semibold cursor-pointer transition duration-200 hover:bg-yellow-400 hover:text-[#121823]"
                                        onclick="showTiketModal({{ $schedule->id }})">
                                        {{ \Carbon\Carbon::parse($schedule->time)->format('H:i') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MODAL TIKET -->
                <div id="modalTiket{{ $schedule->id }}"
                    class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm z-50 hidden flex items-center justify-center">

                    <div
                        class="bg-[#1a2332] rounded-2xl w-[90%] max-w-md p-6 shadow-lg relative animate-fade-scale-in">
                        <!-- Close -->
                        <button onclick="closeTiketModal({{ $schedule->id }})"
                            class="absolute top-3 right-4 text-red-500 text-xl font-bold cursor-pointer transition-transform duration-200 hover:scale-105">×</button>

                        <!-- FORM -->
                        <form id="numberOfTicketForm" method="POST" action="{{ route('CineTix.movie-booking') }}">
                            @csrf

                            <input type="hidden" name="inputUserId" id="inputUserId"
                                value="{{ Auth::check() ? Auth::user()->id : '' }}" required>
                            <input type="hidden" name="inputFilmId" value="{{ $movie->id }}" required>
                            <input type="hidden" name="inputScheduleId" value="{{ $schedule->id }}" required>
                            <div class="text-center border-b pb-4">
                                <h2 class="font-semibold text-white text-lg">Pilih jumlah tiket yang ingin dipesan</h2>
                            </div>

                            <div class="mt-4 text-sm text-white space-y-2">
                                <p class="font-bold text-center">{{ $movie->title }}</p>
                                <p class="text-center">{{ $schedule->day }},
                                    {{ \Carbon\Carbon::parse($schedule->date)->format('d M Y') }}</p>
                                <ul class="text-xs text-yellow-300 list-disc pl-5">
                                    <li>Satu user hanya bisa memesan maksimal 10 tiket</li>
                                </ul>
                            </div>

                            <div class="mt-4">
                                <div class="bg-[#171f2d] rounded p-3 text-center font-semibold text-white">
                                    {{ \Carbon\Carbon::parse($schedule->time)->format('H:i') }}
                                </div>
                            </div>

                            <div class="flex items-center justify-center gap-4 mt-4">
                                <button type="button" onclick="decrementSeat({{ $schedule->id }})"
                                    class="w-8 h-8 bg-[#171f2d] rounded-full border text-lg hover:scale-110 hover:bg-yellow-400 hover:text-[#171f2d] hover:border-[#171f2d] active:scale-90 transition-transform duration-300 text-white">−</button>
                                <span id="jumlahSeat{{ $schedule->id }}" class="w-6 text-center text-white">1</span>
                                <button type="button" onclick="incrementSeat({{ $schedule->id }})"
                                    class="w-8 h-8 bg-[#171f2d] rounded-full border text-lg hover:scale-110 hover:bg-yellow-400 hover:text-[#171f2d] hover:border-[#171f2d] active:scale-90 transition-transform duration-300 text-white">+</button>
                                <input type="hidden" name="inputJumlahSeat" id="inputJumlahSeat{{ $schedule->id }}"
                                    value="1">
                            </div>

                            <div class="flex justify-center mt-5">
                                <button type="submit"
                                    class="w-1/3 py-2 rounded-full bg-[#171f2d] text-white font-semibold hover:scale-105 active:scale-95 transition-all duration-200 hover:bg-yellow-400 hover:text-[#171f2d]">
                                    Continue
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Section Informasi Film -->
    <section id="contentDetail" class="hidden">
        <div class="py-2 w-[90%] mx-auto mt-3 relative">
            <div class="container px-4 mx-auto">
                <h2 class="text-2xl font-bold mb-6 border-b border-gray-300 pb-2 text-white">{{ $movie->title }}</h2>

                <div class="flex flex-col md:flex-row gap-8">
                    <div class="w-full md:w-1/3 text-sm text-white space-y-2">
                        <div class="grid grid-cols-2 border-b border-white/10 py-2">
                            <span class="text-gray-400 font-medium">Director:</span>
                            <span class="text-right">{{ $movie->director }}</span>
                        </div>
                        <div class="grid grid-cols-2 border-white/10 py-2">
                            <span class="text-gray-400 font-medium">Censor Rating:</span>
                            <span class="text-right">{{ $movie->category->category_name }}</span>
                        </div>
                        <div class="grid grid-cols-2 border-white/10 py-2">
                            <span class="text-gray-400 font-medium">Genre:</span>
                            <span class="text-right">
                                {{ $movie->genres->pluck('genre_name')->join(', ') }}
                            </span>
                        </div>
                        <div class="grid grid-cols-2 border-white/10 py-2">
                            <span class="text-gray-400 font-medium">Release year:</span>
                            <span class="text-right">{{ $movie->release_year }}</span>
                        </div>
                        <div class="grid grid-cols-2 border-white/10 py-2">
                            <span class="text-gray-400 font-medium">Duration:</span>
                            <span class="text-right">{{ $movie->duration }} Minutes</span>
                        </div>
                        <div class="grid grid-cols-2 border-white/10 py-2">
                            <span class="text-gray-400 font-medium">Price: :</span>
                            <span class="text-right">
                                @if ($movie->price >= 1000)
                                    Rp{{ number_format($movie->price, 0, ',', '.') }}
                                @else
                                    Rp{{ $movie->price }}
                                @endif
                            </span>
                        </div>
                    </div>

                    @php
                        $castList = explode(',', $movie->cast);
                        $castCount = count($castList);
                    @endphp

                    <div
                        class="w-full md:w-2/3 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 {{ $castCount === 3 ? 'h-1/2' : 'h-full' }}">
                        @foreach ($castList as $cast)
                            <div
                                class="flex items-center gap-4 p-3 bg-white/5 rounded-xl shadow-md backdrop-blur-sm hover:scale-105 transition-all duration-300 animate-fade-in">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" viewBox="0 0 512 512">
                                    <path fill="#74C0FC"
                                        d="M399 384.2C376.9 345.8 335.4 320 288 320l-64 0c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z" />
                                </svg>
                                <div>
                                    <p class="text-xs text-gray-300">Cast</p>
                                    <p class="font-semibold text-white">{{ trim($cast) }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Section Tab Komentar-->
    <section id="contentKomentar" class="hidden">
        <div class="py-2 w-[90%] mx-auto relative border-b border-gray-500 pb-4">
            <div class="relative w-fit flex flex-col mt-3">
                <form id="movieReviewForm" action="{{ route('CineTix.add-review') }}" method="POST">
                    @csrf
                    <input type="hidden" id="inputUserId" name="user_id" value="{{ Auth::id() }}">
                    <input type="hidden" id="inputStarRating" name="rating">
                    <input type="hidden" id="inputMovieId" name="movie_id" value="{{ $movie->id }}">

                    <p class="text-yellow-400 text-lg mb-2">Rate this Movie:</p>
                    <div id="ratingStars" class="flex gap-2 text-gray-400 text-xl cursor-pointer mb-3">
                        <i class="fas fa-star" data-value="1"></i>
                        <i class="fas fa-star" data-value="2"></i>
                        <i class="fas fa-star" data-value="3"></i>
                        <i class="fas fa-star" data-value="4"></i>
                        <i class="fas fa-star" data-value="5"></i>
                    </div>

                    <textarea id="inputComment" name="comment"
                        class="bg-[#0f1d33] text-gray-200 placeholder-gray-400 mt-3 border border-gray-100 rounded-lg resize-none focus:border-yellow-500 focus:outline-none focus:ring-0"
                        placeholder="Tulis komentar..." autocomplete="off" rows="4" cols="50"></textarea>

                    <div class="flex flex-row gap-3 mt-3">
                        <button type="button" onclick="resetComment()"
                            class="bg-red-500 text-black rounded-full py-2 px-4 hover:scale-105 transition">Reset</button>
                        <button type="submit"
                            class="bg-green-500 text-black rounded-full py-2 px-4 hover:scale-105 transition">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        @if ($comments)
            <div id="commentsContainer"
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 w-[88%] mx-auto mt-6">
                @foreach ($comments as $comment)
                    <div class="bg-[#0f1d33] border border-white/10 rounded-lg p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm font-medium text-white">{{ $comment->user->username }}</span>
                            <span class="flex gap-1 text-yellow-400 text-sm">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i
                                        class="fas fa-star {{ $i <= $comment->rating ? 'text-yellow-400' : 'text-gray-500' }}"></i>
                                @endfor
                            </span>
                        </div>
                        <p class="text-white/70 text-sm">{{ $comment->comment }}</p>
                        <p class="text-white/50 text-xs text-right">
                            {{ \Carbon\Carbon::parse($comment->created_at)->format('d F Y') }}
                        </p>
                    </div>
                @endforeach
            </div>
        @endif

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

        // swiper
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

        // mobile menu navbar
        const menuToggle = document.getElementById("menu-toggle");
        const mobileMenu = document.getElementById("mobile-menu");

        menuToggle.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
            if (!mobileMenu.classList.contains("hidden")) {
                mobileMenu.classList.add("show");
            } else {
                mobileMenu.classList.remove("show");
            }
            menuToggle.classList.toggle("open");
        });

        // modal popup trailer
        function openModal(videoUrl) {
            const modal = document.getElementById("videoModal");
            const iframe = document.getElementById("videoFrame");
            iframe.src = videoUrl + "?autoplay=1";
            modal.classList.remove("hidden");
            modal.classList.add("flex");
        }

        function closeModal() {
            const modal = document.getElementById("videoModal");
            const iframe = document.getElementById("videoFrame");
            iframe.src = "";
            modal.classList.remove("flex");
            modal.classList.add("hidden");
        }

        document.addEventListener("DOMContentLoaded", () => {
            showTab("detail");
        });

        // switch tab
        function showTab(tab) {
            const tabJadwal = document.getElementById("tabJadwal");
            const tabDetail = document.getElementById("tabDetail");
            const tabKomentar = document.getElementById("tabKomentar");
            const contentJadwal = document.getElementById("contentJadwal");
            const contentDetail = document.getElementById("contentDetail");
            const contentKomentar = document.getElementById("contentKomentar");
            const activeTabClasses = [
                "border-b-2",
                "border-white",
                "font-semibold",
                "text-white",
            ];
            const inactiveTabClasses = ["text-gray-500"];
            [tabJadwal, tabDetail, tabKomentar].forEach((t) => {
                t.classList.remove(...activeTabClasses);
                t.classList.add(...inactiveTabClasses);
            });
            [contentJadwal, contentDetail, contentKomentar].forEach((c) => {
                c.classList.add("hidden");
            });
            if (tab === "jadwal") {
                tabJadwal.classList.add(...activeTabClasses);
                tabJadwal.classList.remove(...inactiveTabClasses);
                contentJadwal.classList.remove("hidden");
            } else if (tab === "detail") {
                tabDetail.classList.add(...activeTabClasses);
                tabDetail.classList.remove(...inactiveTabClasses);
                contentDetail.classList.remove("hidden");
            } else if (tab === "komentar") {
                tabKomentar.classList.add(...activeTabClasses);
                tabKomentar.classList.remove(...inactiveTabClasses);
                contentKomentar.classList.remove("hidden");
            } else {
                console.error("Unknown Tab:", tab);
            }
        }

        // pop up tiket
        let seatCounts = {};

        function showTiketModal(scheduleId) {
            const modal = document.getElementById("modalTiket" + scheduleId);
            if (modal) {
                modal.classList.remove("hidden");
                // Set awal jumlah seat ke 1 jika belum diset
                if (!seatCounts[scheduleId]) {
                    seatCounts[scheduleId] = 1;
                }
                document.getElementById("jumlahSeat" + scheduleId).innerText =
                    seatCounts[scheduleId];
                document.getElementById("inputJumlahSeat" + scheduleId).value =
                    seatCounts[scheduleId];
            }
        }

        function closeTiketModal(scheduleId) {
            const modal = document.getElementById("modalTiket" + scheduleId);
            if (modal) {
                modal.classList.add("hidden");
            }
        }

        function incrementSeat(scheduleId) {
            if (seatCounts[scheduleId] < 10) {
                seatCounts[scheduleId]++;
                document.getElementById("jumlahSeat" + scheduleId).innerText =
                    seatCounts[scheduleId];
                document.getElementById("inputJumlahSeat" + scheduleId).value =
                    seatCounts[scheduleId];
            }
        }

        function decrementSeat(scheduleId) {
            if (seatCounts[scheduleId] > 1) {
                seatCounts[scheduleId]--;
                document.getElementById("jumlahSeat" + scheduleId).innerText =
                    seatCounts[scheduleId];
                document.getElementById("inputJumlahSeat" + scheduleId).value =
                    seatCounts[scheduleId];
            }
        }

        // menangani validasi submit form tiket
        document
            .getElementById("numberOfTicketForm")
            .addEventListener("submit", function(e) {
                const userId = document.getElementById("inputUserId").value;
                if (!userId) {
                    e.preventDefault();
                    alert("Harap login dulu sebelum memesan tiket.");
                }
            });

        const stars = document.querySelectorAll("#ratingStars i");
        let selectedRating = 0;

        stars.forEach((star) => {
            star.addEventListener("click", () => {
                selectedRating = parseInt(star.getAttribute("data-value"));
                updateStars(selectedRating);
                document.getElementById("inputStarRating").value = selectedRating;
            });
        });

        function updateStars(rating) {
            stars.forEach((star) => {
                const value = parseInt(star.getAttribute("data-value"));
                star.classList.toggle("text-yellow-400", value <= rating);
                star.classList.toggle("text-gray-500", value > rating);
            });
        }

        document.getElementById("movieReviewForm").addEventListener("submit", function(e) {
            const userId = document.getElementById("inputUserId").value;
            const rating = selectedRating;
            const comment = document.getElementById("inputComment").value.trim();
            const countOrdered = {{ $countOrdered }};

            if (rating === 0) {
                e.preventDefault();
                alert("Mohon pilih rating terlebih dahulu.");
                return;
            }

            if (comment === "") {
                e.preventDefault();
                alert("Mohon isi komentar terlebih dahulu.");
                return;
            }

            if (!userId) {
                e.preventDefault();
                alert("Anda harus login untuk mengirim review.");
                return;
            }

            if (countOrdered < 1) {
                e.preventDefault();
                alert("Harap membeli tiket terlebih dahulu.");
                return;
            }

            // Rating sudah diset ke hidden input di event click bintang
        });

        function resetComment() {
            document.getElementById("inputComment").value = "";
            selectedRating = 0;
            updateStars(0);
            document.getElementById("inputStarRating").value = "";
        }
    </script>
</body>

</html>
