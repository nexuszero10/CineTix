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
                        <div
                            class="bg-[#0f1d33] border border-gray-400 rounded-lg p-4 shadow-md flex flex-col justify-between h-full">

                            {{-- Order Number --}}
                            <h3 class="text-lg font-semibold text-yellow-400 mb-2">
                                Order Number: {{ $order->order_number }}
                            </h3>

                            {{-- Movie Poster --}}
                            <div class="w-full h-48 mb-3">
                                <img src="{{ asset('storage/images/movies/poster/' . $order->schedule->movie->image_path) }}"
                                    alt="{{ $order->schedule->movie->title }}"
                                    class="w-full h-full object-cover rounded">
                            </div>

                            {{-- Order Info --}}
                            <div class="text-gray-300 text-base space-y-1 mb-3">
                                <p>Jumlah Kursi: <span class="font-semibold">{{ $order->number_of_seats }}</span></p>
                                <p class="text-gray-300 mb-1">
                                    Jumlah Snack: {{ count($order->snacks) }}
                                </p>    
                                @php
                                    $jadwal = \Carbon\Carbon::parse(
                                        $order->schedule->date . ' ' . $order->schedule->time,
                                    );
                                @endphp

                                <p class="text-gray-300 mb-1">
                                    Jadwal: {{ $jadwal->translatedFormat('l, d F Y - H:i') }}
                                </p>
                                <p>Sub Total: <span class="font-semibold">Rp
                                        {{ number_format($order->total_price, 0, ',', '.') }}</span></p>
                                <p class="text-gray-400 text-xs">Tanggal Pembelian:
                                    {{ $order->created_at->format('d F Y') }}</p>
                            </div>

                            {{-- Status + Actions --}}
                            <div class="flex items-center justify-between mt-auto">
                                {{-- Status --}}
                                <p
                                    class="text-sm font-semibold px-3 py-1 rounded 
            {{ $order->status === 'paid'
                ? 'bg-green-500 border border-green-600 text-black'
                : 'bg-red-500 border border-red-600 text-black' }}">
                                    {{ ucfirst($order->status) }}
                                </p>

                                {{-- Actions --}}
                                <div class="flex gap-2">
                                    <a href="#"
                                        class="bg-yellow-400 hover:bg-yellow-500 text-black text-sm font-semibold px-3 py-1 rounded shadow-sm">
                                        Detail
                                    </a>
                                    <a href="{{ route('CineTix.movie-detail', ['id' => $order->schedule->movie->id]) }}"
                                        class="bg-blue-400 hover:bg-blue-500 text-black text-sm font-semibold px-3 py-1 rounded shadow-sm">
                                        Rate
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
