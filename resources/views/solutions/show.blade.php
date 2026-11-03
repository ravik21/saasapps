<x-landing-layout>
    <main class="w-full bg-paper py-16 md:py-24">
        <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- 1. Hero -->
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-50 border border-brand-200 text-xs font-semibold text-brand-800 mb-6 shadow-2xs">
                    <span class="size-2 rounded-full bg-brand-500 animate-pulse"></span>
                    <span>{{ $solution['hero_badge'] ?? 'Enterprise Solution' }}</span>
                </div>
                <h1 class="font-serif-display text-4xl sm:text-5xl md:text-6xl font-semibold text-ink leading-[1.1] tracking-tight">
                    {{ $solution['title'] ?? 'Enterprise Workflow Solution' }}
                </h1>
                <p class="text-lg sm:text-xl text-slate-600 mt-6 leading-relaxed max-w-3xl mx-auto">
                    {{ $solution['description'] ?? 'Standardize best practices, onboard teammates faster, and give AI tools the workflow context they need.' }}
                </p>
                <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('contact-us') }}" class="w-full sm:w-auto px-8 py-3.5 rounded-full text-base font-semibold text-white bg-charcoal hover:bg-slate-900 shadow-sm transition-all duration-150">
                        Start Free Trial
                    </a>
                    <a href="{{ route('demo') }}" class="w-full sm:w-auto px-8 py-3.5 rounded-full text-base font-semibold text-slate-800 bg-white border border-slate-200 hover:bg-slate-50 transition-all duration-150">
                        Book Tailored Demo
                    </a>
                </div>
            </div>

            <!-- 2. Persona Specific Stat Callout Bar -->
            @if (!empty($solution['stats']))
                <div class="mt-16 max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($solution['stats'] as $st)
                        <div class="p-6 rounded-2xl bg-white border border-slate-200/90 shadow-subtle text-center">
                            <div class="text-3xl sm:text-4xl font-serif-display font-bold text-ink">{{ $st['value'] }}</div>
                            <p class="text-xs sm:text-sm text-slate-600 mt-2 font-medium">{{ $st['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            @endif

            <!-- 3. The Problem vs The SaaSApps Solution -->
            <div class="mt-20 grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <div class="p-8 rounded-3xl bg-rose-50/50 border border-rose-200/80 shadow-subtle flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-rose-600 bg-rose-100 px-3 py-1 rounded-full">
                            The Challenge Without Documentation
                        </span>
                        <h3 class="font-serif-display text-2xl font-semibold text-slate-900 mt-4">
                            Operational Friction &amp; Lost Knowledge
                        </h3>
                        <p class="text-slate-700 text-sm mt-3 leading-relaxed">
                            {{ $solution['problem_statement'] ?? 'Repetitive questions overwhelm senior staff, onboarding takes months, and critical institutional knowledge is lost whenever someone leaves.' }}
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-rose-200 text-xs text-rose-800 font-medium">
                        Result: Stalled projects, high error rates &amp; burnt-out leads
                    </div>
                </div>

                <div class="p-8 rounded-3xl bg-emerald-50/50 border border-emerald-200/80 shadow-subtle flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-emerald-700 bg-emerald-100 px-3 py-1 rounded-full">
                            The SaaSApps Solution
                        </span>
                        <h3 class="font-serif-display text-2xl font-semibold text-slate-900 mt-4">
                            Automated, Verified Standard SOPs
                        </h3>
                        <p class="text-slate-700 text-sm mt-3 leading-relaxed">
                            {{ $solution['solution_statement'] ?? 'Turn any team member into a master documentarian in seconds. Capture workflows automatically and share verified guides with a click.' }}
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-emerald-200 text-xs text-emerald-800 font-medium">
                        Result: Immediate self-sufficiency, zero tribal lock-in &amp; AI-ready context
                    </div>
                </div>
            </div>

            <!-- 4. Interactive Workflow Mockup (Persona Tailored) -->
            @if (!empty($solution['workflow_mockup']))
                <div class="mt-24 max-w-5xl mx-auto rounded-3xl p-6 sm:p-10 bg-gradient-to-br from-slate-900 to-slate-950 border border-slate-800 shadow-2xl text-white">
                    <div class="flex items-center justify-between pb-6 border-b border-slate-800">
                        <div>
                            <span class="text-[11px] font-mono uppercase tracking-wider text-brand-400">Verified Procedural Trajectory</span>
                            <h3 class="text-lg font-semibold text-white mt-1">{{ $solution['workflow_mockup']['title'] }}</h3>
                        </div>
                        <span class="px-3 py-1 rounded-full bg-brand-500/10 border border-brand-500/30 text-xs font-semibold text-brand-400">
                            Active Guide
                        </span>
                    </div>

                    <div class="mt-6 space-y-4">
                        @foreach ($solution['workflow_mockup']['steps'] as $ws)
                            <div class="p-4 rounded-xl bg-slate-800/80 border border-slate-700/80 flex items-start gap-4">
                                <div class="size-7 rounded-full bg-brand-500 text-white font-bold flex items-center justify-center text-xs flex-shrink-0 mt-0.5">
                                    {{ $ws['step'] }}
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-white">{{ $ws['action'] }}</h4>
                                    <p class="text-xs text-slate-300 mt-1 leading-relaxed">{{ $ws['detail'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- 5. Key Capability Benefits (3-4 Feature Cards) -->
            @if (!empty($solution['benefits']))
                <div class="mt-28 max-w-5xl mx-auto">
                    <div class="text-center mb-16">
                        <span class="text-xs font-semibold uppercase tracking-wider text-brand-600 bg-brand-50 px-3 py-1 rounded-full border border-brand-200">
                            Core Capabilities
                        </span>
                        <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink mt-3">
                            Engineered for high-output organizations
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach ($solution['benefits'] as $b)
                            <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle hover:shadow-card transition-all duration-200">
                                <div class="size-8 rounded-xl bg-brand-50 text-brand-700 flex items-center justify-center font-bold text-sm mb-4">
                                    &check;
                                </div>
                                <h4 class="font-serif-display text-xl font-semibold text-ink">{{ $b['title'] }}</h4>
                                <p class="text-sm text-slate-600 mt-2 leading-relaxed">{{ $b['desc'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- 6. Executive Persona Testimonial -->
            @if (!empty($solution['persona_quote']))
                <div class="mt-28 max-w-4xl mx-auto p-8 sm:p-12 rounded-3xl bg-white border border-slate-200/90 shadow-card text-center">
                    <div class="flex items-center justify-center gap-1 text-amber-400 mb-6">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="size-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <blockquote class="font-serif-display text-2xl sm:text-3xl text-ink leading-snug">
                        &ldquo;{{ $solution['persona_quote']['quote'] }}&rdquo;
                    </blockquote>
                    <div class="mt-6">
                        <h4 class="text-sm font-semibold text-ink">{{ $solution['persona_quote']['author'] }}</h4>
                        <p class="text-xs text-slate-500 mt-0.5">{{ $solution['persona_quote']['role'] }}</p>
                    </div>
                </div>
            @endif

            <!-- 7. Cross-Links to Related Solutions -->
            @if (!empty($solution['related']))
                <div class="mt-28 max-w-5xl mx-auto">
                    <div class="text-center mb-8">
                        <h3 class="font-serif-display text-2xl font-semibold text-ink">Related Solutions</h3>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        @foreach ($solution['related'] as $rel)
                            <a href="{{ $rel['url'] }}" class="p-5 rounded-2xl bg-white border border-slate-200/90 shadow-subtle hover:shadow-card hover:-translate-y-0.5 transition-all text-center group">
                                <span class="text-sm font-semibold text-ink group-hover:text-brand-600 transition-colors">{{ $rel['title'] }}</span>
                                <span class="text-xs text-slate-400 block mt-1">Explore solution &rarr;</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- 8. Tailored FAQ Accordion -->
            @if (!empty($solution['faqs']))
                <div class="mt-28 max-w-3xl mx-auto" x-data="{ activeFaq: null }">
                    <div class="text-center mb-12">
                        <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink">
                            Frequently asked questions
                        </h2>
                    </div>

                    <div class="space-y-4">
                        @foreach ($solution['faqs'] as $idx => $faq)
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
            @endif

            <!-- 9. Bottom Conversion Banner -->
            <div class="mt-28 max-w-5xl mx-auto rounded-3xl bg-white border border-slate-200/90 p-8 sm:p-14 shadow-card flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="max-w-xl text-center md:text-left">
                    <h2 class="font-serif-display text-3xl sm:text-4xl font-semibold text-ink leading-tight">
                        Scale your team's procedural intelligence.
                    </h2>
                    <p class="text-sm text-slate-600 mt-2">
                        Get started in minutes with automated capture or speak with an enterprise specialist.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-3 w-full md:w-auto">
                    <a href="{{ route('contact-us') }}" class="w-full sm:w-auto px-7 py-3 rounded-full text-center text-sm font-semibold text-white bg-charcoal hover:bg-slate-900 transition-all">
                        Get Started Free
                    </a>
                    <a href="{{ route('demo') }}" class="w-full sm:w-auto px-7 py-3 rounded-full text-center text-sm font-semibold text-slate-800 bg-slate-100 hover:bg-slate-200 transition-all">
                        Book Tailored Demo
                    </a>
                </div>
            </div>
        </div>
    </main>
</x-landing-layout>
