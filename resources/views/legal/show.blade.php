<x-landing-layout>
    <main class="flex-1 w-full bg-[#FAFAFA] pt-28 sm:pt-32 md:pt-36 pb-16 md:pb-24">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <header class="mb-8 md:mb-12 pb-6 md:pb-8 border-b border-slate-200/90 text-left">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-100 border border-slate-200/80 text-slate-800 text-xs font-semibold mb-4">
                    <span class="size-1.5 rounded-full bg-slate-500"></span>
                    <span>Legal &amp; Regulatory Compliance</span>
                </div>
                <h1 class="font-serif-display text-3xl sm:text-4xl md:text-5xl font-normal text-slate-900 leading-[1.12] tracking-[-0.025em]">
                    @if ($page === 'privacy')
                        Privacy Policy
                    @elseif ($page === 'terms')
                        Terms of Service
                    @elseif ($page === 'cookies')
                        Cookie Policy &amp; Tracking Notice
                    @elseif ($page === 'dpa')
                        Data Processing Addendum (DPA)
                    @else
                        {{ ucwords(str_replace('-', ' ', $page)) }}
                    @endif
                </h1>
                <p class="text-xs sm:text-sm text-slate-500 mt-3 font-sans">
                    Effective Date: November 1, 2026 &bull; Version 4.2 &bull; Applicable Globally
                </p>
            </header>

            <!-- Mobile Navigation: Sleek horizontal scroll pill bar -->
            <nav class="lg:hidden mb-6 sm:mb-8" aria-label="Legal Documents Navigation">
                <div class="flex items-center justify-between mb-2.5">
                    <span class="text-[11px] font-semibold uppercase tracking-wider text-slate-500">Legal Documents</span>
                    <span class="text-[11px] text-slate-400">Swipe &rarr;</span>
                </div>
                <div class="flex items-center gap-2 overflow-x-auto pb-2 -mx-4 px-4 sm:mx-0 sm:px-0 scrollbar-none no-scrollbar">
                    <a href="{{ route('legal.show', 'privacy') }}"
                       class="whitespace-nowrap px-4 py-2 rounded-full text-xs font-semibold transition-all {{ $page === 'privacy' ? 'bg-slate-900 text-white shadow-xs' : 'bg-white border border-slate-200 text-slate-700 hover:text-black hover:border-slate-300' }}">
                        Privacy Policy
                    </a>
                    <a href="{{ route('legal.show', 'terms') }}"
                       class="whitespace-nowrap px-4 py-2 rounded-full text-xs font-semibold transition-all {{ $page === 'terms' ? 'bg-slate-900 text-white shadow-xs' : 'bg-white border border-slate-200 text-slate-700 hover:text-black hover:border-slate-300' }}">
                        Terms of Service
                    </a>
                    <a href="{{ route('legal.show', 'cookies') }}"
                       class="whitespace-nowrap px-4 py-2 rounded-full text-xs font-semibold transition-all {{ $page === 'cookies' ? 'bg-slate-900 text-white shadow-xs' : 'bg-white border border-slate-200 text-slate-700 hover:text-black hover:border-slate-300' }}">
                        Cookie Policy
                    </a>
                    <a href="{{ route('legal.show', 'dpa') }}"
                       class="whitespace-nowrap px-4 py-2 rounded-full text-xs font-semibold transition-all {{ $page === 'dpa' ? 'bg-slate-900 text-white shadow-xs' : 'bg-white border border-slate-200 text-slate-700 hover:text-black hover:border-slate-300' }}">
                        Data Processing (DPA)
                    </a>
                    <a href="{{ route('security') }}"
                       class="whitespace-nowrap px-4 py-2 rounded-full text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:text-black hover:border-slate-300">
                        Security &amp; Trust &rarr;
                    </a>
                </div>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                <!-- Left: Quick Navigation Sidebar (Desktop) -->
                <aside class="hidden lg:block lg:col-span-4" aria-label="Legal Documents Menu">
                    <div class="sticky top-28 p-5 rounded-2xl bg-white border border-slate-200/90 shadow-xs space-y-1.5">
                        <span class="text-[11px] uppercase tracking-wider text-slate-400 font-semibold block px-3 py-1 mb-2">Legal Documents</span>
                        <a href="{{ route('legal.show', 'privacy') }}" class="block px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-colors {{ $page === 'privacy' ? 'bg-slate-900 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}">
                            Privacy Policy
                        </a>
                        <a href="{{ route('legal.show', 'terms') }}" class="block px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-colors {{ $page === 'terms' ? 'bg-slate-900 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}">
                            Terms of Service
                        </a>
                        <a href="{{ route('legal.show', 'cookies') }}" class="block px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-colors {{ $page === 'cookies' ? 'bg-slate-900 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}">
                            Cookie Policy
                        </a>
                        <a href="{{ route('legal.show', 'dpa') }}" class="block px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-colors {{ $page === 'dpa' ? 'bg-slate-900 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}">
                            Data Processing Addendum (DPA)
                        </a>
                        <div class="pt-3 border-t border-slate-100 mt-3">
                            <a href="{{ route('security') }}" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs font-semibold text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                                <span>Security &amp; Trust Center</span>
                                <span>&rarr;</span>
                            </a>
                        </div>
                    </div>
                </aside>

                <!-- Right: Legal Document Content Card -->
                <article class="lg:col-span-8 bg-white rounded-2xl border border-slate-200/90 p-6 sm:p-8 md:p-10 shadow-xs space-y-8 leading-relaxed text-sm sm:text-base text-slate-700">
                    @if ($page === 'privacy')
                        <div>
                            <h2 class="font-serif-display text-xl sm:text-2xl font-normal text-slate-900 tracking-[-0.01em]">1. Overview &amp; Scope</h2>
                            <p class="mt-3 text-slate-600 leading-relaxed text-sm sm:text-[15px]">
                                SaaSApps ("we", "our", or "us") is dedicated to safeguarding the privacy and security of our users and enterprise customers. This Privacy Policy details how we collect, process, isolate, and protect your information when utilizing our web extensions, desktop applications, cloud platforms, and Model Context Protocol (MCP) servers.
                            </p>
                        </div>

                        <div class="pt-6 border-t border-slate-100">
                            <h2 class="font-serif-display text-xl sm:text-2xl font-normal text-slate-900 tracking-[-0.01em]">2. Client-Side Heuristic Redaction</h2>
                            <p class="mt-3 text-slate-600 leading-relaxed text-sm sm:text-[15px]">
                                Prior to transmitting any captured screenshot or workflow telemetry to our secure cloud servers, our client software runs localized redaction heuristics. Credit card numbers, passwords, API tokens, national identification numbers, and personal email addresses are automatically obfuscated directly in memory on your device.
                            </p>
                        </div>

                        <div class="pt-6 border-t border-slate-100">
                            <h2 class="font-serif-display text-xl sm:text-2xl font-normal text-slate-900 tracking-[-0.01em]">3. Data Retention &amp; Zero AI Training</h2>
                            <p class="mt-3 text-slate-600 leading-relaxed text-sm sm:text-[15px]">
                                We maintain strict enterprise isolation barriers. Under no circumstances do we sell, monetize, or use your proprietary workflows, screenshots, or internal procedures to train foundational or third-party artificial intelligence models.
                            </p>
                        </div>

                        <div class="pt-6 border-t border-slate-100">
                            <h2 class="font-serif-display text-xl sm:text-2xl font-normal text-slate-900 tracking-[-0.01em]">4. International Transfers &amp; GDPR</h2>
                            <p class="mt-3 text-slate-600 leading-relaxed text-sm sm:text-[15px]">
                                For customers situated in the European Economic Area (EEA), the United Kingdom, or Switzerland, all data transfers are governed under the European Commission's Standard Contractual Clauses (SCCs). Customers can choose dedicated EU data residency within our Frankfurt hosting zone.
                            </p>
                        </div>

                    @elseif ($page === 'terms')
                        <div>
                            <h2 class="font-serif-display text-xl sm:text-2xl font-normal text-slate-900 tracking-[-0.01em]">1. Agreement to Terms</h2>
                            <p class="mt-3 text-slate-600 leading-relaxed text-sm sm:text-[15px]">
                                By installing our browser extension, downloading the desktop recorder, or accessing the SaaSApps platform, you agree to be bound by these Terms of Service and all incorporated policies. If you are accepting on behalf of an enterprise entity, you warrant that you have authority to bind that entity.
                            </p>
                        </div>

                        <div class="pt-6 border-t border-slate-100">
                            <h2 class="font-serif-display text-xl sm:text-2xl font-normal text-slate-900 tracking-[-0.01em]">2. License &amp; Permitted Use</h2>
                            <p class="mt-3 text-slate-600 leading-relaxed text-sm sm:text-[15px]">
                                SaaSApps grants you a non-exclusive, non-transferable, revocable license to record, edit, standardize, and share internal standard operating procedures for your organization's business purposes, subject to your subscription plan's seat limits and terms.
                            </p>
                        </div>

                        <div class="pt-6 border-t border-slate-100">
                            <h2 class="font-serif-display text-xl sm:text-2xl font-normal text-slate-900 tracking-[-0.01em]">3. Intellectual Property Rights</h2>
                            <p class="mt-3 text-slate-600 leading-relaxed text-sm sm:text-[15px]">
                                You retain sole and exclusive ownership of all content, workflow documentation, screenshots, and procedural assets captured through our software. SaaSApps claims no ownership rights over your organizational procedures.
                            </p>
                        </div>

                        <div class="pt-6 border-t border-slate-100">
                            <h2 class="font-serif-display text-xl sm:text-2xl font-normal text-slate-900 tracking-[-0.01em]">4. Service Level Agreements &amp; Uptime</h2>
                            <p class="mt-3 text-slate-600 leading-relaxed text-sm sm:text-[15px]">
                                Enterprise accounts benefit from our 99.99% operational availability commitment, backed by service credits described in our Enterprise Master Services Agreement.
                            </p>
                        </div>

                    @elseif ($page === 'cookies')
                        <div>
                            <h2 class="font-serif-display text-xl sm:text-2xl font-normal text-slate-900 tracking-[-0.01em]">1. How We Use Cookies</h2>
                            <p class="mt-3 text-slate-600 leading-relaxed text-sm sm:text-[15px]">
                                We use strictly necessary cookies to manage authentication sessions, remember user interface preferences, and ensure network security. We do not use third-party tracking pixels to sell your behavioral data across third-party websites.
                            </p>
                        </div>

                        <div class="pt-6 border-t border-slate-100">
                            <h2 class="font-serif-display text-xl sm:text-2xl font-normal text-slate-900 tracking-[-0.01em]">2. Cookie Categories</h2>
                            <ul class="mt-3 space-y-2 list-disc list-inside text-slate-600 text-sm sm:text-[15px]">
                                <li><strong class="font-semibold text-slate-900">Essential Cookies:</strong> Required for secure login, CSRF protection, and account routing.</li>
                                <li><strong class="font-semibold text-slate-900">Functional Cookies:</strong> Preserve your editor preferences, sidebar state, and theme settings.</li>
                                <li><strong class="font-semibold text-slate-900">Performance Cookies:</strong> Aggregated anonymous latency telemetry to monitor API response times.</li>
                            </ul>
                        </div>

                    @elseif ($page === 'dpa')
                        <div>
                            <h2 class="font-serif-display text-xl sm:text-2xl font-normal text-slate-900 tracking-[-0.01em]">1. Data Processing Scope</h2>
                            <p class="mt-3 text-slate-600 leading-relaxed text-sm sm:text-[15px]">
                                This Data Processing Addendum ("DPA") supplements the SaaSApps Terms of Service when customer data processed through our services is subject to European Data Protection Legislation (including GDPR and UK DPA) or the California Consumer Privacy Act (CCPA).
                            </p>
                        </div>

                        <div class="pt-6 border-t border-slate-100">
                            <h2 class="font-serif-display text-xl sm:text-2xl font-normal text-slate-900 tracking-[-0.01em]">2. Security Measures &amp; Subprocessors</h2>
                            <p class="mt-3 text-slate-600 leading-relaxed text-sm sm:text-[15px]">
                                SaaSApps implements and maintains technical and organizational measures as verified in our SOC 2 Type II audit. Our subprocessor list is reviewed quarterly, and enterprise customers are notified at least 30 days prior to onboarding any new cloud subprocessor.
                            </p>
                        </div>

                    @else
                        <div>
                            <h2 class="font-serif-display text-xl sm:text-2xl font-normal text-slate-900 tracking-[-0.01em]">Regulatory Notice</h2>
                            <p class="mt-3 text-slate-600 leading-relaxed text-sm sm:text-[15px]">
                                At SaaSApps, we maintain uncompromising compliance with international data privacy statutes, enterprise security frameworks, and zero-trust architectural principles.
                            </p>
                        </div>
                    @endif
                </article>
            </div>
        </div>
    </main>
</x-landing-layout>
