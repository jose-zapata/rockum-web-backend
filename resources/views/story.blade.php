<x-layout title="Rockum web">
  <x-main>
    <x-section class="main mb-4">
      <x-row class="flex-wrap lg:flex-nowrap">
        <x-col class="main-content">
          <x-full-story.hero :story="$story"></x-full-story.hero>
          <div class="hidden xl:block"><img class="max-w-none mx-auto my-4 block" src="https://www.adspeed.com/placeholder-728x90.gif"></div>
          <div class="hidden md:block xl:hidden"><img class="max-w-none mx-auto my-4 block" src="https://www.adspeed.com/placeholder-468x60.gif"></div>
          <div class="block md:hidden"><img class="max-w-none mx-auto my-4 block" src="https://www.adspeed.com/placeholder-300x50.gif"></div>
          <div class="mb-4">{!! nl2br($story->texto) !!}</div>
          <x-row class="mb-4 flex-wrap more-on-rockum">
            <x-col class="w-full mb-2">
              <h2 class="font-bebas-neue text-2xl py-2 bg-blue-800 text-white text-center">More on Rockum</h2>
            </x-col>
            @foreach ($more_rockum as $item)
              <x-col class="basis-full sm:basis-1/3">
                <x-story
                  class="pb-4"
                  image="{{ $item->imagen }}"
                  link="{{ $item->url }}"
                  title="{{ Str::limit($item->titulo, 130, '...') }}"
                >
                </x-story>
              </x-col>
            @endforeach
          </x-row>          
          <div class="hidden xl:block"><img class="max-w-none mx-auto my-4 block" src="https://www.adspeed.com/placeholder-728x90.gif"></div>
          <div class="hidden md:block xl:hidden"><img class="max-w-none mx-auto my-4 block" src="https://www.adspeed.com/placeholder-468x60.gif"></div>
          <div class="block md:hidden"><img class="max-w-none mx-auto my-4 block" src="https://www.adspeed.com/placeholder-300x50.gif"></div>
        </x-col>
        <x-col class="lg:w-[324px] flex-shrink-0 w-full sidebar">
          <x-sidebar></x-sidebar>
        </x-col>
      </x-row>
    </x-section>
  </x-main>
  @push('scripts')
    <script async defer
      src="//platform.twitter.com/widgets.js"
      charset="utf-8">
    </script>
  @endpush
</x-layout>
