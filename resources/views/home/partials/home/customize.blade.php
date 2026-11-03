@php
    $usecases = config('landing.usecases', []);
    $items = $usecases['items'] ?? [];
    $lead = $usecases['heading_lead'] ?? 'Any team.';
    $muted = $usecases['heading_muted'] ?? 'Every workflow.';
@endphp

<!-- SECTION 8: ANY TEAM. EVERY WORKFLOW. (SCRIBE EXACT LAYOUT) -->
<section id="use-cases" class="relative w-full bg-paper py-20 sm:py-24 md:py-32 overflow-hidden border-t border-slate-200/80">
    <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start max-w-6xl mx-auto">
            <!-- Left Column: Large Serif Headline -->
            <div class="lg:col-span-5">
                <h2 class="font-serif-display text-4xl sm:text-5xl md:text-6xl font-semibold text-ink leading-[1.08] tracking-tight">
                    {{ $lead }}
                    <span class="text-slate-400 font-normal block">
                        {{ $muted }}
                    </span>
                </h2>
                <p class="text-slate-600 text-base sm:text-lg leading-relaxed mt-6 max-w-sm">
                    From complex IT provisioning and sales pipeline steps to month-end close and employee onboarding, SaaSApps standardizes work across your entire enterprise.
                </p>
                <div class="mt-8">
                    <a href="{{ route('solutions.show', 'operations') }}"
                       class="inline-flex items-center gap-2 text-sm font-semibold text-ink hover:text-brand-600 transition-colors group">
                        <span>Explore all departmental solutions</span>
                        <svg class="size-4 text-slate-400 group-hover:text-brand-600 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right Column: 5 Departmental Rows with Icons & Chevron -->
            <div class="lg:col-span-7">
                <div class="divide-y divide-slate-200/80 border-y border-slate-200/80">
                    @foreach($items as $row)
                        <a href="{{ $row['url'] ?? '/solutions/operations' }}"
                           class="group flex items-center justify-between py-6 px-3 -mx-3 rounded-2xl transition-all duration-150 hover:bg-white hover:shadow-subtle hover:translate-x-1 cursor-pointer">
                            <div class="flex items-center gap-4">
                                <div class="size-10 rounded-xl bg-slate-100 group-hover:bg-slate-200/70 flex items-center justify-center transition-colors flex-shrink-0 text-slate-700">
                                    @if(($row['icon'] ?? '') === 'layers')
                                        <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                        </svg>
                                    @elseif(($row['icon'] ?? '') === 'cloud')
                                        <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15z" />
                                        </svg>
                                    @elseif(($row['icon'] ?? '') === 'sparkles')
                                        <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.286L13 21l-2.286-6.857L5 12l5.714-2.286L13 3z" />
                                        </svg>
                                    @elseif(($row['icon'] ?? '') === 'rocket')
                                        <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.63 8.41m5.96 5.96a14.926 14.926 0 01-5.84 2.58m0 0l-3.32 3.32a2 2 0 01-2.83 0l-.7-.7a2 2 0 010-2.83l3.32-3.32m3.53.53a6 6 0 01-7.38-5.84m0 0l4.8 4.8" />
                                        </svg>
                                    @else
                                        <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    @endif
                                </div>
                                <span class="text-base sm:text-lg font-semibold text-ink group-hover:text-slate-900 transition-colors">
                                    {{ $row['label'] }}
                                </span>
                            </div>
                            <svg class="size-5 text-slate-400 group-hover:text-ink group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
