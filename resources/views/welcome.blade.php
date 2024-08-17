<x-layout title="Rockum web">
  <x-main>
    <x-section class="mb-4 main">
      <x-row class="flex-wrap lg:flex-nowrap">
        <x-col class="hero-content">
          <x-row class="mt-2 flex-wrap content-baseline">
            <x-col class="basis-full md:basis-1/4 lg:basis-1/5">
              <h2 class="text-3xl mb-2 font-bebas-neue font-semibold">Latest news</h2>
              <x-row class="flex-wrap h-full content-between">
                @foreach ($reports->take(3) as $item)
                  <x-col class="basis-1/3 md:basis-full pb-4">
                    <x-story
                      title="{{ Str::limit($item->titulo, 130, '...') }}"
                      image="{{ $item->imagen }}"
                      link="{{ $item->url }}">
                    </x-story>
                  </x-col>
                @endforeach
              </x-row>
            </x-col>
            <x-col class="basis-full md:basis-1/2 lg:basis-2/5 min-w-80">
              <x-row class="flex-wrap">
                <x-col class="basis-full"><h2 class="text-3xl mb-2 font-bebas-neue font-semibold">&nbsp;</h2></x-col>
                @foreach ($reports->skip(3)->take(1) as $item)
                  <x-col class="basis-full">
                    <a href="{{ $item->url }}"><img src="{{ $item->imagen }}" class="block" /></a>
                    <h2 class="text-2xl font-bebas-neue p-2 text-white bg-neutral-400"><a href="{{ $item->url }}" class="block">{!! $item->titulo !!}</a></h2>
                  </x-col>
                @endforeach
                <x-col class="basis-full"><img class="max-w-none mt-4 block mx-auto" src="https://www.adspeed.com/placeholder-300x200.gif" /></x-col>
              </x-row>
            </x-col>
            <x-col class="basis-full md:basis-1/4 lg:basis-1/5">
              <h2 class="text-3xl mb-2 font-bebas-neue font-semibold">Rockum radio</h2>
              <x-row class="flex-wrap h-full content-between">
                @foreach ($radioshows->take(3) as $item)
                  <x-col class="basis-full">
                    <x-story
                      title="{{ Str::limit($item->artista, 150, '...') }}"
                      image="{{ $item->imagen }}"
                      link="{{ $item->url }}"
                      class="pb-4">
                    </x-story>
                  </x-col>
                @endforeach
              </x-row>
            </x-col>
            <x-col class="basis-full lg:basis-1/5">
              <h2 class="text-3xl mb-2 font-bebas-neue font-semibold">Latest interviews</h2>
              <x-row class="flex-wrap h-full content-between">
                @foreach ($interviews->take(3) as $item)
                  <x-col class="lg:basis-full md:basis-1/3">
                    <x-story
                      title="{{ Str::limit($item->titulo, 130, '...') }}"
                      image="{{ $item->imagen }}"
                      link="{{ $item->url }}"
                      class="pb-4">
                    </x-story>
                  </x-col>
                @endforeach
              </x-row>
            </x-col>
          </x-row>
        </x-col>
      </x-row>
      <x-row class="flex-wrap lg:flex-nowrap">
        <x-col class="main-content">
          <x-row class="my-2 flex-wrap content-baseline news">
            <x-col class="w-full">
              <h2 class="text-2xl mb-2 basis-full font-bebas-neue font-semibold">News</h2>
            </x-col>
            @foreach ($reports->skip(4)->take(6) as $item)
              <x-col class="basis-1/3">
                <x-story
                  title="{{ Str::limit($item->titulo, 130, '...') }}"
                  image="{{ $item->imagen }}"
                  link="{{ $item->url }}"
                  class="pb-4">
                </x-story>
              </x-col>
            @endforeach
            <x-col class="w-full">
              <p class="text-xl mb-2 ml-auto"><a href="#">More news &raquo;</a></p>
            </x-col>
          </x-row>
          <x-row class="w-full flex-wrap sm:flex-nowrap">
            <x-col class="w-full"><img src="https://www.adspeed.com/placeholder-300x50.gif" class="block m-auto mb-3 max-w-none" /></x-col>
          </x-row>
          <x-row class="my-2 flex-wrap content-baseline interviews">
            <x-col class="w-full">
              <h2 class="text-2xl mb-2 basis-full font-bebas-neue font-semibold">Interviews</h2>
            </x-col>
            @foreach ($interviews->skip(3)->take(6) as $item)
              <x-col class="basis-1/3">
                <x-story
                  title="{{ Str::limit($item->titulo, 130, '...') }}"
                  image="{{ $item->imagen }}"
                  link="{{ $item->url }}"
                  class="pb-4">
                </x-story>
              </x-col>
            @endforeach
            <x-col class="w-full">
              <p class="text-xl mb-2 ml-auto"><a href="#">More interviews &raquo;</a></p>
            </x-col>
          </x-row>
          <x-row class="w-full flex-wrap sm:flex-nowrap">
            <x-col class="w-full"><img src="https://www.adspeed.com/placeholder-300x50.gif" class="block m-auto mb-3 max-w-none" /></x-col>
          </x-row>
          <x-row class="my-2 flex-wrap content-baseline eternal">
            <x-col class="w-full">
              <h2 class="text-2xl mb-2 basis-full font-bebas-neue font-semibold">Eternal</h2>
            </x-col>
            @foreach ($eternal->take(8) as $item)
              <x-col class="basis-1/4">
                <x-story
                  title="{{ $item->artista }}"
                  image="{{ $item->imagen }}"
                  link="{{ $item->url }}"
                  class="pb-4">
                </x-story>
              </x-col>
            @endforeach
            <x-col class="w-full">
              <p class="text-xl mb-2 ml-auto"><a href="#">More Eternal &raquo;</a></p>
            </x-col>
          </x-row>
        </x-col>
        <x-col class="lg:w-[324px] flex-shrink-0 w-full my-2 sidebar">
          <x-row class="flex-wrap mb-4">
            <x-col class="w-full">
              <h2 class="text-2xl mb-2 font-bebas-neue font-semibold">Radio shows</h2>
            </x-col>
            @foreach ($radioshows->skip(3)->take(3) as $item)
              <x-col class="basis-1/3 lg:basis-full">
                <x-story
                  title="{{ Str::limit($item->artista, 130, '...') }}"
                  image="{{ $item->imagen }}"
                  link="{{ $item->url }}"
                  class="pb-4">
                </x-story>
              </x-col>
            @endforeach
            <x-col class="w-full">
              <p class="text-xl mb-2 ml-auto"><a href="#">More Rockum Radio &raquo;</a></p>
              <img class="max-w-none mt-4 block mx-auto" src="https://www.adspeed.com/placeholder-300x250.gif" />
            </x-col>
          </x-row>
          <x-row class="flex-wrap mb-4">
            <x-col class="w-full">
              <h2 class="text-2xl mb-2 font-bebas-neue font-semibold">Reviews</h2>
            </x-col>
            @foreach ($reviews->take(3) as $item)
              <x-col class="basis-1/3 lg:basis-full">
                <x-story
                  title="{{ $item->album . '-' . $item->banda }}"
                  image="{{ $item->imagen }}"
                  link="{{ $item->url }}"
                  class="pb-4">
                </x-story>
              </x-col>
            @endforeach
            <x-col class="w-full">
              <p class="text-xl mb-2 ml-auto"><a href="#">More reviews &raquo;</a></p>
            </x-col>
          </x-row>
        </x-col>
      </x-row>
    </x-section>
  </x-main>
</x-layout>