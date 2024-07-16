<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="text-sm sm:text-base">
<head>
  @googlefonts
  @googlefonts('roboto-condensed')
  @googlefonts('oswald')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'Rockum web' }}</title>
  <!-- Fonts -->
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  @stack('scripts')
</head>
<body class="font-default antialiased bg-gray-200 dark:bg-black dark:text-white/50">
  <x-header>
    <x-header.main-menu></x-header.main-menu>
  </x-header>
  {{ $slot }}
</body>
</html>
