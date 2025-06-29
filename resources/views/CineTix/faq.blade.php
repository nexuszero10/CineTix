<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CINETix - FAQ</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    @vite(['resources/css/movie-detail/native.css', 'resources/js/movie-detail.js', 'resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-h-screen flex flex-col">
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

    <!-- FAQ SECTION -->
    <div class="container mx-auto mt-32 mb-10 px-4 max-w-3xl text-white" x-data="faqData()">
        <div class="p-6 bg-gradient-to-br from-[#0e1a2b] to-[#0a141f] rounded-2xl shadow border border-gray-500">
            <p class="text-center text-xl font-semibold mb-6 text-yellow-400">Frequently Asked Question</p>
            <div class="space-y-4">
                <template x-for="(item, index) in items" :key="index">
                    <div class="bg-gradient-to-r from-[#011228] to-[#072244] rounded">
                        <button @click="toggle(index)"
                            class="w-full text-left px-4 py-3 flex justify-between items-center hover:bg-white/10 transition duration-200"
                            :aria-expanded="open === index">
                            <span x-text="item.question" class="font-medium"></span>
                            <svg :class="{ 'rotate-180': open === index }"
                                class="w-5 h-5 transition-transform transform" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open === index" x-transition:enter="transition duration-700 ease-in-out"
                            x-transition:enter-start="opacity-0 max-h-0 translate-y-[-10px]"
                            x-transition:enter-end="opacity-100 max-h-96 translate-y-0"
                            x-transition:leave="transition duration-500 ease-in-out"
                            x-transition:leave-start="opacity-100 max-h-96 translate-y-0"
                            x-transition:leave-end="opacity-0 max-h-0 translate-y-[-10px]"
                            class="px-4 pb-4 text-gray-400 overflow-hidden">
                            <p x-text="item.answer"></p>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <!-- SUPPORT SECTION -->
    <div class="max-w-3xl mx-auto grid md:grid-cols-2 gap-6 items-center mt-5">
        <div class="text-center">
            <img src="{{ asset('storage/images/customer-supp.jpg') }}" alt="Customer Support"
                class="w-full max-w-xs mx-auto shadow-sm rounded-lg">
        </div>
        <div class="text-center md:text-left">
            <h2 class="font-bold mb-3 text-xl md:text-2xl text-yellow-400">Masih butuh bantuan?</h2>
            <p class="text-gray-300 mb-4 text-sm md:text-base text-justify">
                Jangan khawatir, tim layanan pelanggan kami siap membantu Anda.<br>
                Hubungi kami jika Anda memiliki pertanyaan lebih lanjut atau butuh dukungan lebih detail.
            </p>
            <a href="{{ route('CineTix.contact-us') }}"
                class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-2 rounded shadow">
                Hubungi Customer Support
            </a>
        </div>
    </div>

    <!--FOOTERRRRR-->
    <footer class="text-white px-6 md:px-16 py-10 text-sm mt-20">
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

            <!-- Bantuan -->
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

        // toggle dorpdwon faq
        function faqData() {
            return {
                open: null,
                items: [{
                        question: 'Bagaimana cara membuat akun di Cinetix?',
                        answer: 'Anda bisa mendaftar dengan mengklik tombol "Daftar" di pojok kanan atas dan mengisi formulir registrasi dengan data yang valid.'
                    },
                    {
                        question: 'Apakah saya bisa membatalkan atau mengubah tiket yang sudah dibeli?',
                        answer: 'Saat ini, tiket yang sudah dibeli tidak bisa dibatalkan atau diubah melalui website. Silakan hubungi customer support untuk bantuan lebih lanjut.'
                    },
                    {
                        question: 'Metode pembayaran apa saja yang tersedia di Cinetix?',
                        answer: 'Kami menerima pembayaran melalui e-wallet, transfer bank, kartu kredit, dan pembayaran langsung di gerai mitra kami.'
                    },
                    {
                        question: 'Bagaimana cara memilih kursi saat pemesanan tiket?',
                        answer: 'Setelah memilih film dan jadwal, Anda bisa memilih kursi yang tersedia langsung di layout studio yang tampil di layar pemesanan.'
                    },
                    {
                        question: 'Apakah Cinetix menyediakan pilihan snack saat pemesanan tiket?',
                        answer: 'Ya, Anda dapat memesan snack favorit seperti popcorn dan minuman secara langsung saat proses pemesanan tiket.'
                    }
                ],
                toggle(index) {
                    this.open = this.open === index ? null : index;
                }
            }
        }
    </script>
</body>

</html>
