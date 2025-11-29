<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{ config('app.name', 'Newsletter') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-50 text-slate-900 font-sans antialiased selection:bg-indigo-500 selection:text-white">
        <div class="min-h-screen flex flex-col">
            <!-- Navigation -->
            @include('partials.header')

            <!-- Main Content -->
            @yield('content')

            <!-- Footer -->
            @include('partials.footer')
        </div>
    </body>
</html>
