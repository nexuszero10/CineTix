<x-guest-layout>
    <div class="relative flex flex-col items-center">
        <!-- Logo di luar kotak -->
        <div class="absolute -top-6 z-10 text-4xl font-bold text-center">
            <span class="text-[#e50914]">CiNE</span><span class="text-[#f5c518]">Tix</span>
        </div>

        <!-- Kontainer utama -->
        <div class="bg-[#0d1b2a] text-white rounded-xl shadow-2xl p-6 md:p-8 w-full max-w-md mt-12 animate-[slideIn_0.8s_ease-out]">
            <div class="text-sm text-center mb-6">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-500">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <!-- Tombol Resend dengan warna kuning -->
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-black text-sm font-semibold py-2 px-4 rounded">
                        {{ __('Resend Verification Email') }}
                    </button>
                </form>

                <!-- Tombol Logout dengan warna merah -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white text-sm font-semibold py-2 px-4 rounded">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
