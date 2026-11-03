<x-landing-layout>
    <main class="w-full bg-paper py-16 md:py-24"
          x-data="{
              search: '',
              activeCategory: 'all',
              tools: [
                  { name: 'Confluence', cat: 'kb', catName: 'Knowledge Base', desc: 'Native live embeds that update across Atlassian Cloud in real time.', icon: 'Atlassian' },
                  { name: 'Notion', cat: 'kb', catName: 'Knowledge Base', desc: 'Paste any guide link for instant interactive toggleable blocks.', icon: 'Notion' },
                  { name: 'Guru', cat: 'kb', catName: 'Knowledge Base', desc: 'Synchronize cards directly to verified departmental knowledge collections.', icon: 'Guru' },
                  { name: 'GitBook', cat: 'kb', catName: 'Knowledge Base', desc: 'Continuous Markdown export for technical developer documentation.', icon: 'GitBook' },
                  { name: 'SharePoint', cat: 'kb', catName: 'Knowledge Base', desc: 'Enterprise document library integration for Microsoft 365 environments.', icon: 'Microsoft' },
                  { name: 'Coda', cat: 'kb', catName: 'Knowledge Base', desc: 'Embed rich procedural tables and interactive runbooks into Coda docs.', icon: 'Coda' },

                  { name: 'Salesforce', cat: 'crm', catName: 'CRM', desc: 'Standardize sales ops, opportunity closing, and lead assignment.', icon: 'Salesforce' },
                  { name: 'HubSpot', cat: 'crm', catName: 'CRM', desc: 'Provide step-by-step onboarding for marketing and sales pipeline updates.', icon: 'HubSpot' },
                  { name: 'Zoho CRM', cat: 'crm', catName: 'CRM', desc: 'Automate customer record creation and invoice reconciliation workflows.', icon: 'Zoho' },
                  { name: 'Pipedrive', cat: 'crm', catName: 'CRM', desc: 'Embed deal stage advancement SOPs directly inside pipeline view.', icon: 'Pipedrive' },

                  { name: 'Zendesk', cat: 'support', catName: 'ITSM & Support', desc: 'Insert verified resolution steps into customer ticket replies.', icon: 'Zendesk' },
                  { name: 'Jira Service Management', cat: 'support', catName: 'ITSM & Support', desc: 'Attach reproducible bug reproduction workflows directly to tickets.', icon: 'Jira' },
                  { name: 'ServiceNow', cat: 'support', catName: 'ITSM & Support', desc: 'Automate enterprise IT incident triage and hardware provisioning.', icon: 'ServiceNow' },
                  { name: 'Freshdesk', cat: 'support', catName: 'ITSM & Support', desc: 'Streamline customer escalation paths and multi-tier agent responses.', icon: 'Freshdesk' },
                  { name: 'Intercom', cat: 'support', catName: 'ITSM & Support', desc: 'Unfurl step-by-step help articles in live chat widget conversations.', icon: 'Intercom' },

                  { name: 'Slack', cat: 'collab', catName: 'Communication', desc: 'Unfurl interactive guide cards and resolve teammate questions in channels.', icon: 'Slack' },
                  { name: 'Microsoft Teams', cat: 'collab', catName: 'Communication', desc: 'Pin procedure tabs into departmental channels and company groups.', icon: 'Teams' },
                  { name: 'Google Workspace', cat: 'collab', catName: 'Communication', desc: 'Export directly to Google Docs, Slides, and shared Drive folders.', icon: 'Google' },
                  { name: 'Discord', cat: 'collab', catName: 'Communication', desc: 'Community and developer support workflows triggered via slash command.', icon: 'Discord' },

                  { name: 'Model Context Protocol (MCP)', cat: 'ai', catName: 'AI & Automation', desc: 'Equip autonomous agents with deterministic SOP step context.', icon: 'MCP' },
                  { name: 'LangChain', cat: 'ai', catName: 'AI & Automation', desc: 'Vector retriever and document loader for proprietary company workflows.', icon: 'LangChain' },
                  { name: 'LlamaIndex', cat: 'ai', catName: 'AI & Automation', desc: 'Structured data connectors indexing procedural knowledge graphs.', icon: 'LlamaIndex' },
                  { name: 'Zapier', cat: 'ai', catName: 'AI & Automation', desc: 'Trigger 5,000+ cloud automations whenever a guide is approved.', icon: 'Zapier' },
                  { name: 'Make.com', cat: 'ai', catName: 'AI & Automation', desc: 'Visual multi-step webhooks connecting workflow telemetry to databases.', icon: 'Make' }
              ],
              get filteredTools() {
                  return this.tools.filter(t => {
                      const matchesCategory = (this.activeCategory === 'all' || t.cat === this.activeCategory);
                      const matchesSearch = this.search === '' ||
                          t.name.toLowerCase().includes(this.search.toLowerCase()) ||
                          t.desc.toLowerCase().includes(this.search.toLowerCase()) ||
                          t.catName.toLowerCase().includes(this.search.toLowerCase());
                      return matchesCategory && matchesSearch;
                  });
              }
          }">
        <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-50 border border-emerald-200 text-xs font-semibold text-emerald-800 mb-6 shadow-2xs">
                    <span class="size-2 rounded-full bg-emerald-600 animate-pulse"></span>
                    <span>100+ Connected Ecosystem Tools</span>
                </div>
                <h1 class="font-serif-display text-4xl sm:text-5xl md:text-6xl font-semibold text-ink leading-[1.1] tracking-tight">
                    Integrations that fit seamlessly into your stack.
                </h1>
                <p class="text-lg sm:text-xl text-slate-600 mt-6 leading-relaxed max-w-2xl mx-auto">
                    Embed guides into Confluence, Notion, Zendesk, Salesforce, Slack, or connect autonomous AI agents via MCP.
                </p>

                <!-- Search Input with Live Filter -->
                <div class="mt-10 max-w-xl mx-auto">
                    <div class="relative">
                        <input type="text"
                               x-model="search"
                               placeholder="Search integrations (Notion, Slack, Salesforce, MCP...)"
                               class="w-full pl-12 pr-4 py-3.5 rounded-full border border-slate-200 bg-white text-sm shadow-subtle focus:outline-none focus:ring-2 focus:ring-brand-500">
                        <svg class="size-5 text-slate-400 absolute left-4.5 top-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Category Pills Filter -->
            <div class="mt-10 flex items-center justify-center gap-2 overflow-x-auto pb-4 max-w-4xl mx-auto">
                <button type="button"
                        @click="activeCategory = 'all'"
                        :class="activeCategory === 'all' ? 'bg-charcoal text-white' : 'bg-white text-slate-700 hover:bg-slate-100'"
                        class="px-4 py-1.5 rounded-full text-xs font-semibold border border-slate-200 transition-colors whitespace-nowrap">
                    All Integrations
                </button>
                <button type="button"
                        @click="activeCategory = 'kb'"
                        :class="activeCategory === 'kb' ? 'bg-charcoal text-white' : 'bg-white text-slate-700 hover:bg-slate-100'"
                        class="px-4 py-1.5 rounded-full text-xs font-semibold border border-slate-200 transition-colors whitespace-nowrap">
                    Knowledge Bases
                </button>
                <button type="button"
                        @click="activeCategory = 'crm'"
                        :class="activeCategory === 'crm' ? 'bg-charcoal text-white' : 'bg-white text-slate-700 hover:bg-slate-100'"
                        class="px-4 py-1.5 rounded-full text-xs font-semibold border border-slate-200 transition-colors whitespace-nowrap">
                    CRMs
                </button>
                <button type="button"
                        @click="activeCategory = 'support'"
                        :class="activeCategory === 'support' ? 'bg-charcoal text-white' : 'bg-white text-slate-700 hover:bg-slate-100'"
                        class="px-4 py-1.5 rounded-full text-xs font-semibold border border-slate-200 transition-colors whitespace-nowrap">
                    ITSM &amp; Support
                </button>
                <button type="button"
                        @click="activeCategory = 'collab'"
                        :class="activeCategory === 'collab' ? 'bg-charcoal text-white' : 'bg-white text-slate-700 hover:bg-slate-100'"
                        class="px-4 py-1.5 rounded-full text-xs font-semibold border border-slate-200 transition-colors whitespace-nowrap">
                    Communication
                </button>
                <button type="button"
                        @click="activeCategory = 'ai'"
                        :class="activeCategory === 'ai' ? 'bg-charcoal text-white' : 'bg-white text-slate-700 hover:bg-slate-100'"
                        class="px-4 py-1.5 rounded-full text-xs font-semibold border border-slate-200 transition-colors whitespace-nowrap">
                    AI &amp; Automation
                </button>
            </div>

            <!-- Integrations Grid -->
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 max-w-7xl mx-auto">
                <template x-for="t in filteredTools" :key="t.name">
                    <div class="p-6 rounded-2xl bg-white border border-slate-200/90 shadow-subtle hover:shadow-card hover:-translate-y-1 transition-all duration-200 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between">
                                <span class="text-[11px] font-semibold uppercase tracking-wider text-brand-600 bg-brand-50 px-2 py-0.5 rounded-md" x-text="t.catName"></span>
                                <span class="size-2 rounded-full bg-emerald-500"></span>
                            </div>
                            <h3 class="text-base font-semibold text-ink mt-3" x-text="t.name"></h3>
                            <p class="text-xs text-slate-600 mt-2 leading-relaxed" x-text="t.desc"></p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                            <span class="text-slate-400">Available on all plans</span>
                            <a href="{{ route('contact-us') }}" class="font-semibold text-brand-600 hover:text-brand-700 inline-flex items-center gap-1">
                                Connect &rarr;
                            </a>
                        </div>
                    </div>
                </template>

                <!-- Request an Integration Card -->
                <div class="p-6 rounded-2xl bg-slate-50 border-2 border-dashed border-slate-300 flex flex-col justify-between text-center items-center">
                    <div class="my-auto">
                        <div class="size-10 rounded-full bg-slate-200 flex items-center justify-center mx-auto text-slate-600 mb-3 font-bold">
                            +
                        </div>
                        <h4 class="text-sm font-semibold text-ink">Don't see your tool?</h4>
                        <p class="text-xs text-slate-500 mt-1">We add new integrations weekly based on enterprise requests.</p>
                    </div>
                    <a href="{{ route('contact-us') }}" class="mt-4 px-4 py-2 rounded-full text-xs font-semibold text-slate-800 bg-white border border-slate-200 hover:bg-slate-100 transition-colors">
                        Request Integration
                    </a>
                </div>
            </div>

            <!-- Empty Search State -->
            <div x-show="filteredTools.length === 0" x-cloak class="mt-16 text-center py-12 max-w-md mx-auto bg-white rounded-3xl border border-slate-200">
                <p class="text-slate-600 text-sm">No integrations match "<span class="font-semibold" x-text="search"></span>".</p>
                <button type="button" @click="search = ''; activeCategory = 'all'" class="mt-3 text-xs font-semibold text-brand-600 hover:underline">
                    Reset filters
                </button>
            </div>

            <!-- Bottom Conversion Banner -->
            <div class="mt-28 max-w-5xl mx-auto rounded-3xl bg-white border border-slate-200/90 p-8 sm:p-14 shadow-card flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="max-w-xl text-center md:text-left">
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink leading-tight">
                        Connect your tools in minutes.
                    </h2>
                    <p class="text-sm text-slate-600 mt-2">
                        Install extensions and configure webhooks with zero complex infrastructure setup.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-3 w-full md:w-auto">
                    <a href="{{ route('contact-us') }}" class="w-full sm:w-auto px-7 py-3 rounded-full text-center text-sm font-semibold text-white bg-charcoal hover:bg-slate-900 transition-all">
                        Get Started
                    </a>
                    <a href="{{ route('platform.api') }}" class="w-full sm:w-auto px-7 py-3 rounded-full text-center text-sm font-semibold text-slate-800 bg-slate-100 hover:bg-slate-200 transition-all">
                        View Developer API
                    </a>
                </div>
            </div>
        </div>
    </main>
</x-landing-layout>
