<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>@yield('title', 'TechNews - Inform the Future')</title>
        <meta name="description" content="@yield('description', 'TechNews delivers curated insights to help developers, engineers, and tech leaders stay ahead in the rapidly evolving world of technology.')" />
        <meta name="keywords" content="@yield('keywords', 'tech news, software engineering, developer resources, tech trends, programming, system architecture')" />
        
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:title" content="@yield('title', 'TechNews - Inform the Future')" />
        <meta property="og:description" content="@yield('description', 'TechNews delivers curated insights to help developers, engineers, and tech leaders stay ahead in the rapidly evolving world of technology.')" />
        <meta property="og:image" content="@yield('og_image', 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')" />

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="{{ url()->current() }}" />
        <meta property="twitter:title" content="@yield('title', 'TechNews - Inform the Future')" />
        <meta property="twitter:description" content="@yield('description', 'TechNews delivers curated insights to help developers, engineers, and tech leaders stay ahead in the rapidly evolving world of technology.')" />
        <meta property="twitter:image" content="@yield('og_image', 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')" />

        <!-- Favicons -->
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}" />
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}" />
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />

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
