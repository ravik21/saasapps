<x-landing-layout>
    <main class="w-full bg-paper py-16 md:py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('case-studies.index') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-500 hover:text-ink mb-8 transition-colors">
                &larr; Back to Case Studies
            </a>
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-50 border border-brand-200 text-xs font-semibold text-brand-800 mb-4 shadow-2xs">
                <span class="size-1.5 rounded-full bg-brand-500"></span>
                <span>Verified Customer Story</span>
            </div>
            <h1 class="font-serif-display text-3xl sm:text-4xl md:text-5xl font-semibold text-ink leading-[1.15]">
                How {{ ucwords(str_replace('-', ' ', $slug)) }} Standardized Workflows &amp; Accelerated Team Output
            </h1>
            <p class="text-lg sm:text-xl text-slate-600 mt-6 leading-relaxed">
                Discover how modern teams replace tedious screen-sharing and fragmented Google Docs with automatic, verified standard operating procedures.
            </p>

            <!-- Metrics Callout Strip -->
            <div class="mt-12 p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle">
                <h3 class="font-serif-display text-xl font-semibold text-ink">Impact metrics at a glance</h3>
                <div class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-6 text-center divide-y sm:divide-y-0 sm:divide-x divide-slate-100">
                    <div class="p-3">
                        <div class="text-4xl font-serif-display font-bold text-brand-600">85%</div>
                        <p class="text-xs text-slate-500 mt-2 font-medium">Faster New Hire Ramp</p>
                    </div>
                    <div class="p-3">
                        <div class="text-4xl font-serif-display font-bold text-emerald-600">3.5 hrs</div>
                        <p class="text-xs text-slate-500 mt-2 font-medium">Saved per Employee/Wk</p>
                    </div>
                    <div class="p-3">
                        <div class="text-4xl font-serif-display font-bold text-purple-600">100%</div>
                        <p class="text-xs text-slate-500 mt-2 font-medium">SOP Verification Adherence</p>
                    </div>
                </div>
            </div>

            <!-- Case Study Editorial Body -->
            <article class="mt-12 prose prose-slate max-w-none text-slate-700 leading-relaxed space-y-8">
                <div>
                    <h2 class="font-serif-display text-2xl font-semibold text-ink">The Challenge</h2>
                    <p class="mt-3">
                        Prior to implementing SaaSApps, teams relied on ad-hoc screenshares and static documents that became obsolete the moment internal software was updated. Senior operators spent more than 15 hours each week answering the same repetitive questions from junior teammates and cross-departmental leads.
                    </p>
                </div>

                <div>
                    <h2 class="font-serif-display text-2xl font-semibold text-ink">The SaaSApps Implementation</h2>
                    <p class="mt-3">
                        By rolling out the SaaSApps Chrome extension and desktop recorder across the organization, subject matter experts were able to capture their actual daily work in real time. Complex tasks in Salesforce, NetSuite, Jira, and internal portals were automatically turned into visual, annotated runbooks with zero manual editing.
                    </p>
                </div>

                <!-- Testimonial Quote -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200/90 my-8">
                    <blockquote class="font-serif-display text-xl text-ink leading-relaxed italic">
                        &ldquo;SaaSApps has fundamentally transformed how our team operates. It completely eliminated the repetitive onboarding questions that used to clog our Slack channels every single week.&rdquo;
                    </blockquote>
                    <div class="mt-4 inline-flex items-center gap-1.5 text-xs font-semibold text-emerald-700 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200/60">
                        <svg class="size-3.5 fill-current" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Verified Customer Feedback</span>
                    </div>
                </div>

                <div>
                    <h2 class="font-serif-display text-2xl font-semibold text-ink">The Measurable Results</h2>
                    <p class="mt-3">
                        Within 60 days of deployment, new hire onboarding time dropped from four weeks to five days. More importantly, cross-departmental alignment improved dramatically, and process variance on critical financial and customer workflows reached zero.
                    </p>
                </div>
            </article>

            <!-- Bottom CTA -->
            <div class="mt-16 pt-8 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                <a href="{{ route('case-studies.index') }}" class="text-sm font-semibold text-slate-600 hover:text-ink">
                    &larr; Read more customer stories
                </a>
                <a href="{{ route('demo') }}" class="px-7 py-3 rounded-full text-sm font-semibold text-white bg-charcoal hover:bg-slate-900 transition-all">
                    Book Enterprise Walkthrough
                </a>
            </div>
        </div>
    </main>
</x-landing-layout>
