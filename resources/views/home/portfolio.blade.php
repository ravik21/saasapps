<x-landing-layout title="Portfolio & Delivered Projects — SaaSApps" description="Explore our portfolio of scalable SaaS platforms, modern web applications, mobile apps, and cloud software engineered by SaaSApps.">
    <main class="flex-1 w-full bg-white pt-[80px]" x-data="{ activeFilter: 'all' }">

        @php
            // Curated authentic showcase projects
            $showcaseProjects = [
                [
                    'name' => 'TrustPatrick — B2B Review & Verification Engine',
                    'domain' => 'trustpatrick.com',
                    'category' => 'SaaS Platform',
                    'category_slug' => 'saas',
                    'description' => 'A robust multi-tenant platform engineered with automated fraud prevention, real-time audit logging, and custom verification workflows for business reviews.',
                    'image' => asset('images/landing/projects/trustpatrick.png'),
                    'link' => 'https://trustpatrick.com',
                    'technologies' => ['Laravel', 'Vue.js', 'Tailwind CSS', 'MySQL', 'Redis'],
                    'client' => 'Joseph Edmonds',
                    'client_company' => 'Owner at Edmonds Ecommerce',
                    'client_avatar' => asset('images/avatar.png'),
                    'quote' => 'Ravi did some great work for us pushing forwards an internal project with exceptional code quality and speed.',
                    'highlight' => 'Enterprise Fraud Prevention',
                ],
                [
                    'name' => 'ThriveCoach — Interactive Coaching & Client Portal',
                    'domain' => 'thrivecoach.app',
                    'category' => 'Mobile & Web App',
                    'category_slug' => 'mobile',
                    'description' => 'An end-to-end coaching platform featuring automated appointment scheduling, private real-time messaging, client progress tracking, and integrated Stripe subscriptions.',
                    'image' => asset('images/landing/projects/thrivecoach.png'),
                    'link' => 'https://thrivecoach.app',
                    'technologies' => ['Laravel', 'React', 'Tailwind CSS', 'Stripe', 'AWS'],
                    'client' => 'Vincenzo Lufino',
                    'client_company' => 'Owner at BtoTree',
                    'client_avatar' => asset('images/avatar.png'),
                    'quote' => 'Ravi is a great guy and developer! Reliable, communicative, and delivers high-performance code. Hope to work together again!',
                    'highlight' => 'Automated Scheduling & Stripe',
                ],
                [
                    'name' => 'Qurater — AI Content & Knowledge Curation Engine',
                    'domain' => 'qurater.io',
                    'category' => 'AI & Automation',
                    'category_slug' => 'ai',
                    'description' => 'An intelligent semantic research and content curation engine powered by LLMs, automated document extraction, multi-source ingestion, and automated categorization.',
                    'image' => asset('images/landing/projects/qurater.png'),
                    'link' => 'https://qurater.io',
                    'technologies' => ['Python', 'Laravel', 'OpenAI', 'PostgreSQL', 'Docker'],
                    'client' => 'Scott Yewell',
                    'client_company' => 'Purpose Built Software, Inc',
                    'client_avatar' => asset('images/avatar.png'),
                    'quote' => 'Ravi did an excellent job on a complex project. He has great communication, and works really hard. Highly recommended.',
                    'highlight' => 'LLM Semantic Search & Ingestion',
                ],
                [
                    'name' => 'Prescribery — Telemedicine & Digital Prescriptions',
                    'domain' => 'prescribery.com',
                    'category' => 'Web Application',
                    'category_slug' => 'web',
                    'description' => 'A HIPAA-aligned digital prescription and telemedicine workflow application connecting licensed healthcare practitioners with local pharmacy networks seamlessly.',
                    'image' => asset('images/landing/projects/prescribery.png'),
                    'link' => 'https://prescribery.com',
                    'technologies' => ['Laravel', 'Vue.js', 'REST APIs', 'MySQL', 'Docker'],
                    'client' => 'Mikael Westöö',
                    'client_company' => 'CEO & Founder at Svensk e-identitet AB',
                    'client_avatar' => asset('images/avatar.png'),
                    'quote' => 'Ravi is a brilliant developer! Solved challenging technical obstacles with elegant architecture and rapid execution.',
                    'highlight' => 'HIPAA-Aligned Routing',
                ],
            ];

            // If database projects exist, merge them
            $combinedProjects = $showcaseProjects;
            if (isset($projects) && $projects->count() > 0) {
                foreach ($projects as $dbProject) {
                    $combinedProjects[] = [
                        'name' => $dbProject->name,
                        'domain' => $dbProject->link ? parse_url($dbProject->link, PHP_URL_HOST) ?? 'saasapps.io' : 'saasapps.io',
                        'category' => 'Custom Software',
                        'category_slug' => 'saas',
                        'description' => strip_tags($dbProject->description ?? 'Custom software engineering project delivered with enterprise reliability.'),
                        'image' => !empty($dbProject->images) && is_array($dbProject->images) ? asset($dbProject->images[0]) : null,
                        'link' => $dbProject->link ?: '#',
                        'technologies' => is_array($dbProject->technology) ? $dbProject->technology : ['Laravel', 'Tailwind CSS', 'PHP'],
                        'client' => $dbProject->client ?: 'Verified Client',
                        'client_company' => 'Enterprise Partner',
                        'client_avatar' => asset('images/avatar.png'),
                        'quote' => 'Delivered on schedule with robust backend architecture and full test coverage.',
                        'highlight' => 'Production Deployment',
                    ];
                }
            }

            // Category counts for interactive filter badges
            $countAll = count($combinedProjects);
            $countSaas = count(array_filter($combinedProjects, fn($p) => $p['category_slug'] === 'saas'));
            $countMobile = count(array_filter($combinedProjects, fn($p) => $p['category_slug'] === 'mobile'));
            $countAi = count(array_filter($combinedProjects, fn($p) => $p['category_slug'] === 'ai'));
            $countWeb = count(array_filter($combinedProjects, fn($p) => $p['category_slug'] === 'web'));
        @endphp

        <!-- =====================================================================
             1. COMPACT, HIGH-IMPACT HERO & FILTER CONTROLS
             ===================================================================== -->
        <section class="relative w-full bg-white pt-10 pb-8 sm:pt-14 sm:pb-10 border-b border-[#E5E7EB] overflow-hidden">
            <!-- Subtle Radial Gradient Glow -->
            <div class="absolute inset-0 pointer-events-none opacity-40">
                <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-[680px] h-[300px] bg-gradient-to-b from-emerald-100/70 via-slate-50 to-transparent blur-3xl"></div>
            </div>

            <div class="relative max-w-[1306px] mx-auto px-6 sm:px-10 lg:px-[78px]">
                <div class="max-w-4xl mx-auto text-center flex flex-col items-center">

                    <!-- Eyebrow Pill -->
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-100 border border-slate-200/90 text-xs sm:text-[13px] font-semibold text-slate-800 tracking-wide mb-4">
                        <span class="size-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span>OUR WORK / DELIVERED PORTFOLIO</span>
                    </div>

                    <!-- Editorial Serif Headline (calibrated line height and tracking) -->
                    <h1 class="font-serif-display text-3xl sm:text-4xl lg:text-[52px] xl:text-[56px] font-normal text-slate-900 leading-[1.1] tracking-[-0.03em] max-w-3xl">
                        Software engineered to scale, perform, and endure
                    </h1>

                    <!-- Concise Supporting Subtitle -->
                    <p class="mt-4 text-base sm:text-lg text-slate-600 font-sans leading-relaxed max-w-2xl">
                        Explore our track record of production-grade SaaS platforms, modern web applications, high-performance mobile apps, and automated cloud systems engineered for founders and tech leaders worldwide.
                    </p>

                    <!-- Trust Strip (compact single-row layout) -->
                    <div class="mt-6 flex flex-wrap items-center justify-center gap-4 sm:gap-8 text-xs sm:text-sm text-slate-600 font-sans">
                        <div class="flex items-center gap-1.5">
                            <div class="flex text-amber-400">
                                @for($i = 0; $i < 5; $i++)
                                    <svg class="size-3.5 sm:size-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            <span class="font-semibold text-slate-900">5.0 Star Verified Reviews</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <svg class="size-3.5 sm:size-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="font-medium text-slate-700">100% On-Time Delivery</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <svg class="size-3.5 sm:size-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="font-medium text-slate-700">Enterprise Security &amp; Speed</span>
                        </div>
                    </div>

                    <!-- Filter Tabs Directly Connected to Grid -->
                    <div class="mt-8 flex flex-wrap items-center justify-center gap-2 sm:gap-2.5 font-sans">
                        <button type="button"
                                @click="activeFilter = 'all'"
                                :class="activeFilter === 'all' ? 'bg-black text-white shadow-sm' : 'bg-slate-100 text-slate-700 hover:bg-slate-200 hover:text-black'"
                                class="px-4 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all flex items-center gap-1.5">
                            <span>All Projects</span>
                            <span class="text-[11px] px-1.5 py-0.2 rounded-full"
                                  :class="activeFilter === 'all' ? 'bg-white/20 text-white' : 'bg-slate-200 text-slate-600'">
                                {{ $countAll }}
                            </span>
                        </button>

                        <button type="button"
                                @click="activeFilter = 'saas'"
                                :class="activeFilter === 'saas' ? 'bg-black text-white shadow-sm' : 'bg-slate-100 text-slate-700 hover:bg-slate-200 hover:text-black'"
                                class="px-4 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all flex items-center gap-1.5">
                            <span>SaaS Platforms</span>
                            <span class="text-[11px] px-1.5 py-0.2 rounded-full"
                                  :class="activeFilter === 'saas' ? 'bg-white/20 text-white' : 'bg-slate-200 text-slate-600'">
                                {{ $countSaas }}
                            </span>
                        </button>

                        <button type="button"
                                @click="activeFilter = 'mobile'"
                                :class="activeFilter === 'mobile' ? 'bg-black text-white shadow-sm' : 'bg-slate-100 text-slate-700 hover:bg-slate-200 hover:text-black'"
                                class="px-4 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all flex items-center gap-1.5">
                            <span>Mobile Apps</span>
                            <span class="text-[11px] px-1.5 py-0.2 rounded-full"
                                  :class="activeFilter === 'mobile' ? 'bg-white/20 text-white' : 'bg-slate-200 text-slate-600'">
                                {{ $countMobile }}
                            </span>
                        </button>

                        <button type="button"
                                @click="activeFilter = 'ai'"
                                :class="activeFilter === 'ai' ? 'bg-black text-white shadow-sm' : 'bg-slate-100 text-slate-700 hover:bg-slate-200 hover:text-black'"
                                class="px-4 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all flex items-center gap-1.5">
                            <span>AI &amp; Automation</span>
                            <span class="text-[11px] px-1.5 py-0.2 rounded-full"
                                  :class="activeFilter === 'ai' ? 'bg-white/20 text-white' : 'bg-slate-200 text-slate-600'">
                                {{ $countAi }}
                            </span>
                        </button>

                        <button type="button"
                                @click="activeFilter = 'web'"
                                :class="activeFilter === 'web' ? 'bg-black text-white shadow-sm' : 'bg-slate-100 text-slate-700 hover:bg-slate-200 hover:text-black'"
                                class="px-4 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all flex items-center gap-1.5">
                            <span>Web &amp; E-Commerce</span>
                            <span class="text-[11px] px-1.5 py-0.2 rounded-full"
                                  :class="activeFilter === 'web' ? 'bg-white/20 text-white' : 'bg-slate-200 text-slate-600'">
                                {{ $countWeb }}
                            </span>
                        </button>
                    </div>

                </div>
            </div>
        </section>

        <!-- =====================================================================
             2. PROJECTS SHOWCASE GRID (IMMEDIATELY BELOW HERO WITH ZERO DEAD SPACE)
             ===================================================================== -->
        <section class="relative w-full bg-[#FAFAFA] pt-10 pb-16 sm:pt-14 sm:pb-20 lg:pb-24 border-b border-[#E5E7EB]">
            <div class="max-w-[1306px] mx-auto px-6 sm:px-10 lg:px-[78px]">

                <!-- Projects Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10">
                    @foreach($combinedProjects as $project)
                        <article x-show="activeFilter === 'all' || activeFilter === '{{ $project['category_slug'] }}'"
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 scale-95"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 class="group flex flex-col justify-between rounded-3xl bg-white border border-[#E5E7EB] shadow-[0_2px_8px_rgba(0,0,0,0.03)] hover:shadow-card hover:border-slate-300 transition-all duration-300 overflow-hidden">

                            <!-- Top: Browser Chrome Window Bar & Image Preview -->
                            <div>
                                <div class="px-4 py-3 bg-slate-50 border-b border-slate-200/80 flex items-center justify-between">
                                    <div class="flex items-center gap-1.5">
                                        <span class="size-2.5 rounded-full bg-rose-400"></span>
                                        <span class="size-2.5 rounded-full bg-amber-400"></span>
                                        <span class="size-2.5 rounded-full bg-emerald-400"></span>
                                    </div>
                                    <div class="text-[11px] font-mono text-slate-500 bg-white px-2.5 py-0.5 rounded-md border border-slate-200/70 truncate max-w-[220px]">
                                        https://{{ $project['domain'] }}
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span class="size-2 rounded-full bg-emerald-500 animate-pulse" title="System Live"></span>
                                        <span class="text-[10px] font-medium text-emerald-700 hidden sm:inline">Live</span>
                                    </div>
                                </div>

                                <div class="relative bg-slate-50/60 p-6 sm:p-8 flex items-center justify-center min-h-[220px] sm:min-h-[260px] overflow-hidden border-b border-slate-100">
                                    @if(!empty($project['image']))
                                        <img src="{{ $project['image'] }}"
                                             alt="{{ $project['name'] }}"
                                             class="max-w-full max-h-[240px] w-auto h-auto object-contain group-hover:scale-[1.03] transition-transform duration-300 ease-out drop-shadow-sm"
                                             loading="lazy" />
                                    @else
                                        <div class="w-full h-full min-h-[180px] p-6 rounded-2xl bg-gradient-to-br from-slate-900 to-slate-800 text-white flex flex-col justify-between">
                                            <span class="text-xs font-semibold text-emerald-400 uppercase tracking-wider">{{ $project['category'] }}</span>
                                            <h3 class="font-serif-display text-xl sm:text-2xl font-normal">{{ $project['name'] }}</h3>
                                            <span class="text-xs text-slate-400">{{ $project['highlight'] }}</span>
                                        </div>
                                    @endif
                                </div>

                                <!-- Card Content Body -->
                                <div class="p-6 sm:p-8">
                                    <!-- Category Pill & Architectural Highlight -->
                                    <div class="flex flex-wrap items-center justify-between gap-2 mb-3">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-slate-100 text-slate-800 text-xs font-semibold tracking-wide font-sans">
                                            {{ $project['category'] }}
                                        </span>
                                        <span class="text-xs font-medium text-emerald-700 bg-emerald-50 px-2.5 py-0.5 rounded-md border border-emerald-200/60">
                                            {{ $project['highlight'] }}
                                        </span>
                                    </div>

                                    <!-- Project Title -->
                                    <h3 class="font-serif-display text-2xl font-normal text-slate-900 leading-snug group-hover:text-black transition-colors">
                                        <a href="{{ $project['link'] }}" target="_blank" rel="noopener noreferrer" class="hover:underline">
                                            {{ $project['name'] }}
                                        </a>
                                    </h3>

                                    <!-- Description -->
                                    <p class="mt-3 text-sm sm:text-[15px] text-slate-600 font-sans leading-relaxed">
                                        {{ $project['description'] }}
                                    </p>

                                    <!-- Technology Badges -->
                                    <div class="mt-5 flex flex-wrap gap-1.5 font-sans">
                                        @foreach($project['technologies'] as $tech)
                                            <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-50 border border-slate-200/80 text-slate-700">
                                                {{ $tech }}
                                            </span>
                                        @endforeach
                                    </div>

                                    <!-- Authentic Testimonial Quote -->
                                    @if(!empty($project['quote']))
                                        <div class="mt-6 pt-5 border-t border-slate-100">
                                            <blockquote class="text-[13.5px] sm:text-sm text-slate-700 font-sans italic leading-relaxed">
                                                &ldquo;{{ $project['quote'] }}&rdquo;
                                            </blockquote>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <!-- Card Footer: Client Info & External Link -->
                            <div class="px-6 py-4 sm:px-8 bg-slate-50/60 border-t border-slate-100 flex items-center justify-between font-sans">
                                <div class="flex items-center gap-2.5">
                                    <img src="{{ $project['client_avatar'] }}"
                                         alt="{{ $project['client'] }}"
                                         class="size-7 rounded-full object-cover border border-slate-200"
                                         loading="lazy" />
                                    <div class="text-xs text-slate-700 font-medium">
                                        <span class="text-slate-900 font-semibold">{{ $project['client'] }}</span>
                                        <span class="text-slate-400 hidden sm:inline">&bull; {{ $project['client_company'] }}</span>
                                    </div>
                                </div>

                                <a href="{{ $project['link'] }}"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   class="inline-flex items-center gap-1.5 text-xs sm:text-sm font-semibold text-slate-900 hover:text-black transition-colors group/link">
                                    <span>Visit Project</span>
                                    <svg class="size-3.5 transition-transform group-hover/link:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </a>
                            </div>

                        </article>
                    @endforeach
                </div>

            </div>
        </section>

        <!-- =====================================================================
             3. CLIENT TESTIMONIALS & REVIEWS SECTION
             ===================================================================== -->
        @php
            $fallbackReviews = [
                (object)[
                    'client_name' => 'Joseph Edmonds',
                    'company_name' => 'Edmonds Ecommerce',
                    'job_title' => 'Bespoke Laravel Architecture',
                    'client_avatar' => asset('images/avatar.png'),
                    'review' => 'Ravi did some great work for us pushing forwards an internal project with exceptional code quality and speed.',
                    'rating' => 5,
                ],
                (object)[
                    'client_name' => 'Vincenzo Lufino',
                    'company_name' => 'BtoTree',
                    'job_title' => 'Full-Stack SaaS Platform',
                    'client_avatar' => asset('images/avatar.png'),
                    'review' => 'Ravi is a great guy and developer! Reliable, communicative, and delivers high-performance code. Hope to work together again!',
                    'rating' => 5,
                ],
                (object)[
                    'client_name' => 'Scott Yewell',
                    'company_name' => 'Purpose Built Software, Inc',
                    'job_title' => 'AI Semantic Search & Backend',
                    'client_avatar' => asset('images/avatar.png'),
                    'review' => 'Ravi did an excellent job on a complex project. He has great communication, and works really hard. Highly recommended.',
                    'rating' => 5,
                ],
            ];

            $reviewsToShow = (isset($featuredReviews) && $featuredReviews->count() > 0) ? $featuredReviews : collect($fallbackReviews);
        @endphp

        <section class="relative w-full bg-white py-16 sm:py-20 lg:py-24 border-b border-[#E5E7EB]">
            <div class="max-w-[1306px] mx-auto px-6 sm:px-10 lg:px-[78px]">

                <div class="max-w-3xl mb-12 sm:mb-16">
                    <span class="text-xs sm:text-[13px] font-semibold uppercase tracking-[0.14em] text-slate-500 font-sans">
                        Client Endorsements
                    </span>
                    <h2 class="mt-2 font-serif-display text-3xl sm:text-4xl lg:text-[44px] font-normal text-slate-900 leading-[1.12] tracking-[-0.025em]">
                        Verified feedback from engineering partners
                    </h2>
                    <p class="mt-4 text-base sm:text-lg text-slate-600 font-sans leading-relaxed">
                        Read what founders and technology leaders say about our communication, code quality, and technical execution.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                    @foreach($reviewsToShow as $review)
                        <div class="rounded-2xl bg-white p-7 sm:p-8 border border-[#E5E7EB] shadow-[0_1px_3px_rgba(0,0,0,0.03)] hover:shadow-card hover:border-slate-300 transition-all duration-200 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between gap-3 mb-5">
                                    <span class="inline-flex items-center px-3 py-1 rounded-md bg-slate-50 border border-slate-200/80 text-xs font-semibold text-slate-800 font-sans">
                                        {{ $review->job_title ?? 'Verified Client Review' }}
                                    </span>
                                    <div class="flex items-center gap-1 text-amber-400" aria-label="{{ $review->rating ?? 5 }} stars">
                                        @for($i = 0; $i < ($review->rating ?? 5); $i++)
                                            <svg class="size-4 fill-current" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                        @endfor
                                    </div>
                                </div>

                                <blockquote class="text-[15px] sm:text-[15.5px] text-slate-800 font-sans leading-relaxed italic">
                                    &ldquo;{{ trim($review->review) }}&rdquo;
                                </blockquote>
                            </div>

                            <div class="mt-6 pt-5 border-t border-slate-100 flex items-center gap-3 font-sans">
                                <img src="{{ $review->client_avatar ?? asset('images/avatar.png') }}"
                                     alt="{{ $review->client_name }}"
                                     class="size-10 rounded-full object-cover border border-slate-200"
                                     loading="lazy" />
                                <div>
                                    <div class="text-sm font-semibold text-slate-900">
                                        {{ $review->client_name }}
                                    </div>
                                    <div class="text-xs text-slate-500">
                                        {{ $review->company_name }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>

        <!-- =====================================================================
             4. CLIENT CARE, SCOPING & SUPPORT CENTER
             ===================================================================== -->
        <section class="relative w-full bg-[#FAFAFA] py-16 sm:py-20 lg:py-24 border-b border-[#E5E7EB]">
            <div class="max-w-[1306px] mx-auto px-6 sm:px-10 lg:px-[78px]">

                <div class="max-w-3xl mx-auto text-center mb-12 sm:mb-16">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-100 border border-slate-200/90 text-xs font-semibold text-slate-800 tracking-wide mb-4">
                        <span class="size-2 rounded-full bg-sky-500"></span>
                        <span>DEDICATED CLIENT CARE</span>
                    </div>
                    <h2 class="font-serif-display text-3xl sm:text-4xl lg:text-[42px] font-normal text-slate-900 leading-[1.12] tracking-[-0.025em]">
                        Engineering support &amp; consultation
                    </h2>
                    <p class="mt-4 text-base sm:text-lg text-slate-600 font-sans leading-relaxed max-w-xl mx-auto">
                        Whether you are an active client needing technical assistance or planning a new project architecture, our team is here to support you.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 max-w-5xl mx-auto">

                    <!-- 1. Knowledge Base & Docs Card -->
                    <div class="rounded-3xl bg-white border border-[#E5E7EB] p-8 sm:p-9 shadow-[0_2px_8px_rgba(0,0,0,0.03)] hover:shadow-card hover:border-slate-300 transition-all duration-200 flex flex-col justify-between text-left group">
                        <div>
                            <div class="size-12 rounded-2xl bg-sky-50 border border-sky-100 flex items-center justify-center text-sky-600 mb-6 group-hover:scale-105 transition-transform">
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <h3 class="font-serif-display text-2xl font-normal text-slate-900">Knowledge Base</h3>
                            <p class="mt-3 text-sm text-slate-600 font-sans leading-relaxed">
                                Browse our engineering playbooks, architecture guides, and technical documentation to get up to speed quickly.
                            </p>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-100 font-sans">
                            <a href="{{ route('services') }}"
                               class="inline-flex items-center gap-2 text-sm font-semibold text-sky-700 hover:text-sky-900 transition-colors group/link">
                                <span>Explore Services &amp; Docs</span>
                                <svg class="size-3.5 transition-transform group-hover/link:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- 2. Submit a Ticket / Project Request Card -->
                    <div class="rounded-3xl bg-white border border-[#E5E7EB] p-8 sm:p-9 shadow-[0_2px_8px_rgba(0,0,0,0.03)] hover:shadow-card hover:border-slate-300 transition-all duration-200 flex flex-col justify-between text-left group">
                        <div>
                            <div class="size-12 rounded-2xl bg-emerald-50 border border-emerald-100 flex items-center justify-center text-emerald-600 mb-6 group-hover:scale-105 transition-transform">
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <h3 class="font-serif-display text-2xl font-normal text-slate-900">Submit a Ticket</h3>
                            <p class="mt-3 text-sm text-slate-600 font-sans leading-relaxed">
                                Need help or want to scope a new development ticket? Submit your request and our lead engineering team will respond promptly.
                            </p>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-100 font-sans">
                            <a href="{{ route('contact-us') }}"
                               class="inline-flex items-center gap-2 text-sm font-semibold text-emerald-700 hover:text-emerald-900 transition-colors group/link">
                                <span>Create Ticket</span>
                                <svg class="size-3.5 transition-transform group-hover/link:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- 3. Direct Contact Support Card -->
                    <div class="rounded-3xl bg-white border border-[#E5E7EB] p-8 sm:p-9 shadow-[0_2px_8px_rgba(0,0,0,0.03)] hover:shadow-card hover:border-slate-300 transition-all duration-200 flex flex-col justify-between text-left group">
                        <div>
                            <div class="size-12 rounded-2xl bg-amber-50 border border-amber-100 flex items-center justify-center text-amber-600 mb-6 group-hover:scale-105 transition-transform">
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                            <h3 class="font-serif-display text-2xl font-normal text-slate-900">Contact Support</h3>
                            <p class="mt-3 text-sm text-slate-600 font-sans leading-relaxed">
                                Reach out directly for urgent technical escalations, code reviews, infrastructure audits, or custom enterprise requirements.
                            </p>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-100 font-sans">
                            <a href="{{ route('contact-us') }}"
                               class="inline-flex items-center gap-2 text-sm font-semibold text-amber-700 hover:text-amber-900 transition-colors group/link">
                                <span>Contact Us</span>
                                <svg class="size-3.5 transition-transform group-hover/link:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- =====================================================================
             5. CONVERSION CALL TO ACTION BANNER
             ===================================================================== -->
        @include('home.partials.get-app')

    </main>
</x-landing-layout>
