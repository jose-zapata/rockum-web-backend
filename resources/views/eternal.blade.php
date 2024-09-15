<x-layout title="{{ $eternal->artista }}">
  <x-main>
    <style>
      .video {
        aspect-ratio: 16 / 9;
      }
      .video iframe {
        width: 100%;
        height: 100%;
      }
    </style>
    <x-section class="main mb-4">
      <x-row class="flex-wrap lg:flex-nowrap">
        <x-col class="main-content">
          <x-full-eternal.hero :eternal="$eternal"></x-full-eternal.hero>
          <div class="hidden xl:block"><img
              class="mx-auto my-4 block max-w-none"
              src="https://www.adspeed.com/placeholder-728x90.gif"
            ></div>
          <div class="hidden md:block xl:hidden"><img
              class="mx-auto my-4 block max-w-none"
              src="https://www.adspeed.com/placeholder-468x60.gif"
            ></div>
          <div class="block md:hidden"><img
              class="mx-auto my-4 block max-w-none"
              src="https://www.adspeed.com/placeholder-300x50.gif"
            ></div>
          <div class="mb-4">{!! nl2br($eternal->texto) !!}</div>
          @if (!empty($eternal->imagen))
            <img
              class="mb-4 block w-full object-cover"
              src="{{ $eternal->imagenbanda }}"
            />
          @endif
          <x-row class="more-on-rockum mb-4 flex-wrap">
            <x-col class="mb-2 w-full">
              <h2 class="bg-blue-800 py-2 text-center font-bebas-neue text-2xl text-white">More on Rockum</h2>
            </x-col>
            @foreach ($more_rockum as $item)
              <x-col class="basis-full sm:basis-1/3">
                <x-story
                  class="pb-4"
                  image="{{ $item->imagen }}"
                  link="{{ $item->url }}"
                  title="{{ Str::limit($item->album, 130, '...') }}"
                >
                </x-story>
              </x-col>
            @endforeach
          </x-row>
          <div class="hidden xl:block"><img
              class="mx-auto my-4 block max-w-none"
              src="https://www.adspeed.com/placeholder-728x90.gif"
            ></div>
          <div class="hidden md:block xl:hidden"><img
              class="mx-auto my-4 block max-w-none"
              src="https://www.adspeed.com/placeholder-468x60.gif"
            ></div>
          <div class="block md:hidden"><img
              class="mx-auto my-4 block max-w-none"
              src="https://www.adspeed.com/placeholder-300x50.gif"
            ></div>
        </x-col>
        <x-col class="sidebar w-full flex-shrink-0 lg:w-[324px]">
          <x-sidebar></x-sidebar>
        </x-col>
      </x-row>
    </x-section>
  </x-main>
  @push('scripts')
    <script
      async
      defer
      src="//platform.twitter.com/widgets.js"
      charset="utf-8"
    ></script>
  @endpush
</x-layout>
