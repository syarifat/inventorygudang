<x-guest-layout>
    <div class="flex min-h-screen bg-white overflow-hidden">
        
        <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-blue-700 to-blue-900 items-center justify-center p-12 relative">
            <div class="absolute top-0 left-0 w-full h-full opacity-10">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <defs>
                        <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                            <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#grid)" />
                </svg>
            </div>
            
            <div class="relative z-10 text-center">
                <h1 class="text-6xl font-black tracking-tighter text-white">
                    Gudang<span class="text-blue-300">Ku</span>
                </h1>
                <div class="w-20 h-1.5 bg-blue-400 mx-auto mt-4 rounded-full"></div>
                <p class="mt-6 text-xl text-blue-100 font-light max-w-sm mx-auto leading-relaxed">
                    Kelola stok inventaris dengan lebih cerdas, cepat, dan akurat.
                </p>
            </div>

            <div class="absolute bottom-8 left-12 text-blue-300 text-sm">
                &copy; {{ date('Y') }} GudangKu Ecosystem.
            </div>
        </div>

        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-white">
            <div class="w-full max-w-md">
                
                <div class="lg:hidden mb-10 text-center">
                    <h1 class="text-4xl font-black tracking-tighter text-blue-700">
                        Gudang<span class="text-blue-400">Ku</span>
                    </h1>
                </div>

                <div class="mb-10">
                    <h2 class="text-3xl font-bold text-gray-900 tracking-tight">Login</h2>
                    <p class="text-gray-500 mt-2">Silakan masukkan akun Anda untuk masuk ke sistem.</p>
                </div>

                <x-auth-session-status class="mb-6" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Alamat Email</label>
                        <input id="email" 
                               class="block w-full px-4 py-3 rounded-xl border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-200 bg-gray-50" 
                               type="email" 
                               name="email" 
                               :value="old('email')" 
                               required autofocus 
                               placeholder="admin@gudangku.com" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <div class="flex justify-between mb-1">
                            <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                            @if (Route::has('password.request'))
                                <a class="text-sm font-medium text-blue-600 hover:text-blue-500" href="{{ route('password.request') }}">
                                    Lupa Password?
                                </a>
                            @endif
                        </div>
                        <input id="password" 
                               class="block w-full px-4 py-3 rounded-xl border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-200 bg-gray-50"
                               type="password"
                               name="password"
                               required 
                               placeholder="••••••••" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600 tracking-wide font-medium">{{ __('Ingat perangkat ini') }}</span>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full flex justify-center items-center py-3.5 px-4 border border-transparent rounded-xl shadow-lg text-base font-bold text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-200 transform active:scale-[0.98]">
                            {{ __('Masuk ke Dashboard') }}
                        </button>
                    </div>
                </form>

                <p class="mt-8 text-center text-sm text-gray-600">
                    Belum punya akses? <a href="#" class="font-bold text-blue-600 hover:underline">Hubungi Administrator</a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>