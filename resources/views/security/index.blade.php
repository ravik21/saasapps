<x-landing-layout>
    <main class="w-full bg-paper py-16 md:py-24">
        <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- 1. Hero -->
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-50 border border-emerald-200 text-xs font-semibold text-emerald-800 mb-6 shadow-2xs">
                    <span class="size-2 rounded-full bg-emerald-600 animate-pulse"></span>
                    <span>SOC 2 Type II Certified &bull; ISO 27001 &bull; GDPR &bull; HIPAA Aligned</span>
                </div>
                <h1 class="font-serif-display text-4xl sm:text-5xl md:text-6xl font-semibold text-ink leading-[1.1] tracking-tight">
                    Enterprise security, built in from day one.
                </h1>
                <p class="text-lg sm:text-xl text-slate-600 mt-6 leading-relaxed max-w-3xl mx-auto">
                    We treat your corporate workflows, customer identities, and institutional data with the highest standards of data isolation, privacy, and continuous compliance.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('demo') }}" class="w-full sm:w-auto px-8 py-3.5 rounded-full text-base font-semibold text-white bg-charcoal hover:bg-slate-900 shadow-sm transition-all duration-150">
                        Request Security Packet &amp; SOC 2 Report
                    </a>
                    <a href="{{ route('legal.show', 'privacy') }}" class="w-full sm:w-auto px-8 py-3.5 rounded-full text-base font-semibold text-slate-800 bg-white border border-slate-200 hover:bg-slate-50 transition-all duration-150">
                        View Privacy Policy
                    </a>
                </div>
            </div>

            <!-- 2. Compliance Badges Row -->
            <div class="mt-16 max-w-5xl mx-auto p-6 rounded-3xl bg-white border border-slate-200/90 shadow-subtle">
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 text-center divide-y sm:divide-y-0 sm:divide-x divide-slate-100">
                    <div class="p-3">
                        <span class="text-xs uppercase font-bold text-slate-400 block tracking-wider">Independent Audit</span>
                        <span class="text-xl font-bold text-ink mt-1 block">SOC 2 Type II</span>
                        <span class="text-[11px] text-emerald-600 font-semibold mt-0.5 block">&check; Annual Clean Report</span>
                    </div>
                    <div class="p-3">
                        <span class="text-xs uppercase font-bold text-slate-400 block tracking-wider">Information Security</span>
                        <span class="text-xl font-bold text-ink mt-1 block">ISO / IEC 27001</span>
                        <span class="text-[11px] text-emerald-600 font-semibold mt-0.5 block">&check; Certified ISMS</span>
                    </div>
                    <div class="p-3">
                        <span class="text-xs uppercase font-bold text-slate-400 block tracking-wider">Healthcare Privacy</span>
                        <span class="text-xl font-bold text-ink mt-1 block">HIPAA BAA Ready</span>
                        <span class="text-[11px] text-emerald-600 font-semibold mt-0.5 block">&check; ePHI Safeguards</span>
                    </div>
                    <div class="p-3">
                        <span class="text-xs uppercase font-bold text-slate-400 block tracking-wider">European Union</span>
                        <span class="text-xl font-bold text-ink mt-1 block">GDPR &amp; UK DPA</span>
                        <span class="text-[11px] text-emerald-600 font-semibold mt-0.5 block">&check; Standard Clauses</span>
                    </div>
                </div>
            </div>

            <!-- 3. Four Deep Security Architecture Pillars -->
            <div class="mt-28 max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <span class="text-xs font-semibold uppercase tracking-wider text-brand-600 bg-brand-50 px-3 py-1 rounded-full border border-brand-200">
                        Zero Trust Architecture
                    </span>
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink mt-3">
                        Rigorous defenses across every layer
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Pillar 1 -->
                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle flex flex-col justify-between">
                        <div>
                            <div class="size-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold mb-6">
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                            </div>
                            <h3 class="font-serif-display text-2xl font-semibold text-ink">Zero-Exposure Client-Side Redaction</h3>
                            <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                                Our browser extensions and desktop apps run localized heuristic filters that automatically blur credit card numbers, passwords, auth tokens, social security numbers, and patient health identifiers directly on your device before any image data is transmitted.
                            </p>
                        </div>
                        <div class="mt-8 pt-4 border-t border-slate-100 text-xs font-mono text-slate-500">
                            Pre-Transmission PII Scrubbing
                        </div>
                    </div>

                    <!-- Pillar 2 -->
                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle flex flex-col justify-between">
                        <div>
                            <div class="size-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold mb-6">
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <h3 class="font-serif-display text-2xl font-semibold text-ink">Encryption in Transit &amp; at Rest</h3>
                            <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                                All telemetry and screenshots in transit are protected using TLS 1.3 with modern cipher suites. Stored data is encrypted at rest using AES-256 with tenant-isolated encryption keys managed via AWS Key Management Service (KMS) or Google Cloud KMS.
                            </p>
                        </div>
                        <div class="mt-8 pt-4 border-t border-slate-100 text-xs font-mono text-slate-500">
                            TLS 1.3 &bull; AES-256 &bull; Isolated Tenant Keys
                        </div>
                    </div>

                    <!-- Pillar 3 -->
                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle flex flex-col justify-between">
                        <div>
                            <div class="size-12 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center font-bold mb-6">
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            </div>
                            <h3 class="font-serif-display text-2xl font-semibold text-ink">SAML 2.0 SSO &amp; SCIM Provisioning</h3>
                            <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                                Seamlessly integrate with Okta, Microsoft Entra ID (Azure AD), Google Workspace, OneLogin, and PingIdentity. Automatically provision and de-provision user access in real time based on active directory group memberships.
                            </p>
                        </div>
                        <div class="mt-8 pt-4 border-t border-slate-100 text-xs font-mono text-slate-500">
                            Automated User Lifecycle Management
                        </div>
                    </div>

                    <!-- Pillar 4 -->
                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle flex flex-col justify-between">
                        <div>
                            <div class="size-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold mb-6">
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                            </div>
                            <h3 class="font-serif-display text-2xl font-semibold text-ink">Isolated Infrastructure &amp; VPCs</h3>
                            <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                                Multi-tenant workloads run in isolated compute containers with strict network segmentation. Enterprise dedicated options offer private VPC peering, custom IP allowlisting, and regional data residency across the US, EU, and APAC.
                            </p>
                        </div>
                        <div class="mt-8 pt-4 border-t border-slate-100 text-xs font-mono text-slate-500">
                            SOC 2 Type II Audited Cloud Infrastructure
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. Vulnerability Disclosure & Bug Bounty -->
            <div class="mt-28 max-w-5xl mx-auto p-8 sm:p-12 rounded-3xl bg-slate-900 text-white shadow-2xl">
                <div class="max-w-2xl">
                    <span class="text-xs uppercase tracking-wider text-brand-400 font-mono font-semibold">Continuous Verification</span>
                    <h2 class="font-serif-display text-3xl font-semibold text-white mt-2">
                        Responsible Disclosure &amp; Bug Bounty
                    </h2>
                    <p class="text-sm text-slate-300 mt-3 leading-relaxed">
                        We partner with top independent security researchers to audit our systems continuously. If you believe you have discovered a security vulnerability in SaaSApps, please report it to our team.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-4 text-xs font-mono">
                        <span class="px-3 py-1.5 rounded-lg bg-slate-800 border border-slate-700 text-slate-300">security@saasapps.com</span>
                        <span class="px-3 py-1.5 rounded-lg bg-slate-800 border border-slate-700 text-emerald-400">&check; Safe Harbor Policy Enacted</span>
                    </div>
                </div>
            </div>

            <!-- 5. Security FAQ Accordion -->
            <div class="mt-28 max-w-3xl mx-auto" x-data="{ activeFaq: null }">
                <div class="text-center mb-12">
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink">
                        Frequently asked security questions
                    </h2>
                </div>

                <div class="space-y-4">
                    @php
                        $secFaqs = [
                            ['q' => 'Do you use customer data or workflow screenshots to train public AI models?', 'a' => 'No, never. We have strict data segregation policies. Customer workflows, screenshots, and telemetry are strictly isolated and are never used to train public or foundational models.'],
                            ['q' => 'Where is our data stored and can we choose data residency?', 'a' => 'Our primary infrastructure is hosted in AWS US-East (N. Virginia) and AWS EU-Central (Frankfurt). Enterprise customers can select their preferred data residency region to maintain strict GDPR or national compliance.'],
                            ['q' => 'Can we sign a Business Associate Agreement (BAA) for HIPAA compliance?', 'a' => 'Yes. Enterprise customers in healthcare and health technology can execute a standard BAA covering our web, desktop, and storage infrastructure.'],
                            ['q' => 'How often are penetration tests conducted?', 'a' => 'Independent third-party penetration testing firms perform comprehensive black-box and grey-box audits of our application, API, and cloud infrastructure at least twice annually.'],
                        ];
                    @endphp

                    @foreach ($secFaqs as $idx => $faq)
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

            <!-- Bottom CTA -->
            <div class="mt-28 max-w-5xl mx-auto rounded-3xl bg-white border border-slate-200/90 p-8 sm:p-14 shadow-card flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="max-w-xl text-center md:text-left">
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink leading-tight">
                        Have custom compliance requirements?
                    </h2>
                    <p class="text-sm text-slate-600 mt-2">
                        Our security officers will complete your vendor assessment questionnaire and provide full audit documentation.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-3 w-full md:w-auto">
                    <a href="{{ route('demo') }}" class="w-full sm:w-auto px-7 py-3 rounded-full text-center text-sm font-semibold text-white bg-charcoal hover:bg-slate-900 transition-all">
                        Request Security Audit Packet
                    </a>
                </div>
            </div>
        </div>
    </main>
</x-landing-layout>
