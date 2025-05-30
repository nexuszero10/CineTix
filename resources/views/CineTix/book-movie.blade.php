<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CINETix - Booking {{ $movie->title }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    @vite(['resources/css/movie-detail/native.css', 'resources/css/app.css', 'resources/js/app.js'])

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

    <div class="p-6 mt-20">
        <div class="flex items-center mb-4">
            <button class="text-3xl font-medium mr-4">&larr;</button>
            <h1 class="text-2xl font-semibold text-white">Pilih kursi kamu</h1>
        </div>

        <div class="flex flex-col lg:flex-row gap-6 justify-center">
            <!-- Seat Layout -->
            <div class="bg-[#1a2332] border-white/10 p-6 rounded-xl w-3/5 min-h-fit max-w-5xl">
                <div class="flex justify-center mb-4 gap-4 text-sm text-white">
                    <div class="flex items-center gap-2">
                        <div class="w-4 h-4 rounded bg-gray-400"></div>Tersedia
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-4 h-4 rounded bg-green-400"></div>Dibooking
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-4 h-4 rounded bg-red-500"></div>Terisi
                    </div>
                </div>

                <hr>

                <div class="text-center mt-8 mb-12">
                    <div class="inline-block bg-yellow-400 px-36 py-5 rounded-lg font-semibold shadow text-black">
                        Area Layar<br>
                    </div>
                </div>

                <div id="seatContainer" class="space-y-2 text-gray-500"></div>
            </div>

            <!-- Sidebar Info -->
            <div class="w-full lg:max-w-lg bg-[#1a2332] text-white rounded-xl p-4 shadow-md flex flex-col h-full">
                <!-- Bagian atas -->
                <div class="flex gap-6 mb-4">
                    <img src="{{ asset('storage/images/movies/poster/' . $movie->image_path) }}"
                        alt="{{ $movie->title }}" class="rounded-md w-48 h-72 object-cover">

                    <div class="flex flex-col justify-between h-72 space-y-2">
                        <div class="flex flex-col gap-1">
                            <h2 class="font-bold text-yellow-400 text-2xl leading-snug mb-1">{{ $movie->title }}</h2>
                            <p class="text-m text-gray-100">{{ $movie->schedules[0]->day }},
                                {{ \Carbon\Carbon::parse($movie->schedules[0]->date)->format('d M Y') }}</p>
                            <p class="text-m text-gray-100">CINETix - Studio
                                {{ $movie->schedules[0]->studio->studio_code }}</p>
                            <p>{{ \Carbon\Carbon::parse($movie->schedules[0]->time)->format('H:i') }}</p>
                            <p class="text-m text-gray-100">Jumlah kursi: {{ $number_of_seats }}</p>
                        </div>

                        <div class="text-yellow-400 font-semibold text-xl mt-auto border-t pt-2">
                            Rp<span id="totalHarga">0</span>
                        </div>
                    </div>
                </div>

                <!-- Bagian bawah -->
                <form action="{{ route('CineTix.movie-snacks') }}" method="POST" id="seatForm">
                    @csrf
                    <input type="hidden" name="inputMovieId" value="{{ $movie->id }}">
                    <input type="hidden" name="inputScheduleId" value="{{ $movie->schedules[0]->id }}">
                    <input type="hidden" name="inputNumberOfSeats" value="{{ $number_of_seats }}">
                    @php
                        $subTotal = $movie->price * $number_of_seats 
                    @endphp
                    <input type="hidden" name="inputSubTotal" value="{{ $subTotal }}">

                    <div id="selectedSeatsInputs"></div>

                    <div class="mt-auto border-t border-gray-600 pt-4 space-y-2">
                        <div>
                            <p class="text-m text-gray-300 mt-2">
                                Nomor kursi: <span id="selectedSeats">Belum ada pilihan</span>
                            </p>
                            <p id="seatCount" class="text-sm text-gray-400 mb-7">0 kursi terpilih</p>
                        </div>

                        <div class="flex flex-row gap-4 mt-4">
                            <button type="button" onclick="clearSeats()"
                                class="border border-red-600 bg-red-600 rounded-full px-4 py-2 hover:scale-105 text-[#1a2332] transition duration-200">
                                Reset
                            </button>

                            <button type="submit" id="submitButton"
                                class="rounded-full px-4 py-2 font-semibold transition duration-200 bg-green-500 text-black hover:scale-105 disabled:bg-gray-400 disabled:text-white disabled:cursor-not-allowed disabled:hover:scale-100"
                                disabled>
                                Lanjut
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

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

        const layout = [
            ['D1', 'D2', 'D3', 'D4', 'D5', 'D6', 'D7', 'D8', 'D9', 'D10'],
            ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10'],
            ['B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7', 'B8', 'B9', 'B10'],
            ['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10']
        ];

        const booked = @json($selected_seats);
        let number_of_seats = parseInt(@json($number_of_seats));
        const hargaPerKursi = @json($movie->price);

        const seatContainer = document.getElementById('seatContainer');
        const selectedSeatsDisplay = document.getElementById('selectedSeats');
        const seatCountDisplay = document.getElementById('seatCount');
        const totalHargaDisplay = document.getElementById('totalHarga');
        const selectedSeatsInputsContainer = document.getElementById('selectedSeatsInputs');
        const submitButton = document.getElementById('submitButton');

        let selectedSeats = [];

        layout.forEach(row => {
            const rowDiv = document.createElement('div');
            rowDiv.className = 'flex justify-center gap-1.5';

            row.forEach((seat, index) => {
                const seatDiv = document.createElement('div');

                if (seat === '') {
                    seatDiv.className = 'w-6 h-6';
                } else {
                    const baseClass =
                        'w-14 h-14 text-2xl flex items-center justify-center rounded-md font-medium cursor-pointer transition-transform duration-200 transform hover:scale-110';

                    if (booked.includes(seat)) {
                        seatDiv.className = baseClass + ' cursor-not-allowed';
                        seatDiv.innerHTML = '<i class="fas fa-couch text-3xl text-red-500"></i>';
                        seatDiv.title = seat;
                    } else {
                        seatDiv.className = baseClass + ' hover:ring-0 hover:text-gray-300';
                        seatDiv.innerHTML = '<i class="fas fa-couch text-3xl"></i>';
                        seatDiv.title = seat;

                        if ((index + 1) % 5 === 0 && index !== row.length - 1) {
                            seatDiv.style.marginRight = '35px';
                        }

                        seatDiv.onclick = () => {
                            if (selectedSeats.includes(seat)) {
                                // Unselect
                                seatDiv.classList.remove('text-green-500', 'font-bold',
                                    'hover:text-green-300');
                                seatDiv.classList.add('hover:text-gray-300');
                                selectedSeats = selectedSeats.filter(s => s !== seat);
                            } else {
                                if (selectedSeats.length >= number_of_seats) {
                                    alert(`Maksimal pemilihan ${number_of_seats} kursi`);
                                    return;
                                }
                                seatDiv.classList.add('text-green-500', 'font-bold',
                                    'hover:text-green-300');
                                seatDiv.classList.remove('hover:text-gray-300');
                                selectedSeats.push(seat);
                            }
                            updateSeatUI();
                        };
                    }
                }

                rowDiv.appendChild(seatDiv);
            });

            seatContainer.appendChild(rowDiv);
        });

        function updateSeatUI() {
            const seatCount = selectedSeats.length;
            selectedSeatsDisplay.innerText = seatCount ? selectedSeats.join(', ') : 'Belum ada pilihan';
            seatCountDisplay.innerText = `${seatCount} kursi terpilih`;
            totalHargaDisplay.innerText = (seatCount * hargaPerKursi).toLocaleString('id-ID');

            if (seatCount === number_of_seats) {
                submitButton.disabled = false;
            } else {
                submitButton.disabled = true;
            }

            updateSelectedSeatsInputs();
        }

        function updateSelectedSeatsInputs() {
            selectedSeatsInputsContainer.innerHTML = '';
            selectedSeats.forEach(seat => {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'inputSelectedSeats[]';
                input.value = seat;
                selectedSeatsInputsContainer.appendChild(input);
            });
        }

        function clearSeats() {
            document.querySelectorAll('.text-green-500').forEach(seat => {
                seat.classList.remove('text-green-500', 'font-bold', 'hover:text-green-300');
                seat.classList.add('hover:text-gray-300');
            });

            selectedSeats = [];
            updateSeatUI();
        }
    </script>
</body>

</html>
