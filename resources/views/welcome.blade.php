<x-layout title="Jora jora">
  <x-header>
    <x-header.logo />
    <x-navbar class="basis-full">
      <x-navbar.item href="#">Home</x-navbar.item>
      <x-navbar.item href="#">Features</x-navbar.item>
      <x-navbar.item href="#">Pricing</x-navbar.item>
      <x-navbar.item class="ml-auto" href="#">Blog</x-navbar.item>
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
                  title="{{ $item->titulo }}"
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