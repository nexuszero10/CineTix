<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CINETix - Order {{ $movie->title }}</title>
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

    <div class="flex flex-col lg:flex-row gap-8 p-8 mt-24">
        <!-- Order Summary -->
        <div class="w-full h-fit lg:w-2/3 bg-[#1a2332] p-6 rounded-xl shadow-md">
            <h2 class="text-xl font-semibold mb-6 text-yellow-400">Order Summary</h2>
            <div class="space-y-5 text-gray-800">
                {{-- Detail tiket --}}
                <div class="flex justify-between border-b border-gray-500 pb-2">
                    <span class="text-white">
                        {{ $numberOfSeats }} × kursi {{ '(' . implode(', ', $selectedSeats) . ')' }}
                    </span>
                    <span class="text-white">
                        {{ number_format($movie->price * $numberOfSeats, 0, ',', '.') }}
                    </span>
                </div>

                {{-- Detail snack --}}
                @foreach ($detailSelectedSnacks as $snack)
                    <div class="flex justify-between border-b border-gray-500 pb-2">
                        <span class="text-white">
                            {{ $snack->quantity }} × {{ $snack->name }} ({{ $snack->category }})
                        </span>
                        <span class="text-white">
                            {{ number_format($snack->price * $snack->quantity, 0, ',', '.') }}
                        </span>
                    </div>
                @endforeach
                <div class="mt-6 space-y-2">
                    <div id="discountInfo" class="space-y-2 text-white text-sm hidden">
                        <div class="flex justify-between">
                            <span id="discountLabel">Diskon:</span>
                            <span id="discountAmount">Rp0</span>
                        </div>
                    </div>

                    <div class="flex justify-between font-semibold">
                        <span class="text-yellow-400 text-lg">Total:</span>
                        <span class="text-yellow-400 text-lg" id="orderSummaryTotal">
                            Rp{{ number_format($subTotalFinal, 0, ',', '.') }}
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detail Info -->
        <div class="w-1/2 h-fit bg-[#1a2332] p-2 rounded-xl shadow-md">
            <div class="w-full bg-[#1a2332] text-white rounded-xl p-4 shadow-md flex flex-col">
                <!-- Movie, Schdule, and Sum Order  -->
                <div class="flex gap-6 mb-4">
                    <img src="{{ asset('storage/images/movies/poster/' . $movie->image_path) }}"
                        alt="{{ $movie->title }}" class="rounded-md w-52 h-auto object-cover">

                    <div class="flex flex-col justify-between w-full h-auto">
                        <div class="flex flex-col gap-2">
                            <h2 class="font-bold text-yellow-400 text-2xl leading-snug mb-1">{{ $movie->title }}</h2>
                            <p class="text-m text-gray-100">{{ $movie->schedules[0]->day }},
                                {{ \Carbon\Carbon::parse($movie->schedules[0]->date)->format('d M Y') }}</p>
                            <p class="text-m text-gray-100">CINETix - Studio
                                {{ $movie->schedules[0]->studio->studio_code }}</p>
                            <p>Waktu : {{ \Carbon\Carbon::parse($movie->schedules[0]->time)->format('H:i') }}</p>
                            <p class="text-m text-gray-100">Jumlah kursi : {{ $numberOfSeats }}</p>
                            <p class="text-orange-600 underline underline-offset-4 cursor-pointer"
                                onclick="showPromotions()">Lihat Promo</p>
                            </p>
                            <div class="flex flex-row gap-2">
                                <input type="text" id="coupon" name="inputCoupon" placeholder="Masukkan kode"
                                    class="w-2/3 rounded-md text-black" />
                                <button type="button"
                                    class="w-1/3 mt-2 bg-[#16FF00] text-black font-semibold rounded-md hover:bg-green-600"
                                    onclick="applyCoupon()">
                                    Terapkan
                                </button>
                            </div>
                            <div class="text-sm text-white mt-2 hidden" id="couponInfo"></div>
                        </div>

                        <form action="" method="POST">
                            @csrf
                            <input type="hidden" name="inputScheuleId" value="{{ $schedule->id }}">
                            <input type="hidden" name="inputMovieId" value="{{ $movie->id }}">
                            <input type="hidden" name="inputNumberOfSeats" value="{{ $numberOfSeats }}">
                            <div class="text-yellow-400 font-semibold text-xl mt-auto border-t pt-2">
                                Rp <span id="subTotal"
                                    data-base="{{ $subTotalFinal }}">{{ number_format($subTotalFinal, 0, ',', '.') }}</span>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Submit Button -->
                <button
                    class="w-full mt-0 text-white bg-gray-900 hover:bg-yellow-400 hover:text-gray-900 transition-all duration-500 py-3 rounded-lg text-center font-semibold">
                    Go to Payment
                </button>
            </div>

            <!-- MODAL PROMO 2 KOLOM -->
            <div id="modalPromotions"
                class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm z-50 hidden flex items-center justify-center">
                <div
                    class="bg-slate-900 rounded-2xl w-[50%] max-w-4xl p-6 shadow-lg relative overflow-y-auto max-h-[90vh] animate-fade-scale-in">

                    <!-- Tombol Close -->
                    <button onclick="document.getElementById('modalPromotions').classList.add('hidden')"
                        class="absolute top-3 right-4 text-red-500 text-xl font-bold cursor-pointer hover:scale-105 transition-transform">×</button>

                    <h2 class="text-2xl font-bold text-yellow-400 mb-6 text-center">Daftar Promo Tersedia
                    </h2>

                    @if (count($promotions))
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @foreach ($promotions as $promo)
                                <div
                                    class="bg-[#1a2332] border-2 border-gray-600 rounded-xl p-4 flex flex-col justify-between">
                                    <div>
                                        <div class="flex justify-between items-center">
                                            <h3 class="text-lg font-bold text-green-400">
                                                {{ $promo->code }}</h3>
                                            <button onclick="copyCode('{{ $promo->code }}')"
                                                class="text-xs bg-yellow-400 text-slate-900 px-2 py-1 rounded hover:scale-105 transition">
                                                Salin Kode
                                            </button>
                                        </div>
                                        <p class="text-white text-xs leading-relaxed">
                                            @if ($promo->type === 'diskon')
                                                Diskon <strong>{{ $promo->discount }}%</strong> untuk
                                                pembelian minimal
                                                <strong>Rp{{ number_format($promo->minimum_price, 0, ',', '.') }}</strong>.
                                            @else
                                                Potongan harga
                                                <strong>Rp{{ number_format($promo->discount, 0, ',', '.') }}</strong>
                                                untuk pembelian minimal
                                                <strong>Rp{{ number_format($promo->minimum_price, 0, ',', '.') }}</strong>.
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-white text-center">Belum ada promo yang tersedia saat ini.</p>
                    @endif
                </div>
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

        function showPromotions() {
            const modal = document.getElementById('modalPromotions');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function copyCode(code) {
            // Periksa apakah browser mendukung Clipboard API
            if (navigator.clipboard) {
                navigator.clipboard.writeText(code)
                    .then(() => {
                        alert(`Kode "${code}" berhasil disalin!`);
                    })
                    .catch((err) => {
                        console.error(err);
                        alert("Gagal menyalin kode. Silakan salin manual.");
                    });
            } else {
                // Fallback lama jika navigator.clipboard tidak didukung
                try {
                    const tempInput = document.createElement("input");
                    tempInput.value = code;
                    document.body.appendChild(tempInput);
                    tempInput.select();
                    document.execCommand("copy");
                    document.body.removeChild(tempInput);
                    alert(`Kode "${code}" berhasil disalin!`);
                } catch (err) {
                    alert("Gagal menyalin kode. Silakan salin manual.");
                }
            }
        }

        // ambil data subTotal 
        let originalSubtotal = parseInt(document.getElementById('subTotal').dataset.base);

        function applyCoupon() {
            const input = document.getElementById('coupon');
            const code = input.value.trim();

            const baseSubtotal = originalSubtotal; // GUNAKAN NILAI ASLI

            if (!code) {
                alert('Kode kupon masih kosong!');
                return;
            }

            const promotions = @json($promotions);
            const found = promotions.find(p => p.code.toLowerCase() === code.toLowerCase());

            if (!found) {
                alert('Kode kupon tidak cocok.');
                return;
            }

            if (baseSubtotal < found.minimum_price) {
                alert('Pembelian belum memenuhi batas minimum kupon.');
                return;
            }

            let discount = 0;
            let label = '';
            let sidebarLabel = '';

            if (found.type === 'harga') {
                discount = found.discount;
                label = `Potongan harga langsung`;
                sidebarLabel = `Potongan Rp${formatRupiah(discount)} telah diterapkan.`;
            } else if (found.type === 'diskon') {
                discount = Math.floor((found.discount / 100) * baseSubtotal);
                label = `Diskon ${found.discount}%`;
                sidebarLabel = `Diskon ${found.discount}% telah diterapkan.`;
            }

            const newTotal = baseSubtotal - discount;

            document.getElementById('orderSummaryTotal').textContent = `Rp${formatRupiah(newTotal)}`;

            const discountInfo = document.getElementById('discountInfo');
            discountInfo.classList.remove('hidden');
            document.getElementById('discountLabel').textContent = label;
            document.getElementById('discountAmount').textContent = `- Rp${formatRupiah(discount)}`;

            const couponInfo = document.getElementById('couponInfo');
            couponInfo.classList.remove('hidden');
            couponInfo.textContent = sidebarLabel;

            const subTotalElement = document.getElementById('subTotal');
            subTotalElement.textContent = formatRupiah(newTotal);
            subTotalElement.dataset.base = newTotal;

            input.value = '';
        }

        function formatRupiah(number) {
            return number.toLocaleString('id-ID');
        }
    </script>

</body>

</html>
