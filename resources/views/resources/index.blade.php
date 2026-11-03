<x-landing-layout>
    <main class="w-full bg-paper py-16 md:py-24"
          x-data="{
              search: '',
              selectedCategory: 'all',
              articles: [
                  {
                      slug: 'how-agentic-ai-learns-from-workflows',
                      cat: 'ai',
                      cat_label: 'Agentic AI',
                      title: 'Why autonomous AI agents fail without human workflow ground truth',
                      desc: 'LLMs can write code, but stumble on proprietary business procedures. Here is how structured capture bridges the gap.',
                      read_time: '5 min read'
                  },
                  {
                      slug: 'model-context-protocol-enterprise-guide',
                      cat: 'ai',
                      cat_label: 'Agentic AI',
                      title: 'The Enterprise Architect\'s Guide to Model Context Protocol (MCP)',
                      desc: 'How to expose corporate SOPs, internal tools, and data stores to autonomous Claude and OpenAI agents securely.',
                      read_time: '8 min read'
                  },
                  {
                      slug: 'scaling-standard-operating-procedures',
                      cat: 'optimization',
                      cat_label: 'Process Optimization',
                      title: 'How to eliminate 90% of repeat questions on Slack and Teams',
                      desc: 'A practical playbook for turning ad-hoc screen shares into living, self-updating standard operating procedures.',
                      read_time: '7 min read'
                  },
                  {
                      slug: 'process-telemetry-and-bottleneck-elimination',
                      cat: 'optimization',
                      cat_label: 'Process Optimization',
                      title: 'Using process telemetry to unmask hidden software friction',
                      desc: 'Learn how leading Operations executives monitor step latency and drop-off rates across enterprise applications.',
                      read_time: '6 min read'
                  },
                  {
                      slug: 'cutting-new-hire-ramp-times',
                      cat: 'onboarding',
                      cat_label: 'Onboarding & Training',
                      title: 'Cutting employee ramp time from 90 days to 3 weeks',
                      desc: 'The step-by-step onboarding system high-growth tech companies use to get new hires shipping on day one.',
                      read_time: '4 min read'
                  },
                  {
                      slug: 'building-a-self-serve-internal-academy',
                      cat: 'onboarding',
                      cat_label: 'Onboarding & Training',
                      title: 'How to build an internal company training academy without dedicated L&D staff',
                      desc: 'Crowdsource verified workflows from your best performers and turn tacit knowledge into reusable course modules.',
                      read_time: '6 min read'
                  },
                  {
                      slug: 'zero-exposure-client-side-pii-redaction',
                      cat: 'security',
                      cat_label: 'Security & Redaction',
                      title: 'Zero-Exposure Security: Client-side heuristics vs server-side PII scrubbing',
                      desc: 'Why enterprise security officers require sensitive customer data and API tokens to be masked before upload.',
                      read_time: '5 min read'
                  },
                  {
                      slug: 'sox-404-compliance-and-audit-readiness',
                      cat: 'security',
                      cat_label: 'Security & Redaction',
                      title: 'Achieving continuous SOX 404 compliance with automated screenshot audit logs',
                      desc: 'How finance and accounting teams provide bulletproof walkthrough evidence to Big Four auditors in hours.',
                      read_time: '9 min read'
                  },
                  {
                      slug: 'multi-monitor-capture-best-practices',
                      cat: 'optimization',
                      cat_label: 'Process Optimization',
                      title: 'Mastering desktop workflow capture across multi-monitor setups',
                      desc: 'Tips and keyboard shortcuts to record complex tasks across terminal windows, ERP clients, and spreadsheets.',
                      read_time: '3 min read'
                  }
              ],
              get filteredArticles() {
                  return this.articles.filter(a => {
                      const matchesCategory = (this.selectedCategory === 'all' || a.cat === this.selectedCategory);
                      const matchesSearch = this.search === '' ||
                          a.title.toLowerCase().includes(this.search.toLowerCase()) ||
                          a.desc.toLowerCase().includes(this.search.toLowerCase()) ||
                          a.cat_label.toLowerCase().includes(this.search.toLowerCase());
                      return matchesCategory && matchesSearch;
                  });
              }
          }">
        <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-50 border border-brand-200 text-xs font-semibold text-brand-800 mb-6 shadow-2xs">
                    <span class="size-2 rounded-full bg-brand-500 animate-pulse"></span>
                    <span>Resource Center &bull; Playbooks &bull; Insights</span>
                </div>
                <h1 class="font-serif-display text-4xl sm:text-5xl md:text-6xl font-semibold text-ink leading-[1.1] tracking-tight">
                    Guides, strategies &amp; workflows to scale faster.
                </h1>
                <p class="text-lg text-slate-600 mt-6 leading-relaxed">
                    Explore tutorials on process optimization, agentic AI architectures, SOP creation, and operational excellence.
                </p>

                <!-- Search Input -->
                <div class="mt-10 max-w-xl mx-auto">
                    <div class="relative">
                        <input type="text"
                               x-model="search"
                               placeholder="Search all articles, playbooks, and templates..."
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
                        @click="selectedCategory = 'all'"
                        :class="selectedCategory === 'all' ? 'bg-charcoal text-white' : 'bg-white text-slate-700 hover:bg-slate-100'"
                        class="px-4 py-1.5 rounded-full text-xs font-semibold border border-slate-200 transition-colors whitespace-nowrap">
                    All Categories
                </button>
                <button type="button"
                        @click="selectedCategory = 'ai'"
                        :class="selectedCategory === 'ai' ? 'bg-charcoal text-white' : 'bg-white text-slate-700 hover:bg-slate-100'"
                        class="px-4 py-1.5 rounded-full text-xs font-semibold border border-slate-200 transition-colors whitespace-nowrap">
                    Agentic AI
                </button>
                <button type="button"
                        @click="selectedCategory = 'optimization'"
                        :class="selectedCategory === 'optimization' ? 'bg-charcoal text-white' : 'bg-white text-slate-700 hover:bg-slate-100'"
                        class="px-4 py-1.5 rounded-full text-xs font-semibold border border-slate-200 transition-colors whitespace-nowrap">
                    Process Optimization
                </button>
                <button type="button"
                        @click="selectedCategory = 'onboarding'"
                        :class="selectedCategory === 'onboarding' ? 'bg-charcoal text-white' : 'bg-white text-slate-700 hover:bg-slate-100'"
                        class="px-4 py-1.5 rounded-full text-xs font-semibold border border-slate-200 transition-colors whitespace-nowrap">
                    Onboarding &amp; Training
                </button>
                <button type="button"
                        @click="selectedCategory = 'security'"
                        :class="selectedCategory === 'security' ? 'bg-charcoal text-white' : 'bg-white text-slate-700 hover:bg-slate-100'"
                        class="px-4 py-1.5 rounded-full text-xs font-semibold border border-slate-200 transition-colors whitespace-nowrap">
                    Security &amp; Redaction
                </button>
            </div>

            <!-- Articles Grid -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <template x-for="art in filteredArticles" :key="art.slug">
                    <div class="p-6 rounded-2xl bg-white border border-slate-200/90 shadow-subtle hover:shadow-card hover:-translate-y-1 transition-all duration-200 flex flex-col justify-between">
                        <div>
                            <span class="text-[11px] font-semibold uppercase tracking-wider text-brand-700 bg-brand-50 px-2.5 py-0.5 rounded-md" x-text="art.cat_label"></span>
                            <h3 class="font-serif-display text-xl font-semibold text-ink mt-4 leading-snug">
                                <a :href="'/resources/' + art.slug" class="hover:text-brand-600 transition-colors" x-text="art.title"></a>
                            </h3>
                            <p class="text-sm text-slate-600 mt-2 leading-relaxed" x-text="art.desc"></p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                            <span x-text="art.read_time"></span>
                            <a :href="'/resources/' + art.slug" class="font-semibold text-brand-600 hover:text-brand-700">
                                Read playbook &rarr;
                            </a>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Empty Search State -->
            <div x-show="filteredArticles.length === 0" x-cloak class="mt-16 text-center py-12 max-w-md mx-auto bg-white rounded-3xl border border-slate-200">
                <p class="text-slate-600 text-sm">No playbooks found matching "<span class="font-semibold" x-text="search"></span>".</p>
                <button type="button" @click="search = ''; selectedCategory = 'all'" class="mt-3 text-xs font-semibold text-brand-600 hover:underline">
                    Clear filters
                </button>
            </div>

            <!-- Newsletter / Digest Banner -->
            <div class="mt-28 max-w-5xl mx-auto rounded-3xl bg-white border border-slate-200/90 p-8 sm:p-14 shadow-card flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="max-w-xl text-center md:text-left">
                    <span class="text-xs uppercase tracking-wider text-brand-600 font-semibold">Weekly Operational Playbooks</span>
                    <h2 class="font-serif-display text-3xl font-semibold text-ink leading-tight mt-1">
                        Get the latest SaaS &amp; AI workflow strategies.
                    </h2>
                    <p class="text-sm text-slate-600 mt-2">
                        Curated monthly teardowns of real operational systems used by Fortune 500 teams and fast-growing SaaS unicorns.
                    </p>
                </div>
                <div class="w-full md:w-auto">
                    <form action="{{ route('contact-us.store') }}" method="POST" class="flex flex-col sm:flex-row gap-2">
                        @csrf
                        <input type="hidden" name="name" value="Newsletter Subscriber">
                        <input type="email" name="email" required placeholder="Enter work email" class="px-4 py-2.5 rounded-full border border-slate-200 text-sm focus:outline-none focus:ring-2 focus:ring-brand-500">
                        <input type="hidden" name="message" value="Subscribed to weekly SaaSApps operational playbooks newsletter.">
                        <button type="submit" class="px-6 py-2.5 rounded-full text-sm font-semibold text-white bg-charcoal hover:bg-slate-900 transition-colors">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-landing-layout>
