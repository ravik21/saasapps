<!-- SECTION 9: INTERACTIVE PRODUCT TABS DEMONSTRATION -->
<section class="relative w-full bg-white py-20 md:py-28 overflow-hidden border-t border-slate-200/80"
         x-data="{
            currentTab: 'capture',
            tabs: {
                capture: {
                    title: 'Autocapture any screen, app, or click stream',
                    description: 'Whether working in cloud web apps or legacy desktop software, our recorder compiles annotated screenshots and instructions in real-time.',
                    badge: 'Autocapture',
                    features: ['Background click detection', 'Instant screenshot cropping', 'Automatic step numbering'],
                    mockupTitle: 'Scribe Autocapture Engine',
                    status: 'Capturing active (3 events recorded)'
                },
                redact: {
                    title: 'Automated PII, credential & data redaction',
                    description: 'Keep customer names, passwords, API tokens, and payment details secure with client-side automated blurring before saving.',
                    badge: 'Privacy & Security',
                    features: ['Zero-knowledge client filters', 'HIPAA & GDPR aligned', 'One-click manual blur tools'],
                    mockupTitle: 'Automated PII Redaction Layer',
                    status: '4 sensitive fields secured'
                },
                share: {
                    title: 'Sync everywhere: Notion, Confluence, PDF & Web',
                    description: 'Publish documentation directly to your organization\'s knowledge bases with real-time automatic synchronization.',
                    badge: 'Universal Sharing',
                    features: ['Live embed widgets', 'Export to PDF & Markdown', 'Native Confluence & Slack integrations'],
                    mockupTitle: 'Universal Sync & Export Hub',
                    status: 'Synced to 3 knowledge bases'
                }
            }
         }">
    <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-50 border border-brand-200 text-xs font-semibold text-brand-800 mb-4">
                <span class="size-1.5 rounded-full bg-brand-500"></span>
                <span>Interactive Demonstration</span>
            </span>
            <h2 class="font-serif-display text-3xl sm:text-4xl md:text-5xl font-semibold text-ink leading-tight tracking-tight">
                Experience the platform in action.
            </h2>
            <p class="text-base sm:text-lg text-slate-600 mt-4 leading-relaxed">
                Click through the tabs below to explore how SaaSApps captures, protects, and synchronizes your organizational knowledge.
            </p>

            <!-- Tab Buttons -->
            <div class="mt-10 inline-flex items-center gap-2 p-1.5 rounded-full bg-slate-100 border border-slate-200/80 shadow-xs">
                <button type="button"
                        @click="currentTab = 'capture'"
                        :class="currentTab === 'capture' ? 'bg-white text-ink shadow-xs' : 'text-slate-600 hover:text-ink'"
                        class="px-5 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all">
                    1. Autocapture
                </button>
                <button type="button"
                        @click="currentTab = 'redact'"
                        :class="currentTab === 'redact' ? 'bg-white text-ink shadow-xs' : 'text-slate-600 hover:text-ink'"
                        class="px-5 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all">
                    2. Smart Redaction
                </button>
                <button type="button"
                        @click="currentTab = 'share'"
                        :class="currentTab === 'share' ? 'bg-white text-ink shadow-xs' : 'text-slate-600 hover:text-ink'"
                        class="px-5 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all">
                    3. Live Sync & Share
                </button>
            </div>
        </div>

        <!-- Dynamic Demonstration Content Area -->
        <div class="mt-8 max-w-5xl mx-auto rounded-3xl p-6 md:p-10 bg-paper border border-slate-200/90 shadow-xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <!-- Left: Information Panel -->
                <div class="lg:col-span-5 space-y-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-600" x-text="tabs[currentTab].badge"></span>
                    <h3 class="font-serif-display text-2xl sm:text-3xl font-semibold text-ink leading-tight" x-text="tabs[currentTab].title"></h3>
                    <p class="text-sm text-slate-600 leading-relaxed" x-text="tabs[currentTab].description"></p>

                    <ul class="space-y-2 pt-4 border-t border-slate-200/80 text-xs sm:text-sm text-slate-700">
                        <template x-for="feature in tabs[currentTab].features" :key="feature">
                            <li class="flex items-center gap-2">
                                <span class="size-1.5 rounded-full bg-brand-500"></span>
                                <span x-text="feature"></span>
                            </li>
                        </template>
                    </ul>
                </div>

                <!-- Right: Dynamic Product Visual Mockup -->
                <div class="lg:col-span-7 bg-white rounded-2xl p-6 border border-slate-200/80 shadow-md space-y-4">
                    <div class="flex items-center justify-between pb-3 border-b border-slate-100 text-xs">
                        <span class="font-mono text-slate-500" x-text="tabs[currentTab].mockupTitle"></span>
                        <span class="text-brand-600 font-semibold" x-text="tabs[currentTab].status"></span>
                    </div>

                    <!-- Capture Tab Preview -->
                    <div x-show="currentTab === 'capture'" x-transition:enter="transition ease-out duration-200" class="space-y-3">
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 text-xs flex items-center justify-between">
                            <span>Step 1: Open AWS IAM Security Console</span>
                            <span class="text-[10px] bg-brand-100 text-brand-800 font-bold px-2 py-0.5 rounded">Captured</span>
                        </div>
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 text-xs flex items-center justify-between">
                            <span>Step 2: Generate Read-Only Telemetry Policy</span>
                            <span class="text-[10px] bg-brand-100 text-brand-800 font-bold px-2 py-0.5 rounded">Captured</span>
                        </div>
                    </div>

                    <!-- Redact Tab Preview -->
                    <div x-show="currentTab === 'redact'" x-transition:enter="transition ease-out duration-200" class="space-y-3">
                        <div class="p-3.5 rounded-xl bg-amber-50/70 border border-amber-200 text-xs flex items-center justify-between">
                            <span>Customer Payment Card: <span class="font-mono bg-amber-200 px-1 rounded">•••• •••• •••• 4242</span></span>
                            <span class="text-[10px] bg-emerald-100 text-emerald-800 font-bold px-2 py-0.5 rounded">BLURRED</span>
                        </div>
                        <div class="p-3.5 rounded-xl bg-amber-50/70 border border-amber-200 text-xs flex items-center justify-between">
                            <span>Admin Password: <span class="font-mono bg-amber-200 px-1 rounded">••••••••••••••••</span></span>
                            <span class="text-[10px] bg-emerald-100 text-emerald-800 font-bold px-2 py-0.5 rounded">BLURRED</span>
                        </div>
                    </div>

                    <!-- Share Tab Preview -->
                    <div x-show="currentTab === 'share'" x-transition:enter="transition ease-out duration-200" class="space-y-3">
                        <div class="p-3.5 rounded-xl bg-emerald-50/70 border border-emerald-200 text-xs flex items-center justify-between">
                            <span>Synced to Confluence: "Engineering Handover 2026"</span>
                            <span class="text-[10px] bg-emerald-600 text-white font-bold px-2 py-0.5 rounded">LIVE</span>
                        </div>
                        <div class="p-3.5 rounded-xl bg-emerald-50/70 border border-emerald-200 text-xs flex items-center justify-between">
                            <span>Notion Workspace Embed Verified</span>
                            <span class="text-[10px] bg-emerald-600 text-white font-bold px-2 py-0.5 rounded">SYNCED</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
