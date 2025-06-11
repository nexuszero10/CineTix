<x-guest-layout>
    <div class="bg-[#0d1b2a] text-white rounded-xl shadow-2xl p-8 md:p-10 w-full max-w-md animate-[slideIn_0.8s_ease-out]">
        <div class="text-4xl font-bold text-center mb-8">
            <span class="text-[#e50914]">CINE</span><span class="text-[#f5c518]">Tix</span>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="relative mb-5">
                <input id="id_user" name="id_user" type="text" :value="old('id_user')" required autofocus
                    autocomplete="id_user" placeholder="Email or Username"
                    class="w-full pl-10 pr-4 py-3 rounded-md bg-[#152a47] border border-[#1c3a5c] text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#f5c518]">
                <i class="absolute left-3 top-3.5 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v.217L8 8.083 0 4.217V4zm0 1.383v6.634l5.803-3.319L0 5.383zM6.761 8.83l-6.76 3.867A2 2 0 0 0 2 14h12a2 2 0 0 0 1.999-1.303l-6.76-3.867L8 9.917l-1.239-.708zM16 5.383l-5.803 3.315L16 12.017V5.383z" />
                    </svg>
                </i>
                <x-input-error :messages="$errors->get('id_user')" class="mt-2" />
            </div>

            <div class="relative mb-5">
                <input id="password" name="password" type="password" required autocomplete="current-password"
                    placeholder="Password"
                    class="w-full pl-10 pr-4 py-3 rounded-md bg-[#152a47] border border-[#1c3a5c] text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#f5c518]">
                <i class="absolute left-3 top-3.5 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M8 1a4 4 0 0 0-4 4v2H3.5A1.5 1.5 0 0 0 2 8.5v5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5v-5A1.5 1.5 0 0 0 12.5 7H12V5a4 4 0 0 0-4-4z" />
                    </svg>
                </i>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <button type="submit"
                class="w-full bg-[#f5c518] text-[#0d1b2a] font-bold py-3 text-lg rounded-md hover:bg-[#e6b217] transform hover:scale-105 transition duration-300 animate-[pulseBtn_2s_infinite]">
                Login
            </button>

            <div class="text-center text-base mt-6 space-y-2">
                <div>Belum punya akun?
                    <a href="{{ route('register') }}" class="font-bold text-[#e50914] hover:underline">Daftar
                        sekarang</a>
                </div>
                <div class="mt-2">
                    <a href="{{ route('password.request') }}" class="font-bold text-[#f5c518] hover:underline">Lupa
                        password?</a>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>
