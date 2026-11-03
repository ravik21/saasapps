<x-landing-layout>
    <main class="w-full bg-paper py-20 md:py-28">
        <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start max-w-6xl mx-auto">
                <!-- Left: Pitch -->
                <div class="lg:col-span-5">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-50 border border-brand-200 text-xs font-semibold text-brand-800 mb-6">
                        <span class="size-1.5 rounded-full bg-brand-500"></span>
                        <span>Enterprise Consultation</span>
                    </div>
                    <h1 class="font-serif-display text-4xl sm:text-5xl font-semibold text-ink leading-tight tracking-tight">
                        See how SaaSApps accelerates your organization.
                    </h1>
                    <p class="text-base text-slate-600 mt-4 leading-relaxed">
                        Schedule a 1-on-1 walkthrough with an enterprise solutions architect to see how automated capture and process optimization transform your operational efficiency.
                    </p>

                    <div class="mt-8 space-y-4">
                        <div class="flex items-start gap-3">
                            <span class="size-2 rounded-full bg-brand-500 mt-2"></span>
                            <span class="text-sm text-slate-700">Customized live walkthrough based on your application stack</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="size-2 rounded-full bg-brand-500 mt-2"></span>
                            <span class="text-sm text-slate-700">Enterprise security, SSO, and automated redaction review</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="size-2 rounded-full bg-brand-500 mt-2"></span>
                            <span class="text-sm text-slate-700">Custom volume pricing and seat migration plan</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Real Working Contact Form (POST to contact-us.store) -->
                <div class="lg:col-span-7 bg-white p-8 md:p-10 rounded-3xl border border-slate-200/90 shadow-card">
                    @if (session('success'))
                        <div class="p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm mb-6 flex items-center gap-2">
                            <svg class="size-5 text-emerald-600 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('contact-us.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">Full Name *</label>
                                <input type="text" name="name" required value="{{ old('name') }}" placeholder="Alex Morgan" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:ring-2 focus:ring-brand-500 focus:outline-none">
                                @error('name') <span class="text-xs text-rose-500">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">Work Email *</label>
                                <input type="email" name="email" required value="{{ old('email') }}" placeholder="alex@company.com" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:ring-2 focus:ring-brand-500 focus:outline-none">
                                @error('email') <span class="text-xs text-rose-500">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">Phone Number</label>
                                <input type="text" name="phone" value="{{ old('phone') }}" placeholder="+1 (555) 000-0000" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:ring-2 focus:ring-brand-500 focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">Team Size / Service</label>
                                <select name="service" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:ring-2 focus:ring-brand-500 focus:outline-none">
                                    <option value="Enterprise Demo (50+ seats)">Enterprise Demo (50+ seats)</option>
                                    <option value="Pro Team (5-50 seats)">Pro Team (5-50 seats)</option>
                                    <option value="AI Integration & MCP">AI Integration & MCP</option>
                                    <option value="Custom Consultation">Custom Consultation</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">Subject</label>
                            <input type="text" name="subject" value="{{ old('subject', 'Request for Demo') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:ring-2 focus:ring-brand-500 focus:outline-none">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">Tell us about your team's workflow</label>
                            <textarea name="message" rows="3" required placeholder="What tools do you use? What workflows are you looking to document and optimize?" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:ring-2 focus:ring-brand-500 focus:outline-none">{{ old('message') }}</textarea>
                            @error('message') <span class="text-xs text-rose-500">{{ $message }}</span> @enderror
                        </div>

                        <div class="pt-2">
                            <button type="submit" class="w-full py-3.5 rounded-full bg-charcoal hover:bg-slate-900 text-white text-sm font-semibold transition-all shadow-sm hover:scale-[1.01] active:scale-[0.99]">
                                Submit Demo Request
                            </button>
                            <p class="text-[11px] text-slate-400 text-center mt-2.5">
                                By submitting, you agree to our privacy policy. We will never share your email.
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-landing-layout>
