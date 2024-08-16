<x-layout title="Rockum web">
  <x-main>
    <x-section class="my-4 main">
      <x-row class="flex-wrap lg:flex-nowrap">
        <x-col class="main-content">
          <h2 class="text-4xl mt-3 mb-2 font-bebas-neue uppercase font-semibold">Latest news</h2>
          <x-row class="my-2 flex-wrap content-baseline">
            <x-col class="basis-1/4">
              @foreach ($reports->take(3) as $item)
                <x-story
                  title="{{ Str::limit($item->titulo, 50, '...') }}"
                  image="{{ $item->imagen }}"
                  link="{{ $item->url }}"
                  class="pb-4">
                </x-story>
              @endforeach
            </x-col>
            <x-col class="basis-1/2">
              @foreach ($reports->skip(3)->take(1) as $item)
                <img src="{{ $item->imagen }}" class="block" />
                <h2 class="text-2xl font-bebas-neue p-2 text-white font-semibold bg-neutral-500"><a href="{{ $item->url }}">{!! $item->titulo !!}</a></h2>
              @endforeach
            </x-col>
            <x-col class="basis-1/4">
              @foreach ($reports->skip(4)->take(3) as $item)
                <x-story
                  title="{{ Str::limit($item->titulo, 50, '...') }}"
                  image="{{ $item->imagen }}"
                  link="{{ $item->url }}"
                  class="pb-4">
                </x-story>
              @endforeach
            </x-col>
          </x-row>
        </x-col>
        <x-col class="lg:w-[300px] flex-shrink-0 w-full sidebar">
          Sidebar
        </x-col>
      </x-row>
    </x-section>
  </x-main>
</x-layout>