<x-landing-layout>
    <main class="w-full bg-paper py-16 md:py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-50 border border-brand-200 text-xs font-semibold text-brand-800 mb-6 shadow-2xs">
                    <span class="size-2 rounded-full bg-brand-500 animate-pulse"></span>
                    <span>Product Changelog &bull; Continuous Delivery</span>
                </div>
                <h1 class="font-serif-display text-4xl sm:text-5xl font-semibold text-ink leading-[1.1] tracking-tight">
                    What's New in SaaSApps
                </h1>
                <p class="text-base sm:text-lg text-slate-600 mt-4 max-w-xl mx-auto">
                    New features, workflow engine enhancements, and platform updates shipped directly to production.
                </p>
            </div>

            <div class="space-y-12 border-l-2 border-slate-200 pl-6 md:pl-8 ml-4">
                <!-- Update 1: v3.8.0 -->
                <div class="relative bg-white p-6 sm:p-8 rounded-3xl border border-slate-200/90 shadow-subtle">
                    <div class="size-3.5 rounded-full bg-brand-500 absolute -left-[31px] md:-left-[39px] top-8 border-2 border-paper"></div>
                    <div class="flex flex-wrap items-center justify-between gap-2 pb-4 border-b border-slate-100">
                        <div class="flex items-center gap-2">
                            <span class="text-xs font-bold text-brand-600 bg-brand-50 px-2.5 py-0.5 rounded-full border border-brand-200 uppercase tracking-wider">v3.8.0</span>
                            <span class="text-xs font-semibold text-slate-700">Model Context Protocol (MCP) Server Launch</span>
                        </div>
                        <span class="text-xs font-mono text-slate-400">November 2026</span>
                    </div>
                    <p class="text-sm text-slate-600 mt-4 leading-relaxed">
                        Connect any autonomous AI agent (including Claude Desktop, Cursor, and custom internal LLM runners) directly to your documented company workflows. Agents can now retrieve verified, step-by-step ground truth context with exact DOM selectors and zero hallucination.
                    </p>
                    <div class="mt-4 p-4 rounded-xl bg-slate-900 text-emerald-400 font-mono text-xs overflow-x-auto">
                        <code>npx -y @saasapps/mcp-server@latest --api-key=$SAASAPPS_API_KEY</code>
                    </div>
                </div>

                <!-- Update 2: v3.7.2 -->
                <div class="relative bg-white p-6 sm:p-8 rounded-3xl border border-slate-200/90 shadow-subtle">
                    <div class="size-3.5 rounded-full bg-slate-400 absolute -left-[31px] md:-left-[39px] top-8 border-2 border-paper"></div>
                    <div class="flex flex-wrap items-center justify-between gap-2 pb-4 border-b border-slate-100">
                        <div class="flex items-center gap-2">
                            <span class="text-xs font-bold text-blue-600 bg-blue-50 px-2.5 py-0.5 rounded-full border border-blue-200 uppercase tracking-wider">v3.7.2</span>
                            <span class="text-xs font-semibold text-slate-700">Multi-Monitor Desktop Capture Engine</span>
                        </div>
                        <span class="text-xs font-mono text-slate-400">October 2026</span>
                    </div>
                    <p class="text-sm text-slate-600 mt-4 leading-relaxed">
                        Record complex desktop workflows seamlessly across multiple 4K displays on macOS and Windows with zero lag. Automatically tracks active window switching between Terminal, Excel, SAP, and browser tabs.
                    </p>
                </div>

                <!-- Update 3: v3.6.0 -->
                <div class="relative bg-white p-6 sm:p-8 rounded-3xl border border-slate-200/90 shadow-subtle">
                    <div class="size-3.5 rounded-full bg-slate-400 absolute -left-[31px] md:-left-[39px] top-8 border-2 border-paper"></div>
                    <div class="flex flex-wrap items-center justify-between gap-2 pb-4 border-b border-slate-100">
                        <div class="flex items-center gap-2">
                            <span class="text-xs font-bold text-amber-600 bg-amber-50 px-2.5 py-0.5 rounded-full border border-amber-200 uppercase tracking-wider">v3.6.0</span>
                            <span class="text-xs font-semibold text-slate-700">Automated Client-Side Heuristic PII Masking</span>
                        </div>
                        <span class="text-xs font-mono text-slate-400">September 2026</span>
                    </div>
                    <p class="text-sm text-slate-600 mt-4 leading-relaxed">
                        Enhanced regex and computer vision models identify and blur sensitive client credentials, credit card numbers, and auth tokens directly in your browser before any screenshot data is uploaded.
                    </p>
                </div>

                <!-- Update 4: v3.5.0 -->
                <div class="relative bg-white p-6 sm:p-8 rounded-3xl border border-slate-200/90 shadow-subtle">
                    <div class="size-3.5 rounded-full bg-slate-400 absolute -left-[31px] md:-left-[39px] top-8 border-2 border-paper"></div>
                    <div class="flex flex-wrap items-center justify-between gap-2 pb-4 border-b border-slate-100">
                        <div class="flex items-center gap-2">
                            <span class="text-xs font-bold text-purple-600 bg-purple-50 px-2.5 py-0.5 rounded-full border border-purple-200 uppercase tracking-wider">v3.5.0</span>
                            <span class="text-xs font-semibold text-slate-700">50+ Language AI Translation Suite</span>
                        </div>
                        <span class="text-xs font-mono text-slate-400">August 2026</span>
                    </div>
                    <p class="text-sm text-slate-600 mt-4 leading-relaxed">
                        One-click localization for global organizations. Instantly translate verified SOPs into Spanish, Japanese, German, French, Mandarin, and 45 other languages with context-aware terminology preservation.
                    </p>
                </div>
            </div>

            <!-- Bottom CTA -->
            <div class="mt-20 p-8 rounded-3xl bg-charcoal text-white text-center flex flex-col sm:flex-row items-center justify-between gap-6">
                <div class="text-left">
                    <h3 class="text-lg font-serif-display font-semibold">Stay ahead of every release</h3>
                    <p class="text-xs text-slate-400 mt-1">Get release notes delivered straight to your inbox monthly.</p>
                </div>
                <a href="{{ route('contact-us') }}" class="px-6 py-2.5 rounded-full text-xs font-semibold text-slate-900 bg-white hover:bg-slate-100 transition-colors">
                    Subscribe to Updates
                </a>
            </div>
        </div>
    </main>
</x-landing-layout>
