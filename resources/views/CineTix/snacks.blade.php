<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CINETix - Food & Beverages</title>
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


    <!-- HERO -->
    <section class="text-center pt-32 pb-6 px-6 mb-4">
        <h2 id="heroTitle" class="text-4xl font-bold text-white mb-3 animate-bounce">
            <i class="fa-solid fa-burger fa-beat" style="color: #FFD43B;"></i>&nbsp;Pilih Makanan Favoritmu
        </h2>
    </section>

    {{-- Tabs --}}
    <section class="py-2 w-[90%] mx-auto">
        <div class="flex gap-4 text-sm justify-center">
            <button id="tabFood" class="py-2 px-4 rounded-full font-semibold bg-yellow-400 text-black"
                onclick="showTab('food')">Makanan</button>
            <button id="tabDrink" class="py-2 px-4 rounded-full font-semibold bg-[#0e1726] text-yellow-400"
                onclick="showTab('drink')">Minuman</button>
        </div>
    </section>

    {{-- Content Food --}}
    <section id="contentFood" class="mt-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-center w-4/5 mx-auto">
            @foreach ($foods as $item)
                @php
                    $slug = Str::slug(strtolower($item->name));
                @endphp
                <div
                    class="bg-[#0e1726] text-white p-4 rounded-2xl flex flex-row justify-between gap-4 overflow-hidden border-2 border-gray-600">
                    <div>
                        <h3 class="text-base font-bold">{{ $item->name }}</h3>
                        <p class="text-xs text-gray-400">Menu Makanan</p>
                        <p class="text-white text-m font-semibold mt-4">
                            Rp{{ number_format($item->price, 0, ',', '.') }}</p>
                    </div>
                    <div class="flex flex-row items-end justify-end gap-2 w-1/2">
                        <div class="w-1/3 h-20 bg-[#1a2533] border border-yellow-400 rounded overflow-hidden">
                            <img src="{{ asset('storage/images/foods/' . $slug . '.jpg') }}"
                                class="w-full h-full object-cover" />
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    {{-- Content Drinks --}}
    <section id="contentDrink" class="my-6 hidden">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-center w-4/5 mx-auto">
            @foreach ($drinks as $item)
                @php
                    $slug = Str::slug(strtolower($item->name));
                @endphp
                <div
                    class="bg-[#0e1726] text-white p-4 rounded-2xl flex flex-row justify-between gap-4 overflow-hidden border-2 border-gray-600">
                    <div>
                        <h3 class="text-base font-bold">{{ $item->name }}</h3>
                        <p class="text-xs text-gray-400">Menu Minuman</p>
                        <p class="text-white text-m font-semibold mt-4">
                            Rp{{ number_format($item->price, 0, ',', '.') }}</p>
                    </div>
                    <div class="flex flex-row items-end justify-end gap-2 w-1/2">
                        <div class="w-1/3 h-20 bg-[#1a2533] border border-yellow-400 rounded overflow-hidden">
                            <img src="{{ asset('storage/images/drinks/' . $slug . '.jpg') }}"
                                class="w-full h-full object-cover" />
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
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

        document.addEventListener("DOMContentLoaded", () => {
            showTab('food');
        });

        function showTab(tab) {
            const tabFood = document.getElementById("tabFood");
            const tabDrink = document.getElementById("tabDrink");
            const contentFood = document.getElementById("contentFood");
            const contentDrink = document.getElementById("contentDrink");
            const heroTitle = document.getElementById("heroTitle");

            if (tab === "food") {
                tabFood.classList.remove("bg-[#0e1726]", "text-yellow-400");
                tabFood.classList.add("bg-yellow-400", "text-black");

                tabDrink.classList.remove("bg-yellow-400", "text-black");
                tabDrink.classList.add("bg-[#0e1726]", "text-yellow-400");

                contentFood.classList.remove("hidden");
                contentDrink.classList.add("hidden");

                heroTitle.innerHTML =
                    `<i class="fa-solid fa-burger fa-beat" style="color: #FFD43B;"></i>&nbsp;Pilih Makanan Favoritmu`;
            } else {
                tabDrink.classList.remove("bg-[#0e1726]", "text-yellow-400");
                tabDrink.classList.add("bg-yellow-400", "text-black");

                tabFood.classList.remove("bg-yellow-400", "text-black");
                tabFood.classList.add("bg-[#0e1726]", "text-yellow-400");

                contentDrink.classList.remove("hidden");
                contentFood.classList.add("hidden");

                heroTitle.innerHTML =
                    `<i class="fa-solid fa-mug-hot fa-beat" style="color: #FFD43B;"></i>&nbsp;Pilih Minuman Favoritmu`;
            }
        }
    </script>
</body>

</html>
