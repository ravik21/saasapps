@php
    // Merge real database projects with authentic client reviews
    $casesData = [
        [
            'title' => 'TrustPatrick — B2B Review & Verification Engine',
            'category' => 'SaaS & Identity Verification',
            'description' => 'A robust multi-tenant platform engineered with automated fraud prevention, real-time audit logging, and custom verification workflows for business reviews.',
            'image' => asset('images/landing/projects/trustpatrick.png'),
            'link' => 'https://trustpatrick.com',
            'technologies' => ['Laravel', 'Vue.js', 'Tailwind CSS', 'MySQL', 'Redis'],
            'client_name' => 'Joseph Edmonds',
            'client_company' => 'Owner at Edmonds Ecommerce',
            'client_avatar' => asset('images/avatar.png'),
            'review' => 'Ravi did some great work for us pushing forwards an internal project with exceptional code quality and speed.',
            'job_title' => 'Customisations and Improvements to Bespoke In House Laravel Business Application',
            'rating' => 5,
            'video_link' => null,
        ],
        [
            'title' => 'ThriveCoach — Interactive Coaching & Client Portal',
            'category' => 'Health & Wellness Platform',
            'description' => 'An end-to-end coaching platform featuring automated appointment scheduling, private real-time messaging, client progress tracking, and Stripe billing.',
            'image' => asset('images/landing/projects/thrivecoach.png'),
            'link' => 'https://thrivecoach.app',
            'technologies' => ['Laravel', 'React', 'Tailwind CSS', 'Stripe', 'AWS'],
            'client_name' => 'Vincenzo Lufino',
            'client_company' => 'Owner at BtoTree',
            'client_avatar' => asset('images/avatar.png'),
            'review' => 'Ravi is a great guy and developer! Reliable, communicative, and delivers high-performance code. Hope to work together again!',
            'job_title' => 'Laravel PHP developers for B2B Network - Long Term',
            'rating' => 5,
            'video_link' => null,
        ],
        [
            'title' => 'Qurater — AI Content & Knowledge Curation Engine',
            'category' => 'AI & Knowledge Management',
            'description' => 'An intelligent semantic research and content curation engine powered by LLMs, automated document extraction, multi-source ingestion, and automated categorization.',
            'image' => asset('images/landing/projects/qurater.png'),
            'link' => 'https://qurater.io',
            'technologies' => ['Python', 'Laravel', 'OpenAI', 'PostgreSQL', 'Docker'],
            'client_name' => 'Scott Yewell',
            'client_company' => 'Purpose Built Software, Inc',
            'client_avatar' => asset('images/avatar.png'),
            'review' => 'Ravi did an excellent job on a complex project. He has great communication, and works really hard. Highly recommended.',
            'job_title' => 'Awesome Backend Laravel Developer',
            'rating' => 5,
            'video_link' => null,
        ],
        [
            'title' => 'Prescribery — Telemedicine & Digital Prescriptions',
            'category' => 'Healthcare & Telemedicine',
            'description' => 'A HIPAA-aligned digital prescription and telemedicine workflow application connecting licensed healthcare practitioners with local pharmacy networks seamlessly.',
            'image' => asset('images/landing/projects/prescribery.png'),
            'link' => 'https://prescribery.com',
            'technologies' => ['Laravel', 'Vue.js', 'REST APIs', 'MySQL', 'Docker'],
            'client_name' => 'Mikael Westöö',
            'client_company' => 'CEO & Founder at Svensk e-identitet AB',
            'client_avatar' => asset('images/avatar.png'),
            'review' => 'Ravi is a brilliant developer! Solved challenging technical obstacles with elegant architecture and rapid execution.',
            'job_title' => 'PHP Backend Developer',
            'rating' => 5,
            'video_link' => null,
        ],
    ];
@endphp

<!-- SECTION: FEATURED CASE STUDIES SHOWCASE -->
<section class="relative w-full bg-[#FAFAFA] py-16 sm:py-20 lg:py-24 border-b border-[#E5E7EB]">
    <div class="max-w-[1306px] mx-auto px-6 sm:px-10 lg:px-[78px]">
        
        <div class="space-y-12 sm:space-y-16 lg:space-y-20">
            @foreach($casesData as $index => $case)
                @php
                    $isReversed = ($index % 2 === 1);
                @endphp

                <!-- Case Study Card -->
                <article class="group rounded-3xl bg-white border border-[#E5E7EB] shadow-[0_2px_8px_rgba(0,0,0,0.03)] hover:shadow-card hover:border-slate-300 transition-all duration-300 overflow-hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-12 items-stretch">

                        <!-- Column A: Project Visual (7 cols) -->
                        <div class="lg:col-span-7 relative bg-slate-50/80 overflow-hidden flex items-center justify-center min-h-[260px] sm:min-h-[340px] lg:min-h-[440px] p-6 sm:p-10 border-b lg:border-b-0 {{ $isReversed ? 'lg:order-2 lg:border-l border-[#E5E7EB]' : 'lg:order-1 lg:border-r border-[#E5E7EB]' }}">
                            @if(!empty($case['image']))
                                <img src="{{ $case['image'] }}"
                                     alt="{{ $case['title'] }}"
                                     class="max-w-full max-h-[320px] sm:max-h-[380px] w-auto h-auto object-contain group-hover:scale-[1.03] transition-transform duration-300 ease-out drop-shadow-xs"
                                     loading="lazy" />
                            @else
                                <!-- Designed Neutral Placeholder when image is unavailable -->
                                <div class="w-full h-full p-8 sm:p-12 flex flex-col justify-between bg-gradient-to-br from-slate-900 to-slate-800 text-white min-h-[320px]">
                                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-xs font-semibold tracking-wider text-slate-300 uppercase">
                                        {{ $case['category'] }}
                                    </div>
                                    <div>
                                        <h3 class="font-serif-display text-2xl sm:text-3xl font-normal text-white">
                                            {{ $case['title'] }}
                                        </h3>
                                        <p class="mt-2 text-sm text-slate-300 line-clamp-2">
                                            {{ $case['description'] }}
                                        </p>
                                    </div>
                                </div>
                            @endif

                            <!-- Only show video play button if a verified video link exists -->
                            @if(!empty($case['video_link']))
                                <button type="button"
                                        class="video-trigger absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 size-16 rounded-full bg-white/95 text-slate-900 shadow-xl flex items-center justify-center hover:scale-110 transition-transform focus:outline-none"
                                        data-src="{{ $case['video_link'] }}"
                                        aria-label="Play project video">
                                    <svg class="size-6 ml-0.5 fill-current" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </button>
                            @endif
                        </div>

                        <!-- Column B: Project Details & Client Testimonial (5 cols) -->
                        <div class="lg:col-span-5 p-6 sm:p-8 lg:p-10 flex flex-col justify-between bg-white {{ $isReversed ? 'lg:order-1' : 'lg:order-2' }}">
                            <div>
                                <!-- Category & Meta Pill -->
                                <div class="flex flex-wrap items-center gap-2 mb-4">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full bg-slate-100 text-slate-800 text-xs font-semibold tracking-wide font-sans">
                                        {{ $case['category'] }}
                                    </span>
                                </div>

                                <!-- Project Title -->
                                <h2 class="font-serif-display text-2xl sm:text-3xl font-normal text-slate-900 leading-tight tracking-tight">
                                    {{ $case['title'] }}
                                </h2>

                                <!-- Description -->
                                <p class="mt-3.5 text-sm sm:text-[15px] text-slate-600 font-sans leading-relaxed">
                                    {{ $case['description'] }}
                                </p>

                                <!-- Technology Stack Tags -->
                                <div class="mt-5 flex flex-wrap gap-1.5 font-sans">
                                    @foreach($case['technologies'] as $tech)
                                        <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-50 border border-slate-200/80 text-slate-700">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                </div>

                                <!-- Customer Testimonial Quotation Box -->
                                <div class="mt-7 pt-6 border-t border-slate-100 font-sans">
                                    <!-- 5-Star Rating -->
                                    <div class="flex items-center gap-1 text-amber-400 mb-3" aria-label="5 stars rating">
                                        @for($s = 0; $s < 5; $s++)
                                            <svg class="size-4 fill-current" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                        @endfor
                                    </div>

                                    <!-- Quote -->
                                    <blockquote class="text-sm sm:text-[14.5px] text-slate-800 italic leading-relaxed">
                                        &ldquo;{{ $case['review'] }}&rdquo;
                                    </blockquote>

                                    <!-- Client Signature -->
                                    <div class="mt-4 flex items-center gap-3">
                                        @if(!empty($case['client_avatar']))
                                            <img src="{{ $case['client_avatar'] }}"
                                                 alt="{{ $case['client_name'] }}"
                                                 class="size-10 rounded-full object-cover border border-slate-200"
                                                 loading="lazy" />
                                        @else
                                            <div class="size-10 rounded-full bg-slate-900 text-white font-bold flex items-center justify-center text-xs">
                                                {{ substr($case['client_name'], 0, 1) }}
                                            </div>
                                        @endif
                                        <div>
                                            <div class="text-sm font-semibold text-slate-900">
                                                {{ $case['client_name'] }}
                                            </div>
                                            <div class="text-xs text-slate-500">
                                                {{ $case['client_company'] }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Bottom CTA Button -->
                            <div class="mt-8 pt-6 border-t border-slate-100 flex items-center justify-between font-sans">
                                <a href="{{ $case['link'] }}"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   class="h-[42px] px-6 rounded-full bg-black text-white hover:bg-neutral-800 text-[14px] font-semibold inline-flex items-center gap-2 transition-all shadow-sm hover:scale-[1.01] active:scale-[0.99]">
                                    <span>View Case Study</span>
                                    <svg class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </a>

                                <span class="text-xs text-slate-400 font-medium">Verified Case</span>
                            </div>
                        </div>

                    </div>
                </article>
            @endforeach
        </div>

    </div>
</section>
