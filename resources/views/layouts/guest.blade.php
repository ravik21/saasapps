<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SaasApps') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Core Style -->
	    <link rel="stylesheet" href="/css/style.css">

        <!-- Font Icons -->
	    <link rel="stylesheet" href="/css/font-icons.css">

        <!-- Plugins/Components CSS -->
	    <link rel="stylesheet" href="/css/swiper.css">

        <!-- Niche Demos -->
        <link rel="stylesheet" href="/css/landing-2/landing-2.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="/css/custom.css">

        <!-- Scripts -->
        @vite(['resources/js/app.js'])
    </head>

    <body class="stretched">
        <div id="wrapper">
            <div class="position-absolute vh-100 w-100 top-0 start-0 overflow-hidden">
                <img src="/images/guest/hero-bg.svg" alt="" class="hero-bg">
            </div>

            @include('layouts.guest.header')

            <section id="content" class="bg-transparent">
                <div class="content-wrap overflow-visible pb-0">
                    {{ $slot }}
                </div>
            </section>
            @include('layouts.guest.footer')
        </div>

        <!-- JavaScripts
        ============================================= -->
        <script src="/js/guest/plugins.min.js"></script>
        <script src="/js/guest/functions.bundle.js"></script>

        <!-- Parallax Script
        ============================================= -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
        <script>var s = !SEMICOLON.Mobile.any() && skrollr.init({ forceHeight: false });</script>
    </body>
</html>
