<x-guest-layout>
    <div class="w-full max-w-[440px] bg-white border border-slate-200/90 rounded-2xl sm:rounded-3xl shadow-[0_4px_24px_rgba(15,23,42,0.05)] sm:shadow-[0_12px_40px_rgba(15,23,42,0.07)] p-6 sm:p-10 transition-all">
        <!-- Icon Badge -->
        <div class="size-12 rounded-2xl bg-slate-100 border border-slate-200/80 text-slate-900 flex items-center justify-center mb-5 shadow-xs">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="7.5" cy="15.5" r="5.5"></circle>
                <path d="m21 2-9.6 9.6"></path>
                <path d="m15.5 7.5 3 3L22 7l-3-3"></path>
            </svg>
        </div>

        <!-- Title & Subtitle -->
        <div>
            <h1 class="text-2xl sm:text-3xl font-normal text-slate-900 tracking-tight" style="font-family: var(--font-serif-display), serif;">
                {{ __('Forgot your password?') }}
            </h1>
            <p class="mt-2 text-sm text-slate-500 font-sans leading-relaxed">
                {{ __('No problem. Enter your email address and we will email you a password reset link to choose a new one.') }}
            </p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mt-5" :status="session('status')" />

        <!-- Form -->
        <form method="POST" action="{{ route('password.email') }}" class="mt-6 space-y-4 font-sans">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-xs font-semibold uppercase tracking-wider text-slate-700 mb-1.5">
                    {{ __('Email Address') }}
                </label>
                <div class="relative rounded-xl border border-slate-200 bg-slate-50/50 hover:bg-white focus-within:bg-white focus-within:border-slate-900 focus-within:ring-2 focus-within:ring-slate-900/10 transition-all">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                        </svg>
                    </div>
                    <input type="email"
                           id="email"
                           name="email"
                           value="{{ old('email') }}"
                           required
                           autofocus
                           autocomplete="username"
                           autocorrect="off"
                           autocapitalize="off"
                           spellcheck="false"
                           placeholder="name@company.com"
                           class="block w-full ps-10 pe-3.5 py-2.5 text-sm bg-transparent border-0 focus:ring-0 text-slate-900 placeholder:text-slate-400 font-sans">
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
            </div>

            <!-- Submit Button -->
            <div class="pt-2">
                <button type="submit"
                        class="w-full py-3 px-4 rounded-xl text-sm font-semibold text-white bg-slate-900 hover:bg-black focus:outline-none focus:ring-2 focus:ring-slate-900 focus:ring-offset-2 transition-all shadow-sm hover:shadow active:scale-[0.99] flex items-center justify-center gap-2 group cursor-pointer">
                    <span>{{ __('Email Password Reset Link') }}</span>
                    <svg class="size-4 transition-transform duration-150 group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </button>
            </div>

            <!-- Back to Login -->
            <div class="text-center pt-4">
                <a href="{{ route('login') }}" class="inline-flex items-center gap-1.5 text-xs sm:text-sm font-medium text-slate-600 hover:text-black transition-colors">
                    <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    <span>Return to login</span>
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>
