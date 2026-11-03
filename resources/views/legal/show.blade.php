<x-landing-layout>
    <main class="w-full bg-paper py-16 md:py-24">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-12 pb-8 border-b border-slate-200">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-100 text-slate-800 text-xs font-semibold mb-4">
                    <span>Legal &amp; Regulatory Compliance</span>
                </div>
                <h1 class="font-serif-display text-4xl sm:text-5xl font-semibold text-ink leading-tight">
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
                <p class="text-xs font-mono text-slate-500 mt-3">
                    Effective Date: November 1, 2026 &bull; Version 4.2 &bull; Applicable Globally
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Left: Quick Navigation -->
                <div class="lg:col-span-4">
                    <div class="sticky top-28 p-6 rounded-2xl bg-white border border-slate-200/90 shadow-subtle space-y-2">
                        <span class="text-xs uppercase tracking-wider text-slate-400 font-semibold block mb-3">Legal Documents</span>
                        <a href="{{ route('legal.show', 'privacy') }}" class="block px-3 py-2 rounded-lg text-xs font-semibold transition-colors {{ $page === 'privacy' ? 'bg-brand-50 text-brand-700' : 'text-slate-600 hover:bg-slate-50 hover:text-ink' }}">
                            Privacy Policy
                        </a>
                        <a href="{{ route('legal.show', 'terms') }}" class="block px-3 py-2 rounded-lg text-xs font-semibold transition-colors {{ $page === 'terms' ? 'bg-brand-50 text-brand-700' : 'text-slate-600 hover:bg-slate-50 hover:text-ink' }}">
                            Terms of Service
                        </a>
                        <a href="{{ route('legal.show', 'cookies') }}" class="block px-3 py-2 rounded-lg text-xs font-semibold transition-colors {{ $page === 'cookies' ? 'bg-brand-50 text-brand-700' : 'text-slate-600 hover:bg-slate-50 hover:text-ink' }}">
                            Cookie Policy
                        </a>
                        <a href="{{ route('legal.show', 'dpa') }}" class="block px-3 py-2 rounded-lg text-xs font-semibold transition-colors {{ $page === 'dpa' ? 'bg-brand-50 text-brand-700' : 'text-slate-600 hover:bg-slate-50 hover:text-ink' }}">
                            Data Processing Addendum (DPA)
                        </a>
                        <a href="{{ route('security') }}" class="block px-3 py-2 rounded-lg text-xs font-semibold text-slate-600 hover:bg-slate-50 hover:text-ink transition-colors">
                            Security &amp; Trust Center &rarr;
                        </a>
                    </div>
                </div>

                <!-- Right: Legal Document Content -->
                <div class="lg:col-span-8 prose prose-slate max-w-none text-slate-700 space-y-8 leading-relaxed text-sm sm:text-base">
                    @if ($page === 'privacy')
                        <div>
                            <h2 class="font-serif-display text-2xl font-semibold text-ink">1. Overview &amp; Scope</h2>
                            <p class="mt-3">
                                SaaSApps ("we", "our", or "us") is dedicated to safeguarding the privacy and security of our users and enterprise customers. This Privacy Policy details how we collect, process, isolate, and protect your information when utilizing our web extensions, desktop applications, cloud platforms, and Model Context Protocol (MCP) servers.
                            </p>
                        </div>

                        <div>
                            <h2 class="font-serif-display text-2xl font-semibold text-ink">2. Client-Side Heuristic Redaction</h2>
                            <p class="mt-3">
                                Prior to transmitting any captured screenshot or workflow telemetry to our secure cloud servers, our client software runs localized redaction heuristics. Credit card numbers, passwords, API tokens, national identification numbers, and personal email addresses are automatically obfuscated directly in memory on your device.
                            </p>
                        </div>

                        <div>
                            <h2 class="font-serif-display text-2xl font-semibold text-ink">3. Data Retention &amp; Zero AI Training</h2>
                            <p class="mt-3">
                                We maintain strict enterprise isolation barriers. Under no circumstances do we sell, monetize, or use your proprietary workflows, screenshots, or internal procedures to train foundational or third-party artificial intelligence models.
                            </p>
                        </div>

                        <div>
                            <h2 class="font-serif-display text-2xl font-semibold text-ink">4. International Transfers &amp; GDPR</h2>
                            <p class="mt-3">
                                For customers situated in the European Economic Area (EEA), the United Kingdom, or Switzerland, all data transfers are governed under the European Commission's Standard Contractual Clauses (SCCs). Customers can choose dedicated EU data residency within our Frankfurt hosting zone.
                            </p>
                        </div>

                    @elseif ($page === 'terms')
                        <div>
                            <h2 class="font-serif-display text-2xl font-semibold text-ink">1. Agreement to Terms</h2>
                            <p class="mt-3">
                                By installing our browser extension, downloading the desktop recorder, or accessing the SaaSApps platform, you agree to be bound by these Terms of Service and all incorporated policies. If you are accepting on behalf of an enterprise entity, you warrant that you have authority to bind that entity.
                            </p>
                        </div>

                        <div>
                            <h2 class="font-serif-display text-2xl font-semibold text-ink">2. License &amp; Permitted Use</h2>
                            <p class="mt-3">
                                SaaSApps grants you a non-exclusive, non-transferable, revocable license to record, edit, standardize, and share internal standard operating procedures for your organization's business purposes, subject to your subscription plan's seat limits and terms.
                            </p>
                        </div>

                        <div>
                            <h2 class="font-serif-display text-2xl font-semibold text-ink">3. Intellectual Property Rights</h2>
                            <p class="mt-3">
                                You retain sole and exclusive ownership of all content, workflow documentation, screenshots, and procedural assets captured through our software. SaaSApps claims no ownership rights over your organizational procedures.
                            </p>
                        </div>

                        <div>
                            <h2 class="font-serif-display text-2xl font-semibold text-ink">4. Service Level Agreements &amp; Uptime</h2>
                            <p class="mt-3">
                                Enterprise accounts benefit from our 99.99% operational availability commitment, backed by service credits described in our Enterprise Master Services Agreement.
                            </p>
                        </div>

                    @elseif ($page === 'cookies')
                        <div>
                            <h2 class="font-serif-display text-2xl font-semibold text-ink">1. How We Use Cookies</h2>
                            <p class="mt-3">
                                We use strictly necessary cookies to manage authentication sessions, remember user interface preferences, and ensure network security. We do not use third-party tracking pixels to sell your behavioral data across third-party websites.
                            </p>
                        </div>

                        <div>
                            <h2 class="font-serif-display text-2xl font-semibold text-ink">2. Cookie Categories</h2>
                            <ul class="mt-3 space-y-2 list-disc list-inside">
                                <li><strong>Essential Cookies:</strong> Required for secure login, CSRF protection, and account routing.</li>
                                <li><strong>Functional Cookies:</strong> Preserve your editor preferences, sidebar state, and theme settings.</li>
                                <li><strong>Performance Cookies:</strong> Aggregated anonymous latency telemetry to monitor API response times.</li>
                            </ul>
                        </div>

                    @elseif ($page === 'dpa')
                        <div>
                            <h2 class="font-serif-display text-2xl font-semibold text-ink">1. Data Processing Scope</h2>
                            <p class="mt-3">
                                This Data Processing Addendum ("DPA") supplements the SaaSApps Terms of Service when customer data processed through our services is subject to European Data Protection Legislation (including GDPR and UK DPA) or the California Consumer Privacy Act (CCPA).
                            </p>
                        </div>

                        <div>
                            <h2 class="font-serif-display text-2xl font-semibold text-ink">2. Security Measures &amp; Subprocessors</h2>
                            <p class="mt-3">
                                SaaSApps implements and maintains technical and organizational measures as verified in our SOC 2 Type II audit. Our subprocessor list is reviewed quarterly, and enterprise customers are notified at least 30 days prior to onboarding any new cloud subprocessor.
                            </p>
                        </div>

                    @else
                        <div>
                            <h2 class="font-serif-display text-2xl font-semibold text-ink">Regulatory Notice</h2>
                            <p class="mt-3">
                                At SaaSApps, we maintain uncompromising compliance with international data privacy statutes, enterprise security frameworks, and zero-trust architectural principles.
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </main>
</x-landing-layout>
