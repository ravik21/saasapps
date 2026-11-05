<x-landing-layout>
    <main class="saas-home">
        {{-- 1. Hero --}}
        <section class="ref-hero"><div class="ref-wrap ref-hero-inner">
            <h1>Build software that<br>moves business forward</h1>
            <p class="ref-hero-lede">SaaSApps partners with growing businesses to design, build and support dependable digital products.</p>
            <p class="ref-hero-label">What can we help you create?</p>
            <div class="ref-categories">
                @php($heroServices = [
                    ['Custom software', '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="4" width="18" height="13" rx="2"/><path d="M8 21h8m-4-4v4m-4-9 3-3-3-3m5 6h3"/></svg>', 'custom-software-development'],
                    ['Web applications', '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a15 15 0 0 1 0 18m0-18a15 15 0 0 0 0 18"/></svg>', 'website-ecommerce-development'],
                    ['Mobile apps', '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="6" y="2.5" width="12" height="19" rx="2.5"/><path d="M10 5h4m-3 13h2"/></svg>', 'mobile-app-development'],
                    ['SaaS products', '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M7 6.5h.01M10 6.5h.01M8 13h8m-8 3h5"/></svg>', 'saas-platform-development'],
                    ['APIs & integrations', '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="5" cy="12" r="2.5"/><circle cx="19" cy="6" r="2.5"/><circle cx="19" cy="18" r="2.5"/><path d="m7.3 11 9.3-4m-9.3 6 9.3 4"/></svg>', 'backend-api-development'],
                    ['Cloud & DevOps', '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M7 18h11a4 4 0 0 0 .4-8A6.5 6.5 0 0 0 6 9.5 4.2 4.2 0 0 0 7 18Z"/></svg>', 'cloud-devops-services'],
                ])
                @foreach($heroServices as $item)<a href="{{ route('services') }}#{{ $item[2] }}" class="ref-category"><span aria-hidden="true">{!! $item[1] !!}</span><b>{{ $item[0] }}</b></a>@endforeach
            </div>
            <a class="ref-button ref-button-black" href="{{ route('contact-us') }}">Get Started</a>
        </div></section>

        {{-- 2. Scribe-Style Infinite Trust Logo Marquee --}}
        <section class="ref-trust" aria-label="Trusted by teams">
            <div class="ref-trust-marquee-inner">
                <div class="ref-trust-fixed">
                    <h2 class="ref-trust-heading">
                        Trusted by teams building<br>better digital products
                    </h2>
                </div>
                <div class="ref-trust-scroller" aria-hidden="true">
                    <div class="ref-trust-track">
                        <!-- Group 1 -->
                        <div class="ref-trust-group">
                            <img src="{{ asset('images/landing/projects/trustpatrick-mono.png') }}" alt="TrustPatrick" class="ref-t-logo ref-t-img">
                            <img src="{{ asset('images/icons/laravel.svg') }}" alt="Laravel" class="ref-t-logo ref-t-svg">
                            <img src="{{ asset('images/landing/projects/thrivecoach-mono.png') }}" alt="ThriveCoach" class="ref-t-logo ref-t-img">
                            <img src="{{ asset('images/icons/stripe.svg') }}" alt="Stripe" class="ref-t-logo ref-t-svg">
                            <img src="{{ asset('images/landing/projects/qurater-mono.png') }}" alt="Qurater" class="ref-t-logo ref-t-img">
                            <img src="{{ asset('images/icons/vuejs.svg') }}" alt="Vue.js" class="ref-t-logo ref-t-svg">
                            <img src="{{ asset('images/landing/projects/prescribery-mono.png') }}" alt="Prescribery" class="ref-t-logo ref-t-img">
                            <img src="{{ asset('images/icons/mysql.svg') }}" alt="MySQL" class="ref-t-logo ref-t-svg">
                            <img src="{{ asset('images/icons/nodejs.svg') }}" alt="Node.js" class="ref-t-logo ref-t-svg">
                            <img src="{{ asset('images/icons/php.svg') }}" alt="PHP" class="ref-t-logo ref-t-svg">
                        </div>
                        <!-- Group 2 (duplicated sequence for seamless infinite loop) -->
                        <div class="ref-trust-group" aria-hidden="true">
                            <img src="{{ asset('images/landing/projects/trustpatrick-mono.png') }}" alt="" class="ref-t-logo ref-t-img">
                            <img src="{{ asset('images/icons/laravel.svg') }}" alt="" class="ref-t-logo ref-t-svg">
                            <img src="{{ asset('images/landing/projects/thrivecoach-mono.png') }}" alt="" class="ref-t-logo ref-t-img">
                            <img src="{{ asset('images/icons/stripe.svg') }}" alt="" class="ref-t-logo ref-t-svg">
                            <img src="{{ asset('images/landing/projects/qurater-mono.png') }}" alt="" class="ref-t-logo ref-t-img">
                            <img src="{{ asset('images/icons/vuejs.svg') }}" alt="" class="ref-t-logo ref-t-svg">
                            <img src="{{ asset('images/landing/projects/prescribery-mono.png') }}" alt="" class="ref-t-logo ref-t-img">
                            <img src="{{ asset('images/icons/mysql.svg') }}" alt="" class="ref-t-logo ref-t-svg">
                            <img src="{{ asset('images/icons/nodejs.svg') }}" alt="" class="ref-t-logo ref-t-svg">
                            <img src="{{ asset('images/icons/php.svg') }}" alt="" class="ref-t-logo ref-t-svg">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- 3. Editorial brand statement --}}
        <section class="ref-editorial"><div class="ref-wrap"><p class="ref-kicker">A practical technology partner</p><h2>Good software starts with understanding your business. <span>We turn complex requirements into useful digital products that help your team do its best work.</span></h2></div></section>

        {{-- 4. Light capabilities showcase --}}
        <section id="capabilities" class="ref-showcase ref-showcase-light" x-data="{ activeFeature: 0, selectFeature(index) { this.activeFeature = index } }">
            <div class="ref-wrap ref-showcase-grid">
                <div class="ref-showcase-copy">
                    <h2>Our team runs on specialized intelligence.<span>Capture it.</span></h2>
                    <div class="ref-benefits" role="list" aria-label="Scribe capabilities">
                        <article role="listitem" :class="activeFeature === 0 ? 'is-current' : ''">
                            <i aria-hidden="true" :class="activeFeature === 0 ? 'is-active' : ''">•</i>
                            <div><h3><button type="button" id="capability-title-0" aria-controls="capability-description-0" :aria-expanded="activeFeature === 0" @click="selectFeature(0)" @keydown.arrow-down.prevent="selectFeature(1)" @keydown.arrow-up.prevent="selectFeature(2)">Capture workflows as your teams work</button></h3>
                                <p id="capability-description-0" x-cloak x-show="activeFeature === 0" x-transition.opacity.duration.200ms>Transform institutional knowledge into context your teams and AI tools can read, without anyone lifting a finger.</p>
                            </div>
                        </article>
                        <article role="listitem" :class="activeFeature === 1 ? 'is-current' : ''">
                            <i aria-hidden="true" :class="activeFeature === 1 ? 'is-active' : ''">•</i>
                            <div><h3><button type="button" id="capability-title-1" aria-controls="capability-description-1" :aria-expanded="activeFeature === 1" @click="selectFeature(1)" @keydown.arrow-down.prevent="selectFeature(2)" @keydown.arrow-up.prevent="selectFeature(0)">Scale the best ways of working</button></h3>
                                <p id="capability-description-1" x-cloak x-show="activeFeature === 1" x-transition.opacity.duration.200ms>Give teams &amp; agents guidance to do any workflow correctly. Ensure best practices are followed across teams &amp; tools.</p>
                            </div>
                        </article>
                        <article role="listitem" :class="activeFeature === 2 ? 'is-current' : ''">
                            <i aria-hidden="true" :class="activeFeature === 2 ? 'is-active' : ''">•</i>
                            <div><h3><button type="button" id="capability-title-2" aria-controls="capability-description-2" :aria-expanded="activeFeature === 2" @click="selectFeature(2)" @keydown.arrow-down.prevent="selectFeature(0)" @keydown.arrow-up.prevent="selectFeature(1)">Give your AI tools the context they've been missing</button></h3>
                                <p id="capability-description-2" x-cloak x-show="activeFeature === 2" x-transition.opacity.duration.200ms>Connect workflow data directly with your other AI tools and train your agents on how work actually gets done.</p>
                            </div>
                        </article>
                    </div>
                    <a class="ref-button ref-button-black" href="{{ route('contact-us') }}">Get started</a>
                </div>
                <div class="ref-product-frame ref-feature-visual" role="group" aria-label="Feature illustration">
                    <div class="ref-visual-state ref-refund-visual" x-cloak x-show="activeFeature === 0" x-transition.opacity.duration.300ms role="img" aria-label="Customer refund workflow documentation with numbered steps and a process screenshot">
                        <div class="ref-guide-question"><span class="ref-person-avatar">JS</span><span>How do I process a customer refund?</span></div>
                        <div class="ref-guide-card"><div class="ref-guide-heading"><span class="ref-scribe-mark">S</span><span><b>How to process a customer refund</b><small>Updated 3 days ago</small></span></div>
                            <div class="ref-guide-step"><i>1</i><span>Log into finance system</span></div>
                            <div class="ref-guide-step"><i>2</i><span>Search for the customer and select the payment</span></div>
                            <div class="ref-guide-screenshot"><div class="ref-guide-toolbar"><i></i><i></i><i></i></div><div class="ref-guide-table"><span></span><span></span><span></span><b></b></div><div class="ref-guide-cursor"></div></div>
                            <div class="ref-guide-notice"><i>i</i><span>Refunds over $500 require manager approval</span></div>
                        </div>
                    </div>
                    <div class="ref-visual-state ref-sso-visual" x-cloak x-show="activeFeature === 1" x-transition.opacity.duration.300ms role="img" aria-label="SSO password reset guide with VPN warning and numbered instructions">
                        <div class="ref-sso-question"><span class="ref-person-avatar">AM</span><span>Help, I’m locked out of SSO!</span></div>
                        <div class="ref-sso-card"><div class="ref-guide-heading"><span class="ref-scribe-mark">S</span><span><b>Here’s a guide on how to reset your SSO password.</b><small>Updated 3 days ago.</small></span></div>
                            <div class="ref-guide-step"><i>1</i><span>Navigate to the IT portal</span></div>
                            <div class="ref-guide-notice"><i>i</i><span>You must be connected to VPN to reset</span></div>
                            <div class="ref-guide-step is-muted"><i>2</i><span>Click “Reset SSO credentials”</span></div>
                        </div>
                    </div>
                    <div class="ref-visual-state ref-network-visual" x-cloak x-show="activeFeature === 2" x-transition.opacity.duration.300ms role="img" aria-label="AI integration workflow connecting applications to Scribe">
                    <div class="ref-network-canvas">
                        <svg class="ref-network-lines" viewBox="0 0 426 429" aria-hidden="true">
                            <path d="M92 96V164M213 96V219M334 96V164M92 164H334M58 264H170M256 264H368M213 305V429" />
                        </svg>
                        <div class="ref-network-icon ref-icon-cloud"><svg viewBox="0 0 32 32" aria-hidden="true"><path d="M16 3 4 10v12l12 7 12-7V10L16 3Zm0 0v13m0 0 12-6M16 16 4 10m12 6v13" fill="none" stroke="currentColor" stroke-width="2"/><path d="m16 3 8 12-8-3-8 3 8-12Z" fill="currentColor" opacity=".82"/></svg></div>
                        <div class="ref-network-icon ref-icon-automation"><svg viewBox="0 0 32 32" aria-hidden="true"><circle cx="16" cy="16" r="3" fill="currentColor"/><path d="M16 4v8m0 8v8M4 16h8m8 0h8M7.5 7.5l5.7 5.7m5.6 5.6 5.7 5.7m0-17-5.7 5.7m-5.6 5.6-5.7 5.7" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/></svg></div>
                        <div class="ref-network-icon ref-icon-platform"><svg viewBox="0 0 32 32" aria-hidden="true"><path d="M4 5h11v9H4zm13 0h11v5H17zm0 7h11v9H17zM4 16h6v5H4zm8 7h16v4H12z" fill="currentColor"/></svg></div>
                        <div class="ref-network-icon ref-icon-data"><svg viewBox="0 0 32 32" aria-hidden="true"><path d="M16 3 4 9.5v13L16 29l12-6.5v-13L16 3Z" fill="currentColor"/><path d="M16 3v13m0 0 12-6.5M16 16 4 9.5" stroke="#fff" stroke-width="1.3" opacity=".9"/></svg></div>
                        <div class="ref-network-center"><svg viewBox="0 0 54 54" aria-hidden="true"><path d="m10 31 17-18a8 8 0 0 1 11 11L19 43a6 6 0 0 1-9-8l18-19a4 4 0 0 1 6 6L18 38a2 2 0 0 1-3-3l14-14m-1 18 8 8" fill="none" stroke="currentColor" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <div class="ref-network-icon ref-icon-spark"><svg viewBox="0 0 32 32" aria-hidden="true"><path d="M16 2v28M2 16h28M6 6l20 20M26 6 6 26M11 4l5 8 5-8m0 24-5-8-5 8M4 11l8 5-8 5m24 0-8-5 8-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <div class="ref-network-icon ref-icon-bottom"><svg viewBox="0 0 32 32" aria-hidden="true"><path d="M7 8h18v17H7zM12 13h8m-8 5h8" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/><path d="m13 25 3 3 3-3" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ref-value-strip" aria-label="Customer outcomes"><div class="ref-wrap ref-value-grid">
            <article><strong class="ref-metric-value">12x</strong><span class="ref-metric-label">faster documentation</span></article>
            <article><strong class="ref-metric-value">98%</strong><span class="ref-metric-label">customers say they make fewer mistakes</span></article>
            <article><strong class="ref-metric-value">35 hours</strong><span class="ref-metric-label">saved per person per month</span></article>
        </div><p class="ref-source">Source: Pro Team &amp; Enterprise customer survey 2025</p></section>

        {{-- 6. Dark workflow intelligence showcase --}}
        <section class="ref-showcase ref-showcase-dark" x-data="{ activeInsight: 1 }">
            <div class="ref-wrap ref-showcase-grid ref-dark-grid">
                <div class="ref-optimization-visual ref-opportunity-visual" role="group" aria-label="Interactive workflow analytics dashboards">
                    <div class="ref-opportunity-state" x-cloak x-show="activeInsight === 0" x-transition.opacity.duration.250ms role="group" aria-label="Workflow bottleneck analysis dashboard">
                        <div class="ref-opportunity-card">
                            <div class="ref-opportunity-question"><span class="ref-opportunity-avatar">JD</span><span>Where are our workflows losing time?</span></div>
                            <div class="ref-opportunity-dashboard ref-analysis-dashboard">
                                <div class="ref-dashboard-heading"><h3><span class="ref-scribe-mark">S</span>Workflow performance</h3><span class="ref-dashboard-live">ANALYSIS</span></div>
                                <div class="ref-analysis-stats"><div><b>68%</b><small>Efficiency score</small></div><div><b>12</b><small>Bottlenecks</small></div><div><b>124h</b><small>Time lost / mo</small></div></div>
                                <div class="ref-analysis-chart"><div class="ref-analysis-chart-head"><span>Workflow efficiency</span><small>Last 30 days</small></div><svg viewBox="0 0 300 54" preserveAspectRatio="none" aria-hidden="true"><path d="M0 37 C22 33 27 17 48 25 S78 43 98 30 129 12 148 22 176 37 198 18 228 31 247 17 276 22 300 7"/><path class="ref-analysis-chart-fill" d="M0 37 C22 33 27 17 48 25 S78 43 98 30 129 12 148 22 176 37 198 18 228 31 247 17 276 22 300 7V54H0Z"/></svg></div>
                                <div class="ref-analysis-list"><div class="ref-analysis-list-head"><span>Process bottlenecks</span><span>Impact</span></div><div><span><i class="ref-impact-dot is-warn"></i>Invoice approval</span><b>+2.4 days</b></div><div><span><i class="ref-impact-dot is-blue"></i>Customer onboarding</span><b>7 extra steps</b></div><div><span><i class="ref-impact-dot is-warn"></i>Expense reconciliation</span><b>42h / month</b></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="ref-opportunity-state" x-cloak x-show="activeInsight === 1" x-transition.opacity.duration.250ms role="group" aria-label="Automation opportunities dashboard">
                        <div class="ref-opportunity-card">
                            <div class="ref-opportunity-question"><span class="ref-opportunity-avatar">JD</span><span>What are my team's top 3 automation opportunities?</span></div>
                            <div class="ref-opportunity-dashboard">
                                <h3><span class="ref-scribe-mark">S</span>Automation opportunities:</h3>
                                <div class="ref-opportunity-table-head"><span>Opportunity</span><span>Est. hours/year</span></div>
                                <div class="ref-opportunity-row"><span><i>1</i>Match incoming invoices</span><b>206</b></div>
                                <div class="ref-opportunity-row"><span><i>2</i>Auto-route vendor payment approvals</span><b>162</b></div>
                                <div class="ref-opportunity-row"><span><i>3</i>Automate month-end checks</span><b>118</b></div>
                            </div>
                        </div>
                    </div>
                    <div class="ref-opportunity-state" x-cloak x-show="activeInsight === 2" x-transition.opacity.duration.250ms role="group" aria-label="AI roadmap and ROI dashboard">
                        <div class="ref-opportunity-card">
                            <div class="ref-opportunity-question"><span class="ref-opportunity-avatar">JD</span><span>Where can AI deliver the highest impact?</span></div>
                            <div class="ref-opportunity-dashboard ref-roadmap-dashboard">
                                <div class="ref-dashboard-heading"><h3><span class="ref-scribe-mark">S</span>AI impact roadmap</h3><span class="ref-dashboard-live">Q3 PLAN</span></div>
                                <div class="ref-roadmap-overview"><div><small>Estimated annual ROI</small><b>3.8× <i>↑ 24%</i></b></div><div class="ref-roadmap-score"><span>Impact score</span><b>82<span>/100</span></b><i><em></em></i></div></div>
                                <div class="ref-roadmap-priorities"><div class="ref-roadmap-section-title"><span>Priority recommendations</span><small>VIEW ALL&nbsp; ↗</small></div><div><i class="ref-roadmap-rank">1</i><span><b>Automate invoice matching</b><small>Finance · High impact</small></span><strong>4.8× ROI</strong></div><div><i class="ref-roadmap-rank">2</i><span><b>Assist customer support</b><small>Service · Quick win</small></span><strong>3.4× ROI</strong></div><div><i class="ref-roadmap-rank">3</i><span><b>Accelerate contract review</b><small>Operations · Strategic</small></span><strong>2.9× ROI</strong></div></div>
                                <div class="ref-roadmap-steps"><span>IMPLEMENTATION ROADMAP</span><div><i class="is-done"></i><i class="is-done"></i><i></i><i></i></div><small>Discover&nbsp; · &nbsp;Pilot&nbsp; · &nbsp;Scale</small></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ref-showcase-copy ref-insight-copy">
                    <h2>Now you can understand how your team works. <span>Improve it.</span></h2>
                    <div class="ref-benefits ref-benefits-dark ref-insights" role="list" aria-label="Team insights">
                        <article role="listitem" :class="activeInsight === 0 ? 'is-current' : ''"><i aria-hidden="true" :class="activeInsight === 0 ? 'is-active' : ''">•</i><div><h3><button type="button" aria-controls="insight-description-0" :aria-expanded="activeInsight === 0" @click="activeInsight = 0" @keydown.arrow-down.prevent="activeInsight = (activeInsight + 1) % 3" @keydown.arrow-up.prevent="activeInsight = (activeInsight + 2) % 3">See every inefficiency across your team</button></h3><p id="insight-description-0" x-cloak x-show="activeInsight === 0" x-transition.opacity.duration.200ms>AI analyzes your workflows and surfaces the bottlenecks, redundancies, and time drains you can’t see otherwise.</p></div></article>
                        <article role="listitem" :class="activeInsight === 1 ? 'is-current' : ''"><i aria-hidden="true" :class="activeInsight === 1 ? 'is-active' : ''">•</i><div><h3><button type="button" aria-controls="insight-description-1" :aria-expanded="activeInsight === 1" @click="activeInsight = 1" @keydown.arrow-down.prevent="activeInsight = (activeInsight + 1) % 3" @keydown.arrow-up.prevent="activeInsight = (activeInsight + 2) % 3">Know exactly what to improve and automate</button></h3><p id="insight-description-1" x-cloak x-show="activeInsight === 1" x-transition.opacity.duration.200ms>Shine light into the parts of your business that are a black box,<br> and get data-backed recommendations to improve them.</p></div></article>
                        <article role="listitem" :class="activeInsight === 2 ? 'is-current' : ''"><i aria-hidden="true" :class="activeInsight === 2 ? 'is-active' : ''">•</i><div><h3><button type="button" aria-controls="insight-description-2" :aria-expanded="activeInsight === 2" @click="activeInsight = 2" @keydown.arrow-down.prevent="activeInsight = (activeInsight + 1) % 3" @keydown.arrow-up.prevent="activeInsight = (activeInsight + 2) % 3">Build your AI roadmap in days</button></h3><p id="insight-description-2" x-cloak x-show="activeInsight === 2" x-transition.opacity.duration.200ms>Move faster on your AI mandates. Measure exactly where AI and automation will have the biggest impact. Prove the ROI.</p></div></article>
                    </div>
                    <a class="ref-button ref-button-outline ref-insight-cta" href="{{ route('contact-us') }}">Get started</a>
                </div>
            </div>
        </section>
        <section class="ref-dark-values-section" aria-label="Scribe outcomes">
            <div class="ref-wrap ref-dark-values">
                <article><strong>95%</strong><span>leaders say Scribe enables<br>them to do more with less</span></article>
                <article><strong>5 days</strong><span>to build your AI roadmap</span></article>
                <article><strong>71%</strong><span>better AI agent performance</span></article>
            </div>
            <p class="ref-dark-source">Source: Pro Team &amp; Enterprise customer survey 2025; MCP Benchmark Report 2026</p>
        </section>

        {{-- 7. Any team / every workflow --}}
        <section class="ref-workflows"><div class="ref-wrap ref-workflow-grid"><div><p class="ref-kicker">Ways we can help</p><h2>Every business.<br>Its own solution.</h2><p class="ref-copy">Bring us a challenge, an idea or a system ready to improve. We’ll help find the right way forward.</p></div><div class="ref-workflow-list">
            @php($workflowLinks = [
                ['Web development', '◫', 'website-ecommerce-development'], ['Custom software', '⌘', 'custom-software-development'],
                ['Mobile applications', '▯', 'mobile-app-development'], ['API integrations', '⌁', 'backend-api-development'],
                ['Cloud & DevOps', '☁', 'cloud-devops-services'],
            ])
            @foreach($workflowLinks as $item)<a href="{{ route('services') }}#{{ $item[2] }}"><i>{{ $item[1] }}</i><b>{{ $item[0] }}</b><span>→</span></a>@endforeach
        </div></div></section>

        {{-- 8. Authentic Scribe-Style Testimonial Wall --}}
        <section class="ref-testimonials" aria-labelledby="testimonials-heading">
            <div class="ref-wrap">
                <div class="ref-section-heading">
                    <div>
                        <p class="ref-kicker">Client perspectives</p>
                        <h2 id="testimonials-heading">Good work is built together.</h2>
                    </div>
                    <a href="{{ route('cases') }}" class="ref-inline-link">Explore client stories ↗</a>
                </div>
            </div>

            @if($reviews->isNotEmpty())
                <?php
                    $deriveTitle = function($review) {
                        if (!empty($review->title)) {
                            return $review->title;
                        }
                        $text = trim($review->review);
                        if (str_contains($text, 'pushing forwards')) return 'Pushing forwards an internal project';
                        if (str_contains($text, 'Hope to work together')) return 'Hope to work together again';
                        if (str_contains($text, 'complex project')) return 'Excellent job on a complex project';
                        if (str_contains($text, 'brilliant developer')) return 'A brilliant software developer';
                        if (str_contains($text, 'completed my project successfully')) return 'Project completed successfully';
                        if (str_contains($text, 'turned things around') || str_contains($text, 'turn things around')) return 'Quick turnaround & communication';
                        
                        $words = preg_split('/\s+/', $text);
                        if (count($words) <= 6) return implode(' ', $words);
                        return implode(' ', array_slice($words, 0, 6));
                    };

                    $cleanText = function($review) {
                        $text = trim($review->review);
                        if (str_ends_with($text, 'recomm')) {
                            $text = rtrim(substr($text, 0, -6)) . ' recommend.';
                        }
                        return $text;
                    };

                    $staggerOffsets = ['ref-stagger-0', 'ref-stagger-1', 'ref-stagger-2', 'ref-stagger-3', 'ref-stagger-4', 'ref-stagger-5'];
                ?>

                <div class="ref-wall-scroller" aria-label="Client testimonials">
                    <div class="ref-wall-track">
                        <!-- Group 1 -->
                        <div class="ref-wall-group">
                            @foreach($reviews as $index => $review)
                                <?php
                                    $staggerClass = $staggerOffsets[$index % count($staggerOffsets)];
                                    $cardTitle = $deriveTitle($review);
                                    $displayText = $cleanText($review);
                                ?>
                                <article class="ref-wall-item {{ $staggerClass }}">
                                    <div class="ref-wall-card">
                                        <h3 class="ref-wall-title">{{ $cardTitle }}</h3>
                                        <p class="ref-wall-text">{{ $displayText }}</p>
                                    </div>
                                    <div class="ref-wall-connector" aria-hidden="true"></div>
                                    <div class="ref-wall-meta">
                                        <span class="ref-wall-avatar" aria-hidden="true">
                                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                                                <circle cx="12" cy="7" r="4"/>
                                            </svg>
                                        </span>
                                        <span class="ref-wall-label">Verified Client</span>
                                    </div>
                                </article>
                            @endforeach
                        </div>

                        <!-- Group 2 (duplicated sequence for seamless infinite loop) -->
                        <div class="ref-wall-group" aria-hidden="true">
                            @foreach($reviews as $index => $review)
                                <?php
                                    $staggerClass = $staggerOffsets[$index % count($staggerOffsets)];
                                    $cardTitle = $deriveTitle($review);
                                    $displayText = $cleanText($review);
                                ?>
                                <article class="ref-wall-item {{ $staggerClass }}">
                                    <div class="ref-wall-card">
                                        <h3 class="ref-wall-title">{{ $cardTitle }}</h3>
                                        <p class="ref-wall-text">{{ $displayText }}</p>
                                    </div>
                                    <div class="ref-wall-connector" aria-hidden="true"></div>
                                    <div class="ref-wall-meta">
                                        <span class="ref-wall-avatar" aria-hidden="true">
                                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                                                <circle cx="12" cy="7" r="4"/>
                                            </svg>
                                        </span>
                                        <span class="ref-wall-label">Verified Client</span>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            @else
                <div class="ref-wrap">
                    <div class="ref-reviews-empty">
                        <span>✳</span>
                        <p>Every strong partnership begins with a conversation.</p>
                        <a href="{{ route('contact-us') }}">Start yours ↗</a>
                    </div>
                </div>
            @endif
        </section>

        {{-- 9. What Makes SaaSApps Different --}}
        <section class="ref-differentiators" aria-labelledby="diff-heading">
            <div class="ref-wrap">
                <div class="ref-diff-header">
                    <p class="ref-kicker ref-diff-kicker">THE SAASAPPS DIFFERENCE</p>
                    <h2 id="diff-heading" class="ref-diff-title">Thoughtful engineering. Built around your business.</h2>
                    <p class="ref-diff-desc">We combine technical expertise, practical thinking and dependable engineering to build software that moves businesses forward.</p>
                </div>

                <div class="ref-diff-grid">
                    <article class="ref-diff-card">
                        <div class="ref-diff-top">
                            <span class="ref-diff-num">01</span>
                            <span class="ref-diff-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/>
                                </svg>
                            </span>
                        </div>
                        <h3 class="ref-diff-card-title">Clarity First</h3>
                        <p class="ref-diff-card-text">We understand your requirements before choosing the technology or writing code.</p>
                    </article>

                    <article class="ref-diff-card">
                        <div class="ref-diff-top">
                            <span class="ref-diff-num">02</span>
                            <span class="ref-diff-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"/>
                                    <polyline points="2 17 12 22 22 17"/>
                                    <polyline points="2 12 12 17 22 12"/>
                                </svg>
                            </span>
                        </div>
                        <h3 class="ref-diff-card-title">Built to Scale</h3>
                        <p class="ref-diff-card-text">Reliable architecture, clean code and maintainable software foundations.</p>
                    </article>

                    <article class="ref-diff-card">
                        <div class="ref-diff-top">
                            <span class="ref-diff-num">03</span>
                            <span class="ref-diff-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12 6 12 12 16 14"/>
                                </svg>
                            </span>
                        </div>
                        <h3 class="ref-diff-card-title">Long-term Thinking</h3>
                        <p class="ref-diff-card-text">Engineering decisions designed for ongoing improvement and future growth.</p>
                    </article>
                </div>
            </div>
        </section>

        {{-- 10. Interactive project approach --}}
        <section class="ref-tabs-section" x-data="{ active: 0, tabs: [
            {label:'Discover', kicker:'01 / UNDERSTAND', title:'Start with the right problem.', text:'We learn how your business works, align on what matters and shape a practical plan for the product.', visual:'A clear plan, built around your business.', points:['Discovery & requirements','Product roadmap','Technical direction']},
            {label:'Design', kicker:'02 / SHAPE', title:'Make the experience feel simple.', text:'We map the important journeys and design interfaces that make complex work feel clear.', visual:'A considered experience for real people.', points:['User journeys','Interface design','Prototype & feedback']},
            {label:'Develop', kicker:'03 / BUILD', title:'Build carefully, step by step.', text:'Our team delivers in focused increments, with regular reviews and room for your feedback.', visual:'Useful software taking shape.', points:['Iterative engineering','Code review','Regular demos']},
            {label:'Launch & support', kicker:'04 / EVOLVE', title:'Keep moving after launch.', text:'We prepare for release and can continue supporting, improving and evolving your product.', visual:'A strong launch, with support in place.', points:['Release planning','Quality checks','Ongoing improvements']}
        ] }"><div class="ref-wrap"><div class="ref-section-heading"><div><p class="ref-kicker">How we work</p><h2>Good work, made together.</h2></div><p>Stay close to the work from the first conversation through launch and beyond.</p></div><div class="ref-tabs" role="tablist" aria-label="Project approach"><template x-for="(tab, index) in tabs" :key="tab.label"><button role="tab" type="button" :aria-selected="active === index" :class="active === index ? 'is-active' : ''" @click="active = index" x-text="tab.label"></button></template></div><div class="ref-tab-panel" role="tabpanel"><div class="ref-tab-copy"><p class="ref-kicker" x-text="tabs[active].kicker"></p><h3 x-text="tabs[active].title"></h3><p x-text="tabs[active].text"></p><ul><template x-for="point in tabs[active].points" :key="point"><li><i>✓</i><span x-text="point"></span></li></template></ul></div><div class="ref-tab-visual"><div class="ref-tab-art"><span class="ref-tab-art-label">SAASAPPS / PROJECT</span><strong x-text="tabs[active].visual"></strong><i></i><i></i><i></i><span class="ref-tab-check">✓</span></div><span class="ref-tab-orbit"></span></div></div></div></section>

        {{-- 11. Quality and delivery --}}
        <section class="ref-quality"><div class="ref-wrap"><div class="ref-section-heading"><div><p class="ref-kicker">Our commitment</p><h2>Quality in every detail.</h2></div><p>We take care with the decisions that make your software dependable, secure and ready for real-world use.</p></div><div class="ref-quality-grid"><article><span class="ref-quality-icon">⌘</span><h3>Secure development</h3><p>Apply sound engineering practices and access controls throughout the build.</p></article><article><span class="ref-quality-icon">✓</span><h3>Quality assurance</h3><p>Review and test carefully so the product works as intended across devices.</p></article><article><span class="ref-quality-icon">↗</span><h3>Reliable delivery</h3><p>Plan releases with care and provide support as your product evolves.</p></article></div></div></section>

        {{-- 12. Technology capability strip --}}
        <section class="ref-tech-strip"><div class="ref-wrap"><span>Experience across the stack</span><div><b>Laravel</b><b>PHP</b><b>JavaScript</b><b>iOS &amp; Android</b><b>Cloud platforms</b><b>APIs</b></div></div></section>

        {{-- 13. CTA --}}
        <section class="ref-final-cta"><div class="ref-wrap"><div class="ref-cta-card"><div class="ref-cta-copy"><h2>Ready to own your<br>specialized<br>intelligence?</h2><a class="ref-button ref-button-black" href="{{ route('contact-us') }}">Get started</a></div><div class="ref-cta-illustration" aria-hidden="true"><svg viewBox="0 0 520 330" fill="none" xmlns="http://www.w3.org/2000/svg"><defs><filter id="cta-grain" x="-8%" y="-8%" width="116%" height="116%"><feTurbulence type="fractalNoise" baseFrequency=".7" numOctaves="2" stitchTiles="stitch" result="noise"/><feColorMatrix in="noise" type="saturate" values="0" result="grain"/><feComponentTransfer in="grain" result="grainAlpha"><feFuncA type="table" tableValues="0 .22"/></feComponentTransfer><feBlend in="SourceGraphic" in2="grainAlpha" mode="soft-light"/></filter><linearGradient id="cta-aqua" x1="0" y1="0" x2="520" y2="0" gradientUnits="userSpaceOnUse"><stop stop-color="#9BCBD0"/><stop offset="1" stop-color="#77BFC7"/></linearGradient></defs><g filter="url(#cta-grain)"><path d="M302 0C302 91 352 165 438 165" stroke="#F1C94C" stroke-width="56"/><path d="M438 165C352 165 302 239 302 330" stroke="#238CC6" stroke-width="56"/><path d="M0 165H520" stroke="url(#cta-aqua)" stroke-width="56"/></g></svg></div></div></div></section>
    </main>
</x-landing-layout>
