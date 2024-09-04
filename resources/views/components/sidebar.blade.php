<x-row class="mb-4 flex-wrap ads justify-center">
  <x-col class="basis-full sm:basis-1/2 lg:basis-full">
    <img class="mx-auto block max-w-none" src="https://www.adspeed.com/placeholder-300x250.gif"
  />
  </x-col>
  <x-col class="basis-full sm:basis-1/2 lg:basis-full">
    <img class="mx-auto mt-4 block max-w-none" src="https://www.adspeed.com/placeholder-300x250.gif"
  />
  </x-col>
  <x-col class="basis-full">
    <img class="mx-auto mt-4 block max-w-none" src="https://www.adspeed.com/placeholder-300x50.gif"
  />
  </x-col>
</x-row>

<x-row class="mb-4 flex-wrap latest-news">
  <x-col class="w-full">
    <h2 class="mb-2 font-bebas-neue text-2xl font-semibold">Latest news</h2>
  </x-col>
  @foreach ($stories as $item)
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
  <x-col class="w-full">
    <p class="mb-2 ml-auto text-base"><a href="#">More news &raquo;</a></p>
    <img
      class="mx-auto mt-4 block max-w-none"
      src="https://www.adspeed.com/placeholder-300x250.gif"
    />
  </x-col>
</x-row>

<x-row class="mb-4 flex-wrap interviews">
  <x-col class="w-full">
    <h2 class="mb-2 font-bebas-neue text-2xl font-semibold">Interviews</h2>
  </x-col>  
  @foreach ($interviews->take(3) as $item)
    <x-col class="basis-full sm:basis-1/3 lg:basis-full">
      <x-story
        title="{{ Str::limit($item->titulo, 130, '...') }}"
        image="{{ $item->imagen }}"
        link="{{ $item->url }}"
        class="pb-4">
      </x-story>
    </x-col>
  @endforeach
  <x-col class="w-full">
    <p class="mb-2 ml-auto text-base"><a href="#">More Interviews &raquo;</a></p>
    <img
      class="mx-auto mt-4 block max-w-none"
      src="https://www.adspeed.com/placeholder-300x250.gif"
    />
  </x-col>  
</x-row>

<x-row class="mb-4 flex-wrap radio-shows">
  <x-col class="w-full">
    <h2 class="mb-2 font-bebas-neue text-2xl font-semibold">Rockum Radio</h2>
  </x-col>
  @foreach ($radioshows->take(3) as $item)
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

<x-row class="mb-4 flex-wrap reviews">
  <x-col class="w-full">
    <h2 class="mb-2 font-bebas-neue text-2xl font-semibold">Reviews</h2>
  </x-col>  
  @foreach ($reviews->take(3) as $item)
    <x-col class="basis-full sm:basis-1/3 lg:basis-full">
      <x-story
        title="{{ Str::limit($item->titulo, 130, '...') }}"
        image="{{ $item->imagen }}"
        link="{{ $item->url }}"
        class="pb-4">
      </x-story>
    </x-col>
  @endforeach
  <x-col class="w-full">
    <p class="mb-2 ml-auto text-base"><a href="#">More reviews &raquo;</a></p>
    <img
      class="mx-auto mt-4 block max-w-none"
      src="https://www.adspeed.com/placeholder-300x250.gif"
    />
  </x-col>  
</x-row>
