<!-- SECTION 1: ABOUT US HERO (SCRIBE EDITORIAL & MOBILE RESPONSIVE) -->
<section class="relative w-full bg-white overflow-hidden py-10 sm:py-14 md:py-20 lg:py-24 border-b border-[#E5E7EB]">
    <div class="max-w-[1306px] mx-auto px-6 sm:px-10 lg:px-[78px]">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-10 md:gap-12 lg:gap-16 items-center">
            
            <!-- Left Column: Content & Metrics (7 cols) -->
            <header class="md:col-span-7 flex flex-col items-start text-left">
                <!-- Eyebrow Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-100 border border-slate-200/90 text-xs sm:text-[13px] font-semibold text-slate-800 tracking-wide mb-4 sm:mb-5">
                    <span class="size-2 rounded-full bg-slate-500"></span>
                    <span>ABOUT SAASAPPS</span>
                </div>

                <!-- Editorial Serif Display Heading -->
                <h1 class="font-serif-display text-3xl sm:text-4xl md:text-5xl lg:text-[54px] font-normal text-slate-900 leading-[1.12] tracking-[-0.025em]">
                    Engineering <span class="relative inline-block">excellence</span> since 2014
                </h1>

                <!-- Body Description -->
                <p class="mt-4 sm:mt-5 text-base sm:text-lg text-slate-600 font-sans leading-relaxed max-w-xl">
                    India-based software company building secure, scalable digital products and custom cloud platforms for high-growth businesses worldwide.
                </p>

                <!-- Key Facts Mini Strip -->
                <div class="mt-8 pt-6 border-t border-slate-100 grid grid-cols-3 gap-4 sm:gap-6 w-full font-sans text-left">
                    <div>
                        <div class="font-serif-display text-2xl sm:text-3xl text-slate-900 font-normal">10+</div>
                        <div class="text-xs sm:text-[13px] text-slate-500 mt-0.5">Years Track Record</div>
                    </div>
                    <div>
                        <div class="font-serif-display text-2xl sm:text-3xl text-slate-900 font-normal">100%</div>
                        <div class="text-xs sm:text-[13px] text-slate-500 mt-0.5">In-House Engineers</div>
                    </div>
                    <div>
                        <div class="font-serif-display text-2xl sm:text-3xl text-slate-900 font-normal">Senior</div>
                        <div class="text-xs sm:text-[13px] text-slate-500 mt-0.5">Dedicated Talent</div>
                    </div>
                </div>
            </header>

            <!-- Right Column: System Diagram (5 cols) -->
            <aside class="md:col-span-5 flex items-center justify-center w-full mt-4 md:mt-0">
                <div class="w-full max-w-[420px] sm:max-w-[460px] md:max-w-full rounded-2xl bg-white border border-slate-200/90 p-2 sm:p-3 shadow-xs">
                    <img src="{{ asset('images/landing/about-software-architecture.svg') }}"
                         alt="SaaSApps engineering dashboard overview showing monthly growth analytics, active users, high uptime, and real-time project request notification"
                         class="w-full h-auto select-none rounded-xl"
                         width="800"
                         height="650"
                         loading="eager">
                </div>
            </aside>

        </div>
    </div>
</section>
