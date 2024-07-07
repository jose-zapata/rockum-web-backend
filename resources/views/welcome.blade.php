<x-layout title="Jora jora">
  <x-header>
    <x-header.logo />
    <x-navbar class="basis-full">
      <x-navbar.item class="px-6" href="#">Home</x-navbar.item>
      <x-navbar.item class="px-6" href="#">Features</x-navbar.item>
      <x-navbar.item class="px-6" href="#">Pricing</x-navbar.item>
      <x-navbar.item class="ml-auto px-3" target="_blank" href="https://www.facebook.com/rockumradio"><i class="fa-brands fa-facebook fa-lg"></i></x-navbar.item>
      <x-navbar.item class="px-3" target="_blank" href="https://twitter.com/GinoAlache"><i class="fa-brands fa-x-twitter fa-lg"></i></x-navbar.item>
      <x-navbar.item class="px-3" target="_blank" href="https://www.instagram.com/rockum_web/"><i class="fa-brands fa-instagram fa-lg"></i></x-navbar.item>
      <x-navbar.item class="px-3" target="_blank" href="https://www.youtube.com/@rockumtv"><i class="fa-brands fa-youtube fa-lg"></i></x-navbar.item>
      <x-navbar.item-nolink class="pl-4 pr-12 py-2 leading-none bg-red-700 hover:bg-red-600 text-white flex flex-row items-center">
        <div class="pr-3"><i class="fa-regular fa-square-caret-right fa-2xl"></i></div>
        <div>LISTEN NOW<br/><span class="font-light normal-case">Podcast</span></div>
      </x-navbar.item>
    </x-navbar>
  </x-header>
  <x-main>
    <x-section class="border border-neutral-300 rounded-xl pb-6 bg-white">
      <div data-flickity='{ "cellAlign": "left", "percentPosition": false, "prevNextButtons": false, "autoPlay": true }' class="mb-6 w-full">
        @foreach ($mainReports as $item)
          <x-main.story image="{{ $item->imagen }}" class="carousel-cell w-full p-6">
            <x-slot:title class="mb-4">{{ $item->titulo }}</x-slot:title>
            {{ Str::words($item->texto, 90, '...') }}
          </x-main.story>
        @endforeach
      </div>
    </x-section>
    <x-section class="my-4">
      <x-row>
        <x-col>
          <h2 class="font-new-rocker text-4xl mt-3 mb-2 mx-2">Latest news</h2>
          <x-row class="my-2 w-full flex-wrap content-baseline">
            @foreach ($reports as $item)
              <x-col class="basis-full lg:basis-1/3">
                <x-story
                  title="{{ Str::words($item->titulo, 10, '...') }}"
                  image="{{ $item->imagen }}"
                  link="{{ $item->url }}"
                  class="my-2 bg-white border border-neutral-400 rounded-xl">
                </x-story>
              </x-col>
            @endforeach
          </x-row>
        </x-col>
        <x-col class="w-[300px] flex-shrink-0">
          <div class="my-2 p-4 w-full bg-white">
            Sidebar
          </div>
          <div class="my-2 p-4 w-full bg-white">
            Sidebar
          </div>
          <div class="my-2 p-4 w-full bg-white">
            Sidebar
          </div>
          <div class="my-2 p-4 w-full bg-white">
            Sidebar
          </div>
        </x-col>
      </x-row>
    </x-section>
  </x-main>
</x-layout>