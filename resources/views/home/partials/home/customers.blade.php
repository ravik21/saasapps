@php
    $reviews = \App\Models\ClientReview::orderBy('rating', 'desc')->orderBy('created_at', 'desc')->get();
    $featured = $reviews->first();
@endphp

<!-- SECTION 9: TESTIMONIALS WALL (LIGHT PAPER BACKGROUND) -->
<section class="relative w-full bg-paper py-20 md:py-28 overflow-hidden border-t border-slate-200/80">
    <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center mb-16">
            <h2 class="font-serif-display text-3xl sm:text-4xl md:text-5xl font-semibold text-ink leading-tight tracking-tight">
                3 million people can't imagine work without SaaSApps.
            </h2>
        </div>

        <!-- Masonry Grid of Testimonials -->
        @if($reviews->isNotEmpty())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                @foreach($reviews as $rev)
                    <div class="p-7 rounded-3xl bg-white border border-slate-200/90 shadow-subtle flex flex-col justify-between">
                        <div>
                            <!-- Star Rating -->
                            <div class="flex items-center gap-1 text-amber-400 mb-4">
                                @for($i = 0; $i < ($rev->rating ?? 5); $i++)
                                    <svg class="size-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            <!-- Quote Text -->
                            <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                                &ldquo;{{ $rev->review }}&rdquo;
                            </p>
                        </div>

                        <!-- Author Info -->
                        <div class="mt-6 pt-4 border-t border-slate-100 flex items-center gap-3">
                            <img src="{{ $rev->client_avatar }}" alt="{{ $rev->client_name }}" class="size-9 rounded-full object-cover border border-slate-200">
                            <div>
                                <h4 class="text-xs font-semibold text-ink">{{ $rev->client_name }}</h4>
                                <p class="text-[11px] text-slate-400">{{ $rev->job_title ?? 'Verified Client' }} &bull; {{ $rev->company_name }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

<!-- SECTION 10: DARK PROMINENT QUOTE SLIDER BANNER (SCRIBE EXACT LAYOUT) -->
<section class="relative w-full bg-charcoal text-white py-24 md:py-32 overflow-hidden border-t border-slate-800"
         x-data="{
             activeSlide: 0,
             slides: [
                 {
                     quote: '“We no longer have to dread doing process documentation.”',
                     author: 'Scott Yewell',
                     role: 'VP of Engineering',
                     company: 'Purpose Built Software, Inc.'
                 },
                 {
                     quote: '“Capturing workflows in SaaSApps cut our onboarding time from three weeks down to four days.”',
                     author: 'Vincenzo Lufino',
                     role: 'Chief Technology Officer',
                     company: 'BtoTree'
                 },
                 {
                     quote: '“Our support ticket deflection rate jumped 42% in our very first quarter.”',
                     author: 'Joseph Edmonds',
                     role: 'Founder & CEO',
                     company: 'Edmonds Ecommerce'
                 }
             ]
         }">
    <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Large Serif Quotation -->
            <template x-for="(s, index) in slides" :key="index">
                <div x-show="activeSlide === index"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-y-2"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <blockquote class="font-serif-display text-3xl sm:text-4xl md:text-5xl font-semibold text-white leading-[1.2] tracking-tight">
                        <span x-text="s.quote"></span>
                    </blockquote>
                    <div class="mt-8">
                        <h4 class="text-sm font-semibold text-slate-200" x-text="s.author"></h4>
                        <p class="text-xs text-slate-400 mt-1">
                            <span x-text="s.role"></span> &bull; <span class="font-semibold text-slate-300" x-text="s.company"></span>
                        </p>
                    </div>
                </div>
            </template>

            <!-- 3 Horizontal Progress Slider Indicators (Scribe Style) -->
            <div class="mt-14 flex items-center justify-center gap-3">
                <template x-for="(s, index) in slides" :key="'indicator-' + index">
                    <button type="button"
                            @click="activeSlide = index"
                            class="h-1 rounded-full transition-all duration-300 cursor-pointer"
                            :class="activeSlide === index ? 'w-16 bg-white' : 'w-10 bg-slate-700 hover:bg-slate-600'"
                            :aria-label="'Go to quote ' + (index + 1)">
                    </button>
                </template>
            </div>
        </div>
    </div>
</section>
