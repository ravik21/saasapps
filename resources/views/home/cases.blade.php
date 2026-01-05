<x-landing-layout>
    <main class="flex-1">
        @include('home.partials.cases.hero')
        @include('home.partials.cases.top-cases')
        @if ($otherCases->count() > 0)
            @include('home.partials.cases.other-cases')
        @endif
        @include('home.partials.get-app')
    </main>
</x-landing-layout>