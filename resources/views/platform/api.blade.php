<x-landing-layout>
    <main class="w-full bg-paper py-16 md:py-24"
          x-data="{
              selectedLanguage: 'curl',
              activeEndpoint: 'list_guides',
              copied: false,
              copyCode() {
                  this.copied = true;
                  setTimeout(() => this.copied = false, 2000);
              }
          }">
        <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero -->
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-900 text-white text-xs font-semibold mb-6 shadow-2xs">
                    <span class="size-2 rounded-full bg-brand-400 animate-pulse"></span>
                    <span>REST API v2 &bull; MCP Server &bull; Webhooks</span>
                </div>
                <h1 class="font-serif-display text-4xl sm:text-5xl md:text-6xl font-semibold text-ink leading-[1.1] tracking-tight">
                    Built for developers and autonomous AI.
                </h1>
                <p class="text-lg sm:text-xl text-slate-600 mt-6 leading-relaxed max-w-2xl mx-auto">
                    Programmatically trigger captures, synchronize workflow state, generate automated exports, and empower AI agents with verified procedural context.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('contact-us') }}" class="w-full sm:w-auto px-8 py-3.5 rounded-full text-base font-semibold text-white bg-charcoal hover:bg-slate-900 shadow-sm transition-all duration-150">
                        Generate API Key
                    </a>
                    <a href="{{ route('demo') }}" class="w-full sm:w-auto px-8 py-3.5 rounded-full text-base font-semibold text-slate-800 bg-white border border-slate-200 hover:bg-slate-50 transition-all duration-150">
                        Request Sandbox Access
                    </a>
                </div>
            </div>

            <!-- Interactive API & MCP Explorer -->
            <div class="mt-16 max-w-5xl mx-auto rounded-3xl bg-slate-950 border border-slate-800 shadow-2xl overflow-hidden text-white">
                <!-- Top Bar -->
                <div class="bg-slate-900 px-6 py-4 border-b border-slate-800 flex flex-wrap items-center justify-between gap-4">
                    <div class="flex items-center gap-2">
                        <span class="size-3 rounded-full bg-rose-500"></span>
                        <span class="size-3 rounded-full bg-amber-500"></span>
                        <span class="size-3 rounded-full bg-emerald-500"></span>
                        <span class="ml-2 text-xs font-mono text-slate-400">api.saasapps.com/v2</span>
                    </div>

                    <!-- Language Switcher Tabs -->
                    <div class="flex items-center gap-1 bg-slate-950 p-1 rounded-lg border border-slate-800 text-xs font-mono">
                        <button type="button"
                                @click="selectedLanguage = 'curl'"
                                :class="selectedLanguage === 'curl' ? 'bg-slate-800 text-white' : 'text-slate-400 hover:text-white'"
                                class="px-2.5 py-1 rounded transition-colors">
                            cURL
                        </button>
                        <button type="button"
                                @click="selectedLanguage = 'ts'"
                                :class="selectedLanguage === 'ts' ? 'bg-slate-800 text-white' : 'text-slate-400 hover:text-white'"
                                class="px-2.5 py-1 rounded transition-colors">
                            TypeScript
                        </button>
                        <button type="button"
                                @click="selectedLanguage = 'py'"
                                :class="selectedLanguage === 'py' ? 'bg-slate-800 text-white' : 'text-slate-400 hover:text-white'"
                                class="px-2.5 py-1 rounded transition-colors">
                            Python
                        </button>
                        <button type="button"
                                @click="selectedLanguage = 'php'"
                                :class="selectedLanguage === 'php' ? 'bg-slate-800 text-white' : 'text-slate-400 hover:text-white'"
                                class="px-2.5 py-1 rounded transition-colors">
                            PHP
                        </button>
                    </div>
                </div>

                <!-- Code Workspace -->
                <div class="p-6 sm:p-8">
                    <!-- Endpoint selector pills -->
                    <div class="flex flex-wrap items-center gap-2 mb-6 text-xs font-mono">
                        <button type="button"
                                @click="activeEndpoint = 'list_guides'"
                                :class="activeEndpoint === 'list_guides' ? 'bg-brand-500/20 text-brand-300 border-brand-500/50' : 'bg-slate-900 text-slate-400 border-slate-800'"
                                class="px-3 py-1.5 rounded-lg border transition-colors flex items-center gap-1.5">
                            <span class="text-[10px] font-bold text-emerald-400">GET</span>
                            <span>/v2/guides</span>
                        </button>
                        <button type="button"
                                @click="activeEndpoint = 'trigger_capture'"
                                :class="activeEndpoint === 'trigger_capture' ? 'bg-brand-500/20 text-brand-300 border-brand-500/50' : 'bg-slate-900 text-slate-400 border-slate-800'"
                                class="px-3 py-1.5 rounded-lg border transition-colors flex items-center gap-1.5">
                            <span class="text-[10px] font-bold text-blue-400">POST</span>
                            <span>/v2/captures</span>
                        </button>
                        <button type="button"
                                @click="activeEndpoint = 'mcp_query'"
                                :class="activeEndpoint === 'mcp_query' ? 'bg-brand-500/20 text-brand-300 border-brand-500/50' : 'bg-slate-900 text-slate-400 border-slate-800'"
                                class="px-3 py-1.5 rounded-lg border transition-colors flex items-center gap-1.5">
                            <span class="text-[10px] font-bold text-purple-400">MCP</span>
                            <span>query_workflow</span>
                        </button>
                    </div>

                    <!-- Code Snippets -->
                    <div class="relative bg-slate-900/90 rounded-2xl p-6 border border-slate-800 font-mono text-xs overflow-x-auto">
                        <!-- cURL -->
                        <div x-show="selectedLanguage === 'curl'" x-cloak>
                            <template x-if="activeEndpoint === 'list_guides'">
<pre class="text-slate-300 leading-relaxed"><code>curl -X GET "https://api.saasapps.com/v2/guides?department=engineering&limit=10" \
  -H "Authorization: Bearer sa_live_98a7sd8f97asdf" \
  -H "Content-Type: application/json"</code></pre>
                            </template>
                            <template x-if="activeEndpoint === 'trigger_capture'">
<pre class="text-slate-300 leading-relaxed"><code>curl -X POST "https://api.saasapps.com/v2/captures" \
  -H "Authorization: Bearer sa_live_98a7sd8f97asdf" \
  -H "Content-Type: application/json" \
  -d '{
    "target_url": "https://erp.company.internal/billing",
    "redaction_level": "strict",
    "assigned_user_id": "usr_99812"
  }'</code></pre>
                            </template>
                            <template x-if="activeEndpoint === 'mcp_query'">
<pre class="text-slate-300 leading-relaxed"><code>curl -X POST "https://api.saasapps.com/v2/mcp/tools/saasapps_get_workflow" \
  -H "Authorization: Bearer sa_live_98a7sd8f97asdf" \
  -H "Content-Type: application/json" \
  -d '{"workflow_slug": "salesforce-lead-routing"}'</code></pre>
                            </template>
                        </div>

                        <!-- TypeScript -->
                        <div x-show="selectedLanguage === 'ts'" x-cloak>
                            <template x-if="activeEndpoint === 'list_guides'">
<pre class="text-emerald-400 leading-relaxed"><code>import { SaaSAppsClient } from "@saasapps/sdk";

const client = new SaaSAppsClient({ apiKey: process.env.SAASAPPS_API_KEY });

const { data: guides } = await client.guides.list({
  department: "engineering",
  limit: 10,
});
console.log(`Retrieved ${guides.length} SOPs.`);</code></pre>
                            </template>
                            <template x-if="activeEndpoint === 'trigger_capture'">
<pre class="text-emerald-400 leading-relaxed"><code>import { SaaSAppsClient } from "@saasapps/sdk";

const client = new SaaSAppsClient({ apiKey: process.env.SAASAPPS_API_KEY });

const session = await client.captures.create({
  targetUrl: "https://erp.company.internal/billing",
  redactionLevel: "strict",
  assignedUserId: "usr_99812",
});</code></pre>
                            </template>
                            <template x-if="activeEndpoint === 'mcp_query'">
<pre class="text-emerald-400 leading-relaxed"><code>import { queryWorkflowContext } from "@saasapps/mcp";

const context = await queryWorkflowContext({
  workflowSlug: "salesforce-lead-routing",
  includeScreenshots: false,
});</code></pre>
                            </template>
                        </div>

                        <!-- Python -->
                        <div x-show="selectedLanguage === 'py'" x-cloak>
<pre class="text-emerald-400 leading-relaxed"><code>from saasapps import SaaSAppsClient

client = SaaSAppsClient(api_key="sa_live_98a7sd8f97asdf")

guides = client.guides.list(department="engineering", limit=10)
for guide in guides:
    print(f"SOP: {guide.title} - {len(guide.steps)} steps")</code></pre>
                        </div>

                        <!-- PHP -->
                        <div x-show="selectedLanguage === 'php'" x-cloak>
<pre class="text-emerald-400 leading-relaxed"><code>use SaaSApps\Client;

$client = new Client(['api_key' => config('services.saasapps.key')]);

$guides = $client->guides()->list([
    'department' => 'engineering',
    'limit' => 10,
]);</code></pre>
                        </div>
                    </div>

                    <!-- Expected Response Preview -->
                    <div class="mt-6 pt-6 border-t border-slate-800">
                        <div class="flex items-center justify-between text-xs text-slate-400 font-mono mb-2">
                            <span>Response Preview: HTTP 200 OK</span>
                            <span>application/json</span>
                        </div>
                        <div class="bg-slate-900/60 rounded-xl p-4 font-mono text-xs text-slate-300 overflow-x-auto">
<pre class="text-brand-300"><code>{
  "status": "success",
  "data": [
    {
      "id": "gd_82910a",
      "title": "Staging to Production Zero-Downtime Deployment",
      "slug": "staging-to-prod-deployment",
      "total_steps": 8,
      "redacted_fields_count": 3,
      "created_at": "2026-11-02T10:14:00Z"
    }
  ]
}</code></pre>
                        </div>
                    </div>
                </div>
            </div>

            <!-- API Capabilities Grid -->
            <div class="mt-28 max-w-5xl mx-auto">
                <div class="text-center mb-16">
                    <span class="text-xs font-semibold uppercase tracking-wider text-brand-600 bg-brand-50 px-3 py-1 rounded-full border border-brand-200">
                        Platform Capabilities
                    </span>
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink mt-3">
                        Enterprise developer architecture
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle">
                        <h3 class="font-serif-display text-xl font-semibold text-ink">High-Throughput Rate Limits</h3>
                        <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                            Enterprise API tiers provide 10,000 requests per minute with guaranteed 99.99% uptime SLAs and distributed multi-region edge endpoints.
                        </p>
                    </div>

                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle">
                        <h3 class="font-serif-display text-xl font-semibold text-ink">Real-Time Webhook Engine</h3>
                        <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                            Subscribe to events like <code>guide.published</code>, <code>pii.redacted</code>, and <code>drift.detected</code> with signed HMAC SHA-256 headers.
                        </p>
                    </div>

                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle">
                        <h3 class="font-serif-display text-xl font-semibold text-ink">Fine-Grained Scopes</h3>
                        <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                            Generate scoped API tokens restricted to specific departments, capture sessions, or export formats for maximum security compliance.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Banner -->
            <div class="mt-28 max-w-5xl mx-auto rounded-3xl bg-white border border-slate-200/90 p-8 sm:p-14 shadow-card flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="max-w-xl text-center md:text-left">
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink leading-tight">
                        Start building with SaaSApps API.
                    </h2>
                    <p class="text-sm text-slate-600 mt-2">
                        Get your developer API key and test endpoints in sandbox mode in less than two minutes.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-3 w-full md:w-auto">
                    <a href="{{ route('contact-us') }}" class="w-full sm:w-auto px-7 py-3 rounded-full text-center text-sm font-semibold text-white bg-charcoal hover:bg-slate-900 transition-all">
                        Create Developer Account
                    </a>
                    <a href="{{ route('demo') }}" class="w-full sm:w-auto px-7 py-3 rounded-full text-center text-sm font-semibold text-slate-800 bg-slate-100 hover:bg-slate-200 transition-all">
                        Contact API Support
                    </a>
                </div>
            </div>
        </div>
    </main>
</x-landing-layout>
