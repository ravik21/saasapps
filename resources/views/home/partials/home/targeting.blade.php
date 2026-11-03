@php
    $statsConfig = config('landing.stats.strip1', []);
    $items = $statsConfig['items'] ?? [
        ['value' => '12x', 'label' => 'faster than manual documentation'],
        ['value' => '98%', 'label' => 'adoption rate across teams'],
        ['value' => '3.5 hours', 'label' => 'saved per person per week'],
    ];
    $footnote = $statsConfig['footnote'] ?? 'Across verified customer implementations in 2026';
@endphp

<!-- SECTION 5: STATS STRIP 1 (LIGHT PAPER BACKGROUND) -->
<div class="w-full pt-10 pb-16 md:pt-14 md:pb-24 bg-paper text-slate-900 border-t border-slate-200/80">
    <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-slate-200/80 max-w-4xl mx-auto text-center">
            @foreach($items as $stat)
                <div class="py-6 md:py-2 px-6 flex flex-col items-center justify-center">
                    <div class="font-serif-display text-5xl sm:text-6xl md:text-[64px] font-semibold tracking-tight text-ink leading-none">
                        {{ $stat['value'] }}
                    </div>
                    <div class="text-xs sm:text-sm font-medium text-slate-600 mt-3 max-w-[220px] leading-snug">
                        {{ $stat['label'] }}
                    </div>
                </div>
            @endforeach
        </div>

        @if(!empty($footnote))
            <p class="text-xs text-center text-slate-400 mt-10 font-normal">
                {{ $footnote }}
            </p>
        @endif
    </div>
</div>
