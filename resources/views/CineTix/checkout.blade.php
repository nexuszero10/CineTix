<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CINETix - Checkout Order #{{ $params['transaction_details']['order_id'] }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://kit.fontawesome.com/yourkit.js" crossorigin="anonymous"></script>
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    @vite(['resources/css/movie-detail/native.css', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen">
    <nav class="w-full fixed top-0 left-0 z-50 shadow-lg bg-[#011C3C]/70 backdrop-blur-md border-b border-white/10">
        <div class="max-w-screen-xl mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Logo -->
            <a href="{{ route('CineTix.homepage') }}"
                class="text-3xl font-bold tracking-wide flex items-center logo-hover transition">
                <span class="text-[#FF3C3C]">CINE</span><span class="text-yellow-400">Tix</span>
            </a>

            <!-- Tengah (Navigasi Halaman) -->
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

    <main class="flex justify-center items-center px-4 mt-28 mb-10">
        <div class="w-full max-w-4xl bg-white p-8 rounded-lg shadow-lg border">
            <div class="flex justify-between items-start mb-8">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">CINETix Invoice</h1>
                    <div class="mt-4">
                        <p class="text-sm text-gray-600 font-semibold">BILLING TO: {{ $customerName }}</p>
                        <p class="text-sm text-gray-600">{{ $customerEmail }}</p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-sm text-gray-500 font-semibold">INVOICE #</p>
                    <p class="text-lg font-bold text-gray-800">{{ $params['transaction_details']['order_id'] }}</p>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-300 text-sm">
                    <thead class="bg-black text-white">
                        <tr>
                            <th class="px-4 py-2 text-left">Produk</th>
                            <th class="px-4 py-2 text-center">Harga</th>
                            <th class="px-4 py-2 text-center">Jumlah</th>
                            <th class="px-4 py-2 text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $subtotal = 0; @endphp

                        {{-- Film --}}
                        {{-- Ambil item movie dari item_details --}}
                        @php
                            $movieItem = collect($params['item_details'])->firstWhere(
                                'id',
                                'movie-' . $order->schedule_id,
                            );
                            $movieTitle = $movieItem['name'] ?? 'Movie';
                            $moviePrice = $movieItem['price'] ?? 0;
                            $movieQty = $movieItem['quantity'] ?? $order->number_of_seats;
                            $movieTotal = $moviePrice * $movieQty;
                            $subtotal += $movieTotal;
                        @endphp

                        <tr class="border-t border-gray-300">
                            <td class="px-4 py-2">
                                {{ $movieTitle }} <br />
                                <small class="text-gray-500">ID: {{ $movieItem['id'] ?? 'movie-?' }} / Movie</small>
                            </td>
                            <td class="px-4 py-2 text-center">
                                Rp{{ number_format($moviePrice, 0, ',', '.') }}
                            </td>
                            <td class="px-4 py-2 text-center">{{ $movieQty }}</td>
                            <td class="px-4 py-2 text-right">
                                Rp{{ number_format($movieTotal, 0, ',', '.') }}
                            </td>
                        </tr>

                        {{-- Snacks --}}
                        @foreach ($order_snacks as $snack)
                            @php
                                $quantity = $snack->pivot->quantity ?? 1;
                                $price = $snack->price;
                                $category = $snack->category;
                                $totalSnack = $price * $quantity;
                                $subtotal += $totalSnack;
                            @endphp
                            <tr class="border-t border-gray-300">
                                <td class="px-4 py-2">
                                    {{ $snack->name }} <br />
                                    <small class="text-gray-500">ID: snack-{{ $snack->id }} / {{ $category }}</small>
                                </td>
                                <td class="px-4 py-2 text-center">Rp{{ number_format($price, 0, ',', '.') }}</td>
                                <td class="px-4 py-2 text-center">{{ $quantity }}</td>
                                <td class="px-4 py-2 text-right">Rp{{ number_format($totalSnack, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach

                        {{-- Promo Discount --}}
                        @if ($order->promotion_id && $discountAmount > 0)
                            <tr class="border-t border-gray-300 bg-green-100">
                                <td class="px-4 py-2" colspan="3">
                                    Promo Code:
                                    {{ \App\Models\Promotion::find($order->promotion_id)->code ?? 'Promo' }}
                                </td>
                                <td class="px-4 py-2 text-right text-green-700 font-semibold">
                                    -Rp{{ number_format($discountAmount, 0, ',', '.') }}
                                </td>
                            </tr>
                            @php
                                $subtotal -= $discountAmount;
                            @endphp
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="mt-2 flex justify-between text-sm text-gray-700 items-center">
                {{-- Tombol Bayar di kiri --}}
                <button id="pay-button" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">
                    Bayar Sekarang
                </button>

                {{-- Total Harga di kanan --}}
                <div class="w-full max-w-xs">
                    <div class="flex justify-between py-1 font-bold border-t pt-2 mt-2">
                        <span>TOTAL</span>
                        <span>Rp{{ number_format($subtotal, 0, ',', '.') }}</span>
                    </div>
                </div>
            </div>

        </div>
    </main>


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
    </script>
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    alert("payment success!");
                    console.log(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>
</body>
