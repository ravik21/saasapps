@php
    $admins = \App\Models\User::role('Admin')->take(3)->get();
    $services = config('landing.services', []);
    $servicesList = collect($services)
        ->pluck('name')
        ->reject(function ($service) {
            return str_contains(strtolower($service), 'mobile') || str_contains(strtolower($service), 'ai');
        })
        ->take(3)
        ->implode(', ');
@endphp

<section
    class="relative grid grid-cols-1 md:grid-cols-2 items-center pt-20 pb-16 md:py-28 -mx-8 md:mx-0 px-8 md:px-0 bg-gray-900 md:before:absolute md:before:inset-0 md:before:bg-gray-900 md:before:w-screen md:before:left-1/2 md:before:right-1/2 md:before:-mr-[50vw] md:before:-ml-[50vw] md:before:-z-10">
    <header class="col-span-1 md:pr-12 lg:pr-24">
        <h2 class="relative text-gray-100 text-heading-mobile-md lg:text-heading-md font-sans-heading">
            We're building the <span class="relative">next<svg class="absolute text-gray-900 w-[54px] lg:w-[80px] left-0 -bottom-[6px]"
                    aria-hidden="true" role="presentation" width="80" height="10" viewBox="0 0 80 10" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 4.99953C25.1473 4.7593 35.0335 4.47835 78.3662 4.99953M78.3662 4.99953L72.858 1.54443M78.3662 4.99953L72.858 9.02031"
                        stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></span> generation of business solutions
        </h2>
        <p class="text-body-md lg:text-body-lg mt-4 lg:mt-10 text-gray-600">
            Founded in 2014 and based in India, we are a 100% founder-owned company committed to delivering excellence in
            software development. We specialize in {{ $servicesList }}, helping businesses transform their operations
            through cutting-edge technology.
        </p>
        <p class="text-body-md lg:text-body-lg mt-3 text-gray-600">
            Our development-first approach focuses on engineering reliable systems that streamline operations, improve
            efficiency, and support long-term growth. Every line of code we write is optimized for maintainability,
            security, and performance.
        </p>
    </header>
    <ul class="col-span-1 flex justify-center mt-12 md:mt-0">
        @foreach ($admins as $index => $admin)
            <li class="relative">
                @if ($index === 0)
                    <svg class="hidden lg:block absolute bottom-0 left-1/2 -translate-x-1/2 text-gray-800" width="84"
                        height="25" viewBox="0 0 84 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M84 12.5L59.6507 12.5M34.7074 12.5L46.5852 24.5M34.7074 12.5L59.6507 12.5M34.7074 12.5L6.22783e-08 12.5M59.6507 12.5L71.5284 0.5"
                            stroke="currentColor"></path>
                    </svg>
                    <figure class="-rotate-3 md:-rotate-6 relative z-10">
                    @elseif($index === 1)
                        <svg class="hidden lg:block absolute top-0 left-8 text-gray-800" width="114" height="37"
                            viewBox="0 0 114 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M114 12.5L65.6507 12.5M34.7074 12.5L46.5852 0.5M34.7074 12.5L65.6507 12.5M34.7074 12.5L6.22783e-08 12.5M65.6507 12.5L77.5284 24.5M16.3581 24.5L53.7074 24.5M34.7074 24.5L46.5852 36.5"
                                stroke="currentColor"></path>
                        </svg>
                        <figure class="rotate-2 md:rotate-3 md:mt-16 md:-ml-3">
                        @else
                            <figure class="-rotate-1 md:rotate-1">
                @endif
                <div
                    class="relative w-36 h-48 lg:w-60 lg:h-80 isolate @if ($index === 0) z-20 before:absolute before:inset-0 before:bg-gray-100/10 before:-rotate-6 before:rounded-16 before:-z-10 before:-ml-4 before:mr-4 after:absolute after:inset-0 after:border after:border-gray-100/5 after:bg-gray-900/10 after:rounded-16 @else before:absolute before:inset-0 before:bg-gray-100/10 before:rotate-6 before:rounded-16 before:-z-10 after:absolute after:inset-0 after:border after:border-gray-100/5 after:bg-gray-900/10 after:rounded-16 @endif">
                      <img src="{{ $admin->avatar ? $admin->avatar : asset('images/default-avatar.png') }}"
                          class="rounded-16 @if ($index === 0) shadow-about-image @endif select-none w-full h-full object-cover"
                          loading="lazy" draggable="false" alt="{{ $admin->name }}">
                </div>
                <figcaption class="mt-5">
                    <p class="text-caption-lg text-gray-100">
                        {{ $admin->name }}
                    </p>
                    <p class="text-caption-md text-gray-700">
                        {{ $admin->designation ?? 'Admin' }}
                    </p>
                </figcaption>
                </figure>
            </li>
        @endforeach
    </ul>
</section>
