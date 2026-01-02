<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="scroll-pt-16 md:scroll-pt-18 xl:scroll-pt-23 overflow-x-hidden select-none cursor-auto bg-gray-100 text-gray-900 antialiased">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SaasApps') }}</title>

    <!-- Core Style -->
    <link rel="stylesheet" href="/css/landing/app.css">
    <link rel="stylesheet" href="/css/landing/custom.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Cropper.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.css">


    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    @stack('styles')
</head>

<body class="relative min-h-screen max-w-308 pt-16 md:pt-18 xl:pt-23 px-8 md:px-4 mx-auto flex flex-col">
    @include('layouts.landing.header')
    {{ $slot }}
    @include('layouts.landing.footer')

    <!-- Cropper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.js"></script>

    @stack('scripts')
</body>
</html>