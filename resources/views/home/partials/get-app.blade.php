<!-- SECTION: FINAL CONVERSION CTA BANNER (AUTHENTIC COMPANY BRANDING) -->
<section class="relative w-full bg-paper py-20 md:py-28 overflow-hidden border-t border-slate-200/80">
    <div class="max-w-[1306px] mx-auto px-6 sm:px-10 lg:px-[78px]">
        <div class="relative rounded-3xl bg-white border border-slate-200/90 shadow-card p-8 sm:p-12 md:p-16 overflow-hidden max-w-5xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 lg:gap-12 items-center relative z-10">
                <!-- Left Column: Headline, Description & Action Buttons (7 cols) -->
                <div class="md:col-span-7 flex flex-col items-start text-left">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 border border-emerald-200/80 text-xs font-semibold text-emerald-800 tracking-wide mb-4">
                        <span class="size-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span>Start Your Project</span>
                    </div>

                    <h2 class="font-serif-display text-3xl sm:text-4xl md:text-[42px] font-normal text-slate-900 leading-[1.12] tracking-[-0.025em]">
                        Have a project in mind? Let's build something great together.
                    </h2>

                    <p class="mt-4 text-base sm:text-lg text-slate-600 font-sans leading-relaxed max-w-lg">
                        Whether you need a custom SaaS platform, a mobile application, or dedicated senior engineering, we're ready to bring your vision to life.
                    </p>

                    <!-- Dual CTAs: Get Started & Contact Us -->
                    <div class="mt-8 flex flex-wrap items-center gap-3.5 sm:gap-4 font-sans">
                        <a href="{{ route('contact-us') }}"
                           class="h-[44px] px-7 rounded-full bg-black text-white hover:bg-neutral-800 text-[15px] font-semibold inline-flex items-center justify-center transition-all shadow-sm hover:shadow hover:scale-[1.01] active:scale-[0.99]">
                            Get Started
                        </a>
                        <a href="{{ route('contact-us') }}"
                           class="h-[44px] px-7 rounded-full bg-white text-slate-900 border border-slate-300 hover:border-slate-400 hover:bg-slate-50 text-[15px] font-semibold inline-flex items-center justify-center transition-all active:scale-[0.99]">
                            Contact Us
                        </a>
                    </div>
                </div>

                <!-- Right Column: Authentic Company Tech/Consultation Artwork (5 cols) -->
                <div class="md:col-span-5 flex items-center justify-center">
                    <div class="w-full max-w-sm rounded-2xl overflow-hidden bg-slate-50 border border-slate-200/80 p-2 shadow-sm">
                        <img src="{{ asset('images/landing/contact-consultation.svg') }}"
                             alt="Let's build together"
                             class="w-full h-auto object-contain rounded-xl"
                             loading="lazy" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
