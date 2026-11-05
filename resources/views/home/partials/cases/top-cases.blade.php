<!-- SECTION: FEATURED CASE STUDIES SHOWCASE (DYNAMIC DATABASE ELOQUENT) -->
<section class="relative w-full bg-[#FAFAFA] py-16 sm:py-20 lg:py-24 border-b border-[#E5E7EB]">
    <div class="max-w-[1306px] mx-auto px-6 sm:px-10 lg:px-[78px]">
        
        <div class="space-y-12 sm:space-y-16 lg:space-y-20">
            @forelse($projects as $index => $case)
                @php
                    $isReversed = ($index % 2 === 1);
                    $imageUrl = $case->image_url;
                    $techTags = $case->technologies;
                @endphp

                <!-- Case Study Card -->
                <article class="group rounded-3xl bg-white border border-[#E5E7EB] shadow-[0_2px_8px_rgba(0,0,0,0.03)] hover:shadow-card hover:border-slate-300 transition-all duration-300 overflow-hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-12 items-stretch">

                        <!-- Column A: Project Visual (7 cols) -->
                        <div class="lg:col-span-7 relative bg-slate-50/80 overflow-hidden flex items-center justify-center min-h-[260px] sm:min-h-[340px] lg:min-h-[440px] p-6 sm:p-10 border-b lg:border-b-0 {{ $isReversed ? 'lg:order-2 lg:border-l border-[#E5E7EB]' : 'lg:order-1 lg:border-r border-[#E5E7EB]' }}">
                            @if(!empty($imageUrl))
                                <img src="{{ $imageUrl }}"
                                     alt="{{ $case->title }}"
                                     class="max-w-full max-h-[320px] sm:max-h-[380px] w-auto h-auto object-contain group-hover:scale-[1.03] transition-transform duration-300 ease-out drop-shadow-xs"
                                     loading="lazy"
                                     onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');" />
                                
                                <!-- Neutral Fallback if image fails to load -->
                                <div class="hidden w-full h-full p-8 sm:p-12 flex flex-col justify-between bg-gradient-to-br from-slate-900 to-slate-800 text-white min-h-[320px] rounded-2xl">
                                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-xs font-semibold tracking-wider text-slate-300 uppercase">
                                        {{ $case->category ?: 'Case Study' }}
                                    </div>
                                    <div>
                                        <h3 class="font-serif-display text-2xl sm:text-3xl font-normal text-white">
                                            {{ $case->title }}
                                        </h3>
                                        @if(!empty($case->description))
                                            <p class="mt-2 text-sm text-slate-300 line-clamp-2">
                                                {{ strip_tags($case->description) }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            @else
                                <!-- Designed Neutral Placeholder when image is unavailable -->
                                <div class="w-full h-full p-8 sm:p-12 flex flex-col justify-between bg-gradient-to-br from-slate-900 to-slate-800 text-white min-h-[320px] rounded-2xl">
                                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-xs font-semibold tracking-wider text-slate-300 uppercase">
                                        {{ $case->category ?: 'Case Study' }}
                                    </div>
                                    <div>
                                        <h3 class="font-serif-display text-2xl sm:text-3xl font-normal text-white">
                                            {{ $case->title }}
                                        </h3>
                                        @if(!empty($case->description))
                                            <p class="mt-2 text-sm text-slate-300 line-clamp-2">
                                                {{ strip_tags($case->description) }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            <!-- Only show video play button if a verified video link exists -->
                            @if(!empty($case->video_link))
                                <button type="button"
                                        class="video-trigger absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 size-16 rounded-full bg-white/95 text-slate-900 shadow-xl flex items-center justify-center hover:scale-110 transition-transform focus:outline-none"
                                        data-src="{{ $case->video_link }}"
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
                                        {{ $case->category ?: 'SaaS Project' }}
                                    </span>
                                </div>

                                <!-- Project Title -->
                                <h2 class="font-serif-display text-2xl sm:text-3xl font-normal text-slate-900 leading-tight tracking-tight">
                                    {{ $case->title }}
                                </h2>

                                <!-- Description -->
                                @if(!empty($case->description))
                                    <div class="mt-3.5 text-sm sm:text-[15px] text-slate-600 font-sans leading-relaxed">
                                        {{ strip_tags($case->description) }}
                                    </div>
                                @endif

                                <!-- Technology Stack Tags -->
                                @if(!empty($techTags) && count($techTags) > 0)
                                    <div class="mt-5 flex flex-wrap gap-1.5 font-sans">
                                        @foreach($techTags as $tech)
                                            <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-50 border border-slate-200/80 text-slate-700">
                                                {{ $tech }}
                                            </span>
                                        @endforeach
                                    </div>
                                @endif

                                <!-- Customer Testimonial Quotation Box -->
                                @if(!empty($case->review))
                                    <div class="mt-7 pt-6 border-t border-slate-100 font-sans">
                                        <div class="flex items-center justify-between mb-3">
                                            <!-- Star Rating -->
                                            <div class="flex items-center gap-1 text-amber-400" aria-label="{{ $case->rating ?: 5 }} stars rating">
                                                @for($s = 0; $s < ($case->rating ?: 5); $s++)
                                                    <svg class="size-4 fill-current" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                    </svg>
                                                @endfor
                                            </div>

                                            <!-- Verified Review Badge -->
                                            <span class="inline-flex items-center gap-1.5 text-xs font-medium text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded-full border border-emerald-200/60">
                                                <svg class="size-3.5 fill-current" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                </svg>
                                                <span>Verified Review</span>
                                            </span>
                                        </div>

                                        <!-- Quote (No personal client/owner name or company designation displayed) -->
                                        <blockquote class="text-sm sm:text-[14.5px] text-slate-800 italic leading-relaxed">
                                            &ldquo;{{ $case->review }}&rdquo;
                                        </blockquote>
                                    </div>
                                @endif
                            </div>

                            <!-- Bottom CTA Button -->
                            <div class="mt-8 pt-6 border-t border-slate-100 flex items-center justify-between font-sans">
                                @if(!empty($case->link))
                                    <a href="{{ $case->link }}"
                                       target="_blank"
                                       rel="noopener noreferrer"
                                       class="h-[42px] px-6 rounded-full bg-black text-white hover:bg-neutral-800 text-[14px] font-semibold inline-flex items-center gap-2 transition-all shadow-sm hover:scale-[1.01] active:scale-[0.99]">
                                        <span>View Case Study</span>
                                        <svg class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                        </svg>
                                    </a>
                                @else
                                    <span class="text-xs text-slate-400 font-medium">Internal Architecture</span>
                                @endif

                                <span class="text-xs text-slate-400 font-medium">Verified Case</span>
                            </div>
                        </div>

                    </div>
                </article>
            @empty
                <div class="text-center py-16 bg-white rounded-3xl border border-[#E5E7EB] p-8 sm:p-12 shadow-[0_2px_8px_rgba(0,0,0,0.03)]">
                    <h3 class="font-serif-display text-2xl font-normal text-slate-900 mb-2">No Case Studies Published Yet</h3>
                    <p class="text-sm text-slate-500 max-w-md mx-auto">Check back soon for new case studies, architectures, and client achievements.</p>
                </div>
            @endforelse
        </div>

    </div>
</section>
