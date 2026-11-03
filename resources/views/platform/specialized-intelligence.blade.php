<x-landing-layout>
    <main class="w-full bg-paper py-16 md:py-24">
        <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- 1. Hero -->
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-purple-50 border border-purple-200 text-xs font-semibold text-purple-800 mb-6 shadow-2xs">
                    <span class="size-2 rounded-full bg-purple-600 animate-pulse"></span>
                    <span>The Bridge Between Human Work &amp; AI Agents</span>
                </div>
                <h1 class="font-serif-display text-4xl sm:text-5xl md:text-6xl font-semibold text-ink leading-[1.1] tracking-tight">
                    Specialized Intelligence for teams &amp; autonomous AI.
                </h1>
                <p class="text-lg sm:text-xl text-slate-600 mt-6 leading-relaxed max-w-3xl mx-auto">
                    SaaSApps captures the implicit procedural knowledge inside your organization and transforms it into structured context that LLMs, autonomous agents, and teammates can query and execute reliably.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('platform.api') }}" class="w-full sm:w-auto px-8 py-3.5 rounded-full text-base font-semibold text-white bg-charcoal hover:bg-slate-900 shadow-sm transition-all duration-150">
                        Explore MCP &amp; API
                    </a>
                    <a href="{{ route('demo') }}" class="w-full sm:w-auto px-8 py-3.5 rounded-full text-base font-semibold text-slate-800 bg-white border border-slate-200 hover:bg-slate-50 transition-all duration-150">
                        Book Architecture Review
                    </a>
                </div>
            </div>

            <!-- 2. Visual Architecture Flow Diagram -->
            <div class="mt-20 max-w-5xl mx-auto p-8 sm:p-12 rounded-3xl bg-white border border-slate-200/90 shadow-card">
                <div class="text-center max-w-xl mx-auto mb-12">
                    <span class="text-xs font-semibold uppercase tracking-wider text-purple-600 bg-purple-50 px-3 py-1 rounded-full border border-purple-200">
                        End-to-End Pipeline
                    </span>
                    <h2 class="font-serif-display text-2xl sm:text-3xl font-semibold text-ink mt-3">
                        From tacit human actions to agentic execution
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-5 gap-4 items-center">
                    <!-- Stage 1: Human Work -->
                    <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 text-center">
                        <div class="size-10 rounded-xl bg-slate-200 text-slate-700 flex items-center justify-center mx-auto mb-3 font-bold text-sm">
                            01
                        </div>
                        <h4 class="text-sm font-semibold text-ink">Human Work</h4>
                        <p class="text-xs text-slate-500 mt-1">Subject matter expert completes complex task</p>
                    </div>

                    <!-- Arrow -->
                    <div class="hidden md:flex justify-center text-slate-400">
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>

                    <!-- Stage 2: SaaSApps Capture -->
                    <div class="p-5 rounded-2xl bg-purple-50 border border-purple-200 text-center">
                        <div class="size-10 rounded-xl bg-purple-600 text-white flex items-center justify-center mx-auto mb-3 font-bold text-sm">
                            02
                        </div>
                        <h4 class="text-sm font-semibold text-purple-950">Procedural Graph</h4>
                        <p class="text-xs text-purple-700 mt-1">DOM nodes, click paths &amp; PII redactor</p>
                    </div>

                    <!-- Arrow -->
                    <div class="hidden md:flex justify-center text-slate-400">
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>

                    <!-- Stage 3: MCP & Agent Execution -->
                    <div class="p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-center">
                        <div class="size-10 rounded-xl bg-emerald-600 text-white flex items-center justify-center mx-auto mb-3 font-bold text-sm">
                            03
                        </div>
                        <h4 class="text-sm font-semibold text-emerald-950">AI Agent Execution</h4>
                        <p class="text-xs text-emerald-700 mt-1">Autonomous completion with zero hallucination</p>
                    </div>
                </div>
            </div>

            <!-- 3. Three Core Pillars -->
            <div class="mt-28 max-w-5xl mx-auto">
                <div class="text-center mb-16">
                    <span class="text-xs font-semibold uppercase tracking-wider text-brand-600 bg-brand-50 px-3 py-1 rounded-full border border-brand-200">
                        Foundational Architecture
                    </span>
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink mt-3">
                        The three pillars of Specialized Intelligence
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle flex flex-col justify-between">
                        <div>
                            <div class="size-12 rounded-2xl bg-purple-50 text-purple-700 flex items-center justify-center font-bold text-lg mb-6">
                                01
                            </div>
                            <h3 class="font-serif-display text-xl font-semibold text-ink">Ground Truth Context</h3>
                            <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                                LLMs fail when guessing how proprietary software is wired. SaaSApps delivers exact deterministic click sequences, verified inputs, and validation rules directly to models.
                            </p>
                        </div>
                        <div class="mt-8 pt-4 border-t border-slate-100 text-xs font-mono text-purple-700">
                            Zero Hallucination Tolerance
                        </div>
                    </div>

                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle flex flex-col justify-between">
                        <div>
                            <div class="size-12 rounded-2xl bg-blue-50 text-blue-700 flex items-center justify-center font-bold text-lg mb-6">
                                02
                            </div>
                            <h3 class="font-serif-display text-xl font-semibold text-ink">Tacit Knowledge Extraction</h3>
                            <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                                Up to 80% of enterprise processes exist only in the heads of senior employees. We passively extract this intuition into reproducible, version-controlled graphs.
                            </p>
                        </div>
                        <div class="mt-8 pt-4 border-t border-slate-100 text-xs font-mono text-blue-700">
                            Continuous Knowledge Capture
                        </div>
                    </div>

                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle flex flex-col justify-between">
                        <div>
                            <div class="size-12 rounded-2xl bg-emerald-50 text-emerald-700 flex items-center justify-center font-bold text-lg mb-6">
                                03
                            </div>
                            <h3 class="font-serif-display text-xl font-semibold text-ink">Real-Time State Sync</h3>
                            <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                                When a cloud UI changes, previous documentation breaks. Our platform detects DOM drift and automatically cues re-verification before errors propagate.
                            </p>
                        </div>
                        <div class="mt-8 pt-4 border-t border-slate-100 text-xs font-mono text-emerald-700">
                            Automated Drift Telemetry
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. Model Context Protocol (MCP) Showcase -->
            <div class="mt-28 max-w-5xl mx-auto rounded-3xl bg-slate-950 border border-slate-800 p-8 sm:p-12 shadow-2xl text-white">
                <div class="flex flex-col md:flex-row items-start md:items-center justify-between pb-8 border-b border-slate-800 gap-4">
                    <div>
                        <div class="flex items-center gap-2">
                            <span class="size-2 rounded-full bg-brand-400"></span>
                            <span class="text-xs uppercase tracking-wider text-slate-400 font-mono">Open Standard</span>
                        </div>
                        <h3 class="text-2xl font-serif-display font-semibold text-white mt-1">Model Context Protocol (MCP) Integration</h3>
                    </div>
                    <a href="{{ route('platform.api') }}" class="px-5 py-2 rounded-full text-xs font-semibold bg-brand-500 hover:bg-brand-600 text-white transition-colors">
                        View API Documentation &rarr;
                    </a>
                </div>

                <div class="mt-8 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-5 space-y-4 text-xs sm:text-sm text-slate-300 leading-relaxed">
                        <p>
                            Connect any autonomous AI agent (including Claude Desktop, Cursor, OpenAI Agents, and LangGraph) directly to your enterprise workflows through the official SaaSApps MCP server.
                        </p>
                        <p>
                            Instead of relying on fragile web-scraping scripts, AI agents query exact procedural steps with strict role-based permission boundaries.
                        </p>
                        <ul class="space-y-2 pt-2 text-xs font-mono text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="size-1.5 rounded-full bg-brand-400"></span>
                                <span>Tool: <code>saasapps_get_workflow</code></span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="size-1.5 rounded-full bg-brand-400"></span>
                                <span>Tool: <code>saasapps_query_step_details</code></span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="size-1.5 rounded-full bg-brand-400"></span>
                                <span>Tool: <code>saasapps_verify_execution_state</code></span>
                            </li>
                        </ul>
                    </div>

                    <div class="lg:col-span-7 bg-slate-900 rounded-2xl p-5 border border-slate-800 font-mono text-xs overflow-x-auto text-slate-200">
                        <div class="flex items-center justify-between pb-3 mb-3 border-b border-slate-800 text-[11px] text-slate-500">
                            <span>claude_desktop_config.json</span>
                            <span>MCP v1.0.0</span>
                        </div>
                        <pre class="leading-relaxed text-emerald-400"><code>{
  "mcpServers": {
    "saasapps-workflow-context": {
      "command": "npx",
      "args": ["-y", "@saasapps/mcp-server@latest"],
      "env": {
        "SAASAPPS_API_KEY": "sa_live_enterprise_9081298412",
        "SAASAPPS_WORKSPACE_ID": "ws_alpha_corp_prod"
      }
    }
  }
}</code></pre>
                    </div>
                </div>
            </div>

            <!-- 5. Multi-LLM Compatibility Grid -->
            <div class="mt-28 max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="font-serif-display text-3xl font-semibold text-ink">
                        Universal Multi-Model Compatibility
                    </h2>
                    <p class="text-sm text-slate-600 mt-2">
                        Feed procedural context into any leading foundation model or private internal deployment.
                    </p>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 text-center">
                    <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-subtle">
                        <span class="text-base font-bold text-ink block">Anthropic Claude</span>
                        <span class="text-xs text-slate-500 mt-1 block">Claude 3.7 Sonnet &amp; Opus</span>
                    </div>
                    <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-subtle">
                        <span class="text-base font-bold text-ink block">OpenAI</span>
                        <span class="text-xs text-slate-500 mt-1 block">o3-mini &amp; GPT-4o</span>
                    </div>
                    <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-subtle">
                        <span class="text-base font-bold text-ink block">Google DeepMind</span>
                        <span class="text-xs text-slate-500 mt-1 block">Gemini 2.5 Flash &amp; Pro</span>
                    </div>
                    <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-subtle">
                        <span class="text-base font-bold text-ink block">Open Weights</span>
                        <span class="text-xs text-slate-500 mt-1 block">Llama 3 &amp; DeepSeek R1</span>
                    </div>
                </div>
            </div>

            <!-- 6. Bottom Banner -->
            <div class="mt-28 max-w-5xl mx-auto rounded-3xl bg-white border border-slate-200/90 p-8 sm:p-14 shadow-card flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="max-w-xl text-center md:text-left">
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink leading-tight">
                        Ground your AI strategy in verified workflows.
                    </h2>
                    <p class="text-sm text-slate-600 mt-2">
                        Schedule a technical consultation to explore MCP integration and enterprise workflow telemetry.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-3 w-full md:w-auto">
                    <a href="{{ route('demo') }}" class="w-full sm:w-auto px-7 py-3 rounded-full text-center text-sm font-semibold text-white bg-charcoal hover:bg-slate-900 transition-all">
                        Talk to an AI Architect
                    </a>
                    <a href="{{ route('platform.integrations') }}" class="w-full sm:w-auto px-7 py-3 rounded-full text-center text-sm font-semibold text-slate-800 bg-slate-100 hover:bg-slate-200 transition-all">
                        View Integrations
                    </a>
                </div>
            </div>
        </div>
    </main>
</x-landing-layout>
