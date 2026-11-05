<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'SaaSApps') }}</title>
        <!-- Local Preloaded Typefaces (Zero FOUT / Instant Rendering) -->
        <link rel="preload" href="/css/fonts/ABCMarist-Regular.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/css/fonts/Inter-Regular.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/css/fonts/Inter-Medium.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/css/fonts/Inter-SemiBold.woff2" as="font" type="font/woff2" crossorigin>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/css/app/style.min.css">

        <!-- Cropper.js -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.css">

        <!-- Summernote CSS -->
        <link href="https://cdn.jsdelivr.net/npm/summernote/dist/summernote-lite.min.css" rel="stylesheet">

        <!-- Tagify CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.35.4/tagify.min.css" integrity="sha512-BIjLsaXLHhpnoOzfTzEfOEVUDEqi/5RP9RbUYGfPkZUo+raxRUOiJb7AybUxV075aWNNGglvr5Lbjeo6Ww0HCw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Modern Vite Pipeline (Tailwind v3 + Design Tokens) -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="/css/custom.css">

        @stack('styles')
    </head>
    <body data-theme="theme-Greylight" class="svgstroke-a admin-layout-body">
        <main class="container-fluid px-0 position-relative admin-layout-shell"
              x-data="{ sidebarOpen: false }"
              @keydown.escape.window="sidebarOpen = false"
              x-effect="document.body.classList.toggle('sidebar-drawer-open', sidebarOpen)">
            <!-- Mobile Drawer Backdrop Overlay -->
            <div x-show="sidebarOpen"
                 @click="sidebarOpen = false"
                 x-transition:enter="transition-opacity ease-out duration-250"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 x-cloak
                 class="d-lg-none position-fixed top-0 start-0 w-100 h-100"
                 style="background-color: rgba(15, 23, 42, 0.45); z-index: 1045; backdrop-filter: blur(2px);"
                 aria-hidden="true">
            </div>

            @include('layouts.sidebar')
            <div class="content admin-main-wrapper">
                @include('layouts.navigation')
                <div class="admin-main-container w-100">
                    {{ $slot }}
                </div>
            </div>

            <!-- Reusable Admin Delete Confirmation Modal -->
            <x-delete-confirmation-modal />
        </main>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/js/active-class.js"></script>

        <!-- Template page js -->
        <script src="/js/main.js" defer></script>

        <!-- Cropper.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.js"></script>

        <!-- Summernote JS -->
        <script src="https://cdn.jsdelivr.net/npm/summernote/dist/summernote-lite.min.js"></script>

        <!-- Tagify JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.35.4/tagify.min.js" integrity="sha512-sKkyJJpMbq+xZRQwXCksuVx5g4JuYQK7c3+65dF3CAx3Gcn67+BPC2PyJkJEugtRRAeDBLPfcsULXbEZ5iqYjg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        @stack('scripts')
    </body>
</html>