<x-landing-layout>
    <main class="flex-1">
        @include('home.partials.cases-hero')
        @include('home.partials.cases-list')
        @if ($otherCases->count() > 0)
            @include('home.partials.other-customers')
        @endif
        @include('home.partials.get-app-section')
    </main>
</x-landing-layout>