@php
    $admins = \App\Models\User::role('Admin')->take(2)->get();
    $services = config('landing.services', []);
    $servicesList = collect($services)
        ->pluck('name')
        ->reject(function ($service) {
            return str_contains(strtolower($service), 'mobile') || str_contains(strtolower($service), 'ai');
        })
        ->take(2)
        ->implode(', ');
@endphp

<section class="relative bg-gray-900 py-12 sm:py-16 md:py-24 overflow-hidden">
  <div class="mx-auto grid w-full max-w-[1306px] grid-cols-1 items-center gap-10 px-6 sm:px-10 md:grid-cols-2 md:gap-12 lg:px-[78px]">
    <header class="col-span-1 md:pr-8 lg:pr-12">
        <h2 class="relative font-serif-display text-2xl sm:text-3xl md:text-4xl lg:text-[42px] font-normal text-white leading-tight">
            We're building the <span class="relative inline-block">next<svg class="absolute text-gray-900 w-[54px] lg:w-[80px] left-0 -bottom-[6px]"
                    aria-hidden="true" role="presentation" width="80" height="10" viewBox="0 0 80 10" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 4.99953C25.1473 4.7593 35.0335 4.47835 78.3662 4.99953M78.3662 4.99953L72.858 1.54443M78.3662 4.99953L72.858 9.02031"
                        stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></span> generation of business solutions
        </h2>
        <p class="text-sm sm:text-base text-gray-300 leading-relaxed mt-4 lg:mt-6">
            Founded in 2014 and based in India, we are a founder-led software company focused on long-term partnerships,
            thoughtful execution, and dependable delivery. Our team specializes in {{ $servicesList }}, helping companies
            modernize operations and launch products that are practical, scalable, and built to last.
        </p>
        <p class="text-sm sm:text-base text-gray-300 leading-relaxed mt-3">
            We lead with engineering discipline, clear communication, and real ownership of outcomes. That means cleaner
            architecture, stronger product thinking, and software that stays maintainable as your business evolves.
        </p>
    </header>
    <ul class="col-span-1 grid grid-cols-2 gap-4 sm:gap-6 justify-items-center md:flex md:justify-center md:gap-8 mt-6 md:mt-0">
        @foreach ($admins as $index => $admin)
            <li class="relative w-full max-w-[150px] sm:max-w-[200px] md:max-w-none md:w-auto">
                @if ($index === 0)
                    <svg class="hidden lg:block absolute bottom-0 left-1/2 -translate-x-1/2 text-gray-800" width="84"
                        height="25" viewBox="0 0 84 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M84 12.5L59.6507 12.5M34.7074 12.5L46.5852 24.5M34.7074 12.5L59.6507 12.5M34.7074 12.5L6.22783e-08 12.5M59.6507 12.5L71.5284 0.5"
                            stroke="currentColor"></path>
                    </svg>
                    <figure class="relative z-10 rotate-0 md:-rotate-6 transition-transform">
                @elseif($index === 1)
                    <svg class="hidden lg:block absolute top-0 left-8 text-gray-800" width="114" height="37"
                        viewBox="0 0 114 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M114 12.5L65.6507 12.5M34.7074 12.5L46.5852 0.5M34.7074 12.5L65.6507 12.5M34.7074 12.5L6.22783e-08 12.5M65.6507 12.5L77.5284 24.5M16.3581 24.5L53.7074 24.5M34.7074 24.5L46.5852 36.5"
                            stroke="currentColor"></path>
                    </svg>
                    <figure class="relative z-10 rotate-0 md:rotate-3 md:mt-16 md:-ml-3 transition-transform">
                @else
                    <figure class="relative z-10 rotate-0 md:rotate-1">
                @endif
                <div
                    class="relative w-full aspect-[3/4] md:w-48 md:h-64 lg:w-60 lg:h-80 isolate rounded-2xl overflow-hidden @if ($index === 0) md:before:absolute md:before:inset-0 md:before:bg-gray-100/10 md:before:-rotate-6 md:before:rounded-2xl md:before:-z-10 md:before:-ml-4 md:before:mr-4 after:absolute after:inset-0 after:border after:border-gray-100/10 after:rounded-2xl @else md:before:absolute md:before:inset-0 md:before:bg-gray-100/10 md:before:rotate-6 md:before:rounded-2xl md:before:-z-10 after:absolute after:inset-0 after:border after:border-gray-100/10 after:rounded-2xl @endif shadow-lg">
                      <img src="{{ $admin->avatar ? $admin->avatar : asset('images/default-avatar.png') }}"
                          class="rounded-2xl select-none w-full h-full object-cover"
                          loading="lazy" draggable="false" alt="{{ $admin->name }}">
                </div>
                <figcaption class="mt-3 sm:mt-5 text-center md:text-left">
                    <p class="text-sm sm:text-base font-medium text-white truncate">
                        {{ $admin->name }}
                    </p>
                    <p class="text-xs sm:text-sm text-gray-400 mt-0.5 truncate">
                        {{ $admin->designation ?? 'Admin' }}
                    </p>
                </figcaption>
                </figure>
            </li>
        @endforeach
    </ul>
  </div>
</section>