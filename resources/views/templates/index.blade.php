<x-landing-layout>
    <main class="w-full bg-paper py-16 md:py-24"
          x-data="{
              activeCategory: 'all',
              search: '',
              templates: [
                  { title: 'New Employee Day-1 Onboarding Playbook', cat: 'hr', catName: 'HR & People', steps: '12 steps', desc: 'Step-by-step checklist for software provisioning, email setup, and security orientation.' },
                  { title: 'Remote Workstation Hardware & MFA Setup', cat: 'hr', catName: 'HR & People', steps: '9 steps', desc: 'Standard operating procedure for enrolling corporate laptops in MDM and YubiKey pairing.' },
                  { title: 'Performance Review & Feedback Cycle Runbook', cat: 'hr', catName: 'HR & People', steps: '7 steps', desc: 'Guidance for managers to complete 360-degree reviews and quarterly compensation updates.' },

                  { title: 'Staging to Production Zero-Downtime Deployment', cat: 'eng', catName: 'Engineering & IT', steps: '8 steps', desc: 'Database migrations, canary traffic routing, and health verification rollback criteria.' },
                  { title: 'P0 Incident Triage & War Room Escalation', cat: 'eng', catName: 'Engineering & IT', steps: '10 steps', desc: 'How to declare Sev-1 outages, notify executives, and assign remediation leads in PagerDuty.' },
                  { title: 'Docker Local Development Bootstrapping', cat: 'eng', catName: 'Engineering & IT', steps: '6 steps', desc: 'Cloning monorepo, environment variable generation, and container health verification.' },
                  { title: 'SAML 2.0 Single Sign-On Configuration in Okta', cat: 'eng', catName: 'Engineering & IT', steps: '11 steps', desc: 'Configuring enterprise assertions, ACS endpoints, and SCIM attribute mappings.' },

                  { title: 'Month-End Financial Reconciliation & Accruals', cat: 'finance', catName: 'Finance & Legal', steps: '15 steps', desc: 'Reconciling bank feeds, Stripe payout balances, and intercompany journals in NetSuite.' },
                  { title: 'Vendor Security Review & SOC 2 Compliance Audit', cat: 'finance', catName: 'Finance & Legal', steps: '14 steps', desc: 'Auditing 3rd-party vendor security questionnaires, DPA agreements, and pen-test reports.' },
                  { title: 'Enterprise Contract Execution & Billing Runbook', cat: 'finance', catName: 'Finance & Legal', steps: '8 steps', desc: 'Contract signature routing via DocuSign, tax exemption validation, and invoicing.' },

                  { title: 'Enterprise CRM Opportunity Stage Advancement', cat: 'sales', catName: 'Sales & Success', steps: '9 steps', desc: 'Validating BANT qualification criteria, uploading MEPs, and routing for legal approval.' },
                  { title: 'Tier-1 Customer Support Bug Escalation Path', cat: 'sales', catName: 'Sales & Success', steps: '7 steps', desc: 'Reproducing bugs, gathering browser console logs, and filing Jira tickets with reproduction steps.' },
                  { title: 'Customer Churn Prevention & Offboarding Runbook', cat: 'sales', catName: 'Sales & Success', steps: '10 steps', desc: 'Data export handling, user seat de-allocation, and customer retention retrospective.' }
              ],
              get filteredTemplates() {
                  return this.templates.filter(t => {
                      const matchesCategory = (this.activeCategory === 'all' || t.cat === this.activeCategory);
                      const matchesSearch = this.search === '' ||
                          t.title.toLowerCase().includes(this.search.toLowerCase()) ||
                          t.desc.toLowerCase().includes(this.search.toLowerCase()) ||
                          t.catName.toLowerCase().includes(this.search.toLowerCase());
                      return matchesCategory && matchesSearch;
                  });
              }
          }">
        <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="max-w-3xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-50 border border-brand-200 text-xs font-semibold text-brand-800 mb-6 shadow-2xs">
                    <span class="size-2 rounded-full bg-brand-500 animate-pulse"></span>
                    <span>Ready-to-Use SOP Templates</span>
                </div>
                <h1 class="font-serif-display text-4xl sm:text-5xl md:text-6xl font-semibold text-ink leading-[1.1] tracking-tight">
                    Pre-built playbooks for every workflow.
                </h1>
                <p class="text-lg text-slate-600 mt-6 leading-relaxed">
                    Clone verified standard operating procedure templates for software rollouts, customer onboarding, engineering releases, and security reviews.
                </p>

                <!-- Search -->
                <div class="mt-10 max-w-xl mx-auto">
                    <div class="relative">
                        <input type="text"
                               x-model="search"
                               placeholder="Search templates (Onboarding, Incident, NetSuite, Deployment...)"
                               class="w-full pl-12 pr-4 py-3.5 rounded-full border border-slate-200 bg-white text-sm shadow-subtle focus:outline-none focus:ring-2 focus:ring-brand-500">
                        <svg class="size-5 text-slate-400 absolute left-4.5 top-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Category Pills Filter -->
            <div class="mt-12 flex items-center justify-center gap-2 overflow-x-auto pb-4 max-w-4xl mx-auto">
                <button type="button"
                        @click="activeCategory = 'all'"
                        :class="activeCategory === 'all' ? 'bg-charcoal text-white' : 'bg-white text-slate-700 hover:bg-slate-100'"
                        class="px-4 py-1.5 rounded-full text-xs font-semibold border border-slate-200 transition-colors whitespace-nowrap">
                    All Templates
                </button>
                <button type="button"
                        @click="activeCategory = 'hr'"
                        :class="activeCategory === 'hr' ? 'bg-charcoal text-white' : 'bg-white text-slate-700 hover:bg-slate-100'"
                        class="px-4 py-1.5 rounded-full text-xs font-semibold border border-slate-200 transition-colors whitespace-nowrap">
                    HR &amp; People
                </button>
                <button type="button"
                        @click="activeCategory = 'eng'"
                        :class="activeCategory === 'eng' ? 'bg-charcoal text-white' : 'bg-white text-slate-700 hover:bg-slate-100'"
                        class="px-4 py-1.5 rounded-full text-xs font-semibold border border-slate-200 transition-colors whitespace-nowrap">
                    Engineering &amp; IT
                </button>
                <button type="button"
                        @click="activeCategory = 'finance'"
                        :class="activeCategory === 'finance' ? 'bg-charcoal text-white' : 'bg-white text-slate-700 hover:bg-slate-100'"
                        class="px-4 py-1.5 rounded-full text-xs font-semibold border border-slate-200 transition-colors whitespace-nowrap">
                    Finance &amp; Legal
                </button>
                <button type="button"
                        @click="activeCategory = 'sales'"
                        :class="activeCategory === 'sales' ? 'bg-charcoal text-white' : 'bg-white text-slate-700 hover:bg-slate-100'"
                        class="px-4 py-1.5 rounded-full text-xs font-semibold border border-slate-200 transition-colors whitespace-nowrap">
                    Sales &amp; Success
                </button>
            </div>

            <!-- Templates Grid -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                <template x-for="t in filteredTemplates" :key="t.title">
                    <div class="p-6 rounded-2xl bg-white border border-slate-200/90 shadow-subtle hover:shadow-card hover:-translate-y-1 transition-all duration-200 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between">
                                <span class="text-[11px] font-semibold uppercase tracking-wider text-slate-600 bg-slate-100 px-2.5 py-0.5 rounded-md" x-text="t.catName"></span>
                                <span class="text-xs font-mono font-medium text-slate-400" x-text="t.steps"></span>
                            </div>
                            <h3 class="font-serif-display text-lg font-semibold text-ink mt-3" x-text="t.title"></h3>
                            <p class="text-xs text-slate-600 mt-2 leading-relaxed" x-text="t.desc"></p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                            <span class="text-emerald-600 font-semibold">&check; Verified Template</span>
                            <a href="{{ route('contact-us') }}" class="font-semibold text-brand-600 hover:text-brand-700 inline-flex items-center gap-1">
                                Clone template &rarr;
                            </a>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Empty Search State -->
            <div x-show="filteredTemplates.length === 0" x-cloak class="mt-16 text-center py-12 max-w-md mx-auto bg-white rounded-3xl border border-slate-200">
                <p class="text-slate-600 text-sm">No templates found matching "<span class="font-semibold" x-text="search"></span>".</p>
                <button type="button" @click="search = ''; activeCategory = 'all'" class="mt-3 text-xs font-semibold text-brand-600 hover:underline">
                    Reset filters
                </button>
            </div>

            <!-- Bottom CTA -->
            <div class="mt-28 max-w-5xl mx-auto rounded-3xl bg-white border border-slate-200/90 p-8 sm:p-14 shadow-card flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="max-w-xl text-center md:text-left">
                    <h2 class="font-serif-display text-3xl font-semibold text-ink leading-tight">
                        Need a custom template for your team?
                    </h2>
                    <p class="text-sm text-slate-600 mt-2">
                        Our workflow architects can help map your proprietary operations into reusable team templates.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-3 w-full md:w-auto">
                    <a href="{{ route('contact-us') }}" class="w-full sm:w-auto px-7 py-3 rounded-full text-center text-sm font-semibold text-white bg-charcoal hover:bg-slate-900 transition-all">
                        Create Your Own
                    </a>
                    <a href="{{ route('demo') }}" class="w-full sm:w-auto px-7 py-3 rounded-full text-center text-sm font-semibold text-slate-800 bg-slate-100 hover:bg-slate-200 transition-all">
                        Request Template
                    </a>
                </div>
            </div>
        </div>
    </main>
</x-landing-layout>
