<x-guest-layout>
    <div class="w-full max-w-[480px] bg-white border border-slate-200/90 rounded-2xl sm:rounded-3xl shadow-[0_4px_24px_rgba(15,23,42,0.05)] sm:shadow-[0_12px_40px_rgba(15,23,42,0.07)] p-6 sm:p-10 transition-all">
        <!-- Icon Badge -->
        <div class="size-12 rounded-2xl bg-slate-100 border border-slate-200/80 text-slate-900 flex items-center justify-center mb-5 shadow-xs">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <line x1="19" y1="8" x2="19" y2="14"></line>
                <line x1="22" y1="11" x2="16" y2="11"></line>
            </svg>
        </div>

        <!-- Title & Subtitle -->
        <div>
            <h1 class="text-2xl sm:text-3xl font-normal text-slate-900 tracking-tight" style="font-family: var(--font-serif-display), serif;">
                Create an account
            </h1>
            <p class="mt-2 text-sm text-slate-500 font-sans">
                Enter your details to register and get started
            </p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mt-5" :status="session('status')" />

        <!-- Form -->
        <form method="POST" id="validateForm" action="{{ route('register') }}" class="mt-6 space-y-4 font-sans">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-xs font-semibold uppercase tracking-wider text-slate-700 mb-1.5">
                    {{ __('Full Name') }}
                </label>
                <div class="relative rounded-xl border border-slate-200 bg-slate-50/50 hover:bg-white focus-within:bg-white focus-within:border-slate-900 focus-within:ring-2 focus-within:ring-slate-900/10 transition-all">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <input type="text"
                           id="name"
                           name="name"
                           value="{{ old('name') }}"
                           required
                           autofocus
                           autocomplete="name"
                           placeholder="Jane Doe"
                           class="block w-full ps-10 pe-3.5 py-2.5 text-sm bg-transparent border-0 focus:ring-0 text-slate-900 placeholder:text-slate-400 font-sans">
                </div>
                <x-input-error :messages="$errors->get('name')" class="mt-1.5" />
            </div>

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
                           autocomplete="username"
                           autocorrect="off"
                           autocapitalize="off"
                           spellcheck="false"
                           placeholder="name@company.com"
                           class="block w-full ps-10 pe-3.5 py-2.5 text-sm bg-transparent border-0 focus:ring-0 text-slate-900 placeholder:text-slate-400 font-sans">
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
            </div>

            <!-- Password -->
            <div x-data="{ showPassword: false }">
                <label for="password" class="block text-xs font-semibold uppercase tracking-wider text-slate-700 mb-1.5">
                    {{ __('Password') }}
                </label>
                <div class="relative rounded-xl border border-slate-200 bg-slate-50/50 hover:bg-white focus-within:bg-white focus-within:border-slate-900 focus-within:ring-2 focus-within:ring-slate-900/10 transition-all">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                    </div>
                    <input :type="showPassword ? 'text' : 'password'"
                           type="password"
                           id="password"
                           name="password"
                           required
                           autocomplete="new-password"
                           placeholder="••••••••"
                           class="block w-full ps-10 pe-11 py-2.5 text-sm bg-transparent border-0 focus:ring-0 text-slate-900 placeholder:text-slate-400 font-sans">
                    <button type="button"
                            @click="showPassword = !showPassword"
                            :aria-label="showPassword ? 'Hide password' : 'Show password'"
                            class="absolute inset-y-0 end-0 flex items-center pe-3.5 text-slate-400 hover:text-slate-700 focus:outline-none transition-colors">
                        <svg x-show="!showPassword" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <svg x-show="showPassword" x-cloak class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18" />
                        </svg>
                    </button>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
            </div>

            <!-- Confirm Password -->
            <div x-data="{ showConfirmPassword: false }">
                <label for="password_confirmation" class="block text-xs font-semibold uppercase tracking-wider text-slate-700 mb-1.5">
                    {{ __('Confirm Password') }}
                </label>
                <div class="relative rounded-xl border border-slate-200 bg-slate-50/50 hover:bg-white focus-within:bg-white focus-within:border-slate-900 focus-within:ring-2 focus-within:ring-slate-900/10 transition-all">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                    </div>
                    <input :type="showConfirmPassword ? 'text' : 'password'"
                           type="password"
                           id="password_confirmation"
                           name="password_confirmation"
                           required
                           autocomplete="new-password"
                           placeholder="••••••••"
                           class="block w-full ps-10 pe-11 py-2.5 text-sm bg-transparent border-0 focus:ring-0 text-slate-900 placeholder:text-slate-400 font-sans">
                    <button type="button"
                            @click="showConfirmPassword = !showConfirmPassword"
                            :aria-label="showConfirmPassword ? 'Hide password' : 'Show password'"
                            class="absolute inset-y-0 end-0 flex items-center pe-3.5 text-slate-400 hover:text-slate-700 focus:outline-none transition-colors">
                        <svg x-show="!showConfirmPassword" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <svg x-show="showConfirmPassword" x-cloak class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18" />
                        </svg>
                    </button>
                </div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1.5" />
            </div>

            <!-- Submit Button -->
            <div class="pt-2">
                <button type="submit"
                        class="w-full py-3 px-4 rounded-xl text-sm font-semibold text-white bg-slate-900 hover:bg-black focus:outline-none focus:ring-2 focus:ring-slate-900 focus:ring-offset-2 transition-all shadow-sm hover:shadow active:scale-[0.99] flex items-center justify-center gap-2 group cursor-pointer">
                    <span>{{ __('Create account') }}</span>
                    <svg class="size-4 transition-transform duration-150 group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </button>
            </div>

            <!-- Terms & Privacy notice -->
            <p class="text-center text-xs text-slate-500 leading-relaxed pt-2">
                By creating an account, you agree to our
                <a href="{{ route('legal.show', 'terms-of-service') }}" class="text-slate-900 font-medium underline hover:text-black">Terms of Service</a>
                and
                <a href="{{ route('legal.show', 'privacy-policy') }}" class="text-slate-900 font-medium underline hover:text-black">Privacy Policy</a>.
            </p>

            <!-- Mobile Alternative Link -->
            <div class="text-center mt-6 pt-5 border-t border-slate-100 sm:hidden">
                <p class="text-xs text-slate-500">
                    Already have an account?
                    <a href="{{ route('login') }}" class="font-semibold text-slate-900 hover:underline">Log in</a>
                </p>
            </div>
        </form>
    </div>
</x-guest-layout>
