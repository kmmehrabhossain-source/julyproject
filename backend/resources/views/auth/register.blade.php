<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-900 via-black to-gray-800 relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.03"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
        
        <!-- Floating particles -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="particle" style="width: 4px; height: 4px; top: 20%; left: 10%; animation-delay: 0s; background: rgba(220, 38, 38, 0.6); border-radius: 50%; position: absolute; animation: float 6s ease-in-out infinite;"></div>
            <div class="particle" style="width: 6px; height: 6px; top: 60%; left: 80%; animation-delay: 1s; background: rgba(220, 38, 38, 0.4); border-radius: 50%; position: absolute; animation: float 8s ease-in-out infinite;"></div>
            <div class="particle" style="width: 3px; height: 3px; top: 80%; left: 20%; animation-delay: 2s; background: rgba(220, 38, 38, 0.5); border-radius: 50%; position: absolute; animation: float 7s ease-in-out infinite;"></div>
            <div class="particle" style="width: 5px; height: 5px; top: 30%; left: 70%; animation-delay: 3s; background: rgba(220, 38, 38, 0.3); border-radius: 50%; position: absolute; animation: float 9s ease-in-out infinite;"></div>
        </div>
        
        <!-- Revolutionary quote overlay -->
        <div class="absolute top-10 left-10 right-10 text-center z-10">
            <div class="bg-gradient-to-r from-red-900/30 to-red-800/30 backdrop-blur-md border border-red-800/50 rounded-2xl p-8 max-w-3xl mx-auto shadow-2xl">
                <div class="relative">
                    <div class="absolute -top-2 -left-2 w-4 h-4 bg-red-500 rounded-full animate-pulse"></div>
                    <div class="absolute -top-2 -right-2 w-4 h-4 bg-red-500 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
                    <blockquote class="text-red-200 italic text-2xl leading-relaxed font-medium">
                        "Each generation must, out of relative obscurity, discover its mission, fulfill it, or betray it."
                    </blockquote>
                    <cite class="block mt-6 text-red-300 font-bold text-xl">— Franz Fanon</cite>
                </div>
            </div>
        </div>

        <!-- Bengali quote on the right side -->
        <div class="absolute top-1/2 right-8 transform -translate-y-1/2 z-10">
            <div class="bg-red-900/20 backdrop-blur-sm border border-red-800/30 rounded-lg p-4 max-w-xs shadow-lg">
                <blockquote class="text-red-200 italic text-sm leading-relaxed">
                    "আমরা জুলাই সাধন করেছি বন্ধু<br>
                    মাটির জন্যে লাগে না পুরস্কার<br>
                    আমরা আবার রাজপথে মরে যাবো<br>
                    এ মাটিকে দেবো যখন যা দরকার"
                </blockquote>
                <cite class="block mt-2 text-red-300 font-semibold text-xs">— Revolutionary Poetry</cite>
            </div>
        </div>

        <!-- Main signup form -->
        <div class="relative z-20 w-full max-w-lg">
            <div class="bg-gradient-to-br from-gray-900/90 to-gray-800/90 backdrop-blur-xl border border-gray-700/50 rounded-3xl shadow-2xl p-10 relative overflow-hidden">
                <!-- Form background pattern -->
                <div class="absolute inset-0 bg-gradient-to-br from-red-600/5 to-transparent"></div>
                <div class="absolute top-0 right-0 w-32 h-32 bg-red-600/10 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-40 h-40 bg-red-800/10 rounded-full blur-3xl"></div>
                
                <!-- Header -->
                <div class="text-center mb-10 relative z-10">
                    <div class="w-20 h-20 bg-gradient-to-r from-red-600 to-red-800 rounded-full mx-auto mb-6 flex items-center justify-center shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                        </svg>
                    </div>
                    <h2 class="text-4xl font-bold text-white mb-3 bg-gradient-to-r from-red-400 to-red-600 bg-clip-text text-transparent">Join the Revolution</h2>
                    <p class="text-gray-300 text-lg">Discover your mission</p>
                </div>

                <form method="POST" action="{{ route('register') }}" class="space-y-8 relative z-10">
                    @csrf

                    <!-- Name -->
                    <div class="group">
                        <x-input-label for="name" :value="__('Name')" class="text-gray-200 font-semibold text-lg group-hover:text-red-300 transition-colors" />
                        <div class="relative mt-3">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 group-hover:text-red-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <x-text-input id="name" 
                                         class="block w-full bg-gray-800/60 border-gray-600 text-white placeholder-gray-400 focus:border-red-500 focus:ring-red-500 rounded-xl pl-10 pr-4 py-4 transition-all duration-300 group-hover:border-red-400/50" 
                                         type="text" 
                                         name="name" 
                                         :value="old('name')" 
                                         required 
                                         autofocus 
                                         autocomplete="name" 
                                         placeholder="Enter your full name" />
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-400" />
                    </div>

                    <!-- Email Address -->
                    <div class="group">
                        <x-input-label for="email" :value="__('Email')" class="text-gray-200 font-semibold text-lg group-hover:text-red-300 transition-colors" />
                        <div class="relative mt-3">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 group-hover:text-red-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <x-text-input id="email" 
                                         class="block w-full bg-gray-800/60 border-gray-600 text-white placeholder-gray-400 focus:border-red-500 focus:ring-red-500 rounded-xl pl-10 pr-4 py-4 transition-all duration-300 group-hover:border-red-400/50" 
                                         type="email" 
                                         name="email" 
                                         :value="old('email')" 
                                         required 
                                         autocomplete="username" 
                                         placeholder="Enter your email" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400" />
                    </div>

                    <!-- Password -->
                    <div class="group">
                        <x-input-label for="password" :value="__('Password')" class="text-gray-200 font-semibold text-lg group-hover:text-red-300 transition-colors" />
                        <div class="relative mt-3">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 group-hover:text-red-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <x-text-input id="password" 
                                         class="block w-full bg-gray-800/60 border-gray-600 text-white placeholder-gray-400 focus:border-red-500 focus:ring-red-500 rounded-xl pl-10 pr-4 py-4 transition-all duration-300 group-hover:border-red-400/50" 
                                         type="password"
                                         name="password"
                                         required 
                                         autocomplete="new-password" 
                                         placeholder="Create a strong password" />
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="group">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-200 font-semibold text-lg group-hover:text-red-300 transition-colors" />
                        <div class="relative mt-3">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 group-hover:text-red-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <x-text-input id="password_confirmation" 
                                         class="block w-full bg-gray-800/60 border-gray-600 text-white placeholder-gray-400 focus:border-red-500 focus:ring-red-500 rounded-xl pl-10 pr-4 py-4 transition-all duration-300 group-hover:border-red-400/50" 
                                         type="password"
                                         name="password_confirmation" 
                                         required 
                                         autocomplete="new-password" 
                                         placeholder="Confirm your password" />
                        </div>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-400" />
                    </div>

                    <!-- Enhanced Submit Button -->
                    <div class="pt-8">
                        <button type="submit" 
                                class="group relative w-full bg-gradient-to-r from-red-600 via-red-700 to-red-800 hover:from-red-700 hover:via-red-800 hover:to-red-900 text-white font-bold py-6 px-8 rounded-2xl transition-all duration-500 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-red-500/50 focus:ring-offset-2 focus:ring-offset-gray-900 text-xl shadow-2xl hover:shadow-red-500/25 overflow-hidden">
                            
                            <!-- Animated background overlay -->
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                            
                            <!-- Button content -->
                            <span class="relative flex items-center justify-center">
                                <svg class="w-7 h-7 mr-4 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                {{ __('Fulfill Your Mission') }}
                            </span>
                            
                            <!-- Glow effect -->
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-red-400/20 to-red-600/20 blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </button>
                    </div>

                    <!-- Login Link -->
                    <div class="text-center pt-8">
                        <p class="text-gray-300 text-lg">
                            {{ __('Already have an account?') }}
                            <a href="{{ route('login') }}" class="text-red-400 hover:text-red-300 font-semibold transition-colors hover:underline">
                                {{ __('Return to the resistance') }}
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Decorative elements -->
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-red-900/20 to-transparent"></div>
        <div class="absolute top-0 right-0 w-64 h-64 bg-red-600/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-red-800/10 rounded-full blur-3xl"></div>
    </div>

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
    </style>
</x-guest-layout>
