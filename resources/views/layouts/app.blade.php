<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{--data-theme="dark" --}}>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased  flex flex-col min-h-screen">
        <div class="flex-grow bg-base-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-base-300 shadow">
                    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="">
                {{ $slot }}
            </main>
        </div>
        <footer class="bg-neutral  text-center py-4 shadow-inner">
            <x-input-label class="text-sm text-neutral-content">© {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Todos los derechos reservados.</x-input-label>
        </footer>
    </body>
</html>
