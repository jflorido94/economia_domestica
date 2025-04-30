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

<body class="font-sans antialiased flex flex-col min-h-screen">
    <div class="flex-grow grid">
        <div class="flex flex-col sm:justify-center items-center  pt-6 sm:pt-0 bg-base-100">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-base-content" />
                </a>
            </div>

            <div class="card bg-base-200 shadow-xl w-full sm:max-w-md mt-6 px-6 py-4 text-base-content">
                {{ $slot }}
            </div>
        </div>
    </div>
    <footer class="bg-neutral  text-center py-4 shadow-inner">
        <x-input-label class="text-sm text-neutral-content">© {{ date('Y') }} {{ config('app.name', 'Laravel') }}.
            Todos los derechos reservados.</x-input-label>
    </footer>
</body>

</html>
