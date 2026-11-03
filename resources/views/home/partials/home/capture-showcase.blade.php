<!-- SECTION 4: FEATURE BLOCK 1 - CAPTURE SHOWCASE (LIGHT PAPER BACKGROUND) -->
<section class="relative w-full bg-paper py-20 md:py-28 overflow-hidden">
    <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center max-w-6xl mx-auto"
             x-data="{ activeStep: 1 }">
            <!-- Left Column: Copy & Interactive Bullet List (5 cols) -->
            <div class="lg:col-span-5">
                <h2 class="font-serif-display text-3xl sm:text-4xl md:text-[42px] font-semibold text-ink leading-[1.15] tracking-tight">
                    Turn everyday moves into specialized intelligence. Continuously.
                </h2>

                <div class="mt-8 space-y-4">
                    <!-- Item 1 -->
                    <div @click="activeStep = 1"
                         :class="activeStep === 1 ? 'border-l-2 border-brand-500 pl-4 py-1' : 'border-l-2 border-transparent pl-4 py-1 text-slate-500 hover:text-ink cursor-pointer'"
                         class="transition-all duration-150">
                        <h4 class="text-base font-semibold" :class="activeStep === 1 ? 'text-ink' : 'text-slate-600'">
                            Capture workflows in seconds
                        </h4>
                        <p x-show="activeStep === 1" x-collapse class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                            Click record, navigate your applications naturally, and let our engine automatically generate verified step-by-step guides with annotated screenshots.
                        </p>
                    </div>

                    <!-- Item 2 -->
                    <div @click="activeStep = 2"
                         :class="activeStep === 2 ? 'border-l-2 border-brand-500 pl-4 py-1' : 'border-l-2 border-transparent pl-4 py-1 text-slate-500 hover:text-ink cursor-pointer'"
                         class="transition-all duration-150">
                        <h4 class="text-base font-semibold" :class="activeStep === 2 ? 'text-ink' : 'text-slate-600'">
                            Standardize how work gets done
                        </h4>
                        <p x-show="activeStep === 2" x-collapse class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                            Eliminate process variance across teams and regions. Ensure every teammate follows verified corporate standard operating procedures.
                        </p>
                    </div>

                    <!-- Item 3 -->
                    <div @click="activeStep = 3"
                         :class="activeStep === 3 ? 'border-l-2 border-brand-500 pl-4 py-1' : 'border-l-2 border-transparent pl-4 py-1 text-slate-500 hover:text-ink cursor-pointer'"
                         class="transition-all duration-150">
                        <h4 class="text-base font-semibold" :class="activeStep === 3 ? 'text-ink' : 'text-slate-600'">
                            Ground AI agents &amp; teammates in step-by-step context
                        </h4>
                        <p x-show="activeStep === 3" x-collapse class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                            Feed exact operational trajectories into Model Context Protocol (MCP) servers and enterprise copilots so autonomous agents execute without hallucination.
                        </p>
                    </div>
                </div>

                <!-- Explore Capture Button -->
                <div class="mt-8">
                    <a href="{{ route('products.capture') }}"
                       class="inline-flex items-center justify-center px-7 py-3 rounded-full text-sm font-semibold text-white bg-charcoal hover:bg-slate-900 shadow-sm transition-all duration-150">
                        Explore capture
                    </a>
                </div>
            </div>

            <!-- Right Column: Scribe Signature Mottled Frame with Rich SOP & Click Radar Mockup (7 cols) -->
            <div class="lg:col-span-7">
                <div class="scribe-mottled-frame rounded-[32px] sm:rounded-[36px] p-5 sm:p-8 md:p-9 shadow-2xl relative z-10">
                    <div class="bg-white rounded-2xl shadow-xl border border-slate-200/90 overflow-hidden relative z-10">
                        <!-- SOP Document Header Bar -->
                        <div class="px-5 py-3.5 bg-slate-50 border-b border-slate-200/90 flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="size-2.5 rounded-full bg-rose-400"></span>
                                <span class="size-2.5 rounded-full bg-amber-400"></span>
                                <span class="size-2.5 rounded-full bg-emerald-400"></span>
                            </div>
                            <span class="text-[11px] font-mono text-slate-400 truncate max-w-[200px] sm:max-w-none">
                                saasapps.com/guide/okta-sso-setup
                            </span>
                            <span class="text-[11px] font-semibold text-emerald-700 bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-full flex items-center gap-1">
                                <span class="size-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                Verified SOP
                            </span>
                        </div>

                        <!-- Guide Mockup Body -->
                        <div class="p-5 sm:p-7 space-y-4">
                            <!-- Document Meta Pill -->
                            <div class="flex items-center justify-between pb-3.5 border-b border-slate-100">
                                <div class="flex items-center gap-2.5">
                                    <div class="size-8 rounded-full bg-slate-900 text-white font-bold flex items-center justify-center text-xs shadow-sm">
                                        SC
                                    </div>
                                    <div>
                                        <h4 class="text-xs sm:text-sm font-bold text-ink leading-tight">Configure Okta SSO &amp; Directory Sync</h4>
                                        <p class="text-[11px] text-slate-400 mt-0.5">Created in 42s by Sarah Chen &bull; IT Operations</p>
                                    </div>
                                </div>
                                <span class="text-[10px] font-mono text-slate-400 bg-slate-100 px-2 py-0.5 rounded">v2.4</span>
                            </div>

                            <!-- Step 1: With Miniature Browser UI and Scribe Orange Click Pulse Radar -->
                            <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/80">
                                <div class="flex items-center gap-2.5 mb-3">
                                    <span class="size-5 rounded-full bg-slate-900 text-white font-bold flex items-center justify-center text-[10px] flex-shrink-0">1</span>
                                    <p class="text-xs font-semibold text-ink">Click "Add Application Integration" in Admin Portal</p>
                                </div>

                                <!-- Miniature App Interface Mockup -->
                                <div class="rounded-lg border border-slate-200 bg-white p-3 shadow-inner">
                                    <div class="flex items-center justify-between pb-2 mb-2.5 border-b border-slate-100">
                                        <div class="flex items-center gap-2">
                                            <span class="text-[10px] font-semibold text-slate-700">Okta Admin &bull; Directory</span>
                                            <span class="text-[9px] text-slate-400 bg-slate-100 px-1.5 py-0.2 rounded">Production</span>
                                        </div>
                                        <div class="w-24 h-1.5 bg-slate-200 rounded-full"></div>
                                    </div>

                                    <div class="flex items-center justify-between pt-1">
                                        <div class="flex items-center gap-2">
                                            <div class="w-16 h-2 bg-slate-200 rounded"></div>
                                            <div class="w-10 h-2 bg-slate-100 rounded"></div>
                                        </div>

                                        <!-- Target Button with Scribe Signature Orange Click Radar Pin -->
                                        <div class="relative inline-flex items-center">
                                            <span class="px-2.5 py-1 rounded-md bg-blue-600 text-white text-[10px] font-semibold shadow-xs flex items-center gap-1">
                                                <span>+ Add Integration</span>
                                            </span>
                                            <!-- Scribe Signature Orange Click Pulse Indicator -->
                                            <div class="absolute -top-1.5 -right-1.5 pointer-events-none flex items-center justify-center">
                                                <span class="size-7 rounded-full bg-orange-400 opacity-60 pulse-radar-ring absolute"></span>
                                                <span class="size-3.5 rounded-full bg-orange-500 border-2 border-white shadow-md relative z-10"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2: Highlighted Verification with Smart PII Redaction -->
                            <div class="p-4 rounded-xl bg-emerald-50/60 border border-emerald-200/90">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center gap-2.5">
                                        <span class="size-5 rounded-full bg-emerald-600 text-white font-bold flex items-center justify-center text-[10px] flex-shrink-0">&check;</span>
                                        <p class="text-xs font-semibold text-emerald-950">Verify client certificate assertions</p>
                                    </div>
                                    <span class="text-[9px] font-semibold uppercase tracking-wider text-emerald-700 bg-emerald-100/80 px-1.5 py-0.5 rounded">
                                        PII Masked
                                    </span>
                                </div>
                                <div class="p-2.5 rounded-lg bg-slate-900 text-slate-100 font-mono text-[10px] flex items-center justify-between">
                                    <span class="text-slate-400">client_secret: <span class="text-emerald-400 font-semibold tracking-widest">&bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; 8921</span></span>
                                    <span class="text-[9px] text-emerald-400 font-sans font-medium">Auto-Redacted</span>
                                </div>
                            </div>

                            <!-- Step 3: Distribution & Real-Time Sync -->
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 flex items-center justify-between">
                                <div class="flex items-center gap-2.5">
                                    <span class="size-5 rounded-full bg-slate-200 text-slate-700 font-bold flex items-center justify-center text-[10px] flex-shrink-0">3</span>
                                    <p class="text-xs font-semibold text-ink">Sync to Notion, Confluence, &amp; Slack</p>
                                </div>
                                <div class="flex items-center gap-1.5 text-[10px] font-medium text-slate-500">
                                    <span class="size-1.5 rounded-full bg-emerald-500"></span>
                                    <span>Real-time sync</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
