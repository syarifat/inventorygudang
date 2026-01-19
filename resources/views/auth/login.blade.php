<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-50">
        
        <div class="mb-8">
            <a href="/" class="flex flex-col items-center">
                <h1 class="text-5xl font-extrabold tracking-tighter text-blue-600">
                    Gudang<span class="text-blue-800">Ku</span>
                </h1>
                <p class="text-sm font-medium text-gray-500 tracking-widest uppercase mt-1">Inventory System</p>
            </a>
        </div>

        <div class="w-full sm:max-w-md px-8 py-10 bg-white shadow-2xl overflow-hidden sm:rounded-2xl border-t-8 border-blue-600">
            
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Selamat Datang</h2>
                <p class="text-gray-500 text-sm">Silakan masuk untuk mengelola stok barang.</p>
            </div>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-5">
                    <x-input-label for="email" :value="__('Email')" class="font-semibold text-gray-700" />
                    <x-text-input id="email" 
                                  class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-lg shadow-sm" 
                                  type="email" 
                                  name="email" 
                                  :value="old('email')" 
                                  required autofocus 
                                  autocomplete="username" 
                                  placeholder="admin@gudangku.com" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mb-5">
                    <div class="flex justify-between">
                        <x-input-label for="password" :value="__('Password')" class="font-semibold text-gray-700" />
                        @if (Route::has('password.request'))
                            <a class="text-xs font-bold text-blue-600 hover:text-blue-800 transition" href="{{ route('password.request') }}">
                                {{ __('Lupa Password?') }}
                            </a>
                        @endif
                    </div>
                    <x-text-input id="password" 
                                  class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-lg shadow-sm"
                                  type="password"
                                  name="password"
                                  required 
                                  autocomplete="current-password" 
                                  placeholder="••••••••" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex items-center mb-6">
                    <label for="remember_me" class="inline-flex items-center cursor-pointer">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600 font-medium">{{ __('Ingat saya di perangkat ini') }}</span>
                    </label>
                </div>

                <div class="flex flex-col gap-4">
                    <x-primary-button class="w-full justify-center py-3 bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white font-bold rounded-xl shadow-lg transition-all transform active:scale-95">
                        {{ __('Masuk Sekarang') }}
                    </x-primary-button>
                    
                    <p class="text-center text-xs text-gray-400 mt-4">
                        &copy; {{ date('Y') }} GudangKu Dashboard System
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>