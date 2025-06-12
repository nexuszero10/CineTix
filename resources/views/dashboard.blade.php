<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl tracking-wider text-gray-200 leading-tight text-center mt-5">
            {{ __('Transaction History') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-11/12 mx-auto sm:px-6 lg:px-8">
            @if ($user_orders->isEmpty())
                <div class="text-center text-gray-300 text-xl font-semibold mt-20">
                    Anda belum membeli tiket.
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($user_orders as $order)
                        @php
                            $jadwal = \Carbon\Carbon::parse($order->schedule->date . ' ' . $order->schedule->time);
                        @endphp

                        <div
                            class="bg-[#0f1d33] border border-gray-400 rounded-lg p-4 shadow-md flex flex-col justify-between h-full">
                            <h3 class="text-lg font-semibold text-yellow-400 mb-2">
                                Order Number: {{ $order->order_number }}
                            </h3>

                            <div class="w-full h-48 mb-3">
                                <img src="{{ asset('storage/images/movies/poster/' . $order->schedule->movie->image_path) }}"
                                    alt="{{ $order->schedule->movie->title }}"
                                    class="w-4/5 h-full object-cover rounded">
                            </div>

                            <div class="text-gray-300 text-base space-y-1 mb-3">
                                <p>Jadwal: {{ $jadwal->translatedFormat('l, d F Y - H:i') }}</p>
                                <p>Total item: {{ $order->number_of_seats + count($order->snacks) }}</p>
                                <p>Sub Total: <span class="font-semibold">Rp
                                        {{ number_format($order->total_price, 0, ',', '.') }}</span></p>
                                <p class="text-gray-400 text-xs">Tanggal Pembelian:
                                    {{ $order->created_at->format('d F Y') }}</p>
                            </div>

                            <div class="flex flex-col items-start justify-start mt-auto gap-2">
                                <p
                                    class="text-sm font-semibold px-3 py-1 rounded
                                    {{ $order->status === 'paid' ? 'bg-green-500 border border-green-600 text-black' : 'bg-red-500 border border-red-600 text-black' }}">
                                    {{ ucfirst($order->status) }}
                                </p>

                                <div class="flex gap-2">
                                    <a href="javascript:void(0)" onclick="showOrderSummaryById({{ $order->id }})"
                                        class="bg-yellow-400 hover:bg-yellow-500 text-black text-sm font-semibold px-3 py-1 rounded shadow-sm">
                                        Detail
                                    </a>

                                    <a href="{{ route('CineTix.movie-detail', ['id' => $order->schedule->movie->id]) }}"
                                        class="text-sm font-semibold px-3 py-1 rounded shadow-sm
        {{ $order->status !== 'paid' ? 'bg-blue-300 cursor-not-allowed opacity-50 pointer-events-none' : 'bg-blue-400 hover:bg-blue-500 text-black' }}">
                                        Rate Movie
                                    </a>

                                    <button type="button" onclick="showTicket({{ $order->id }})"
                                        class="text-sm font-semibold px-3 py-1 rounded shadow-sm
        {{ $order->status !== 'paid' ? 'bg-gray-300 cursor-not-allowed opacity-50' : 'bg-gray-400 hover:bg-gray-500 text-black' }}"
                                        {{ $order->status !== 'paid' ? 'disabled' : '' }}>
                                        Get Ticket
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Hidden Order Summary Content -->
                        <div id="order-summary-{{ $order->id }}" class="hidden">
                            <h2 class="text-yellow-400 text-xl text-center font-bold mb-4">Order
                                #{{ $order->order_number }}
                            </h2>

                            <p><strong>Film:</strong> {{ $order->schedule->movie->title }}</p>
                            <p><strong>Jadwal:</strong> {{ $jadwal->translatedFormat('l, d F Y - H:i') }}</p>
                            <p><strong>Tanggal Pembelian:</strong> {{ $order->created_at->format('d F Y') }}</p>

                            <table class="w-full mt-4 text-sm border border-gray-500">
                                <thead class="bg-yellow-400 text-[#0f1d33]">
                                    <tr>
                                        <th class="border px-2 py-1 text-left">Product</th>
                                        <th class="border px-2 py-1 text-center">Quantity</th>
                                        <th class="border px-2 py-1 text-right">Price</th>
                                        <th class="border px-2 py-1 text-right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Tiket -->
                                    <tr>
                                        <td class="border px-2 py-1">
                                            Tiket Kursi (
                                            {{ $order->tickets->map(fn($t) => $t->row_seat . $t->row_number)->implode(', ') }}
                                            )
                                        </td>
                                        <td class="border px-2 py-1 text-center">{{ $order->number_of_seats }}</td>
                                        <td class="border px-2 py-1 text-right">
                                            Rp {{ number_format($order->schedule->movie->price, 0, ',', '.') }}
                                        </td>
                                        <td class="border px-2 py-1 text-right">
                                            Rp
                                            {{ number_format($order->schedule->movie->price * $order->tickets->count(), 0, ',', '.') }}
                                        </td>
                                    </tr>

                                    <!-- Snack -->
                                    @foreach ($order->snacks as $snack)
                                        <tr>
                                            <td class="border px-2 py-1">{{ $snack->name }}</td>
                                            <td class="border px-2 py-1 text-center">{{ $snack->pivot->quantity }}</td>
                                            <td class="border px-2 py-1 text-right">Rp
                                                {{ number_format($snack->price, 0, ',', '.') }}</td>
                                            <td class="border px-2 py-1 text-right">
                                                Rp
                                                {{ number_format($snack->price * $snack->pivot->quantity, 0, ',', '.') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                                @php
                                    $ticketTotal = $order->schedule->movie->price * $order->tickets->count();
                                    $snackTotal = $order->snacks->sum(
                                        fn($snack) => $snack->price * $snack->pivot->quantity,
                                    );
                                    $total = $ticketTotal + $snackTotal;
                                    $discountAmount = 0;
                                @endphp

                                @if ($order->promotion)
                                    @php
                                        $promo = $order->promotion;
                                        if ($total >= $promo->minimum_price) {
                                            if ($promo->type === 'harga') {
                                                $discountAmount = $promo->discount;
                                            } elseif ($promo->type === 'diskon') {
                                                $discountAmount = floor($total * ($promo->discount / 100));
                                            }
                                        }
                                    @endphp
                                    <tr>
                                        <td colspan="3" class="border px-2 py-1 text-right font-semibold">
                                            @if ($promo->type === 'harga')
                                                Potongan Harga ({{ $promo->code }})
                                            @else
                                                Diskon {{ $promo->discount }}% ({{ $promo->code }})
                                            @endif
                                        </td>
                                        <td class="border px-2 py-1 text-right text-red-600 font-semibold">
                                            - Rp {{ number_format($discountAmount, 0, ',', '.') }}
                                        </td>
                                    </tr>
                                @endif

                                <tfoot>
                                    <tr>
                                        <td colspan="3" class="border px-2 py-1 text-right font-bold">Total</td>
                                        <td class="border px-2 py-1 text-right font-bold">
                                            Rp {{ number_format($total - $discountAmount, 0, ',', '.') }}
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <!-- Hidden Ticket Content -->
                        <div id="ticket-{{ $order->id }}" class="hidden">
                            <div class="flex rounded-lg overflow-hidden shadow-lg">
                                <div class="w-3/4 bg-white p-4 border-r border-dashed border-gray-300">
                                    <h1 class="text-red-600 font-bold text-lg">CineTix</h1>
                                    <div class="mt-2">
                                        <p class="text-gray-800 font-semibold text-sm">
                                            {{ $order->schedule->movie->title }}</p>
                                        <p class="text-gray-400 text-xs">MOVIE</p>
                                    </div>
                                    <div class="mt-1">
                                        <p class="text-gray-800 font-semibold text-sm">{{ Auth::user()->name }}</p>
                                        <p class="text-gray-400 text-xs">NAME</p>
                                    </div>
                                    <div class="mt-3 flex justify-between text-sm">
                                        <div>
                                            <p class="text-gray-800 font-semibold">
                                                {{ $order->tickets->map(fn($t) => $t->row_seat . $t->row_number)->implode(', ') }}
                                            </p>
                                            <p class="text-gray-400 text-xs">SEAT</p>
                                        </div>
                                        <div>
                                            <p class="text-gray-800 font-semibold">
                                                {{ \Carbon\Carbon::parse($order->schedule->date)->format('d M Y') }}
                                            </p>
                                            <p class="text-gray-400 text-xs">DATE</p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="w-1/4 bg-red-500 text-white flex flex-col items-center justify-between py-4 relative">
                                    <div class="text-xl font-bold">
                                        {{ $order->tickets->count() }}
                                    </div>
                                    <p class="text-xs text-white/80">SEAT</p>
                                    <div
                                        class="mt-4 w-10 h-10 bg-white rounded-full flex items-center justify-center text-red-500">
                                        🎟️
                                    </div>
                                    <div class="w-16 h-6 bg-white mt-4 rounded-sm text-gray-800 text-center">
                                        <p>{{ \Carbon\Carbon::parse($order->schedule->time)->format('H:i') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Modal: Order Summary -->
        <div id="modalOrderSummary"
            class="fixed inset-0 bg-black bg-opacity-60 backdrop-blur-sm z-50 hidden flex items-center justify-center">
            <div class="bg-slate-900 rounded-2xl w-[90%] max-w-2xl p-6 relative border border-gray-500">
                <button onclick="document.getElementById('modalOrderSummary').classList.add('hidden')"
                    class="absolute top-3 right-4 z-50 text-white text-2xl md:text-3xl font-bold hover:text-red-400 drop-shadow-lg hover:scale-105 transition">
                    ×
                </button>
                <div id="orderDetails" class="text-white space-y-2"></div>
            </div>
        </div>

        <!-- Modal: Ticket -->
        <div id="modalTicket"
            class="fixed inset-0 bg-black bg-opacity-60 backdrop-blur-sm z-50 hidden flex items-center justify-center">
            <div class="bg-slate-900 rounded-2xl w-[95%] max-w-sm p-4 relative border border-gray-500 overflow-hidden">
                <button onclick="document.getElementById('modalTicket').classList.add('hidden')"
                    class="absolute top-3 right-4 z-50 text-red-500 text-2xl font-bold hover:scale-105">×</button>

                <p class="text-xl font-semibold text-center mb-4 text-yellow-400">🎫 Tiket Film</p>

                <div id="ticketContent" class="text-white text-sm space-y-2 mb-6">
                    <!-- tiket detail akan diisi via Blade atau AJAX -->
                </div>

                <!-- Barcode -->
                <div class="flex justify-center overflow-x-auto">
                    <div class="max-w-full">
                        @if (!$user_orders->isEmpty())
                            {!! DNS1D::getBarcodeHTML($user_orders->first()->order_number, 'C128', 1.5, 50, 'white') !!}
                        @endif
                    </div>
                </div>
                <p class="text-center text-xs text-gray-400 mt-2 tracking-wider break-words">
                    @if (!$user_orders->isEmpty())
                        {{ $order->order_number }}
                    @endif

                </p>
            </div>
        </div>
    </div>

    <script>
        function showOrderSummaryById(orderId) {
            const source = document.getElementById('order-summary-' + orderId);
            const content = source.innerHTML;
            document.getElementById('orderDetails').innerHTML = content;
            document.getElementById('modalOrderSummary').classList.remove('hidden');
        }

        function showTicket(orderId) {
            const source = document.getElementById('ticket-' + orderId);
            const content = source.innerHTML;
            document.getElementById('ticketContent').innerHTML = content;
            document.getElementById('modalTicket').classList.remove('hidden');
        }
    </script>
</x-app-layout>
