<x-guest-layout>
    <div class="relative flex flex-col items-center">
        <!-- Logo CineTix di luar kotak -->
        <div class="absolute -top-6 z-10 text-4xl font-bold text-center">
            <span class="text-[#e50914]">CiNE</span><span class="text-[#f5c518]">Tix</span>
        </div>

        <!-- Kotak utama -->
        <div class="bg-[#0d1b2a] text-white rounded-xl shadow-2xl p-6 md:p-8 w-full max-w-md mt-12 animate-[slideIn_0.8s_ease-out]">
            
            <!-- Informasi -->
            <div class="mb-4 text-sm text-gray-300 text-justify">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Formulir Email -->
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" class="text-white" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Tombol kirim -->
                <div class="flex justify-center mt-6">
                    <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-black text-sm font-semibold py-2 px-4 rounded">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
