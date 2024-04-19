<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {!! SEOMeta::generate() !!}
        {!! OpenGraph::generate() !!}
        {!! Twitter::generate() !!}
        {!! JsonLd::generate() !!}
        <link rel="shortcut icon" href="{{ asset('assets/gfc-europe-logo.png') }}" type="image/x-icon">
        
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-6TJ6EDTJCC"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-6TJ6EDTJCC');
        </script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <x-top />
        <x-navbar />
        <main>
            @yield('content')
        </main>
        <x-footer />
    </body>
</html>