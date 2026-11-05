<x-guest-layout>
    <div class="w-full max-w-[480px] bg-white border border-slate-200/90 rounded-2xl sm:rounded-3xl shadow-[0_4px_24px_rgba(15,23,42,0.05)] sm:shadow-[0_12px_40px_rgba(15,23,42,0.07)] p-6 sm:p-10 transition-all font-sans">
        <!-- Icon Badge -->
        <div class="size-12 rounded-2xl bg-emerald-50 border border-emerald-200/80 text-emerald-800 flex items-center justify-center mb-5 shadow-xs">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 13V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h9"></path>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                <path d="m16 19 2 2 4-4"></path>
            </svg>
        </div>

        <!-- Title & Subtitle -->
        <div>
            <h1 class="text-2xl sm:text-3xl font-normal text-slate-900 tracking-tight" style="font-family: var(--font-serif-display), serif;">
                {{ __('Verify your email') }}
            </h1>
            <p class="mt-2 text-sm text-slate-600 font-sans leading-relaxed">
                {{ __('Thanks for signing up! Before getting started, please check your inbox and click on the verification link we just emailed to you. If you didn\'t receive the email, we will gladly send you another.') }}
            </p>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mt-5 p-3.5 rounded-xl bg-emerald-50 border border-emerald-200 text-xs sm:text-sm font-medium text-emerald-800 flex items-start gap-2.5">
                <svg class="size-4 text-emerald-600 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                <div>
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            </div>
        @endif

        <div class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-3 pt-2">
            <form method="POST" action="{{ route('verification.send') }}" class="w-full sm:w-auto">
                @csrf
                <button type="submit"
                        class="w-full sm:w-auto py-2.5 px-4 rounded-xl text-xs sm:text-sm font-semibold text-white bg-slate-900 hover:bg-black focus:outline-none focus:ring-2 focus:ring-slate-900 focus:ring-offset-2 transition-all shadow-sm hover:shadow active:scale-[0.99] flex items-center justify-center gap-2 cursor-pointer">
                    <span>{{ __('Resend Verification Email') }}</span>
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}" class="w-full sm:w-auto">
                @csrf
                <button type="submit" class="w-full sm:w-auto py-2 px-3 text-xs sm:text-sm font-medium text-slate-600 hover:text-slate-900 underline transition-colors cursor-pointer text-center">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
