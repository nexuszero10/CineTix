<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CINETix - Snacks {{ $movie->title }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://kit.fontawesome.com/yourkit.js" crossorigin="anonymous"></script>
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

    <div class="p-6 mt-20">
        <div class="flex items-center mb-4">
            <button class="text-3xl font-medium mr-4">&larr;</button>
            <h1 class="text-2xl font-semibold text-white">Pilih Makanan dan Minuman Kamu</h1>
        </div>

        <div class="flex flex-col lg:flex-row gap-6 justify-center">
            <!-- Food Layout -->
            <div class="bg-[#1a2332] border-white/10 p-6 rounded-xl w-full min-h-fit max-w-5xl">
                {{-- Tabs --}}
                <section class="py-2 w-[90%] mx-auto">
                    <div class="flex gap-4 text-sm">
                        <button id="tabFood" class="py-2 px-4 rounded-full font-semibold bg-yellow-400 text-black"
                            onclick="showTab('food')">Makanan</button>
                        <button id="tabDrink" class="py-2 px-4 rounded-full font-semibold bg-[#0e1726] text-yellow-400"
                            onclick="showTab('drink')">Minuman</button>
                    </div>
                </section>

                {{-- Content Food --}}
                <section id="contentFood" class="mt-6">
                    <div class="flex flex-wrap gap-4 justify-center">
                        @foreach ($foods as $item)
                            <div
                                class="w-[calc(50%-0.5rem)] bg-[#0e1726] text-white p-4 rounded-2xl flex flex-row justify-between gap-4 overflow-hidden">
                                <div>
                                    <h3 class="text-base font-bold">{{ $item->name }}</h3>
                                    <p class="text-xs text-gray-400">Menu Makanan</p>
                                    <p class="text-white text-m font-semibold mt-4">
                                        Rp{{ number_format($item->price, 0, ',', '.') }}</p>
                                </div>
                                <div class="flex flex-row items-end justify-end gap-2 w-1/2">
                                    @php
                                        $words = explode(' ', strtolower($item->name));
                                        $slug = implode('-', $words);
                                    @endphp
                                    <button class="bg-yellow-400 text-[#0e1726] text-sm px-2 py-1 rounded-full">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                    <span id="foodCounter{{ $item->id }}" class="text-sm font-semibold mx-1"
                                        data-price="{{ $item->price }}">0</span>
                                    <button class="bg-yellow-400 text-[#0e1726] text-sm px-2 py-1 rounded-full mr-2">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                    <div
                                        class="w-1/3 h-20 bg-[#1a2533] border border-yellow-400 rounded overflow-hidden">
                                        <img src="{{ asset('storage/images/foods/' . $slug . '.jpg') }}"
                                            class="w-full h-full object-cover" />
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>

                {{-- Content Drinks --}}
                <section id="contentDrink" class="mt-6 hidden">
                    <div class="flex flex-row flex-wrap gap-4 justify-center">
                        @foreach ($drinks as $item)
                            <div
                                class="w-[calc(50%-0.5rem)] bg-[#0e1726] text-white p-4 rounded-2xl flex flex-row justify-between gap-4 overflow-hidden">
                                <div>
                                    <h3 class="text-base font-bold">{{ $item->name }}</h3>
                                    <p class="text-xs text-gray-400">Menu Makanan</p>
                                    <p class="text-white text-m font-semibold mt-4">
                                        Rp{{ number_format($item->price, 0, ',', '.') }}</p>
                                </div>
                                <div class="flex flex-row items-end justify-end gap-2 w-1/2">
                                    @php
                                        $words = explode(' ', strtolower($item->name));
                                        $slug = implode('-', $words);
                                    @endphp
                                    <button class="bg-yellow-400 text-[#0e1726] text-sm px-2 py-1 rounded-full">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                    <span id="drinkCounter{{ $item->id }}" class="text-sm font-semibold mx-1"
                                        data-price="{{ $item->price }}">0</span>
                                    <button class="bg-yellow-400 text-[#0e1726] text-sm px-2 py-1 rounded-full mr-2">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                    <div
                                        class="w-1/3 h-20 bg-[#1a2533] border border-yellow-400 rounded overflow-hidden">
                                        <img src="{{ asset('storage/images/drinks/' . $slug . '.jpg') }}"
                                            class="w-full h-full object-cover" />
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>

            <!-- Sidebar Info -->
            <div class="w-full lg:max-w-lg bg-[#1a2332] text-white rounded-xl p-4 shadow-md flex flex-col h-full">
                <!-- Movie, Schdule, and Sum Order  -->
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
                            <p class="text-m text-gray-100">Jumlah kursi: {{ $numberOfSeats }}</p>
                        </div>

                        <div class="text-yellow-400 font-semibold text-xl mt-auto border-t pt-2">
                            Rp <span id="subTotal"
                                data-base="{{ $subTotal }}">{{ number_format($subTotal, 0, ',', '.') }}</span>
                        </div>
                    </div>
                </div>

                <!-- Select Food Info -->
                <form action="{{ route('CineTix.order-summary') }}" method="POST" id="snackForm">
                    @csrf
                    <input type="hidden" name="inputScheduleId" value="{{ $movie->schedules[0]->id }}">
                    <input type="hidden" name="inputMovieId" value="{{ $movie->id }}">
                    <input type="hidden" name="inputNumberOfSeats" value="{{ $numberOfSeats }}">
                    <input type="hidden" name="inputSubTotal" id="inputSubTotal" value="{{ $subTotal }}">
                    @foreach ($selectedSeats as $seat)
                        <input type="hidden" name="inputSelectedSeats[]" value="{{ $seat }}">
                    @endforeach

                    <div id="selectedSnacksInput"></div>

                    <div class="mt-auto border-t border-gray-600 pt-4 space-y-2">
                        <div>
                            <p class="text-m text-gray-300 mt-2">
                                Snacks : <span id="selectedSnacks">Belum ada pilihan</span>
                            </p>
                            <p id="itemCount" class="text-sm text-gray-400 mb-7">0 item terpilih</p>
                        </div>

                        <div class="flex flex-row gap-4 mt-4">
                            <button type="button" onclick="clearSnacks()"
                                class="border border-red-600 bg-red-600 rounded-full px-4 py-2 hover:scale-105 text-[#1a2332] transition duration-200">
                                Reset
                            </button>

                            <button type="submit" id="submitButton"
                                class="rounded-full px-4 py-2 font-semibold transition duration-200 bg-green-500 text-black hover:scale-105">
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

        // snacks list
        document.addEventListener("DOMContentLoaded", () => {
            showTab("food");
        });

        // function showTab 
        function showTab(tab) {
            const tabFood = document.getElementById("tabFood");
            const tabDrink = document.getElementById("tabDrink");
            const contentFood = document.getElementById("contentFood");
            const contentDrink = document.getElementById("contentDrink");

            if (tab === "food") {
                tabFood.classList.remove("bg-[#0e1726]", "text-yellow-400");
                tabFood.classList.add("bg-yellow-400", "text-black");

                tabDrink.classList.remove("bg-yellow-400", "text-black");
                tabDrink.classList.add("bg-[#0e1726]", "text-yellow-400");

                contentFood.classList.remove("hidden");
                contentDrink.classList.add("hidden");
            } else {
                tabDrink.classList.remove("bg-[#0e1726]", "text-yellow-400");
                tabDrink.classList.add("bg-yellow-400", "text-black");

                tabFood.classList.remove("bg-yellow-400", "text-black");
                tabFood.classList.add("bg-[#0e1726]", "text-yellow-400");

                contentDrink.classList.remove("hidden");
                contentFood.classList.add("hidden");
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            showTab('food');

            const plusButtons = document.querySelectorAll('button .fa-plus');
            const minusButtons = document.querySelectorAll('button .fa-minus');
            const itemCountDisplay = document.getElementById("itemCount");
            const selectedSnacksDisplay = document.getElementById("selectedSnacks");
            const subTotalDisplay = document.getElementById("subTotal");

            const snackCounts = {}; // Format: { id: { name: 'Popcorn', price: 12000, count: 2 } }

            function updateSummary() {
                let totalItems = 0;
                let displayText = '';

                for (const id in snackCounts) {
                    const item = snackCounts[id];
                    if (item.count > 0) {
                        totalItems += item.count;
                        displayText += `${item.name} (${item.count}), `;
                    }
                }

                itemCountDisplay.textContent = `${totalItems} item terpilih`;
                selectedSnacksDisplay.textContent = displayText.trim().replace(/,\s*$/, '') || 'Belum ada pilihan';

                updateSubTotal();
                updateHiddenSnackInputs(); // Tambahan: update hidden inputs
            }

            function updateSubTotal() {
                const basePrice = parseInt(subTotalDisplay.dataset.base); // Harga tiket
                let snacksTotal = 0;

                for (const id in snackCounts) {
                    const item = snackCounts[id];
                    if (item.count > 0) {
                        snacksTotal += item.price * item.count;
                    }
                }

                const total = basePrice + snacksTotal;
                subTotalDisplay.textContent = total.toLocaleString('id-ID');

                const inputSubTotal = document.getElementById("inputSubTotal");
                if (inputSubTotal) {
                    inputSubTotal.value = total;
                }
            }

            function updateHiddenSnackInputs() {
                const snacksInputContainer = document.getElementById('selectedSnacksInput');
                snacksInputContainer.innerHTML = ''; // clear existing

                for (const id in snackCounts) {
                    const item = snackCounts[id];
                    if (item.count > 0) {
                        const inputId = document.createElement('input');
                        inputId.type = 'hidden';
                        inputId.name = 'inputSnackIds[]';
                        inputId.value = id;
                        snacksInputContainer.appendChild(inputId);

                        const inputQty = document.createElement('input');
                        inputQty.type = 'hidden';
                        inputQty.name = 'inputSnackQuantities[]';
                        inputQty.value = item.count;
                        snacksInputContainer.appendChild(inputQty);
                    }
                }
            }

            plusButtons.forEach(plusIcon => {
                const plusBtn = plusIcon.closest('button');
                plusBtn.addEventListener('click', () => {
                    const container = plusBtn.parentElement;
                    const span = container.querySelector(
                        'span[id^="foodCounter"], span[id^="drinkCounter"]');
                    const minusBtn = container.querySelector('button .fa-minus').closest('button');
                    const itemId = span.id.replace(/[^\d]/g, '');
                    const itemName = container.parentElement.querySelector('h3').textContent.trim();
                    const priceText = container.parentElement.querySelector(
                        'p.text-m.font-semibold').textContent.trim();
                    const price = parseInt(priceText.replace(/[^\d]/g, ''));

                    let count = parseInt(span.textContent);
                    count++;
                    span.textContent = count;

                    snackCounts[itemId] = {
                        name: itemName,
                        price: price,
                        count: count
                    };

                    minusBtn.disabled = false;
                    minusBtn.classList.remove('opacity-50', 'cursor-not-allowed');

                    updateSummary();
                });
            });

            minusButtons.forEach(minusIcon => {
                const minusBtn = minusIcon.closest('button');
                const container = minusBtn.parentElement;
                const span = container.querySelector('span[id^="foodCounter"], span[id^="drinkCounter"]');
                const itemId = span.id.replace(/[^\d]/g, '');
                const itemName = container.parentElement.querySelector('h3').textContent.trim();
                const priceText = container.parentElement.querySelector('p.text-m.font-semibold')
                    .textContent.trim();
                const price = parseInt(priceText.replace(/[^\d]/g, ''));

                if (parseInt(span.textContent) === 0) {
                    minusBtn.disabled = true;
                    minusBtn.classList.add('opacity-50', 'cursor-not-allowed');
                }

                minusBtn.addEventListener('click', () => {
                    let count = parseInt(span.textContent);
                    if (count > 0) {
                        count--;
                        span.textContent = count;

                        snackCounts[itemId] = {
                            name: itemName,
                            price: price,
                            count: count
                        };

                        if (count === 0) {
                            minusBtn.disabled = true;
                            minusBtn.classList.add('opacity-50', 'cursor-not-allowed');
                        }

                        updateSummary();
                    }
                });
            });

            window.clearSnacks = function() {
                for (const id in snackCounts) {
                    const counterSpan = document.getElementById(`foodCounter${id}`) || document.getElementById(
                        `drinkCounter${id}`);
                    if (counterSpan) {
                        counterSpan.textContent = '0';
                        const minusBtn = counterSpan?.parentElement.querySelector('button .fa-minus')?.closest(
                            'button');
                        if (minusBtn) {
                            minusBtn.disabled = true;
                            minusBtn.classList.add('opacity-50', 'cursor-not-allowed');
                        }
                    }
                }

                for (const id in snackCounts) {
                    snackCounts[id].count = 0;
                }

                updateSummary();
            };
        });
    </script>
</body>

</html>
