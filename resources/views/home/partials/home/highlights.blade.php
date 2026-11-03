@php
    $features = config('landing.features', []);
    $block1 = $features['block1'] ?? [];
    $block2 = $features['block2'] ?? [];
@endphp

<!-- FEATURE BLOCK 1: Build / Capture Style (Paper Background) -->
<section id="feature-build" class="relative w-full bg-paper py-16 sm:py-20 md:py-28 overflow-hidden">
    <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Text Column (Left) -->
            <div class="reveal-on-scroll">
                @if(!empty($block1['badge']))
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white border border-slate-200/90 shadow-subtle text-xs font-semibold text-slate-700 mb-4">
                        <span class="size-1.5 rounded-full bg-brand-500"></span>
                        <span>{{ $block1['badge'] }}</span>
                    </div>
                @endif

                <h2 class="font-serif-display text-3xl sm:text-4xl md:text-5xl font-semibold text-ink leading-tight tracking-tight">
                    {{ $block1['heading_lead'] ?? 'Engineered for reliability.' }}
                    <span class="text-slate-400 font-normal block sm:inline">
                        {{ $block1['heading_muted'] ?? 'From first commit to global scale.' }}
                    </span>
                </h2>

                @if(!empty($block1['items']))
                    <ul class="divide-y divide-slate-200/80 mt-8">
                        @foreach($block1['items'] as $item)
                            <li class="py-4 first:pt-0 last:pb-0 flex items-start gap-3">
                                <span class="size-2 rounded-full bg-brand-500 mt-2.5 flex-shrink-0" aria-hidden="true"></span>
                                <div>
                                    <h3 class="text-base sm:text-lg font-semibold text-ink">
                                        {{ $item['title'] }}
                                    </h3>
                                    <p class="text-sm sm:text-base text-slate-600 mt-1 leading-relaxed">
                                        {{ $item['description'] }}
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif

                <div class="mt-8">
                    <a href="{{ $block1['cta']['url'] ?? '/contact-us' }}"
                       class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full text-sm font-semibold text-white bg-charcoal hover:bg-slate-900 shadow-sm transition-all duration-200 hover:scale-[1.02] active:scale-[0.98]">
                        <span>{{ $block1['cta']['label'] ?? 'Get started' }}</span>
                        <svg class="size-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Visual Column (Right): Pale Blue Framed UI Mockup Card -->
            <div class="reveal-on-scroll">
                <div class="relative rounded-2xl md:rounded-3xl p-4 sm:p-6 md:p-8 bg-gradient-to-br from-sky-100/90 via-blue-50/70 to-teal-100/50 border border-sky-200/70 shadow-lg">
                    <div class="bg-white rounded-xl shadow-md border border-slate-200/90 p-5 sm:p-6">
                        <!-- Browser Window Bar -->
                        <div class="flex items-center justify-between pb-4 border-b border-slate-100">
                            <div class="flex items-center gap-1.5">
                                <span class="size-2.5 rounded-full bg-rose-400"></span>
                                <span class="size-2.5 rounded-full bg-amber-400"></span>
                                <span class="size-2.5 rounded-full bg-emerald-400"></span>
                            </div>
                            <span class="text-[11px] font-mono text-slate-400 bg-slate-50 px-2.5 py-0.5 rounded-md border border-slate-200/60">
                                saasapps.internal/architecture
                            </span>
                            <span class="size-2 rounded-full bg-emerald-500 animate-pulse" title="System Operational"></span>
                        </div>

                        <!-- Architecture Modules Card Content -->
                        <div class="mt-5 space-y-3">
                            <div class="p-3.5 rounded-lg bg-slate-50/90 border border-slate-100 flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded-md bg-brand-100 text-brand-700 flex items-center justify-center font-bold text-xs">
                                        API
                                    </div>
                                    <div>
                                        <div class="text-xs font-semibold text-slate-800">Multi-Tenant Gateway</div>
                                        <div class="text-[11px] text-slate-500 font-mono">Laravel REST & GraphQL</div>
                                    </div>
                                </div>
                                <span class="text-[11px] font-medium text-emerald-700 bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-full">
                                    200 OK · 24ms
                                </span>
                            </div>

                            <div class="p-3.5 rounded-lg bg-slate-50/90 border border-slate-100 flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded-md bg-sky-100 text-sky-700 flex items-center justify-center font-bold text-xs">
                                        Q
                                    </div>
                                    <div>
                                        <div class="text-xs font-semibold text-slate-800">Event Bus & Async Queue</div>
                                        <div class="text-[11px] text-slate-500 font-mono">Redis Workers Active</div>
                                    </div>
                                </div>
                                <span class="text-[11px] font-medium text-sky-700 bg-sky-50 border border-sky-200 px-2 py-0.5 rounded-full">
                                    0 failed jobs
                                </span>
                            </div>

                            <div class="p-3.5 rounded-lg bg-slate-50/90 border border-slate-100 flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded-md bg-purple-100 text-purple-700 flex items-center justify-center font-bold text-xs">
                                        UI
                                    </div>
                                    <div>
                                        <div class="text-xs font-semibold text-slate-800">Client Web & Mobile SPA</div>
                                        <div class="text-[11px] text-slate-500 font-mono">Vue 3 / React + Vite</div>
                                    </div>
                                </div>
                                <span class="text-[11px] font-medium text-purple-700 bg-purple-50 border border-purple-200 px-2 py-0.5 rounded-full">
                                    100 Lighthouse
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STATS STRIP 1 (Directly under block 1, paper background) -->
@include('home.partials.home.targeting', ['strip' => 1])

<!-- FEATURE BLOCK 2: Scale / Improve Style (Dark Charcoal Background) -->
<section id="feature-scale" class="relative w-full bg-charcoal text-white py-16 sm:py-20 md:py-28 overflow-hidden">
    <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Visual Column (Left on Desktop, Mirrored) -->
            <div class="reveal-on-scroll order-2 lg:order-1">
                <div class="relative rounded-2xl md:rounded-3xl p-4 sm:p-6 md:p-8 bg-gradient-to-br from-sky-950/60 via-slate-800/80 to-teal-950/50 border border-sky-500/20 shadow-2xl">
                    <div class="bg-slate-900/95 rounded-xl shadow-lg border border-slate-700/80 p-5 sm:p-6 text-white">
                        <!-- Dark Browser Window Bar -->
                        <div class="flex items-center justify-between pb-4 border-b border-slate-800">
                            <div class="flex items-center gap-1.5">
                                <span class="size-2.5 rounded-full bg-rose-500"></span>
                                <span class="size-2.5 rounded-full bg-amber-500"></span>
                                <span class="size-2.5 rounded-full bg-emerald-500"></span>
                            </div>
                            <span class="text-[11px] font-mono text-slate-400 bg-slate-800/70 px-2.5 py-0.5 rounded-md border border-slate-700">
                                telemetry.saasapps.cloud
                            </span>
                            <span class="size-2 rounded-full bg-brand-400 animate-ping" title="Live Streaming"></span>
                        </div>

                        <!-- Telemetry Card Content -->
                        <div class="mt-5 space-y-3">
                            <div class="p-3.5 rounded-lg bg-slate-800/60 border border-slate-700 flex items-center justify-between">
                                <div>
                                    <div class="text-xs font-semibold text-slate-200">Cloud Auto-Scaling Cluster</div>
                                    <div class="text-[11px] text-slate-400 font-mono">AWS ECS / Docker / Redis</div>
                                </div>
                                <span class="text-[11px] font-medium text-emerald-400 bg-emerald-950/60 border border-emerald-800 px-2.5 py-0.5 rounded-full">
                                    99.99% Uptime
                                </span>
                            </div>

                            <div class="p-3.5 rounded-lg bg-slate-800/60 border border-slate-700 flex items-center justify-between">
                                <div>
                                    <div class="text-xs font-semibold text-slate-200">AI Worker & LLM Pipelines</div>
                                    <div class="text-[11px] text-slate-400 font-mono">Asynchronous Queue Handlers</div>
                                </div>
                                <span class="text-[11px] font-medium text-sky-400 bg-sky-950/60 border border-sky-800 px-2.5 py-0.5 rounded-full">
                                    1,420 jobs / hr
                                </span>
                            </div>

                            <div class="p-3.5 rounded-lg bg-slate-800/60 border border-slate-700 flex items-center justify-between">
                                <div>
                                    <div class="text-xs font-semibold text-slate-200">Zero-Downtime Deployment</div>
                                    <div class="text-[11px] text-slate-400 font-mono">Automated CI/CD Test Matrix</div>
                                </div>
                                <span class="text-[11px] font-medium text-brand-400 bg-brand-950/60 border border-brand-800 px-2.5 py-0.5 rounded-full">
                                    Passing (all checks)
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Text Column (Right on Desktop) -->
            <div class="reveal-on-scroll order-1 lg:order-2">
                @if(!empty($block2['badge']))
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800 border border-slate-700 text-xs font-semibold text-slate-300 mb-4">
                        <span class="size-1.5 rounded-full bg-brand-400"></span>
                        <span>{{ $block2['badge'] }}</span>
                    </div>
                @endif

                <h2 class="font-serif-display text-3xl sm:text-4xl md:text-5xl font-semibold text-white leading-tight tracking-tight">
                    {{ $block2['heading_lead'] ?? 'Scale performance and automate workflows.' }}
                    <span class="text-slate-400 font-normal block sm:inline">
                        {{ $block2['heading_muted'] ?? 'Without disrupting users.' }}
                    </span>
                </h2>

                @if(!empty($block2['items']))
                    <ul class="divide-y divide-slate-700/80 mt-8">
                        @foreach($block2['items'] as $item)
                            <li class="py-4 first:pt-0 last:pb-0 flex items-start gap-3">
                                <span class="size-2 rounded-full bg-brand-400 mt-2.5 flex-shrink-0" aria-hidden="true"></span>
                                <div>
                                    <h3 class="text-base sm:text-lg font-semibold text-white">
                                        {{ $item['title'] }}
                                    </h3>
                                    <p class="text-sm sm:text-base text-slate-300 mt-1 leading-relaxed">
                                        {{ $item['description'] }}
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif

                <div class="mt-8">
                    <a href="{{ $block2['cta']['url'] ?? '/contact-us' }}"
                       class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full text-sm font-semibold text-white border border-slate-600 hover:border-white hover:bg-white/10 transition-all duration-200 hover:scale-[1.02] active:scale-[0.98]">
                        <span>{{ $block2['cta']['label'] ?? 'Get started' }}</span>
                        <svg class="size-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- STATS STRIP 2 (Directly under block 2, dark charcoal background) -->
    @include('home.partials.home.targeting', ['strip' => 2])
</section>
