<x-guest-layout>
    <!-- Revolutionary quote overlay - moved higher and made smaller -->
    <div class="absolute top-6 left-10 right-10 text-center z-10">
        <div class="bg-gradient-to-r from-red-900/25 to-red-800/25 backdrop-blur-md border border-red-800/40 rounded-xl p-5 max-w-2xl mx-auto shadow-xl">
            <div class="relative">
                <div class="absolute -top-1 -left-1 w-3 h-3 bg-red-500 rounded-full animate-pulse"></div>
                <div class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
                <blockquote class="text-red-200 italic text-lg leading-relaxed font-medium">
                    "We are a nation that loves death. Our enemies love life. We will win because we love death more than they love life."
                </blockquote>
                <cite class="block mt-3 text-red-300 font-semibold text-base">— Omar Mukhtar</cite>
            </div>
        </div>
    </div>

    <!-- Main login form -->
    <div class="form-container">
        <!-- Header -->
        <div class="text-center mb-8">
            <h2 class="text-4xl font-bold text-white mb-3">Revolutionary Login</h2>
            <p class="text-gray-300 text-lg">Enter the resistance</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-6 text-red-400 bg-red-900/20 p-3 rounded-lg" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-gray-200 font-semibold text-lg" />
                <x-text-input id="email" 
                             class="block mt-3 w-full bg-gray-800/60 border-gray-600 text-white placeholder-gray-400 focus:border-red-500 focus:ring-red-500 rounded-lg px-4 py-3" 
                             type="email" 
                             name="email" 
                             :value="old('email')" 
                             required 
                             autofocus 
                             autocomplete="username" 
                             placeholder="Enter your email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" class="text-gray-200 font-semibold text-lg" />
                <x-text-input id="password" 
                             class="block mt-3 w-full bg-gray-800/60 border-gray-600 text-white placeholder-gray-400 focus:border-red-500 focus:ring-red-500" 
                             type="password"
                             name="password"
                             required 
                             autocomplete="current-password" 
                             placeholder="Enter your password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" 
                           type="checkbox" 
                           class="rounded bg-gray-800 border-gray-600 text-red-600 focus:ring-red-500 focus:ring-offset-gray-800" 
                           name="remember">
                    <span class="ms-3 text-gray-300 font-medium">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="text-red-400 hover:text-red-300 transition-colors font-medium" href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                @endif
            </div>

            <!-- Enhanced Submit Button -->
            <div class="pt-8">
                <button type="submit" 
                        class="group relative w-full bg-gradient-to-r from-red-600 via-red-700 to-red-800 hover:from-red-700 hover:via-red-800 hover:to-red-900 text-white font-bold py-5 px-8 rounded-xl transition-all duration-500 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-red-500/50 focus:ring-offset-2 focus:ring-offset-gray-900 text-xl shadow-2xl hover:shadow-red-500/25 overflow-hidden">
                    
                    <!-- Animated background overlay -->
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                    
                    <!-- Button content -->
                    <span class="relative flex items-center justify-center">
                        <svg class="w-6 h-6 mr-3 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                        </svg>
                        {{ __('Enter the Revolution') }}
                    </span>
                    
                    <!-- Glow effect -->
                    <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-red-400/20 to-red-600/20 blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </button>
            </div>

            <!-- Register Link -->
            <div class="text-center pt-6">
                <p class="text-gray-300 text-lg">
                    {{ __("Don't have an account?") }}
                    <a href="{{ route('register') }}" class="text-red-400 hover:text-red-300 font-semibold transition-colors">
                        {{ __('Join the resistance') }}
                    </a>
                </p>
            </div>


        </form>
    </div>
</x-guest-layout>
