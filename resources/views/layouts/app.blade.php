<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'SaaSApps') }}</title>
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

        <link rel="stylesheet" href="/css/custom.css">

        <!-- Scripts -->
        @vite(['resources/js/app.js'])

        @stack('styles')
    </head>
    <body data-theme="theme-Greylight" class="svgstroke-a">
        <main class="container-fluid px-0">
            @include('layouts.sidebar')
            <div class="content">
                @include('layouts.navigation')
                <div class="px-xl-5 px-lg-4 px-3 py-2 page-header flex-wrap">
                    {{ $slot }}
                </div>
            </div>
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