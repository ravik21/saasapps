<x-landing-layout>
    <main class="w-full bg-paper py-16 md:py-24">
        <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- 1. Hero -->
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-200 text-xs font-semibold text-blue-800 mb-6 shadow-2xs">
                    <span class="size-2 rounded-full bg-blue-600 animate-pulse"></span>
                    <span>Process Telemetry & Workflow Intelligence</span>
                </div>
                <h1 class="font-serif-display text-4xl sm:text-5xl md:text-6xl font-semibold text-ink leading-[1.1] tracking-tight">
                    Now you can understand how your team actually works.
                </h1>
                <p class="text-lg sm:text-xl text-slate-600 mt-6 leading-relaxed max-w-2xl mx-auto">
                    Identify hidden bottlenecks, eliminate redundant software steps, and uncover automation opportunities across your entire operational ecosystem.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('demo') }}" class="w-full sm:w-auto px-8 py-3.5 rounded-full text-base font-semibold text-white bg-charcoal hover:bg-slate-900 shadow-sm transition-all duration-150">
                        Request Enterprise Demo
                    </a>
                    <a href="{{ route('pricing') }}" class="w-full sm:w-auto px-8 py-3.5 rounded-full text-base font-semibold text-slate-800 bg-white border border-slate-200 hover:bg-slate-50 transition-all duration-150">
                        View Pricing Plans
                    </a>
                </div>
                <p class="text-xs text-slate-500 mt-4">Continuous operational audit &bull; Real-time latency tracking &bull; SOC 2 Type II Certified</p>
            </div>

            <!-- 2. Process Telemetry Dashboard Mockup (Charcoal Theme) -->
            <div class="mt-16 max-w-5xl mx-auto rounded-3xl p-6 sm:p-10 bg-charcoal border border-slate-800 shadow-2xl text-white">
                <!-- Header of dashboard -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-6 border-b border-slate-800 gap-4">
                    <div>
                        <div class="flex items-center gap-2">
                            <span class="size-2 rounded-full bg-emerald-400"></span>
                            <span class="text-xs uppercase tracking-wider text-slate-400 font-mono">Live Process Stream</span>
                        </div>
                        <h3 class="text-lg font-semibold text-white mt-1">Enterprise Telemetry & Bottleneck Radar</h3>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/30 text-xs font-medium text-emerald-400">
                            +34.2% Efficiency Gain
                        </span>
                        <span class="px-3 py-1 rounded-full bg-slate-800 text-xs text-slate-300">
                            Last 30 Days
                        </span>
                    </div>
                </div>

                <!-- 3 Metrics KPI Cards -->
                <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-6 rounded-2xl bg-slate-900/90 border border-slate-800">
                        <span class="text-xs uppercase tracking-wider text-slate-400 font-semibold">Critical Bottlenecks</span>
                        <div class="text-4xl font-serif-display font-bold text-white mt-2">18</div>
                        <p class="text-xs text-amber-400 mt-2 flex items-center gap-1">
                            <span>&darr; 4.2 hrs average delay resolved</span>
                        </p>
                    </div>
                    <div class="p-6 rounded-2xl bg-slate-900/90 border border-slate-800">
                        <span class="text-xs uppercase tracking-wider text-slate-400 font-semibold">Automation Feasible</span>
                        <div class="text-4xl font-serif-display font-bold text-brand-400 mt-2">72%</div>
                        <p class="text-xs text-slate-400 mt-2">High-confidence robotic & agentic triggers</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-slate-900/90 border border-slate-800">
                        <span class="text-xs uppercase tracking-wider text-slate-400 font-semibold">Estimated Annual ROI</span>
                        <div class="text-4xl font-serif-display font-bold text-emerald-400 mt-2">$240K+</div>
                        <p class="text-xs text-slate-400 mt-2">Recovered employee operational time</p>
                    </div>
                </div>

                <!-- Live Step Analysis List -->
                <div class="mt-8 pt-8 border-t border-slate-800">
                    <h4 class="text-sm font-semibold text-slate-300 uppercase tracking-wider mb-4">Workflow: Client Onboarding & Billing Provisioning</h4>
                    <div class="space-y-3 font-mono text-xs">
                        <div class="p-4 rounded-xl bg-slate-900/80 border border-slate-800 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2">
                            <div class="flex items-center gap-3">
                                <span class="size-6 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold">1</span>
                                <span class="text-slate-200">Account Creation in CRM</span>
                            </div>
                            <div class="flex items-center gap-4 text-slate-400">
                                <span>Avg: 1m 12s</span>
                                <span class="text-emerald-400 font-semibold">99.4% Pass</span>
                            </div>
                        </div>

                        <div class="p-4 rounded-xl bg-amber-950/20 border border-amber-800/40 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2">
                            <div class="flex items-center gap-3">
                                <span class="size-6 rounded-full bg-amber-500/20 text-amber-400 flex items-center justify-center font-bold">2</span>
                                <span class="text-slate-200">Manual ERP Security Provisioning</span>
                                <span class="px-2 py-0.5 rounded text-[10px] bg-amber-500/20 text-amber-300 border border-amber-500/30">Bottleneck Flagged</span>
                            </div>
                            <div class="flex items-center gap-4 text-slate-400">
                                <span class="text-amber-400">Avg: 28m 40s</span>
                                <span class="text-amber-400 font-semibold">41% Drop-off</span>
                            </div>
                        </div>

                        <div class="p-4 rounded-xl bg-slate-900/80 border border-slate-800 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2">
                            <div class="flex items-center gap-3">
                                <span class="size-6 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold">3</span>
                                <span class="text-slate-200">Confirmation Notification Sent</span>
                            </div>
                            <div class="flex items-center gap-4 text-slate-400">
                                <span>Avg: 45s</span>
                                <span class="text-emerald-400 font-semibold">100% Pass</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Workflow Comparison: Golden Path vs Unoptimized Path -->
            <div class="mt-28 max-w-5xl mx-auto">
                <div class="text-center mb-16">
                    <span class="text-xs font-semibold uppercase tracking-wider text-blue-600 bg-blue-50 px-3 py-1 rounded-full border border-blue-200">
                        Workflow Mapping
                    </span>
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink mt-3">
                        Ideal Golden Path vs. Unoptimized Reality
                    </h2>
                    <p class="text-slate-600 text-base mt-2 max-w-xl mx-auto">
                        See the exact friction points costing your business hundreds of hours each quarter.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- The Reality (Unoptimized) -->
                    <div class="p-8 rounded-3xl bg-rose-50/40 border border-rose-200/80 shadow-subtle flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-xs font-bold uppercase tracking-wider text-rose-600 bg-rose-100 px-2.5 py-1 rounded-full">
                                    The Unmonitored Reality
                                </span>
                                <span class="text-xs font-mono font-semibold text-rose-700">~34 mins &bull; 11 steps</span>
                            </div>
                            <h3 class="font-serif-display text-2xl font-semibold text-slate-900">Fragmented & Error-Prone</h3>
                            <ul class="mt-6 space-y-3 text-xs sm:text-sm text-slate-700">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-rose-500 font-bold mt-0.5">&times;</span>
                                    <span>Employees switch between 4 different browser tabs and local spreadsheets.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-rose-500 font-bold mt-0.5">&times;</span>
                                    <span>Manual re-typing of customer IDs leads to a 14% invoice rejection rate.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-rose-500 font-bold mt-0.5">&times;</span>
                                    <span>Shadow procedures created in Google Docs quickly become outdated.</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-8 pt-4 border-t border-rose-200 text-xs text-rose-800 font-semibold">
                            Total Waste: 280 hours lost per 100 transactions
                        </div>
                    </div>

                    <!-- The SaaSApps Golden Path -->
                    <div class="p-8 rounded-3xl bg-emerald-50/40 border border-emerald-200/80 shadow-subtle flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-xs font-bold uppercase tracking-wider text-emerald-700 bg-emerald-100 px-2.5 py-1 rounded-full">
                                    SaaSApps Golden Path
                                </span>
                                <span class="text-xs font-mono font-semibold text-emerald-700">~3 mins &bull; 3 steps</span>
                            </div>
                            <h3 class="font-serif-display text-2xl font-semibold text-slate-900">Standardized & Streamlined</h3>
                            <ul class="mt-6 space-y-3 text-xs sm:text-sm text-slate-700">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-emerald-600 font-bold mt-0.5">&check;</span>
                                    <span>Single verified procedure embedded directly inside CRM interface.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-emerald-600 font-bold mt-0.5">&check;</span>
                                    <span>ERP provisioning step automated via webhook or AI agent trigger.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-emerald-600 font-bold mt-0.5">&check;</span>
                                    <span>Real-time version control ensures 100% adherence to corporate compliance.</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-8 pt-4 border-t border-emerald-200 text-xs text-emerald-800 font-semibold">
                            Efficiency Gain: 91% time reduction achieved
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. Interactive ROI Calculator (Alpine.js) -->
            <div class="mt-28 max-w-4xl mx-auto rounded-3xl bg-white border border-slate-200/90 p-8 sm:p-12 shadow-card"
                 x-data="{
                     teamSize: 50,
                     hoursPerWeek: 3.5,
                     hourlyRate: 65,
                     get annualHoursSaved() {
                         return Math.round(this.teamSize * (this.hoursPerWeek * 0.75) * 48);
                     },
                     get annualDollarSavings() {
                         return Math.round(this.annualHoursSaved * this.hourlyRate);
                     }
                 }">
                <div class="text-center max-w-xl mx-auto mb-10">
                    <span class="text-xs font-semibold uppercase tracking-wider text-brand-600 bg-brand-50 px-3 py-1 rounded-full border border-brand-200">
                        Interactive Calculator
                    </span>
                    <h2 class="font-serif-display text-3xl font-semibold text-ink mt-3">
                        Calculate your team's operational ROI
                    </h2>
                    <p class="text-sm text-slate-600 mt-2">
                        Adjust team size, time spent documenting, and hourly rate to project your company's net annual savings.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                    <!-- Controls -->
                    <div class="space-y-6">
                        <div>
                            <div class="flex items-center justify-between text-xs font-semibold text-slate-700 mb-2">
                                <span>Team Size (Knowledge Workers):</span>
                                <span class="font-mono text-sm text-brand-600 font-bold" x-text="teamSize + ' employees'">50 employees</span>
                            </div>
                            <input type="range" min="5" max="500" step="5" x-model="teamSize" class="w-full accent-brand-500 cursor-pointer">
                        </div>

                        <div>
                            <div class="flex items-center justify-between text-xs font-semibold text-slate-700 mb-2">
                                <span>Hours per user/week spent on SOPs & training:</span>
                                <span class="font-mono text-sm text-brand-600 font-bold" x-text="hoursPerWeek + ' hrs/wk'">3.5 hrs/wk</span>
                            </div>
                            <input type="range" min="1" max="10" step="0.5" x-model="hoursPerWeek" class="w-full accent-brand-500 cursor-pointer">
                        </div>

                        <div>
                            <div class="flex items-center justify-between text-xs font-semibold text-slate-700 mb-2">
                                <span>Average fully-loaded hourly rate:</span>
                                <span class="font-mono text-sm text-brand-600 font-bold" x-text="'$' + hourlyRate + '/hr'">$65/hr</span>
                            </div>
                            <input type="range" min="25" max="150" step="5" x-model="hourlyRate" class="w-full accent-brand-500 cursor-pointer">
                        </div>
                    </div>

                    <!-- Calculated Output Display -->
                    <div class="p-8 rounded-2xl bg-charcoal text-white text-center flex flex-col justify-between">
                        <div>
                            <span class="text-xs uppercase tracking-wider text-slate-400 font-semibold">Estimated Annual Value</span>
                            <div class="text-4xl sm:text-5xl font-serif-display font-bold text-emerald-400 mt-3"
                                 x-text="'$' + annualDollarSavings.toLocaleString()">
                                $409,500
                            </div>
                            <p class="text-xs text-slate-300 mt-2">
                                in recovered operational productivity
                            </p>
                        </div>

                        <div class="mt-8 pt-6 border-t border-slate-800 grid grid-cols-2 gap-4 text-left">
                            <div>
                                <span class="text-[11px] text-slate-400 block uppercase">Hours Recovered</span>
                                <span class="text-lg font-bold text-white font-mono" x-text="annualHoursSaved.toLocaleString() + ' hrs'">6,300 hrs</span>
                            </div>
                            <div>
                                <span class="text-[11px] text-slate-400 block uppercase">Typical Payback</span>
                                <span class="text-lg font-bold text-brand-400 font-mono">&lt; 14 days</span>
                            </div>
                        </div>

                        <div class="mt-6">
                            <a href="{{ route('demo') }}" class="w-full block py-2.5 rounded-full bg-brand-500 hover:bg-brand-600 text-xs font-semibold text-white transition-colors">
                                Get Custom Enterprise Assessment &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5. Enterprise Governance & Version Control -->
            <div class="mt-28 max-w-5xl mx-auto">
                <div class="text-center mb-16">
                    <span class="text-xs font-semibold uppercase tracking-wider text-brand-600 bg-brand-50 px-3 py-1 rounded-full border border-brand-200">
                        Governance & Compliance
                    </span>
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink mt-3">
                        Total control over company processes
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle">
                        <h3 class="font-serif-display text-xl font-semibold text-ink">Change Approval Workflows</h3>
                        <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                            Require manager or compliance officer sign-off before updated guides are published to the organization.
                        </p>
                    </div>

                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle">
                        <h3 class="font-serif-display text-xl font-semibold text-ink">Audit Trails & Logs</h3>
                        <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                            Maintain immutable records of who captured, edited, viewed, or exported every standard operating procedure.
                        </p>
                    </div>

                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle">
                        <h3 class="font-serif-display text-xl font-semibold text-ink">Auto-Verification Alerts</h3>
                        <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                            Flag outdated procedures automatically when underlying UI screens change or if an SOP hasn't been re-verified in 90 days.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 6. FAQ Accordion -->
            <div class="mt-28 max-w-3xl mx-auto" x-data="{ activeFaq: null }">
                <div class="text-center mb-12">
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink">
                        Frequently asked questions
                    </h2>
                </div>

                <div class="space-y-4">
                    @php
                        $optimizeFaqs = [
                            ['q' => 'How does SaaSApps gather process telemetry?', 'a' => 'Telemetry is collected passively and securely through our enterprise agents and browser extensions. We track step counts, time deltas between actions, and error occurrences without recording keystrokes or personal identifying information.'],
                            ['q' => 'Can we identify which teams have the highest process adherence?', 'a' => 'Yes. The Optimize dashboard provides departmental drill-downs so leadership can identify which units execute standard procedures faithfully and which rely on unverified shadow workflows.'],
                            ['q' => 'How are automation opportunities prioritized?', 'a' => 'Our engine calculates automation scores based on process frequency, step uniformity, and deterministic inputs. Tasks with high repetition and low branching logic are prioritized for robotic or agentic automation.'],
                            ['q' => 'Does this integrate with our existing BI tools?', 'a' => 'Yes. All process telemetry can be queried via our REST API or streamed directly into Snowflake, BigQuery, Databricks, or PowerBI.'],
                        ];
                    @endphp

                    @foreach ($optimizeFaqs as $idx => $faq)
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

            <!-- 7. Bottom Conversion Banner -->
            <div class="mt-28 max-w-5xl mx-auto rounded-3xl bg-white border border-slate-200/90 p-8 sm:p-14 shadow-card flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="max-w-xl text-center md:text-left">
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink leading-tight">
                        Transform how your business operates.
                    </h2>
                    <p class="text-sm text-slate-600 mt-2">
                        Get deep visibility into organizational processes and eliminate friction today.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-3 w-full md:w-auto">
                    <a href="{{ route('demo') }}" class="w-full sm:w-auto px-7 py-3 rounded-full text-center text-sm font-semibold text-white bg-charcoal hover:bg-slate-900 transition-all">
                        Request Enterprise Demo
                    </a>
                    <a href="{{ route('pricing') }}" class="w-full sm:w-auto px-7 py-3 rounded-full text-center text-sm font-semibold text-slate-800 bg-slate-100 hover:bg-slate-200 transition-all">
                        Explore Pricing
                    </a>
                </div>
            </div>
        </div>
    </main>
</x-landing-layout>
