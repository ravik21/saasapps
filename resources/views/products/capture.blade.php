<x-landing-layout>
    <main class="w-full bg-paper py-16 md:py-24">
        <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- 1. Hero -->
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-50 border border-brand-200 text-xs font-semibold text-brand-800 mb-6 shadow-2xs">
                    <span class="size-2 rounded-full bg-brand-500 animate-pulse"></span>
                    <span>Chrome & Edge Extension &bull; Mac & Windows Desktop App</span>
                </div>
                <h1 class="font-serif-display text-4xl sm:text-5xl md:text-6xl font-semibold text-ink leading-[1.1] tracking-tight">
                    Documentation that writes itself while you work.
                </h1>
                <p class="text-lg sm:text-xl text-slate-600 mt-6 leading-relaxed max-w-2xl mx-auto">
                    Turn any business process into visual, step-by-step standard operating procedures in seconds. Complete with annotated screenshots, auto-generated text, and client-side PII redaction.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('contact-us') }}" class="w-full sm:w-auto px-8 py-3.5 rounded-full text-base font-semibold text-white bg-charcoal hover:bg-slate-900 shadow-sm transition-all duration-150">
                        Start Capturing Free
                    </a>
                    <a href="{{ route('demo') }}" class="w-full sm:w-auto px-8 py-3.5 rounded-full text-base font-semibold text-slate-800 bg-white border border-slate-200 hover:bg-slate-50 transition-all duration-150">
                        Book Enterprise Demo
                    </a>
                </div>
                <p class="text-xs text-slate-500 mt-4">No credit card required &bull; 5-minute setup &bull; SOC 2 Type II Certified</p>
            </div>

            <!-- 2. Interactive Capture Simulator & Editor Preview -->
            <div class="mt-16 max-w-5xl mx-auto"
                 x-data="{
                     activeTool: 'redact',
                     isRedacted: true,
                     showAnnotation: true,
                     showCallout: true,
                     isCropped: false
                 }">
                <div class="rounded-3xl p-6 sm:p-10 bg-gradient-to-br from-sky-100 via-blue-50 to-emerald-50 border border-sky-200 shadow-xl">
                    <!-- Top Simulator Controls Bar -->
                    <div class="bg-white rounded-2xl p-4 shadow-sm border border-slate-200 flex flex-wrap items-center justify-between gap-4 mb-6">
                        <div class="flex items-center gap-2">
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Interactive Editor Preview:</span>
                        </div>
                        <div class="flex flex-wrap items-center gap-2">
                            <button type="button"
                                    @click="activeTool = 'redact'; isRedacted = !isRedacted"
                                    :class="isRedacted ? 'bg-amber-100 text-amber-900 border-amber-300' : 'bg-slate-100 text-slate-700 border-slate-200'"
                                    class="px-3 py-1.5 rounded-lg text-xs font-semibold border transition-all flex items-center gap-1.5">
                                <svg class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18"/></svg>
                                <span>Smart Redaction <span x-text="isRedacted ? '(Active)' : '(Off)'"></span></span>
                            </button>

                            <button type="button"
                                    @click="activeTool = 'annotate'; showAnnotation = !showAnnotation"
                                    :class="showAnnotation ? 'bg-brand-100 text-brand-900 border-brand-300' : 'bg-slate-100 text-slate-700 border-slate-200'"
                                    class="px-3 py-1.5 rounded-lg text-xs font-semibold border transition-all flex items-center gap-1.5">
                                <svg class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/></svg>
                                <span>Click Pin <span x-text="showAnnotation ? '(Visible)' : '(Hidden)'"></span></span>
                            </button>

                            <button type="button"
                                    @click="activeTool = 'callout'; showCallout = !showCallout"
                                    :class="showCallout ? 'bg-sky-100 text-sky-900 border-sky-300' : 'bg-slate-100 text-slate-700 border-slate-200'"
                                    class="px-3 py-1.5 rounded-lg text-xs font-semibold border transition-all flex items-center gap-1.5">
                                <svg class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg>
                                <span>AI Callouts</span>
                            </button>

                            <button type="button"
                                    @click="isCropped = !isCropped"
                                    :class="isCropped ? 'bg-purple-100 text-purple-900 border-purple-300' : 'bg-slate-100 text-slate-700 border-slate-200'"
                                    class="px-3 py-1.5 rounded-lg text-xs font-semibold border transition-all flex items-center gap-1.5">
                                <svg class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/></svg>
                                <span>Focus Crop</span>
                            </button>
                        </div>
                    </div>

                    <!-- Browser Screen Frame -->
                    <div class="bg-white rounded-2xl shadow-xl border border-slate-200/90 overflow-hidden transition-all duration-300"
                         :class="isCropped ? 'scale-[1.02] ring-2 ring-purple-400' : ''">
                        <!-- Browser Header -->
                        <div class="bg-slate-50 px-4 py-3 border-b border-slate-200 flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="size-3 rounded-full bg-rose-400"></span>
                                <span class="size-3 rounded-full bg-amber-400"></span>
                                <span class="size-3 rounded-full bg-emerald-400"></span>
                            </div>
                            <div class="bg-white px-4 py-1 rounded-md border border-slate-200 text-xs font-mono text-slate-500 max-w-sm truncate">
                                https://app.saasapps.internal/billing/customer-invoices/INV-9021
                            </div>
                            <div class="flex items-center gap-1.5 text-xs font-semibold text-emerald-600">
                                <span class="size-2 rounded-full bg-emerald-500 animate-ping"></span>
                                <span>Auto-Captured</span>
                            </div>
                        </div>

                        <!-- Simulated Application Interface -->
                        <div class="p-6 sm:p-8 space-y-6 relative">
                            <!-- Step 1 Card -->
                            <div class="p-5 rounded-xl bg-slate-50/80 border border-slate-200/90 relative">
                                <div class="flex items-start gap-4">
                                    <div class="size-7 rounded-full bg-brand-500 text-white font-bold flex items-center justify-center text-xs flex-shrink-0">
                                        1
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-sm font-semibold text-ink">Click on "Customer Accounts" in primary navigation</h3>
                                        <p class="text-xs text-slate-500 mt-1">SaaSApps records exact mouse coordinates and DOM selectors automatically.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2 Card (Interactive Focus) -->
                            <div class="p-5 rounded-xl bg-blue-50/40 border border-blue-200/90 relative">
                                <div class="flex items-start gap-4">
                                    <div class="size-7 rounded-full bg-brand-500 text-white font-bold flex items-center justify-center text-xs flex-shrink-0">
                                        2
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-sm font-semibold text-ink">Enter customer billing identifier and secret key</h3>
                                        <p class="text-xs text-slate-500 mt-1">Automatic detection of credit cards, passwords, and API secrets.</p>

                                        <!-- UI Mockup inside step -->
                                        <div class="mt-4 p-4 rounded-lg bg-white border border-slate-200 relative">
                                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                                <div>
                                                    <label class="text-[11px] font-semibold text-slate-500 uppercase">Customer Email</label>
                                                    <div class="mt-1 px-3 py-1.5 rounded border border-slate-200 text-xs font-mono"
                                                         :class="isRedacted ? 'filter blur-xs bg-amber-50/70 select-none' : 'text-slate-700'">
                                                        billing-lead@enterprise-client.com
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="text-[11px] font-semibold text-slate-500 uppercase">Payment Card Number</label>
                                                    <div class="mt-1 px-3 py-1.5 rounded border border-slate-200 text-xs font-mono"
                                                         :class="isRedacted ? 'filter blur-xs bg-amber-50/70 select-none' : 'text-slate-700'">
                                                        4532 &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; 8921
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Click Pin Callout -->
                                            <div x-show="showAnnotation" x-transition class="absolute -right-3 -top-3 z-10 flex items-center gap-1.5 bg-brand-500 text-white text-[11px] font-bold px-2.5 py-1 rounded-full shadow-lg">
                                                <span class="size-2 rounded-full bg-white animate-ping"></span>
                                                <span>Click here</span>
                                            </div>
                                        </div>

                                        <!-- AI Tip Banner -->
                                        <div x-show="showCallout" x-transition class="mt-3 p-3 rounded-lg bg-sky-50 border border-sky-200 text-xs text-sky-800 flex items-center gap-2">
                                            <svg class="size-4 text-sky-600 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                            <span><strong>Pro Tip:</strong> Only Organization Admins can issue credit refunds above $5,000.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3 Card -->
                            <div class="p-5 rounded-xl bg-emerald-50/50 border border-emerald-200/90 relative">
                                <div class="flex items-start gap-4">
                                    <div class="size-7 rounded-full bg-emerald-600 text-white font-bold flex items-center justify-center text-xs flex-shrink-0">
                                        3
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-sm font-semibold text-emerald-950">Workflow Completed & Published</h3>
                                        <p class="text-xs text-emerald-700 mt-1">SOP ready to share as a live link, export to PDF, or push directly to Confluence and Notion.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. How It Works (3 Steps) -->
            <div class="mt-28 max-w-5xl mx-auto">
                <div class="text-center mb-16">
                    <span class="text-xs font-semibold uppercase tracking-wider text-brand-600 bg-brand-50 px-3 py-1 rounded-full border border-brand-200">
                        Effortless 3-Step Process
                    </span>
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink mt-3">
                        How SaaSApps captures any workflow
                    </h2>
                    <p class="text-slate-600 text-base mt-2 max-w-xl mx-auto">
                        No manual screenshots. No copying and pasting into Word docs. Zero maintenance hassle.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Step 1 -->
                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle flex flex-col justify-between">
                        <div>
                            <div class="size-12 rounded-2xl bg-brand-50 border border-brand-200 flex items-center justify-center text-brand-700 font-serif-display text-xl font-bold mb-6">
                                01
                            </div>
                            <h3 class="font-serif-display text-xl font-semibold text-ink">Click "Record"</h3>
                            <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                                Launch the browser extension or open the desktop app for Windows and macOS. Click record and go about your task normally.
                            </p>
                        </div>
                        <div class="mt-8 pt-4 border-t border-slate-100 flex items-center gap-2 text-xs text-slate-500 font-mono">
                            <span class="size-2 rounded-full bg-brand-500"></span>
                            <span>Passive background tracking</span>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle flex flex-col justify-between">
                        <div>
                            <div class="size-12 rounded-2xl bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700 font-serif-display text-xl font-bold mb-6">
                                02
                            </div>
                            <h3 class="font-serif-display text-xl font-semibold text-ink">Do your work</h3>
                            <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                                Navigate through your application. SaaSApps automatically clicks, screenshots, tracks DOM events, and synthesizes clear instructional copy.
                            </p>
                        </div>
                        <div class="mt-8 pt-4 border-t border-slate-100 flex items-center gap-2 text-xs text-slate-500 font-mono">
                            <span class="size-2 rounded-full bg-blue-500"></span>
                            <span>Client-side PII redaction</span>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle flex flex-col justify-between">
                        <div>
                            <div class="size-12 rounded-2xl bg-emerald-50 border border-emerald-200 flex items-center justify-center text-emerald-700 font-serif-display text-xl font-bold mb-6">
                                03
                            </div>
                            <h3 class="font-serif-display text-xl font-semibold text-ink">Get your guide</h3>
                            <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                                Hit "Complete". Instantly receive a polished, formatted, and verified SOP ready to share with your team, customers, or autonomous AI agents.
                            </p>
                        </div>
                        <div class="mt-8 pt-4 border-t border-slate-100 flex items-center gap-2 text-xs text-slate-500 font-mono">
                            <span class="size-2 rounded-full bg-emerald-500"></span>
                            <span>1-click export to 20+ formats</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. Desktop vs Browser Capabilities Matrix -->
            <div class="mt-28 max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink">
                        Capture everywhere your team works
                    </h2>
                    <p class="text-slate-600 text-base mt-2">
                        Whether in the browser or on the desktop, SaaSApps provides full procedural coverage.
                    </p>
                </div>

                <div class="overflow-x-auto rounded-3xl border border-slate-200 bg-white shadow-subtle">
                    <table class="w-full text-left border-collapse min-w-[640px]">
                        <thead>
                            <tr class="border-b border-slate-200 bg-slate-50/70 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                <th class="p-5 w-1/2">Capability</th>
                                <th class="p-5 text-center">Browser Extension (Chrome & Edge)</th>
                                <th class="p-5 text-center text-brand-600 font-bold">Desktop App (Mac & Windows)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm text-slate-700">
                            <tr>
                                <td class="py-4 px-5 font-medium text-ink">Web Applications (SaaS, internal portals, cloud dashboards)</td>
                                <td class="py-4 px-5 text-center text-emerald-600 font-bold">&check; Native</td>
                                <td class="py-4 px-5 text-center text-emerald-600 font-bold">&check; Supported</td>
                            </tr>
                            <tr>
                                <td class="py-4 px-5 font-medium text-ink">Native Desktop Software (Excel, SAP, AutoCAD, Terminal, ERP clients)</td>
                                <td class="py-4 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-4 px-5 text-center text-emerald-600 font-bold">&check; Full Native</td>
                            </tr>
                            <tr>
                                <td class="py-4 px-5 font-medium text-ink">Cross-Application Workflows (Browser to Desktop and back)</td>
                                <td class="py-4 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-4 px-5 text-center text-emerald-600 font-bold">&check; Seamless</td>
                            </tr>
                            <tr>
                                <td class="py-4 px-5 font-medium text-ink">Multi-Monitor Display Setups</td>
                                <td class="py-4 px-5 text-center text-slate-400">Active Tab Only</td>
                                <td class="py-4 px-5 text-center text-emerald-600 font-bold">&check; All Displays</td>
                            </tr>
                            <tr>
                                <td class="py-4 px-5 font-medium text-ink">Client-Side Automatic PII Redaction</td>
                                <td class="py-4 px-5 text-center text-emerald-600 font-bold">&check; Real-time</td>
                                <td class="py-4 px-5 text-center text-emerald-600 font-bold">&check; Real-time</td>
                            </tr>
                            <tr>
                                <td class="py-4 px-5 font-medium text-ink">Local File System Operations</td>
                                <td class="py-4 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-4 px-5 text-center text-emerald-600 font-bold">&check; Supported</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 5. AI Features: Smart Redaction, Auto-Title, 50+ Languages -->
            <div class="mt-28 max-w-5xl mx-auto">
                <div class="text-center mb-16">
                    <span class="text-xs font-semibold uppercase tracking-wider text-brand-600 bg-brand-50 px-3 py-1 rounded-full border border-brand-200">
                        AI-Powered Automation
                    </span>
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink mt-3">
                        Intelligent assistance at every step
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle">
                        <div class="size-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold mb-5">
                            <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </div>
                        <h3 class="font-serif-display text-xl font-semibold text-ink">Zero-Exposure Smart Redaction</h3>
                        <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                            Regex and computer vision models automatically detect and obscure API tokens, email addresses, credit cards, and sensitive customer data on your machine before upload.
                        </p>
                    </div>

                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle">
                        <div class="size-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center font-bold mb-5">
                            <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <h3 class="font-serif-display text-xl font-semibold text-ink">Auto-Synthesized Copy</h3>
                        <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                            Natural language models parse button labels, form fields, and screen context to generate crisp, grammatically perfect imperative instructions for every single step.
                        </p>
                    </div>

                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle">
                        <div class="size-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold mb-5">
                            <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/></svg>
                        </div>
                        <h3 class="font-serif-display text-xl font-semibold text-ink">50+ Language Translation</h3>
                        <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                            Translate any standard operating procedure into 50+ languages with a single click, keeping distributed global teams completely aligned across all regions.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 6. Export & Integrations Hub -->
            <div class="mt-28 max-w-5xl mx-auto p-10 rounded-3xl bg-slate-900 text-white shadow-2xl">
                <div class="max-w-2xl">
                    <span class="text-xs font-semibold uppercase tracking-wider text-brand-400">Universal Distribution</span>
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-white mt-2">
                        Share guides anywhere your team works
                    </h2>
                    <p class="text-slate-300 text-sm mt-3 leading-relaxed">
                        No walled gardens. Distribute your standard operating procedures across every knowledge base, wiki, ticket system, and intranet.
                    </p>
                </div>

                <div class="mt-10 grid grid-cols-2 sm:grid-cols-4 gap-4">
                    <div class="p-4 rounded-xl bg-slate-800/80 border border-slate-700/80 text-center">
                        <span class="font-semibold text-sm text-white block">Confluence</span>
                        <span class="text-xs text-slate-400 mt-1 block">Live embed sync</span>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-800/80 border border-slate-700/80 text-center">
                        <span class="font-semibold text-sm text-white block">Notion</span>
                        <span class="text-xs text-slate-400 mt-1 block">Interactive blocks</span>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-800/80 border border-slate-700/80 text-center">
                        <span class="font-semibold text-sm text-white block">PDF & Word</span>
                        <span class="text-xs text-slate-400 mt-1 block">Vector print export</span>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-800/80 border border-slate-700/80 text-center">
                        <span class="font-semibold text-sm text-white block">Markdown & HTML</span>
                        <span class="text-xs text-slate-400 mt-1 block">Direct code embed</span>
                    </div>
                </div>
            </div>

            <!-- 7. Customer Testimonial -->
            <div class="mt-28 max-w-4xl mx-auto p-8 sm:p-12 rounded-3xl bg-white border border-slate-200/90 shadow-card text-center">
                <div class="flex items-center justify-center gap-1 text-amber-400 mb-6">
                    @for($i = 0; $i < 5; $i++)
                        <svg class="size-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    @endfor
                </div>
                <blockquote class="font-serif-display text-2xl sm:text-3xl text-ink leading-snug">
                    &ldquo;Capturing workflows with SaaSApps cut our support training time from three weeks down to two days. It writes better documentation than our senior engineers could by hand.&rdquo;
                </blockquote>
                <div class="mt-8 flex items-center justify-center gap-2">
                    <span class="inline-flex items-center gap-1.5 text-xs font-semibold text-emerald-700 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200/60">
                        <svg class="size-3.5 fill-current" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Verified Engineering Story</span>
                    </span>
                </div>
            </div>

            <!-- 8. FAQ Accordion -->
            <div class="mt-28 max-w-3xl mx-auto" x-data="{ activeFaq: null }">
                <div class="text-center mb-12">
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink">
                        Frequently asked questions
                    </h2>
                </div>

                <div class="space-y-4">
                    @php
                        $faqs = [
                            ['q' => 'How does the capture process work?', 'a' => 'Simply click "Record" in the browser extension or desktop app. As you navigate and click, SaaSApps monitors DOM interactions and screen coordinates, capturing screenshots and drafting step descriptions in the background.'],
                            ['q' => 'Is our company data secure during capture?', 'a' => 'Yes. SaaSApps features client-side heuristic redaction. Sensitive data such as credit card numbers, personal identifiers, and passwords are automatically blurred directly in your browser before any screenshot is transmitted.'],
                            ['q' => 'Can I edit the screenshots and text after recording?', 'a' => 'Absolutely. You have a full visual editor: add callouts, arrows, click pins, redact additional zones, crop images, replace text instructions, or reorder steps with simple drag-and-drop.'],
                            ['q' => 'Does it work with native desktop applications?', 'a' => 'Yes! The SaaSApps desktop app for Windows and macOS records any application running on your computer, including Excel, ERPs, command line terminals, and legacy internal software.'],
                            ['q' => 'How do I share created guides with my team?', 'a' => 'You can share via public or password-protected link, invite teammates to your workspace, embed directly into Confluence or Notion, or export to PDF, Word, and Markdown.'],
                            ['q' => 'Can autonomous AI agents read SaaSApps guides?', 'a' => 'Yes. SaaSApps provides a Model Context Protocol (MCP) server and REST API, enabling AI agents like Claude Desktop, Cursor, or internal LLM pipelines to execute documented workflows reliably.'],
                        ];
                    @endphp

                    @foreach ($faqs as $idx => $faq)
                        <div class="p-6 rounded-2xl bg-white border border-slate-200/90 shadow-subtle">
                            <button type="button"
                                    @click="activeFaq = (activeFaq === {{ $idx }} ? null : {{ $idx }})"
                                    class="w-full flex items-center justify-between text-left font-semibold text-ink">
                                <span>{{ $faq['q'] }}</span>
                                <svg class="size-4 text-slate-400 transition-transform duration-200"
                                     :class="activeFaq === {{ $idx }} ? 'rotate-180' : ''"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="activeFaq === {{ $idx }}" x-cloak class="mt-3 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                                {{ $faq['a'] }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- 9. Bottom Scribe-Style CTA Banner -->
            <div class="mt-28 max-w-5xl mx-auto rounded-3xl bg-white border border-slate-200/90 p-8 sm:p-14 shadow-card flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="max-w-xl text-center md:text-left">
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink leading-tight">
                        Ready to capture your first workflow?
                    </h2>
                    <p class="text-sm text-slate-600 mt-2">
                        Install the extension and create your first standard operating procedure in under 60 seconds.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-3 w-full md:w-auto">
                    <a href="{{ route('contact-us') }}" class="w-full sm:w-auto px-7 py-3 rounded-full text-center text-sm font-semibold text-white bg-charcoal hover:bg-slate-900 transition-all">
                        Start Capturing Free
                    </a>
                    <a href="{{ route('demo') }}" class="w-full sm:w-auto px-7 py-3 rounded-full text-center text-sm font-semibold text-slate-800 bg-slate-100 hover:bg-slate-200 transition-all">
                        Talk to Sales
                    </a>
                </div>
            </div>
        </div>
    </main>
</x-landing-layout>
