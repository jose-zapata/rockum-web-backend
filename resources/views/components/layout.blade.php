<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'Rockum web' }}</title>
  <!-- Fonts -->
  @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased bg-gray-200 dark:bg-black dark:text-white/50">
  {{ $slot }}
</body>
</html>
