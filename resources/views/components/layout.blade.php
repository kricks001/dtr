<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('favicon.png', false) }}" type="image/png" />
    @vite('resources/css/app.css')
    <title>DTR Furnitures</title>
</head>
<body>
    <x-header />
    <main class="mt-2 min-h-screen">
    {{ $slot }}
    </main>
    <x-footer />
</body>
</html>