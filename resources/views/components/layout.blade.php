<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @googlefonts('bebas-neue')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'Rockum web' }}</title>
  <!-- Fonts -->
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  @stack('scripts')
</head>
<body class="font-default antialiased bg-white dark:bg-black dark:text-white/50">
  <x-header>
    <x-header.top-banner></x-header.top-banner>
    <x-header.main-menu></x-header.main-menu>
  </x-header>
  {{ $slot }}
</body>
</html>
