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

        <link rel="stylesheet" href="/css/app/style.min.css">
        <link rel="stylesheet" href="/css/custom.css">

        <!-- Scripts -->
        @vite(['resources/js/app.js'])
    </head>

    <body data-theme="theme-Greylight" class="svgstroke-a ">
        <nav class="navbar navbar-expand-md position-fixed top-0 w-100 z-3 body-color ">
            <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="/images/logo.svg" alt="SaasApps" class="h-44">
                </a>
                <div class="d-none d-sm-block">
                    @if (Route::is('register'))
                        <p class="text-muted">
                            Already have an account
                            <a class="text-reverse text-decoration-underline" href="{{ route('login') }}">Login</a>
                        </p>
                    @else
                        <p class="text-muted">
                            Don't have an account
                            <a class="text-reverse text-decoration-underline" href="{{ route('register') }}">Register</a>
                        </p>
                    @endif
               </div>
            </div>
        </nav>
        <main class="container-fluid px-0">
            <!-- start: page menu link -->
            <div class="content">
                {{ $slot }}
            </div>
        </main>
        <footer class="w-100 bg-body position-fixed bottom-0">
            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <div class="p-0 m-0">
                        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-reverse" href="javascript:void(0)">
                            Copyrights &copy; {{ date('Y') }} All Rights Reserved by SaaSApps.
                        </a>
                    </div>
                </div>
            </div>
         </footer>
    </body>
</html>
