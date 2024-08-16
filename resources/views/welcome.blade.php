<x-layout title="Rockum web">
  <x-main>
    <x-section class="mb-4 main">
      <x-row class="flex-wrap lg:flex-nowrap">
        <x-col class="main-content">
          <x-row class="my-2 flex-wrap content-baseline">
            <x-col class="basis-1/4">
              <h2 class="text-3xl mb-2 font-bebas-neue font-semibold">Latest news</h2>
              @foreach ($reports->take(3) as $item)
                <x-story
                  title="{{ Str::limit($item->titulo, 50, '...') }}"
                  image="{{ $item->imagen }}"
                  link="{{ $item->url }}"
                  class="pb-4">
                </x-story>
              @endforeach
            </x-col>
            <x-col class="basis-1/2 min-w-80">
              <h2 class="text-3xl mb-2 font-bebas-neue font-semibold">&nbsp;</h2>
              @foreach ($reports->skip(3)->take(1) as $item)
                <a href="{{ $item->url }}"><img src="{{ $item->imagen }}" class="block" /></a>
                <h2 class="text-2xl font-bebas-neue p-2 text-white font-semibold bg-neutral-500"><a href="{{ $item->url }}" class="block">{!! $item->titulo !!}</a></h2>
              @endforeach
                <img class="max-w-none mt-4 block mx-auto" src="https://www.adspeed.com/placeholder-300x100.gif" />
            </x-col>
            <x-col class="basis-1/4">
              <h2 class="text-3xl mb-2 font-bebas-neue font-semibold">Rockum radio</h2>
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