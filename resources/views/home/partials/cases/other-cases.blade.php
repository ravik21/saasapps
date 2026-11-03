@php
    // Use the passed collection of remaining reviews, with fallback if needed
    $reviewsList = isset($otherCases) && $otherCases->count() > 0 ? $otherCases : (isset($allReviews) ? $allReviews->take(2) : collect());
@endphp

<!-- SECTION: OTHER CUSTOMER STORIES (SCRIBE EDITORIAL CARDS) -->
<section class="relative w-full bg-white py-20 sm:py-24 lg:py-28 border-b border-[#E5E7EB]">
    <div class="max-w-[1306px] mx-auto px-6 sm:px-10 lg:px-[78px]">

        <!-- Section Header -->
        <div class="max-w-3xl mb-14 sm:mb-16">
            <div class="text-xs sm:text-[13px] font-semibold uppercase tracking-[0.14em] text-slate-500 mb-3 font-sans">
                Verified Reviews
            </div>
            <h2 class="font-serif-display text-3xl sm:text-4xl lg:text-[44px] font-normal text-slate-900 leading-[1.12] tracking-[-0.025em]">
                What other customers say
            </h2>
            <p class="mt-4 text-base sm:text-lg text-slate-600 font-sans leading-relaxed">
                Direct feedback from founders and engineering executives who rely on our team for mission-critical software.
            </p>
        </div>

        <!-- Responsive 2-Column Desktop Grid / 1-Column Mobile -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
            @foreach($reviewsList as $review)
                <div class="group rounded-2xl bg-white p-7 sm:p-8 border border-[#E5E7EB] shadow-[0_1px_3px_rgba(0,0,0,0.03)] hover:shadow-card hover:border-slate-300 transition-all duration-200 flex flex-col justify-between">
                    <div>
                        <!-- Header: Job Scope / Project Tag + Stars -->
                        <div class="flex flex-wrap items-center justify-between gap-3 mb-5">
                            @if(!empty($review->job_title))
                                <span class="inline-flex items-center px-3 py-1 rounded-md bg-slate-50 border border-slate-200/80 text-xs font-semibold text-slate-800 font-sans">
                                    {{ $review->job_title }}
                                </span>
                            @endif

                            <!-- 5 Stars -->
                            <div class="flex items-center gap-1 text-amber-400" aria-label="{{ $review->rating ?? 5 }} stars">
                                @for($i = 0; $i < ($review->rating ?? 5); $i++)
                                    <svg class="size-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                        </div>

                        <!-- Quotation Text -->
                        <blockquote class="text-[15.5px] sm:text-[16px] text-slate-800 font-sans leading-relaxed italic">
                            &ldquo;{{ trim($review->review) }}&rdquo;
                        </blockquote>
                    </div>

                    <!-- Client Profile Signature Footer -->
                    <div class="mt-8 pt-6 border-t border-slate-100 flex items-center justify-between font-sans">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset(ltrim($review->client_avatar ?? 'images/avatar.png', '/')) }}"
                                 alt="{{ $review->client_name }}"
                                 class="size-11 rounded-full object-cover border border-slate-200"
                                 loading="lazy" />
                            <div>
                                <div class="text-[14.5px] font-semibold text-slate-900">
                                    {{ $review->client_name }}
                                </div>
                                @if(!empty($review->company_name))
                                    <div class="text-xs text-slate-500">
                                        {{ $review->company_name }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="inline-flex items-center gap-1.5 text-xs font-medium text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded-full border border-emerald-200/60">
                            <svg class="size-3.5 fill-current" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Verified Client</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
