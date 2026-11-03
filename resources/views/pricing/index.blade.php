<x-landing-layout>
    <main class="w-full bg-paper py-20 md:py-28" x-data="{ annual: true }">
        <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header & Billing Toggle -->
            <div class="max-w-3xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-50 border border-brand-200 text-xs font-semibold text-brand-800 mb-6">
                    <span class="size-1.5 rounded-full bg-brand-500"></span>
                    <span>Simple, Transparent Pricing</span>
                </div>
                <h1 class="font-serif-display text-4xl sm:text-5xl md:text-6xl font-semibold text-ink leading-tight tracking-tight">
                    Document effortlessly. Scale intelligently.
                </h1>
                <p class="text-lg text-slate-600 mt-6 leading-relaxed">
                    Choose the plan that fits your team. Start free or upgrade for desktop recording, smart redaction, and enterprise-grade security.
                </p>

                <!-- Billing Toggle -->
                <div class="mt-10 inline-flex items-center gap-3 p-1.5 rounded-full bg-white border border-slate-200/90 shadow-subtle">
                    <button type="button"
                            @click="annual = false"
                            :class="!annual ? 'bg-charcoal text-white shadow-xs' : 'text-slate-600 hover:text-ink'"
                            class="px-5 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all">
                        Monthly billing
                    </button>
                    <button type="button"
                            @click="annual = true"
                            :class="annual ? 'bg-charcoal text-white shadow-xs' : 'text-slate-600 hover:text-ink'"
                            class="px-5 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all flex items-center gap-1.5">
                        <span>Annual billing</span>
                        <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-brand-500 text-white">Save 20%</span>
                    </button>
                </div>
            </div>

            <!-- 4 Pricing Cards -->
            <div class="mt-16 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 max-w-7xl mx-auto">
                <!-- Basic Plan -->
                <div class="p-8 rounded-3xl bg-white border border-slate-200 shadow-subtle flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-bold text-ink">Basic</h3>
                        <p class="text-xs text-slate-500 mt-1">For individuals testing automatic capture.</p>
                        <div class="mt-6 flex items-baseline gap-1">
                            <span class="text-4xl font-serif-display font-bold text-ink">$0</span>
                            <span class="text-xs text-slate-500">/ forever</span>
                        </div>
                        <ul class="mt-8 space-y-3 text-xs sm:text-sm text-slate-600">
                            <li class="flex items-center gap-2">
                                <span class="size-1.5 rounded-full bg-brand-500"></span>
                                <span>Web-only capture extension</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="size-1.5 rounded-full bg-brand-500"></span>
                                <span>Unlimited basic guides</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="size-1.5 rounded-full bg-brand-500"></span>
                                <span>Public link sharing & embeds</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <a href="{{ route('contact-us') }}" class="w-full flex items-center justify-center py-2.5 rounded-full border border-slate-200 text-sm font-semibold text-slate-800 hover:bg-slate-50 transition-colors">
                            Get Started Free
                        </a>
                    </div>
                </div>

                <!-- Pro Personal -->
                <div class="p-8 rounded-3xl bg-white border border-slate-200 shadow-subtle flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-bold text-ink">Pro Personal</h3>
                        <p class="text-xs text-slate-500 mt-1">For power users and solo creators.</p>
                        <div class="mt-6 flex items-baseline gap-1">
                            <span class="text-4xl font-serif-display font-bold text-ink" x-text="annual ? '$23' : '$29'">$23</span>
                            <span class="text-xs text-slate-500">/ user / mo</span>
                        </div>
                        <ul class="mt-8 space-y-3 text-xs sm:text-sm text-slate-600">
                            <li class="flex items-center gap-2">
                                <span class="size-1.5 rounded-full bg-brand-500"></span>
                                <span>Desktop app & web capture</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="size-1.5 rounded-full bg-brand-500"></span>
                                <span>Screenshot editor & crop tool</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="size-1.5 rounded-full bg-brand-500"></span>
                                <span>PDF and Markdown export</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="size-1.5 rounded-full bg-brand-500"></span>
                                <span>Manual sensitive data redaction</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <a href="{{ route('contact-us') }}" class="w-full flex items-center justify-center py-2.5 rounded-full bg-slate-100 hover:bg-slate-200 text-sm font-semibold text-slate-900 transition-colors">
                            Start Pro Trial
                        </a>
                    </div>
                </div>

                <!-- Pro Team (Highlighted) -->
                <div class="p-8 rounded-3xl bg-charcoal border-2 border-brand-500 shadow-card text-white flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-4 right-4">
                        <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-brand-500 text-white uppercase tracking-wider">
                            Popular
                        </span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-white">Pro Team</h3>
                        <p class="text-xs text-slate-400 mt-1">For fast-moving collaborative teams.</p>
                        <div class="mt-6 flex items-baseline gap-1">
                            <span class="text-4xl font-serif-display font-bold text-white" x-text="annual ? '$12' : '$15'">$12</span>
                            <span class="text-xs text-slate-400">/ user / mo</span>
                        </div>
                        <span class="text-[11px] text-brand-400 mt-1 block">5 seats minimum</span>
                        <ul class="mt-8 space-y-3 text-xs sm:text-sm text-slate-300">
                            <li class="flex items-center gap-2">
                                <span class="size-1.5 rounded-full bg-brand-400"></span>
                                <span>Shared team workspace</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="size-1.5 rounded-full bg-brand-400"></span>
                                <span>Custom brand colors & logos</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="size-1.5 rounded-full bg-brand-400"></span>
                                <span>HTML embed & Confluence sync</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="size-1.5 rounded-full bg-brand-400"></span>
                                <span>Role-based team permissions</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <a href="{{ route('contact-us') }}" class="w-full flex items-center justify-center py-2.5 rounded-full bg-brand-500 hover:bg-brand-600 text-sm font-semibold text-white shadow-sm transition-colors">
                            Upgrade to Team
                        </a>
                    </div>
                </div>

                <!-- Enterprise -->
                <div class="p-8 rounded-3xl bg-white border border-slate-200 shadow-subtle flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-bold text-ink">Enterprise</h3>
                        <p class="text-xs text-slate-500 mt-1">For organizations needing advanced security.</p>
                        <div class="mt-6 flex items-baseline gap-1">
                            <span class="text-4xl font-serif-display font-bold text-ink">Custom</span>
                        </div>
                        <span class="text-[11px] text-slate-500 mt-1 block">Custom seat packs</span>
                        <ul class="mt-8 space-y-3 text-xs sm:text-sm text-slate-600">
                            <li class="flex items-center gap-2">
                                <span class="size-1.5 rounded-full bg-brand-500"></span>
                                <span>Automated PII/PHI redaction</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="size-1.5 rounded-full bg-brand-500"></span>
                                <span>SAML SSO & SCIM provisioning</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="size-1.5 rounded-full bg-brand-500"></span>
                                <span>MCP Server & Full REST API</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="size-1.5 rounded-full bg-brand-500"></span>
                                <span>Dedicated Customer Success</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <a href="{{ route('demo') }}" class="w-full flex items-center justify-center py-2.5 rounded-full border border-slate-300 hover:border-slate-400 text-sm font-semibold text-slate-900 transition-colors">
                            Talk to Sales
                        </a>
                    </div>
                </div>
            </div>

            <!-- Comparison Table -->
            <div class="mt-28 max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink">Compare full features</h2>
                    <p class="text-slate-600 text-sm mt-2">Every feature broken down across all four plans.</p>
                </div>

                <div class="overflow-x-auto rounded-3xl border border-slate-200 bg-white shadow-subtle">
                    <table class="w-full text-left border-collapse min-w-[700px]">
                        <thead>
                            <tr class="border-b border-slate-200 bg-slate-50/70 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                <th class="p-5 w-1/3">Feature Category</th>
                                <th class="p-5 text-center">Basic</th>
                                <th class="p-5 text-center">Pro Personal</th>
                                <th class="p-5 text-center text-brand-600">Pro Team</th>
                                <th class="p-5 text-center">Enterprise</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-xs sm:text-sm text-slate-700">
                            <!-- Category: Usage -->
                            <tr class="bg-slate-50/40 font-semibold text-ink text-xs uppercase tracking-wider">
                                <td colspan="5" class="py-3 px-5">1. Usage & Creation</td>
                            </tr>
                            <tr>
                                <td class="py-3.5 px-5">Automatic workflow capture</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                            </tr>
                            <tr>
                                <td class="py-3.5 px-5">Desktop application recording</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                            </tr>
                            <tr>
                                <td class="py-3.5 px-5">AI-generated document titles & steps</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                            </tr>

                            <!-- Category: Customization -->
                            <tr class="bg-slate-50/40 font-semibold text-ink text-xs uppercase tracking-wider">
                                <td colspan="5" class="py-3 px-5">2. Customization & Branding</td>
                            </tr>
                            <tr>
                                <td class="py-3.5 px-5">Screenshot annotation & blur</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                            </tr>
                            <tr>
                                <td class="py-3.5 px-5">Custom organization branding</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                            </tr>

                            <!-- Category: Security -->
                            <tr class="bg-slate-50/40 font-semibold text-ink text-xs uppercase tracking-wider">
                                <td colspan="5" class="py-3 px-5">3. Security & Compliance</td>
                            </tr>
                            <tr>
                                <td class="py-3.5 px-5">Automated PII/PHI redaction</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center text-brand-600 font-bold">&check;</td>
                            </tr>
                            <tr>
                                <td class="py-3.5 px-5">SAML 2.0 Single Sign-On (SSO)</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center text-brand-600 font-bold">&check;</td>
                            </tr>

                            <!-- Category: Sharing -->
                            <tr class="bg-slate-50/40 font-semibold text-ink text-xs uppercase tracking-wider">
                                <td colspan="5" class="py-3 px-5">4. Sharing & Exports</td>
                            </tr>
                            <tr>
                                <td class="py-3.5 px-5">PDF & Word Document export</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                            </tr>
                            <tr>
                                <td class="py-3.5 px-5">Model Context Protocol (MCP) server access</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center text-brand-600 font-bold">&check;</td>
                            </tr>

                            <!-- Category: Support & SLAs -->
                            <tr class="bg-slate-50/40 font-semibold text-ink text-xs uppercase tracking-wider">
                                <td colspan="5" class="py-3 px-5">5. Support, SLAs &amp; Governance</td>
                            </tr>
                            <tr>
                                <td class="py-3.5 px-5">Standard community &amp; email support</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                                <td class="py-3.5 px-5 text-center">&check;</td>
                            </tr>
                            <tr>
                                <td class="py-3.5 px-5">Priority support queue &amp; live chat</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center text-brand-600 font-bold">&check;</td>
                                <td class="py-3.5 px-5 text-center text-brand-600 font-bold">&check;</td>
                            </tr>
                            <tr>
                                <td class="py-3.5 px-5">Dedicated Customer Success Manager</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center text-brand-600 font-bold">&check;</td>
                            </tr>
                            <tr>
                                <td class="py-3.5 px-5">99.99% Uptime Service Level Agreement (SLA)</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center text-slate-300">&mdash;</td>
                                <td class="py-3.5 px-5 text-center text-brand-600 font-bold">&check;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pricing FAQ Accordion -->
            <div class="mt-28 max-w-3xl mx-auto" x-data="{ activeFaq: null }">
                <div class="text-center mb-12">
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink">
                        Frequently asked pricing questions
                    </h2>
                </div>

                <div class="space-y-4">
                    @php
                        $pricingFaqs = [
                            ['q' => 'Can I switch between monthly and annual billing?', 'a' => 'Yes. You can switch plans at any time. When upgrading from monthly to annual, you will immediately receive the 20% discount on the remaining term.'],
                            ['q' => 'What happens when my team exceeds our seat limit?', 'a' => 'Workspace admins can add additional seats instantly from the billing settings page, prorated for the current billing cycle.'],
                            ['q' => 'Do you offer non-profit or educational discounts?', 'a' => 'Yes! We offer 50% discounts for verified non-profit organizations and accredited educational institutions. Reach out to support to verify eligibility.'],
                            ['q' => 'How does the free Basic plan work?', 'a' => 'The Basic plan allows individuals to capture unlimited web-based guides using our Chrome and Edge browser extensions forever with zero credit card required.'],
                            ['q' => 'What payment methods do you accept?', 'a' => 'We accept all major credit cards (Visa, MasterCard, American Express). For Enterprise contracts exceeding $5,000/year, we support invoicing via ACH and wire transfer with Net 30 terms.'],
                            ['q' => 'Is there a minimum contract term for Enterprise?', 'a' => 'Enterprise agreements are billed annually and can include custom Master Services Agreements (MSAs), custom data processing agreements (DPAs), and bespoke security reviews.'],
                        ];
                    @endphp

                    @foreach ($pricingFaqs as $idx => $faq)
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

            <!-- Bottom Custom Enterprise Banner -->
            <div class="mt-28 max-w-5xl mx-auto rounded-3xl bg-charcoal text-white border border-slate-800 p-8 sm:p-14 shadow-2xl flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="max-w-xl text-center md:text-left">
                    <span class="text-xs uppercase tracking-wider text-brand-400 font-semibold">Enterprise Scale</span>
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-white leading-tight mt-1">
                        Need custom volume pricing or dedicated deployment?
                    </h2>
                    <p class="text-sm text-slate-300 mt-2">
                        Talk with an enterprise architect about multi-department rollout packs, SAML SSO, and private VPC deployment.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-3 w-full md:w-auto">
                    <a href="{{ route('demo') }}" class="w-full sm:w-auto px-7 py-3 rounded-full text-center text-sm font-semibold text-slate-900 bg-white hover:bg-slate-100 transition-all">
                        Talk to Enterprise Sales
                    </a>
                    <a href="{{ route('security') }}" class="w-full sm:w-auto px-7 py-3 rounded-full text-center text-sm font-semibold text-white bg-slate-800 hover:bg-slate-700 transition-all">
                        Security Overview
                    </a>
                </div>
            </div>
        </div>
    </main>
</x-landing-layout>
