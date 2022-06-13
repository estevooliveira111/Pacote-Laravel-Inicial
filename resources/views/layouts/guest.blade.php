<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
  <html class="h-full bg-white">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
        <link rel="apple-touch-icon" href="{{ asset('img/icon.svg') }}">    
        <link rel="icon" type="image/png" href="{{ asset('img/icon.svg') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        @yield('style')

    </head>
    
    <body class="h-full">
    <body>

        @yield('app')

        @yield('script')

    </body>
</html>
