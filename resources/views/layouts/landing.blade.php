<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="scroll-pt-20 overflow-x-hidden bg-white text-gray-900 antialiased scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'SaaSApps — Thoughtful Digital Solutions for Your Business' }}</title>
    <meta name="description" content="{{ $description ?? 'SaaSApps designs and builds custom software, web and mobile applications, APIs, and cloud solutions for growing businesses.' }}">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? 'SaaSApps — Thoughtful Digital Solutions for Your Business' }}">
    <meta property="og:description" content="{{ $description ?? 'SaaSApps designs and builds custom software, web and mobile applications, APIs, and cloud solutions for growing businesses.' }}">
    <meta property="og:site_name" content="SaaSApps">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $title ?? 'SaaSApps — Thoughtful Digital Solutions for Your Business' }}">
    <meta name="twitter:description" content="{{ $description ?? 'SaaSApps designs and builds custom software, web and mobile applications, APIs, and cloud solutions for growing businesses.' }}">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "{{ url('/') }}#organization",
          "name": "SaaSApps",
          "url": "{{ url('/') }}",
          "logo": "{{ asset('img/brand/logo.svg') }}",
          "sameAs": []
        },
        {
          "@type": "WebSite",
          "@id": "{{ url('/') }}#website",
          "url": "{{ url('/') }}",
          "name": "SaaSApps",
          "publisher": {
            "@id": "{{ url('/') }}#organization"
          }
        }
      ]
    }
    </script>

    <!-- Local Preloaded Typefaces (Zero FOUT / Instant Rendering) -->
    <link rel="preload" href="/css/fonts/ABCMarist-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/css/fonts/Inter-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/css/fonts/Inter-Medium.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/css/fonts/Inter-SemiBold.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Core Legacy Fallback Style (Preserves styling for un-refactored subpages) -->
    <link rel="stylesheet" href="/css/landing/app.css">
    <link rel="stylesheet" href="/css/landing/custom.css">

    <!-- Modern Vite Pipeline (Tailwind v3 + Alpine.js) - Loaded AFTER legacy to ensure full CSS precedence -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @stack('styles')
</head>

<body class="relative min-h-screen w-full flex flex-col font-sans bg-white text-slate-900 antialiased selection:bg-brand-100 selection:text-brand-900">
    @include('layouts.landing.header')
    {{ $slot }}
    @include('layouts.landing.footer')

    @stack('scripts')
</body>
</html>
