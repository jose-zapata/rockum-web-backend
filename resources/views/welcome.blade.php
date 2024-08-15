<x-layout title="Rockum web">
  <x-main>
    <x-section class="overflow-hidden slider pb-9">
      <div x-cloak data-flickity='{ "cellAlign": "left", "adaptiveHeight": false, "prevNextButtons": false, "autoPlay": true }' class="-mx-4">
        @foreach ($mainReports as $item)
          <x-main.story image="{{ $item->imagen }}" class="carousel-cell px-px">
            <x-slot:title class="mb-4">{{ $item->titulo }}</x-slot:title>
            {{ Str::limit($item->texto, 500, '...') }}
          </x-main.story>
        @endforeach
      </div>
    </x-section>
    <x-section class="my-4 main">
      <x-row class="flex-wrap lg:flex-nowrap">
        <x-col class="main-content">

          <h2 class="text-4xl mt-3 mb-2 font-bebas-neue uppercase font-semibold">Latest news</h2>
          <x-row class="my-2 flex-wrap content-baseline">
            @foreach ($reports as $item)
              <x-col class="basis-full sm:basis-1/2">
                <x-story
                  title="{{ Str::limit($item->titulo, 50, '...') }}"
                  image="{{ $item->imagen }}"
                  link="{{ $item->url }}"
                  class="my-2">
                </x-story>
              </x-col>
            @endforeach
          </x-row>
        </x-col>
        <x-col class="lg:w-[300px] flex-shrink-0 w-full sidebar">
          Sidebar
        </x-col>
      </x-row>
    </x-section>
  </x-main>
</x-layout>