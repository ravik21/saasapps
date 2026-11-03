<x-landing-layout>
    <main class="w-full bg-paper py-20 md:py-28">
        <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-50 border border-brand-200 text-xs font-semibold text-brand-800 mb-6">
                    <span class="size-1.5 rounded-full bg-brand-500"></span>
                    <span>Customer Stories & Case Studies</span>
                </div>
                <h1 class="font-serif-display text-4xl sm:text-5xl md:text-6xl font-semibold text-ink leading-tight tracking-tight">
                    How high-performing teams scale on SaaSApps.
                </h1>
                <p class="text-lg text-slate-600 mt-6 leading-relaxed">
                    Discover how enterprise operators, fast-growing startups, and agencies eliminate repetitive training and achieve operational excellence.
                </p>
            </div>

            <div class="mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                @forelse($allCases as $case)
                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-subtle hover:shadow-card hover:-translate-y-1 transition-all duration-200 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-1 text-amber-400 mb-4">
                                @for($i = 0; $i < ($case->rating ?? 5); $i++)
                                    <svg class="size-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            <blockquote class="font-serif-display text-lg text-ink leading-relaxed">
                                &ldquo;{{ $case->review }}&rdquo;
                            </blockquote>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-100 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <img src="{{ $case->client_avatar }}" alt="{{ $case->client_name }}" class="size-10 rounded-full object-cover border border-slate-200" />
                                <div>
                                    <h4 class="text-sm font-semibold text-ink">{{ $case->client_name }}</h4>
                                    <p class="text-xs text-slate-500">{{ $case->job_title ?? 'Verified Client' }} &bull; {{ $case->company_name }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-3 border-t border-slate-50 flex items-center justify-between text-xs">
                            <span class="text-emerald-600 font-semibold">&check; Verified Enterprise Client</span>
                            <a href="/case-studies/{{ \Illuminate\Support\Str::slug($case->company_name ?: 'client-story') }}" class="font-semibold text-brand-600 hover:text-brand-700 inline-flex items-center gap-1">
                                Case study &rarr;
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-16 bg-white rounded-3xl border border-slate-200">
                        <p class="text-slate-500 text-sm">Customer stories updating shortly.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </main>
</x-landing-layout>
