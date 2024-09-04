<x-layout title="Rockum web">
  <x-main>
    <x-section class="main mb-4">
      <x-row class="flex-wrap lg:flex-nowrap">
        <x-col class="hero-content">
          <x-row class="mt-2 flex-wrap content-baseline">
            <x-col class="basis-full md:basis-1/4 lg:basis-1/5">
              <h2 class="mb-2 font-bebas-neue text-3xl font-semibold">Latest news</h2>
              <x-row class="h-full flex-wrap content-between">
                @foreach ($reports->take(3) as $item)
                  <x-col class="basis-full pb-4 sm:basis-1/3 md:basis-full">
                    <x-story
                      image="{{ $item->imagen }}"
                      link="{{ $item->url }}"
                      title="{{ Str::limit($item->titulo, 130, '...') }}"
                    >
                    </x-story>
                  </x-col>
                @endforeach
              </x-row>
            </x-col>
            <x-col class="min-w-80 order-first mb-3 basis-full md:order-none md:basis-1/2 lg:basis-2/5">
              <x-row class="flex-wrap">
                <x-col class="hidden basis-full md:block">
                  <h2 class="mb-2 font-bebas-neue text-3xl font-semibold">&nbsp;</h2>
                </x-col>
                @foreach ($reports->skip(3)->take(1) as $item)
                  <x-col class="basis-full">
                    <a href="{{ $item->url }}"><img
                        class="block"
                        src="{{ $item->imagen }}"
                      /></a>
                    <h2 class="bg-neutral-400 p-2 font-bebas-neue text-2xl text-white"><a
                        class="block"
                        href="{{ $item->url }}"
                      >{!! $item->titulo !!}</a></h2>
                  </x-col>
                @endforeach
                <x-col class="basis-full"><img
                    class="mx-auto mt-4 block max-w-none"
                    src="https://www.adspeed.com/placeholder-300x200.gif"
                  /></x-col>
              </x-row>
            </x-col>
            <x-col class="basis-full md:basis-1/4 lg:basis-1/5">
              <h2 class="mb-2 font-bebas-neue text-3xl font-semibold">Rockum radio</h2>
              <x-row class="h-full flex-wrap content-between">
                @foreach ($radioshows->take(3) as $item)
                  <x-col class="basis-full sm:basis-1/3 md:basis-full">
                    <x-story
                      class="pb-4"
                      image="{{ $item->imagen }}"
                      link="{{ $item->url }}"
                      title="{{ Str::limit($item->artista, 150, '...') }}"
                    >
                    </x-story>
                  </x-col>
                @endforeach
              </x-row>
            </x-col>
            <x-col class="basis-full lg:basis-1/5">
              <h2 class="mb-2 font-bebas-neue text-3xl font-semibold">Latest interviews</h2>
              <x-row class="h-full flex-wrap content-between">
                @foreach ($interviews->take(3) as $item)
                  <x-col class="basis-full sm:basis-1/3 lg:basis-full">
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
            </x-col>
          </x-row>
        </x-col>
      </x-row>
      <x-row class="flex-wrap lg:flex-nowrap">
        <x-col class="main-content">
          <x-row class="news my-2 flex-wrap content-baseline">
            <x-col class="w-full">
              <h2 class="mb-2 basis-full font-bebas-neue text-2xl font-semibold">News</h2>
            </x-col>
            @foreach ($reports->skip(4)->take(6) as $item)
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
            <x-col class="w-full">
              <p class="mb-2 ml-auto text-base"><a href="#">More news &raquo;</a></p>
            </x-col>
          </x-row>
          <x-row class="w-full flex-wrap sm:flex-nowrap">
            <x-col class="w-full"><img
                class="m-auto mb-3 block max-w-none"
                src="https://www.adspeed.com/placeholder-300x50.gif"
              /></x-col>
          </x-row>
          <x-row class="interviews my-2 flex-wrap content-baseline">
            <x-col class="w-full">
              <h2 class="mb-2 basis-full font-bebas-neue text-2xl font-semibold">Interviews</h2>
            </x-col>
            @foreach ($interviews->skip(3)->take(6) as $item)
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
            <x-col class="w-full">
              <p class="mb-2 ml-auto text-base"><a href="#">More interviews &raquo;</a></p>
            </x-col>
          </x-row>
          <x-row class="w-full flex-wrap sm:flex-nowrap">
            <x-col class="w-full"><img
                class="m-auto mb-3 block max-w-none"
                src="https://www.adspeed.com/placeholder-300x50.gif"
              /></x-col>
          </x-row>
          <x-row class="eternal my-2 flex-wrap content-baseline">
            <x-col class="w-full">
              <h2 class="mb-2 basis-full font-bebas-neue text-2xl font-semibold">Eternal</h2>
            </x-col>
            @foreach ($eternal->take(8) as $item)
              <x-col class="basis-1/2 md:basis-1/4">
                <x-story
                  class="pb-4"
                  image="{{ $item->imagen }}"
                  link="{{ $item->url }}"
                  title="{{ $item->artista }}"
                >
                </x-story>
              </x-col>
            @endforeach
            <x-col class="w-full">
              <p class="mb-2 ml-auto text-base"><a href="#">More Eternal &raquo;</a></p>
            </x-col>
          </x-row>
        </x-col>
        <x-col class="sidebar my-2 w-full flex-shrink-0 lg:w-[324px]">
          <x-row class="mb-4 flex-wrap">
            <x-col class="w-full">
              <h2 class="mb-2 font-bebas-neue text-2xl font-semibold">Radio shows</h2>
            </x-col>
            @foreach ($radioshows->skip(3)->take(3) as $item)
              <x-col class="basis-full sm:basis-1/3 lg:basis-full">
                <x-story
                  class="pb-4"
                  image="{{ $item->imagen }}"
                  link="{{ $item->url }}"
                  title="{{ Str::limit($item->artista, 130, '...') }}"
                >
                </x-story>
              </x-col>
            @endforeach
            <x-col class="w-full">
              <p class="mb-2 ml-auto text-base"><a href="#">More Rockum Radio &raquo;</a></p>
              <img
                class="mx-auto mt-4 block max-w-none"
                src="https://www.adspeed.com/placeholder-300x250.gif"
              />
            </x-col>
          </x-row>
          <x-row class="mb-4 flex-wrap">
            <x-col class="w-full">
              <h2 class="mb-2 font-bebas-neue text-2xl font-semibold">Reviews</h2>
            </x-col>
            @foreach ($reviews->take(3) as $item)
              <x-col class="basis-full sm:basis-1/3 lg:basis-full">
                <x-story
                  class="pb-4"
                  image="{{ $item->imagen }}"
                  link="{{ $item->url }}"
                  title="{{ $item->album . '-' . $item->banda }}"
                >
                </x-story>
              </x-col>
            @endforeach
            <x-col class="w-full">
              <p class="mb-2 ml-auto text-base"><a href="#">More reviews &raquo;</a></p>
            </x-col>
          </x-row>
        </x-col>
      </x-row>
    </x-section>
  </x-main>
</x-layout>
