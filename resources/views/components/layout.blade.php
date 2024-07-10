<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @googlefonts('new-rocker', 'oswald')
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
    <x-header.logo />
    <x-header.navbar class="basis-full">
      <x-header.navbar.item class="px-6 text-black bg-white hover:text-white hover:bg-black" href="#">News</x-header.navbar.item>
      <x-header.navbar.item class="px-6 text-black bg-white hover:text-white hover:bg-black" href="#">Interviews</x-header.navbar.item>
      <x-header.navbar.item class="px-6 text-black bg-white hover:text-white hover:bg-black" href="#">Album reviews</x-header.navbar.item>
      <x-header.navbar.item class="px-6 text-black bg-white hover:text-white hover:bg-black" href="#">Archive</x-header.navbar.item>
      <x-header.navbar.item class="ml-auto px-3 text-black bg-white hover:text-white hover:bg-black" target="_blank" href="https://www.facebook.com/rockumradio"><i class="fa-brands fa-facebook fa-lg"></i></x-header.navbar.item>
      <x-header.navbar.item class="px-3 text-black bg-white hover:text-white hover:bg-black" target="_blank" href="https://twitter.com/GinoAlache"><i class="fa-brands fa-x-twitter fa-lg"></i></x-header.navbar.item>
      <x-header.navbar.item class="px-3 text-black bg-white hover:text-white hover:bg-black" target="_blank" href="https://www.instagram.com/rockum_web/"><i class="fa-brands fa-instagram fa-lg"></i></x-header.navbar.item>
      <x-header.navbar.item class="px-3 text-black bg-white hover:text-white hover:bg-black" target="_blank" href="https://www.youtube.com/@rockumtv"><i class="fa-brands fa-youtube fa-lg"></i></x-header.navbar.item>
      <x-header.navbar.item class="pl-4 pr-12 py-2 leading-none bg-red-700 hover:bg-red-600 text-white flex flex-row items-center "  href="#">
        <div class="pr-3"><i class="fa-regular fa-square-caret-right fa-2xl"></i></div>
        <div>LISTEN NOW<br/><span class="font-light normal-case">Podcast</span></div>
      </x-header.navbar.item>
    </x-header.navbar>
  </x-header>
  {{ $slot }}
</body>
</html>
