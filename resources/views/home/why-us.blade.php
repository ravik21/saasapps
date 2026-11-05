<x-landing-layout title="Why Us — SaaSApps | Scalable Software & AI Solutions" description="Discover why leading companies trust SaaSApps for high-performance custom software, mobile applications, and intelligent cloud architecture.">
    <main class="flex-1 pt-[80px]">

        <!-- =========================================================================
             SECTION 1: HERO (TWO-COLUMN SCRIBE EDITORIAL LAYOUT)
             ========================================================================= -->
        <section class="relative w-full bg-white overflow-hidden py-16 sm:py-20 lg:py-24 border-b border-[#E5E7EB]">
            <div class="max-w-[1306px] mx-auto px-6 sm:px-10 lg:px-[78px]">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

                    <!-- Left Column: Eyebrow, Editorial Serif H1, Subtext, CTAs (7 cols) -->
                    <div class="lg:col-span-7 flex flex-col items-start text-left">
                        <!-- Eyebrow Badge -->
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-100 border border-slate-200/90 text-[13px] font-semibold text-slate-800 tracking-wide mb-6">
                            <span class="size-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            <span>Why Choose Us?</span>
                        </div>

                        <!-- Editorial Display Serif H1 -->
                        <h1 class="font-serif-display text-4xl sm:text-5xl lg:text-[58px] xl:text-[62px] font-normal text-black leading-[1.06] tracking-[-0.03em] max-w-2xl">
                            Technology solutions that deliver real results
                        </h1>

                        <!-- Supporting Paragraph -->
                        <p class="mt-6 text-base sm:text-lg text-slate-600 font-sans leading-relaxed max-w-xl">
                            Comprehensive development services backed by modern technologies, agile execution, and proven senior engineering expertise. We turn ambitious roadmaps into scalable, production-ready software.
                        </p>

                        <!-- CTA Action Buttons -->
                        <div class="mt-8 sm:mt-10 flex flex-wrap items-center gap-3.5 sm:gap-4 w-full sm:w-auto font-sans">
                            <a href="{{ route('contact-us') }}"
                               class="h-[44px] px-7 rounded-full bg-black text-white hover:bg-neutral-800 text-[15px] font-semibold inline-flex items-center justify-center transition-all shadow-sm hover:shadow hover:scale-[1.01] active:scale-[0.99]">
                                Get Started
                            </a>
                            <a href="{{ route('services') }}"
                               class="h-[44px] px-7 rounded-full bg-white text-slate-900 border border-slate-300 hover:border-slate-400 hover:bg-slate-50 text-[15px] font-semibold inline-flex items-center justify-center transition-all active:scale-[0.99]">
                                Explore Our Services
                            </a>
                        </div>

                        <!-- Mini Trust Proof Bar -->
                        <div class="mt-10 pt-8 border-t border-slate-100 flex flex-wrap items-center gap-6 text-xs sm:text-sm text-slate-500 font-sans">
                            <div class="flex items-center gap-2">
                                <svg class="size-4 text-emerald-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-medium text-slate-700">100% On-Time Milestones</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="size-4 text-emerald-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-medium text-slate-700">Enterprise Code Quality</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="size-4 text-emerald-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-medium text-slate-700">Senior Engineers Only</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Visual Technology Container (5 cols) -->
                    <div class="lg:col-span-5 relative flex items-center justify-center">
                        <div class="relative w-full max-w-[500px] rounded-2xl bg-gradient-to-b from-slate-50 to-white p-3 sm:p-4 border border-slate-200/90 shadow-lg">
                            <!-- Clean Mock Window Header -->
                            <div class="flex items-center justify-between pb-3 px-2 border-b border-slate-100 mb-3">
                                <div class="flex items-center gap-1.5">
                                    <span class="size-2.5 rounded-full bg-red-400"></span>
                                    <span class="size-2.5 rounded-full bg-amber-400"></span>
                                    <span class="size-2.5 rounded-full bg-emerald-400"></span>
                                </div>
                                <span class="text-[11px] font-mono font-medium text-slate-400">saasapps.engine.v2</span>
                                <div class="text-[10px] px-2 py-0.5 rounded bg-emerald-50 text-emerald-700 font-semibold border border-emerald-200">
                                    Active
                                </div>
                            </div>

                            <!-- Hero Technology Artwork Image -->
                            <div class="overflow-hidden rounded-xl bg-white border border-slate-100">
                                <img src="{{ asset('images/landing/why-us/hero.png') }}"
                                     alt="Technology solutions and architecture"
                                     class="w-full h-auto object-cover transform hover:scale-[1.02] transition-transform duration-300"
                                     loading="eager" />
                            </div>

                            <!-- Floating Metric Badges -->
                            <div class="absolute -bottom-4 -left-3 sm:-left-6 bg-white/95 backdrop-blur-sm rounded-xl p-3 sm:p-3.5 border border-slate-200 shadow-md flex items-center gap-3">
                                <div class="size-9 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-sm">
                                    99%
                                </div>
                                <div class="text-left font-sans">
                                    <div class="text-[13px] font-bold text-slate-900">Sprint Accuracy</div>
                                    <div class="text-[11px] text-slate-500">Predictable deliverables</div>
                                </div>
                            </div>

                            <div class="absolute -top-4 -right-3 sm:-right-4 bg-white/95 backdrop-blur-sm rounded-xl p-3 sm:p-3.5 border border-slate-200 shadow-md flex items-center gap-3">
                                <div class="size-9 rounded-lg bg-slate-900 text-white flex items-center justify-center font-bold text-sm">
                                    2.4x
                                </div>
                                <div class="text-left font-sans">
                                    <div class="text-[13px] font-bold text-slate-900">Time-to-Market</div>
                                    <div class="text-[11px] text-slate-500">Accelerated deployment</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- =========================================================================
             SECTION 2: WHY CLIENTS TRUST US (4 VALUE PROPOSITIONS IN SCRIBE CARDS)
             ========================================================================= -->
        <section class="relative w-full bg-[#FAFAFA] py-20 sm:py-24 lg:py-28 border-b border-[#E5E7EB]">
            <div class="max-w-[1306px] mx-auto px-6 sm:px-10 lg:px-[78px]">

                <!-- Section Header -->
                <div class="max-w-3xl mb-14 sm:mb-16">
                    <div class="text-xs sm:text-[13px] font-semibold uppercase tracking-[0.12em] text-slate-500 mb-3 font-sans">
                        Our Commitment
                    </div>
                    <h2 class="font-serif-display text-3xl sm:text-4xl lg:text-[44px] font-normal text-black leading-[1.12] tracking-[-0.025em]">
                        Why clients trust SaaSApps
                    </h2>
                    <p class="mt-4 text-base sm:text-lg text-slate-600 font-sans leading-relaxed">
                        We replace the unpredictability of generic agencies with engineering rigor, milestone-driven execution, and transparent communication at every stage.
                    </p>
                </div>

                <!-- 4 Value Proposition Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-7">

                    <!-- Card 1: Production-Ready Code -->
                    <div class="group rounded-2xl bg-white p-7 border border-[#E5E7EB] shadow-[0_1px_3px_rgba(0,0,0,0.03)] hover:shadow-md hover:border-slate-300 transition-all duration-200 flex flex-col justify-between">
                        <div>
                            <div class="size-11 rounded-xl bg-slate-100 text-slate-900 flex items-center justify-center mb-6 group-hover:bg-black group-hover:text-white transition-colors duration-200">
                                <svg class="size-5.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-900 font-sans tracking-tight mb-3">
                                Production-Ready Reliability
                            </h3>
                            <p class="text-sm sm:text-[14.5px] text-slate-600 font-sans leading-relaxed">
                                We write robust, cleanly architected code that works flawlessly under real user loads from day one, backed by automated tests, continuous integration, and complete documentation.
                            </p>
                        </div>
                        <div class="mt-6 pt-5 border-t border-slate-100 flex items-center gap-2 text-xs font-medium text-emerald-700">
                            <span class="size-1.5 rounded-full bg-emerald-500"></span>
                            <span>Zero technical debt handover</span>
                        </div>
                    </div>

                    <!-- Card 2: Transparent & Collaborative -->
                    <div class="group rounded-2xl bg-white p-7 border border-[#E5E7EB] shadow-[0_1px_3px_rgba(0,0,0,0.03)] hover:shadow-md hover:border-slate-300 transition-all duration-200 flex flex-col justify-between">
                        <div>
                            <div class="size-11 rounded-xl bg-slate-100 text-slate-900 flex items-center justify-center mb-6 group-hover:bg-black group-hover:text-white transition-colors duration-200">
                                <svg class="size-5.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-900 font-sans tracking-tight mb-3">
                                Transparent Collaboration
                            </h3>
                            <p class="text-sm sm:text-[14.5px] text-slate-600 font-sans leading-relaxed">
                                No opaque black boxes. Our development cycle is collaborative, with structured weekly demos, shared Git repositories, and your direct sign-off required at every milestone.
                            </p>
                        </div>
                        <div class="mt-6 pt-5 border-t border-slate-100 flex items-center gap-2 text-xs font-medium text-emerald-700">
                            <span class="size-1.5 rounded-full bg-emerald-500"></span>
                            <span>Weekly demos & clear backlogs</span>
                        </div>
                    </div>

                    <!-- Card 3: Modern Proven Stack -->
                    <div class="group rounded-2xl bg-white p-7 border border-[#E5E7EB] shadow-[0_1px_3px_rgba(0,0,0,0.03)] hover:shadow-md hover:border-slate-300 transition-all duration-200 flex flex-col justify-between">
                        <div>
                            <div class="size-11 rounded-xl bg-slate-100 text-slate-900 flex items-center justify-center mb-6 group-hover:bg-black group-hover:text-white transition-colors duration-200">
                                <svg class="size-5.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-900 font-sans tracking-tight mb-3">
                                Modern Proven Stack
                            </h3>
                            <p class="text-sm sm:text-[14.5px] text-slate-600 font-sans leading-relaxed">
                                We leverage battle-tested frameworks—Laravel, Node.js, React, Vue, Python, and cloud infrastructure—that ensure high scalability, bank-grade security, and zero vendor lock-in.
                            </p>
                        </div>
                        <div class="mt-6 pt-5 border-t border-slate-100 flex items-center gap-2 text-xs font-medium text-emerald-700">
                            <span class="size-1.5 rounded-full bg-emerald-500"></span>
                            <span>Cloud-native & highly maintainable</span>
                        </div>
                    </div>

                    <!-- Card 4: Dedicated Attention & Support -->
                    <div class="group rounded-2xl bg-white p-7 border border-[#E5E7EB] shadow-[0_1px_3px_rgba(0,0,0,0.03)] hover:shadow-md hover:border-slate-300 transition-all duration-200 flex flex-col justify-between">
                        <div>
                            <div class="size-11 rounded-xl bg-slate-100 text-slate-900 flex items-center justify-center mb-6 group-hover:bg-black group-hover:text-white transition-colors duration-200">
                                <svg class="size-5.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-900 font-sans tracking-tight mb-3">
                                Dedicated Attention & Support
                            </h3>
                            <p class="text-sm sm:text-[14.5px] text-slate-600 font-sans leading-relaxed">
                                Your project is staffed by committed senior talent with clear timelines, prompt Slack/Teams communication, and proactive post-launch maintenance to guarantee lasting success.
                            </p>
                        </div>
                        <div class="mt-6 pt-5 border-t border-slate-100 flex items-center gap-2 text-xs font-medium text-emerald-700">
                            <span class="size-1.5 rounded-full bg-emerald-500"></span>
                            <span>Direct access to lead developers</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- =========================================================================
             SECTION 3: OUR APPROACH (5-STEP VISUAL TIMELINE)
             ========================================================================= -->
        <section class="relative w-full bg-white py-20 sm:py-24 lg:py-28 border-b border-[#E5E7EB] overflow-hidden">
            <div class="max-w-[1306px] mx-auto px-6 sm:px-10 lg:px-[78px]">

                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-20">
                    <div class="text-xs sm:text-[13px] font-semibold uppercase tracking-[0.14em] text-slate-500 mb-3 font-sans">
                        Backend Engineering
                    </div>
                    <h2 class="font-serif-display text-3xl sm:text-4xl lg:text-[46px] font-normal text-black leading-[1.1] tracking-[-0.025em]">
                        Our 5-step backend development process
                    </h2>
                    <p class="mt-4 text-base sm:text-lg text-slate-600 font-sans leading-relaxed">
                        A structured engineering approach to building secure, scalable and high-performance backend systems, APIs and database architectures.
                    </p>
                </div>

                <!-- 5-Step Process Timeline Container -->
                <div class="relative">
                    <!-- Desktop Connecting Horizontal Line -->
                    <div class="hidden lg:block absolute top-[27px] left-[7%] right-[7%] h-[2px] bg-slate-200 z-0" aria-hidden="true"></div>

                    <!-- 5 Step Columns Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-5 relative z-10">

                        <!-- Step 01 -->
                        <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
                            <div class="size-14 rounded-full bg-white border-2 border-slate-900 text-slate-900 font-sans font-bold text-base flex items-center justify-center shadow-xs mb-5">
                                01
                            </div>
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400 font-sans mb-1">PHASE 1</span>
                            <h3 class="text-base sm:text-lg font-semibold text-slate-900 font-sans mb-2 leading-snug">
                                Requirements & API Discovery
                            </h3>
                            <p class="text-sm text-slate-600 font-sans leading-relaxed">
                                Analyze business requirements, application workflows, API requirements, integrations and backend functionality.
                            </p>
                            <div class="mt-4 inline-flex items-center gap-1.5 text-xs font-semibold text-slate-700 bg-slate-100 px-2.5 py-1 rounded-md">
                                <span>API Requirements</span>
                            </div>
                        </div>

                        <!-- Step 02 -->
                        <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
                            <div class="size-14 rounded-full bg-white border-2 border-slate-900 text-slate-900 font-sans font-bold text-base flex items-center justify-center shadow-xs mb-5">
                                02
                            </div>
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400 font-sans mb-1">PHASE 2</span>
                            <h3 class="text-base sm:text-lg font-semibold text-slate-900 font-sans mb-2 leading-snug">
                                Backend Architecture & Database Design
                            </h3>
                            <p class="text-sm text-slate-600 font-sans leading-relaxed">
                                Design scalable backend architecture, database schemas, relationships, API structures, authentication and authorization.
                            </p>
                            <div class="mt-4 inline-flex items-center gap-1.5 text-xs font-semibold text-slate-700 bg-slate-100 px-2.5 py-1 rounded-md">
                                <span>System Architecture</span>
                            </div>
                        </div>

                        <!-- Step 03 -->
                        <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
                            <div class="size-14 rounded-full bg-white border-2 border-slate-900 text-slate-900 font-sans font-bold text-base flex items-center justify-center shadow-xs mb-5">
                                03
                            </div>
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400 font-sans mb-1">PHASE 3</span>
                            <h3 class="text-base sm:text-lg font-semibold text-slate-900 font-sans mb-2 leading-snug">
                                Backend Development & Integration
                            </h3>
                            <p class="text-sm text-slate-600 font-sans leading-relaxed">
                                Develop business logic, REST APIs, database operations, authentication, third-party integrations, queues and background jobs.
                            </p>
                            <div class="mt-4 inline-flex items-center gap-1.5 text-xs font-semibold text-slate-700 bg-slate-100 px-2.5 py-1 rounded-md">
                                <span>API Development</span>
                            </div>
                        </div>

                        <!-- Step 04 -->
                        <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
                            <div class="size-14 rounded-full bg-white border-2 border-slate-900 text-slate-900 font-sans font-bold text-base flex items-center justify-center shadow-xs mb-5">
                                04
                            </div>
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400 font-sans mb-1">PHASE 4</span>
                            <h3 class="text-base sm:text-lg font-semibold text-slate-900 font-sans mb-2 leading-snug">
                                Testing, Security & Optimization
                            </h3>
                            <p class="text-sm text-slate-600 font-sans leading-relaxed">
                                Perform unit and integration testing, API validation, security checks, database optimization and performance testing.
                            </p>
                            <div class="mt-4 inline-flex items-center gap-1.5 text-xs font-semibold text-slate-700 bg-slate-100 px-2.5 py-1 rounded-md">
                                <span>Quality Assurance</span>
                            </div>
                        </div>

                        <!-- Step 05 -->
                        <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
                            <div class="size-14 rounded-full bg-white border-2 border-slate-900 text-slate-900 font-sans font-bold text-base flex items-center justify-center shadow-xs mb-5">
                                05
                            </div>
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400 font-sans mb-1">PHASE 5</span>
                            <h3 class="text-base sm:text-lg font-semibold text-slate-900 font-sans mb-2 leading-snug">
                                Deployment & Maintenance
                            </h3>
                            <p class="text-sm text-slate-600 font-sans leading-relaxed">
                                Deploy backend applications, configure production environments, implement monitoring, backups, documentation and ongoing maintenance.
                            </p>
                            <div class="mt-4 inline-flex items-center gap-1.5 text-xs font-semibold text-slate-700 bg-slate-100 px-2.5 py-1 rounded-md">
                                <span>Production Deployment</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>


        <!-- =========================================================================
             SECTION 4: OUR EXPERTISE (RICH 6-CARD GRID OF REAL OFFERINGS)
             ========================================================================= -->
        <section class="relative w-full bg-[#FAFAFA] py-20 sm:py-24 lg:py-28 border-b border-[#E5E7EB]">
            <div class="max-w-[1306px] mx-auto px-6 sm:px-10 lg:px-[78px]">

                <!-- Section Header -->
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-14 sm:mb-16 gap-6">
                    <div class="max-w-2xl">
                        <div class="text-xs sm:text-[13px] font-semibold uppercase tracking-[0.14em] text-slate-500 mb-3 font-sans">
                            Technical Capabilities
                        </div>
                        <h2 class="font-serif-display text-3xl sm:text-4xl lg:text-[44px] font-normal text-black leading-[1.12] tracking-[-0.025em]">
                            Our core engineering expertise
                        </h2>
                        <p class="mt-4 text-base sm:text-lg text-slate-600 font-sans leading-relaxed">
                            Deep specialization across full-stack web, mobile platforms, intelligent automation, and resilient cloud architectures.
                        </p>
                    </div>

                    <div class="flex-shrink-0">
                        <a href="{{ route('services') }}"
                           class="inline-flex items-center gap-2 text-sm font-semibold text-slate-900 hover:text-black group">
                            <span>View All Services</span>
                            <svg class="size-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- 6 Expertise Cards Grid (3 Columns) -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                    <!-- Card 1: Custom Software Development -->
                    <div class="group rounded-2xl bg-white p-8 border border-[#E5E7EB] shadow-[0_1px_3px_rgba(0,0,0,0.03)] hover:shadow-card hover:border-slate-300 transition-all duration-200 flex flex-col justify-between">
                        <div>
                            <div class="size-12 rounded-xl bg-slate-100 text-slate-900 flex items-center justify-center mb-6 group-hover:bg-black group-hover:text-white transition-colors duration-200">
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 font-sans tracking-tight mb-3">
                                Custom Software Development
                            </h3>
                            <p class="text-sm sm:text-[15px] text-slate-600 font-sans leading-relaxed">
                                Tailored enterprise applications, internal tooling, and complex business software engineered to automate operations and integrate seamlessly with existing infrastructure.
                            </p>
                            <!-- Tech Tags -->
                            <div class="mt-5 flex flex-wrap gap-1.5 font-sans">
                                <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Laravel</span>
                                <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Node.js</span>
                                <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">PostgreSQL</span>
                            </div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-100">
                            <a href="{{ route('services') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-900 hover:text-black group-hover:gap-2 transition-all">
                                <span>Learn more</span>
                                <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2: Mobile App Development -->
                    <div class="group rounded-2xl bg-white p-8 border border-[#E5E7EB] shadow-[0_1px_3px_rgba(0,0,0,0.03)] hover:shadow-card hover:border-slate-300 transition-all duration-200 flex flex-col justify-between">
                        <div>
                            <div class="size-12 rounded-xl bg-slate-100 text-slate-900 flex items-center justify-center mb-6 group-hover:bg-black group-hover:text-white transition-colors duration-200">
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 font-sans tracking-tight mb-3">
                                Mobile App Development
                            </h3>
                            <p class="text-sm sm:text-[15px] text-slate-600 font-sans leading-relaxed">
                                High-performance native and cross-platform mobile apps for iOS and Android, built with offline capability, biometric auth, and full App Store deployment support.
                            </p>
                            <!-- Tech Tags -->
                            <div class="mt-5 flex flex-wrap gap-1.5 font-sans">
                                <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Swift</span>
                                <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Kotlin</span>
                                <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">React Native</span>
                            </div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-100">
                            <a href="{{ route('services') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-900 hover:text-black group-hover:gap-2 transition-all">
                                <span>Learn more</span>
                                <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Card 3: AI Solutions & Intelligent Automation -->
                    <div class="group rounded-2xl bg-white p-8 border border-[#E5E7EB] shadow-[0_1px_3px_rgba(0,0,0,0.03)] hover:shadow-card hover:border-slate-300 transition-all duration-200 flex flex-col justify-between">
                        <div>
                            <div class="size-12 rounded-xl bg-slate-100 text-slate-900 flex items-center justify-center mb-6 group-hover:bg-black group-hover:text-white transition-colors duration-200">
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 font-sans tracking-tight mb-3">
                                AI Solutions & Automation
                            </h3>
                            <p class="text-sm sm:text-[15px] text-slate-600 font-sans leading-relaxed">
                                Practical AI applications, LLM fine-tuning, predictive modeling, and intelligent document processing that extract real-time insights and automate repetitive workflows.
                            </p>
                            <!-- Tech Tags -->
                            <div class="mt-5 flex flex-wrap gap-1.5 font-sans">
                                <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">OpenAI</span>
                                <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Python</span>
                                <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">LangChain</span>
                            </div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-100">
                            <a href="{{ route('services') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-900 hover:text-black group-hover:gap-2 transition-all">
                                <span>Learn more</span>
                                <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Card 4: Web & E-Commerce Development -->
                    <div class="group rounded-2xl bg-white p-8 border border-[#E5E7EB] shadow-[0_1px_3px_rgba(0,0,0,0.03)] hover:shadow-card hover:border-slate-300 transition-all duration-200 flex flex-col justify-between">
                        <div>
                            <div class="size-12 rounded-xl bg-slate-100 text-slate-900 flex items-center justify-center mb-6 group-hover:bg-black group-hover:text-white transition-colors duration-200">
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 font-sans tracking-tight mb-3">
                                Web & E-Commerce Platforms
                            </h3>
                            <p class="text-sm sm:text-[15px] text-slate-600 font-sans leading-relaxed">
                                Lightning-fast e-commerce stores, custom checkout pipelines, subscription billing integrations, and customer portals built for maximum conversion and security.
                            </p>
                            <!-- Tech Tags -->
                            <div class="mt-5 flex flex-wrap gap-1.5 font-sans">
                                <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Stripe</span>
                                <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Vue.js</span>
                                <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Tailwind</span>
                            </div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-100">
                            <a href="{{ route('services') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-900 hover:text-black group-hover:gap-2 transition-all">
                                <span>Learn more</span>
                                <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Card 5: SaaS & Multi-Tenant Platforms -->
                    <div class="group rounded-2xl bg-white p-8 border border-[#E5E7EB] shadow-[0_1px_3px_rgba(0,0,0,0.03)] hover:shadow-card hover:border-slate-300 transition-all duration-200 flex flex-col justify-between">
                        <div>
                            <div class="size-12 rounded-xl bg-slate-100 text-slate-900 flex items-center justify-center mb-6 group-hover:bg-black group-hover:text-white transition-colors duration-200">
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 font-sans tracking-tight mb-3">
                                SaaS & Platform Architecture
                            </h3>
                            <p class="text-sm sm:text-[15px] text-slate-600 font-sans leading-relaxed">
                                Complete multi-tenant SaaS foundations with automated onboarding, granular role-based permissions (RBAC), metered subscription billing, and isolated data partitions.
                            </p>
                            <!-- Tech Tags -->
                            <div class="mt-5 flex flex-wrap gap-1.5 font-sans">
                                <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Multi-Tenancy</span>
                                <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Redis</span>
                                <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">REST APIs</span>
                            </div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-100">
                            <a href="{{ route('services') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-900 hover:text-black group-hover:gap-2 transition-all">
                                <span>Learn more</span>
                                <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Card 6: Cloud & DevOps Infrastructure -->
                    <div class="group rounded-2xl bg-white p-8 border border-[#E5E7EB] shadow-[0_1px_3px_rgba(0,0,0,0.03)] hover:shadow-card hover:border-slate-300 transition-all duration-200 flex flex-col justify-between">
                        <div>
                            <div class="size-12 rounded-xl bg-slate-100 text-slate-900 flex items-center justify-center mb-6 group-hover:bg-black group-hover:text-white transition-colors duration-200">
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 font-sans tracking-tight mb-3">
                                Cloud & DevOps Services
                            </h3>
                            <p class="text-sm sm:text-[15px] text-slate-600 font-sans leading-relaxed">
                                Resilient cloud infrastructure setup, automated CI/CD deployment pipelines, containerization with Docker, and 24/7 uptime monitoring to ensure continuous delivery.
                            </p>
                            <!-- Tech Tags -->
                            <div class="mt-5 flex flex-wrap gap-1.5 font-sans">
                                <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">AWS / GCP</span>
                                <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Docker</span>
                                <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">CI/CD</span>
                            </div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-100">
                            <a href="{{ route('services') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-900 hover:text-black group-hover:gap-2 transition-all">
                                <span>Learn more</span>
                                <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- =========================================================================
             SECTION 5: STATS BANNER (SCRIBE EDITORIAL NUMBERS STRIP)
             ========================================================================= -->
        <section class="relative w-full bg-white py-16 sm:py-20 border-b border-[#E5E7EB]">
            <div class="max-w-[1306px] mx-auto px-6 sm:px-10 lg:px-[78px]">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-4 divide-y md:divide-y-0 md:divide-x divide-slate-200">
                    <div class="pt-6 md:pt-0 md:px-6 first:pt-0 first:px-0">
                        <div class="font-serif-display text-4xl sm:text-5xl lg:text-[54px] font-normal text-black leading-none tracking-tight">
                            120+
                        </div>
                        <div class="mt-3 text-sm font-semibold text-slate-900 font-sans">Production Releases</div>
                        <div class="mt-1 text-xs text-slate-500 font-sans">Shipped on time and on budget</div>
                    </div>

                    <div class="pt-6 md:pt-0 md:px-6">
                        <div class="font-serif-display text-4xl sm:text-5xl lg:text-[54px] font-normal text-black leading-none tracking-tight">
                            99.9%
                        </div>
                        <div class="mt-3 text-sm font-semibold text-slate-900 font-sans">Uptime Guarantee</div>
                        <div class="mt-1 text-xs text-slate-500 font-sans">Rock-solid infrastructure stability</div>
                    </div>

                    <div class="pt-6 md:pt-0 md:px-6">
                        <div class="font-serif-display text-4xl sm:text-5xl lg:text-[54px] font-normal text-black leading-none tracking-tight">
                            15+
                        </div>
                        <div class="mt-3 text-sm font-semibold text-slate-900 font-sans">Years Experience</div>
                        <div class="mt-1 text-xs text-slate-500 font-sans">Senior architects and lead engineers</div>
                    </div>

                    <div class="pt-6 md:pt-0 md:px-6">
                        <div class="font-serif-display text-4xl sm:text-5xl lg:text-[54px] font-normal text-black leading-none tracking-tight">
                            4.9/5
                        </div>
                        <div class="mt-3 text-sm font-semibold text-slate-900 font-sans">Client Rating</div>
                        <div class="mt-1 text-xs text-slate-500 font-sans">Across verified enterprise reviews</div>
                    </div>
                </div>
            </div>
        </section>


        <!-- =========================================================================
             SECTION 6: FINAL CONVERSION BANNER (SCRIBE EXACT ROUNDED CARD + RIBBON)
             ========================================================================= -->
        @include('home.partials.get-app')

    </main>
</x-landing-layout>
