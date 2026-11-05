<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-[#FBFBFA]">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? config('app.name', 'SaaSApps') }}</title>

        <!-- Local Preloaded Typefaces (Zero FOUT / Instant Rendering) -->
        <link rel="preload" href="/css/fonts/ABCMarist-Regular.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/css/fonts/Inter-Regular.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/css/fonts/Inter-Medium.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/css/fonts/Inter-SemiBold.woff2" as="font" type="font/woff2" crossorigin>

        <link rel="icon" type="image/x-icon" href="/favicon.ico">

        <!-- Modern Vite Pipeline (Tailwind v3 + Alpine.js) -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="/css/custom.css">

        @stack('styles')
    </head>

    <body class="min-h-full flex flex-col font-sans bg-[#FBFBFA] text-slate-900 antialiased selection:bg-brand-100 selection:text-brand-900">
        <!-- Top Navigation Header -->
        <header class="w-full bg-white/80 backdrop-blur-md border-b border-slate-200/80 sticky top-0 z-30 transition-all">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
                <!-- Left: Logo -->
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2.5 transition-transform duration-150 hover:scale-[1.01]" aria-label="SaaSApps Home">
                    <img src="{{ asset('images/logo.svg') }}" alt="SaaSApps" class="h-8 sm:h-9 w-auto">
                </a>

                <!-- Right: Action / Switch Link -->
                <div class="flex items-center gap-3">
                    @if (Route::is('register'))
                        <div class="text-xs sm:text-sm text-slate-600 flex items-center gap-2">
                            <span class="hidden sm:inline">Already have an account?</span>
                            <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-4 py-2 rounded-full text-xs sm:text-sm font-semibold bg-white text-slate-900 border border-slate-300 hover:border-black hover:bg-slate-50 transition-colors shadow-xs">
                                Log in
                            </a>
                        </div>
                    @elseif (Route::is('login'))
                        <div class="text-xs sm:text-sm text-slate-600 flex items-center gap-2">
                            <span class="hidden sm:inline">Don't have an account?</span>
                            <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-4 py-2 rounded-full text-xs sm:text-sm font-semibold bg-white text-slate-900 border border-slate-300 hover:border-black hover:bg-slate-50 transition-colors shadow-xs">
                                Register
                            </a>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="inline-flex items-center gap-1.5 text-xs sm:text-sm font-medium text-slate-600 hover:text-black transition-colors">
                            <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            <span>Back to login</span>
                        </a>
                    @endif
                </div>
            </div>
        </header>

        <!-- Main Content Area -->
        <main class="flex-grow flex items-center justify-center py-10 sm:py-14 px-4 sm:px-6 lg:px-8 relative">
            <!-- Subtle Ambient Background Glow -->
            <div class="pointer-events-none absolute inset-0 -z-10 flex items-center justify-center overflow-hidden" aria-hidden="true">
                <div class="w-[620px] h-[420px] bg-gradient-to-tr from-brand-100/40 via-slate-100/70 to-transparent blur-3xl opacity-80 rounded-full"></div>
            </div>

            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="w-full border-t border-slate-200/80 bg-white/70 backdrop-blur-xs py-5 px-4 sm:px-8 mt-auto">
            <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-slate-500 font-sans">
                <div>
                    Copyright &copy; {{ date('Y') }} <a href="{{ route('home') }}" class="text-slate-700 hover:text-slate-900 font-medium">SaaSApps</a>. All Rights Reserved.
                </div>
                <div class="flex items-center gap-4 sm:gap-5 flex-wrap justify-center">
                    <a href="{{ route('legal.show', 'privacy-policy') }}" class="text-slate-500 hover:text-slate-900 transition-colors">Privacy Policy</a>
                    <span class="text-slate-300 hidden sm:inline" aria-hidden="true">&bull;</span>
                    <a href="{{ route('legal.show', 'terms-of-service') }}" class="text-slate-500 hover:text-slate-900 transition-colors">Terms of Service</a>
                    <span class="text-slate-300 hidden sm:inline" aria-hidden="true">&bull;</span>
                    <a href="{{ route('contact-us') }}" class="text-slate-500 hover:text-slate-900 transition-colors">Contact Support</a>
                </div>
            </div>
        </footer>

        @stack('scripts')
    </body>
</html>
