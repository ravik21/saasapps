@php
    $technologies = config('landing.technologies', []);
@endphp

<!-- SECTION 2: CUSTOMER LOGO MARQUEE (DARK BACKGROUND) -->
<section class="relative w-full bg-charcoal text-white overflow-hidden border-b border-white/10 py-7 md:py-8">
    <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-6 lg:gap-10">
            <!-- Left Label (Scribe exact uppercase style) -->
            <div class="flex-shrink-0 text-center lg:text-left">
                <p class="text-[11px] font-semibold uppercase tracking-widest text-slate-400 font-mono">
                    OVER 100,000 TEAMS LOVE SAASAPPS
                </p>
            </div>

            <!-- Infinite Marquee Track with Mask Gradient -->
            <div class="flex-1 w-full overflow-hidden mask-gradient-x">
                @if(!empty($technologies))
                    <div class="marquee-track flex items-center gap-10 md:gap-14" style="--marquee-speed: 35s;">
                        {{-- First Loop --}}
                        @foreach($technologies as $tech)
                            <div class="flex-shrink-0 flex items-center gap-2.5 text-white/70 hover:text-white transition-opacity group">
                                <div class="size-6 sm:size-7 flex-shrink-0 grayscale opacity-80 group-hover:opacity-100 transition [&_svg]:w-full [&_svg]:h-full [&_svg]:fill-current [&_svg]:text-white">
                                    {!! $tech['icon'] !!}
                                </div>
                                <span class="text-sm font-medium tracking-wide text-slate-300 group-hover:text-white transition-colors">
                                    {{ $tech['name'] }}
                                </span>
                            </div>
                        @endforeach

                        {{-- Duplicate Loop for Seamless Infinite Marquee --}}
                        @foreach($technologies as $tech)
                            <div class="flex-shrink-0 flex items-center gap-2.5 text-white/70 hover:text-white transition-opacity group" aria-hidden="true">
                                <div class="size-6 sm:size-7 flex-shrink-0 grayscale opacity-80 group-hover:opacity-100 transition [&_svg]:w-full [&_svg]:h-full [&_svg]:fill-current [&_svg]:text-white">
                                    {!! $tech['icon'] !!}
                                </div>
                                <span class="text-sm font-medium tracking-wide text-slate-300 group-hover:text-white transition-colors">
                                    {{ $tech['name'] }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-2 text-xs font-mono text-slate-400">
                        HEAP &bull; LinkedIn &bull; Intel &bull; HubSpot &bull; Datadog &bull; Docker &bull; AWS
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
