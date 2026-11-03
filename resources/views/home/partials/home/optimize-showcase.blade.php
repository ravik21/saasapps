<!-- SECTION 6: FEATURE BLOCK 2 - OPTIMIZE SHOWCASE & STATS STRIP 2 (DARK CHARCOAL BACKGROUND) -->
<section class="relative w-full bg-charcoal text-white py-20 md:py-28 overflow-hidden border-t border-slate-800">
    <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center max-w-6xl mx-auto"
             x-data="{ activeInsight: 1 }">
            <!-- Left Column: Scribe Signature Mottled Frame with Dark Telemetry Dashboard (7 cols) -->
            <div class="lg:col-span-7 order-2 lg:order-1">
                <div class="scribe-mottled-frame rounded-[32px] sm:rounded-[36px] p-5 sm:p-8 md:p-9 shadow-2xl relative z-10">
                    <div class="bg-slate-950 rounded-2xl shadow-2xl border border-slate-800/90 overflow-hidden text-white relative z-10">
                        <!-- Dashboard Mockup Header -->
                        <div class="px-5 py-3.5 bg-slate-900/90 border-b border-slate-800 flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="size-2.5 rounded-full bg-rose-500"></span>
                                <span class="size-2.5 rounded-full bg-amber-500"></span>
                                <span class="size-2.5 rounded-full bg-emerald-500"></span>
                            </div>
                            <span class="text-[11px] font-mono text-slate-400">Process Telemetry &bull; CRM &rarr; ERP Order-to-Cash</span>
                            <span class="text-[10px] font-semibold text-amber-300 bg-amber-950/80 border border-amber-600/50 px-2 py-0.5 rounded-full flex items-center gap-1.5">
                                <span class="size-1.5 rounded-full bg-amber-400 animate-pulse"></span>
                                1 Bottleneck Flagged
                            </span>
                        </div>

                        <!-- Workflow Telemetry Steps Body -->
                        <div class="p-5 sm:p-7 space-y-3 font-mono text-xs">
                            <!-- Step 1: Normal Ingestion -->
                            <div class="p-3.5 rounded-xl bg-slate-900/70 border border-slate-800 flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <span class="size-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-[10px]">1</span>
                                    <div>
                                        <span class="text-slate-200 font-sans font-medium text-xs block">Account Creation in CRM</span>
                                        <span class="text-[10px] text-slate-500 font-mono">Automated webhook sync</span>
                                    </div>
                                </div>
                                <span class="text-emerald-400 font-semibold text-[11px] bg-emerald-950/40 border border-emerald-800/40 px-2 py-0.5 rounded">1m 12s &bull; 99.4%</span>
                            </div>

                            <!-- Step 2: Signature Bottleneck Flagged Box -->
                            <div class="p-4 rounded-xl bg-gradient-to-r from-amber-950/40 to-slate-900 border border-amber-500/60 shadow-[0_0_20px_rgba(245,158,11,0.12)] space-y-2">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2.5">
                                        <span class="size-5 rounded-full bg-amber-500/30 text-amber-300 flex items-center justify-center font-bold text-[10px]">2</span>
                                        <span class="text-white font-sans font-semibold text-xs">Manual ERP Security &amp; Privilege Provisioning</span>
                                    </div>
                                    <span class="text-amber-400 font-bold text-[11px] bg-amber-900/40 px-2 py-0.5 rounded border border-amber-600/40">
                                        +28m 40s Latency
                                    </span>
                                </div>
                                <div class="pl-7 text-[11px] text-amber-200/90 font-sans space-y-1">
                                    <p class="text-slate-400 text-[10px]">Identified variance: 41% drop-off across 3 repeat review cycles.</p>
                                    <div class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded bg-amber-500/20 text-amber-300 border border-amber-500/30 text-[10px] font-medium">
                                        <span>&bull; AI Suggestion: Deploy Autonomous Webhook (Saves 27m)</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3: Fast Execution -->
                            <div class="p-3.5 rounded-xl bg-slate-900/70 border border-slate-800 flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <span class="size-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-[10px]">3</span>
                                    <div>
                                        <span class="text-slate-200 font-sans font-medium text-xs block">Dispatch Confirmation &amp; Cloud Sandbox</span>
                                        <span class="text-[10px] text-slate-500 font-mono">Zero-touch execution</span>
                                    </div>
                                </div>
                                <span class="text-emerald-400 font-semibold text-[11px] bg-emerald-950/40 border border-emerald-800/40 px-2 py-0.5 rounded">45s &bull; 100%</span>
                            </div>

                            <!-- Telemetry Summary Metric Bar -->
                            <div class="pt-2 px-1 flex items-center justify-between text-[10px] text-slate-400 border-t border-slate-800/80">
                                <span>Health Index: <strong class="text-emerald-400">94.2%</strong></span>
                                <span>Estimated Team Velocity: <strong class="text-white">+340%</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: White Serif Copy & Interactive Items (5 cols) -->
            <div class="lg:col-span-5 order-1 lg:order-2">
                <h2 class="font-serif-display text-3xl sm:text-4xl md:text-[42px] font-semibold text-white leading-[1.15] tracking-tight">
                    Now you can understand how your team works. And improve it.
                </h2>

                <div class="mt-8 space-y-4">
                    <!-- Item 1 -->
                    <div @click="activeInsight = 1"
                         :class="activeInsight === 1 ? 'border-l-2 border-brand-400 pl-4 py-1' : 'border-l-2 border-transparent pl-4 py-1 text-slate-400 hover:text-white cursor-pointer'"
                         class="transition-all duration-150">
                        <h4 class="text-base font-semibold" :class="activeInsight === 1 ? 'text-white' : 'text-slate-300'">
                            Automatically identify bottlenecks
                        </h4>
                        <p x-show="activeInsight === 1" x-collapse class="text-xs sm:text-sm text-slate-300 mt-2 leading-relaxed">
                            See where people get stuck, drop off, or deviate from the standard process across all software and systems.
                        </p>
                    </div>

                    <!-- Item 2 -->
                    <div @click="activeInsight = 2"
                         :class="activeInsight === 2 ? 'border-l-2 border-brand-400 pl-4 py-1' : 'border-l-2 border-transparent pl-4 py-1 text-slate-400 hover:text-white cursor-pointer'"
                         class="transition-all duration-150">
                        <h4 class="text-base font-semibold" :class="activeInsight === 2 ? 'text-white' : 'text-slate-300'">
                            Spot automation opportunities
                        </h4>
                        <p x-show="activeInsight === 2" x-collapse class="text-xs sm:text-sm text-slate-300 mt-2 leading-relaxed">
                            Surface repetitive, high-frequency steps ready for robotic process triggers or autonomous AI agent handoffs.
                        </p>
                    </div>

                    <!-- Item 3 -->
                    <div @click="activeInsight = 3"
                         :class="activeInsight === 3 ? 'border-l-2 border-brand-400 pl-4 py-1' : 'border-l-2 border-transparent pl-4 py-1 text-slate-400 hover:text-white cursor-pointer'"
                         class="transition-all duration-150">
                        <h4 class="text-base font-semibold" :class="activeInsight === 3 ? 'text-white' : 'text-slate-300'">
                            Standardize across tools &amp; teams
                        </h4>
                        <p x-show="activeInsight === 3" x-collapse class="text-xs sm:text-sm text-slate-300 mt-2 leading-relaxed">
                            Align cross-functional operations with unified version control, managerial sign-offs, and automated drift alerts.
                        </p>
                    </div>
                </div>

                <!-- Explore Insights Button (White Pill) -->
                <div class="mt-8">
                    <a href="{{ route('products.optimize') }}"
                       class="inline-flex items-center justify-center px-7 py-3 rounded-full text-sm font-semibold text-slate-900 bg-white hover:bg-slate-100 shadow-sm transition-all duration-150">
                        Explore insights
                    </a>
                </div>
            </div>
        </div>

        <!-- STATS STRIP 2 (INCLUDED INSIDE DARK SECTION AS IN SCRIBE) -->
        <div class="mt-20 pt-16 border-t border-slate-800">
            <div class="grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-slate-800 max-w-4xl mx-auto text-center">
                <div class="py-4 px-4 flex flex-col items-center justify-center">
                    <div class="font-serif-display text-4xl sm:text-5xl md:text-6xl font-semibold text-white tracking-tight">
                        95%
                    </div>
                    <div class="text-xs sm:text-sm font-medium text-slate-400 mt-2">
                        reduction in onboarding time
                    </div>
                </div>
                <div class="py-4 px-4 flex flex-col items-center justify-center">
                    <div class="font-serif-display text-4xl sm:text-5xl md:text-6xl font-semibold text-white tracking-tight">
                        5 days
                    </div>
                    <div class="text-xs sm:text-sm font-medium text-slate-400 mt-2">
                        cut from month-end close
                    </div>
                </div>
                <div class="py-4 px-4 flex flex-col items-center justify-center">
                    <div class="font-serif-display text-4xl sm:text-5xl md:text-6xl font-semibold text-white tracking-tight">
                        71%
                    </div>
                    <div class="text-xs sm:text-sm font-medium text-slate-400 mt-2">
                        fewer repeat questions
                    </div>
                </div>
            </div>
            <p class="text-xs text-center text-slate-500 mt-8">
                Telemetry metrics across enterprise workflow deployments
            </p>
        </div>
    </div>
</section>
