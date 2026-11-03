<section class="relative py-16 md:py-32 px-6 md:px-24 before:absolute before:inset-0 before:bg-brand-100 before:-z-10">
    <h2 class="text-heading-mobile-sm md:text-heading-md font-sans-heading text-center mb-4">
        {{ config('landing.features.title') }}
    </h2>
    <p class="text-body-sm md:text-body-md text-gray-800 text-center">
        {{ config('landing.features.subtitle') }}
    </p>
    <ul class="grid grid-cols-1 md:grid-cols-3 md:gap-x-16 gap-y-6 md:gap-y-8 mt-10 md:mt-16">
        @foreach (config('landing.features.items', []) as $feature)
        <li class="flex space-x-4">
            {!! $feature['icon'] !!}
            <p class="text-body-sm md:text-body-md text-gray-800">
                {{ $feature['description'] }}
            </p>
        </li>
        @endforeach
    </ul>
</section>
