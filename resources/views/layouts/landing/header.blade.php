@php
    $services = config('landing.services', []);
    $actions = config('landing.navigation.actions', [
        'login' => ['label' => 'Sign in', 'url' => route('login')],
        'cta' => ['label' => 'Get Started', 'url' => route('contact-us')],
    ]);
@endphp

<header x-data="{
        mobileOpen: false,
        servicesOpen: false,
        closeTimer: null,
        mobileServicesOpen: false,
        scrolled: false
    }"
    @scroll.window="scrolled = (window.pageYOffset > 10)"
    @keydown.escape.window="servicesOpen = false; mobileOpen = false"
    @click.outside="servicesOpen = false"
    class="fixed top-0 inset-x-0 z-50 w-full h-[80px] bg-white border-b border-[#E5E7EB] transition-all duration-200">

    <div class="w-full max-w-[1306px] mx-auto px-4 sm:px-8 lg:px-[78px] h-[80px] flex items-center justify-between">
        <!-- Left: Logo -->
        <div class="flex items-center flex-shrink-0">
            <a href="{{ route('home') }}" aria-label="SaaSApps Home" class="flex items-center gap-2.5 group">
                <img src="{{ asset('images/logo.svg') }}" alt="SaaSApps Logo" class="h-8 sm:h-9 w-auto transition-transform duration-150 group-hover:scale-[1.02]" />
            </a>
        </div>

        <!-- Center: Desktop Navigation Links (Services, Why us?, Cases, About us) -->
        <nav class="hidden lg:flex items-center gap-9 xl:gap-10 font-sans" aria-label="Main Navigation">
            <!-- 1. Services with Dropdown Trigger -->
            <div class="relative flex items-center"
                 @mouseenter="clearTimeout(closeTimer); servicesOpen = true"
                 @mouseleave="closeTimer = setTimeout(() => { servicesOpen = false }, 200)">
                <button type="button"
                        @click="servicesOpen = !servicesOpen"
                        :aria-expanded="servicesOpen"
                        aria-haspopup="true"
                        class="inline-flex items-center gap-1.5 text-[16px] font-normal transition-colors duration-150 py-2 focus:outline-none"
                        :class="servicesOpen || {{ request()->is('services*') ? 'true' : 'false' }} ? 'text-black font-medium' : 'text-slate-800 hover:text-black'">
                    <span>Services</span>
                    <svg class="size-3.5 transition-transform duration-200 text-slate-500"
                         :class="servicesOpen ? 'rotate-180 text-black' : ''"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>

            <!-- 2. Why us? -->
            <a href="{{ route('why-us') }}"
               class="text-[16px] font-normal transition-colors duration-150 py-2 {{ request()->routeIs('why-us') ? 'text-black font-medium' : 'text-slate-800 hover:text-black' }}">
                Why us?
            </a>

            <!-- 3. Cases -->
            <a href="{{ route('cases') }}"
               class="text-[16px] font-normal transition-colors duration-150 py-2 {{ request()->routeIs('cases') ? 'text-black font-medium' : 'text-slate-800 hover:text-black' }}">
                Cases
            </a>

            <!-- 4. About us -->
            <a href="{{ route('about-us') }}"
               class="text-[16px] font-normal transition-colors duration-150 py-2 {{ request()->routeIs('about-us') ? 'text-black font-medium' : 'text-slate-800 hover:text-black' }}">
                About us
            </a>
        </nav>

        <!-- Right: Action Buttons (Sign in + Get Started, 40px height) -->
        <div class="hidden lg:flex items-center gap-3 font-sans">
            @auth
                <a href="{{ route('dashboard') }}"
                   class="h-[40px] inline-flex items-center justify-center px-6 rounded-full text-[15px] font-semibold bg-white text-black border border-black hover:bg-gray-50 transition-colors">
                    Dashboard
                </a>
            @else
                <!-- <a href="{{ route('login') }}"
                   class="h-[40px] inline-flex items-center justify-center px-6 rounded-full text-[15px] font-semibold bg-white text-black border border-black hover:bg-gray-50 transition-colors">
                    Sign in
                </a> -->
            @endauth

            <a href="{{ route('contact-us') }}"
               class="h-[40px] inline-flex items-center justify-center px-6 rounded-full text-[15px] font-semibold bg-black text-white hover:bg-neutral-800 transition-colors shadow-sm">
                Get Started
            </a>
        </div>

        <!-- Mobile: Hamburger Button with accessible 48px touch target -->
        <button type="button"
                @click="mobileOpen = !mobileOpen"
                :aria-expanded="mobileOpen"
                aria-label="Toggle Navigation Menu"
                class="lg:hidden p-2.5 min-w-[48px] min-h-[48px] inline-flex items-center justify-center text-slate-800 hover:text-black hover:bg-gray-100 rounded-lg focus:outline-none touch-manipulation">
            <svg x-show="!mobileOpen" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="mobileOpen" x-cloak class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile Drawer Backdrop with tap-to-close -->
    <div x-show="mobileOpen"
         @click="mobileOpen = false"
         x-transition:enter="transition-opacity ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="lg:hidden fixed inset-0 top-[80px] bg-black/40 backdrop-blur-[2px] z-40"
         x-cloak></div>

    <!-- Desktop Services Mega Dropdown Panel -->
    <div x-show="servicesOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 translate-y-1.5"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-1.5"
         @mouseenter="clearTimeout(closeTimer)"
         @mouseleave="closeTimer = setTimeout(() => { servicesOpen = false }, 200)"
         x-cloak
         class="hidden lg:block absolute top-[80px] inset-x-0 bg-white border-b border-[#E5E7EB] shadow-2xl z-40">

        <div class="w-full max-w-[1306px] mx-auto px-6 sm:px-10 lg:px-[78px] py-8">
            <!-- Dropdown Header Bar -->
            <div class="flex items-center justify-between pb-4 border-b border-slate-100">
                <div class="flex items-center gap-3">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Services & Solutions</span>
                    <span class="h-3 w-px bg-slate-200"></span>
                    <span class="text-xs text-slate-500">End-to-end custom software architecture and engineering</span>
                </div>
                <a href="{{ route('services') }}"
                   class="group inline-flex items-center gap-1.5 text-xs font-semibold text-slate-800 hover:text-black transition-colors">
                    <span>All services overview</span>
                    <svg class="size-3.5 transition-transform group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>

            <!-- 6 Services in 3 Columns Grid -->
            <div class="grid grid-cols-3 gap-x-8 gap-y-7 mt-6">
                @foreach ($services as $service)
                    <div class="group/srv flex flex-col">
                        <a href="{{ route('services') }}#{{ $service['slug'] }}"
                           class="flex items-center gap-3 group/srvlink">
                            <div class="size-9 rounded-lg bg-slate-100/90 flex items-center justify-center text-slate-900 group-hover/srvlink:bg-slate-200/80 transition-colors flex-shrink-0 [&_svg]:size-5 [&_svg]:w-5 [&_svg]:h-5">
                                {!! $service['icon'] !!}
                            </div>
                            <div class="min-w-0 flex-1">
                                <h3 class="text-sm font-semibold text-slate-900 group-hover/srvlink:text-black flex items-center gap-1.5 leading-snug">
                                    <span class="truncate">{{ $service['name'] }}</span>
                                    <svg class="size-3.5 opacity-0 -translate-x-1 group-hover/srvlink:opacity-100 group-hover/srvlink:translate-x-0 transition-all duration-150 flex-shrink-0 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </h3>
                            </div>
                        </a>

                        <ul class="mt-2.5 ml-12 space-y-1.5">
                            @foreach ($service['deliverables'] as $deliverable)
                                <li>
                                    <a href="{{ route('services') }}#{{ $deliverable['slug'] }}"
                                       class="group/del inline-flex items-center text-[13px] text-slate-500 hover:text-black transition-colors py-0.5 leading-relaxed">
                                        <span>{{ $deliverable['name'] }}</span>
                                        <svg class="size-3 opacity-0 group-hover/del:opacity-100 group-hover/del:translate-x-0.5 transition-all text-slate-900 ml-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>

            <!-- Dropdown Footer Strip -->
            <div class="mt-7 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                <div class="flex items-center gap-2">
                    <span class="inline-block size-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span>Ready to discuss your product architecture?</span>
                </div>
                <a href="{{ route('contact-us') }}"
                   class="font-semibold text-slate-900 hover:text-black inline-flex items-center gap-1 group/cta">
                    <span>Talk with an engineer</span>
                    <svg class="size-3.5 transition-transform group-hover/cta:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer with Accordion for Services -->
    <div x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         x-cloak
         class="lg:hidden fixed inset-x-0 top-[80px] bg-white border-b border-[#E5E7EB] shadow-2xl px-5 py-6 overflow-y-auto max-h-[calc(100vh-80px)] z-50">

        <div class="space-y-1">
            <!-- Mobile Services Accordion -->
            <div class="border-b border-gray-100 pb-2">
                <button type="button"
                        @click="mobileServicesOpen = !mobileServicesOpen"
                        class="w-full min-h-[48px] flex items-center justify-between py-3 text-[16px] font-semibold text-slate-800 hover:text-black touch-manipulation">
                    <span>Services</span>
                    <svg class="size-4 transition-transform duration-200 text-slate-500"
                         :class="mobileServicesOpen ? 'rotate-180 text-black' : ''"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="mobileServicesOpen"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                     x-cloak
                     class="pt-2 pb-3 pl-2 space-y-4">
                    @foreach ($services as $service)
                        <div class="space-y-1.5">
                            <a href="{{ route('services') }}#{{ $service['slug'] }}"
                               @click="mobileOpen = false"
                               class="font-semibold text-sm text-slate-900 hover:text-black flex items-center gap-2 min-h-[44px] py-2">
                                <span class="size-2 rounded-full bg-slate-400"></span>
                                <span>{{ $service['name'] }}</span>
                            </a>
                            <ul class="pl-4 space-y-1">
                                @foreach ($service['deliverables'] as $deliverable)
                                    <li>
                                        <a href="{{ route('services') }}#{{ $deliverable['slug'] }}"
                                           @click="mobileOpen = false"
                                           class="text-xs text-slate-600 hover:text-black block min-h-[36px] py-2">
                                            {{ $deliverable['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                    <a href="{{ route('services') }}"
                       @click="mobileOpen = false"
                       class="block text-xs font-semibold text-black underline pt-2 min-h-[40px] py-2">
                        All services overview &rarr;
                    </a>
                </div>
            </div>

            <!-- Why us? -->
            <a href="{{ route('why-us') }}"
               @click="mobileOpen = false"
               class="min-h-[48px] flex items-center py-3 text-[16px] font-semibold border-b border-gray-100 {{ request()->routeIs('why-us') ? 'text-black' : 'text-slate-800 hover:text-black' }}">
                Why us?
            </a>

            <!-- Cases -->
            <a href="{{ route('cases') }}"
               @click="mobileOpen = false"
               class="min-h-[48px] flex items-center py-3 text-[16px] font-semibold border-b border-gray-100 {{ request()->routeIs('cases') ? 'text-black' : 'text-slate-800 hover:text-black' }}">
                Cases
            </a>

            <!-- About us -->
            <a href="{{ route('about-us') }}"
               @click="mobileOpen = false"
               class="min-h-[48px] flex items-center py-3 text-[16px] font-semibold border-b border-gray-100 {{ request()->routeIs('about-us') ? 'text-black' : 'text-slate-800 hover:text-black' }}">
                About us
            </a>
        </div>

        <!-- Mobile Action Buttons (Full width with 48px height) -->
        <div class="mt-6 pt-2 space-y-3">
            @auth
                <a href="{{ route('dashboard') }}"
                   @click="mobileOpen = false"
                   class="w-full min-h-[48px] h-[48px] flex items-center justify-center rounded-full text-[15px] font-semibold bg-white text-black border border-black hover:bg-gray-50 transition-colors">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                   @click="mobileOpen = false"
                   class="w-full min-h-[48px] h-[48px] flex items-center justify-center rounded-full text-[15px] font-semibold bg-white text-black border border-black hover:bg-gray-50 transition-colors">
                    Sign in
                </a>
            @endauth

            <a href="{{ route('contact-us') }}"
               @click="mobileOpen = false"
               class="w-full min-h-[48px] h-[48px] flex items-center justify-center rounded-full text-[15px] font-semibold bg-black text-white hover:bg-neutral-800 transition-colors shadow-sm">
                Get Started
            </a>
        </div>
    </div>
</header>
