@props([
  'title' => '',
  'items' => [],
  

])
<x-col class="w-full">
  <h2 class="text-2xl mb-2 font-bebas-neue font-semibold">{{ $title }}</h2>
</x-col>
@foreach ($latest_news as $item)
  <x-col class="basis-full sm:basis-1/3 lg:basis-full">
    <x-story
      title="{{ Str::limit($item->artista, 130, '...') }}"
      image="{{ $item->imagen }}"
      link="{{ $item->url }}"
      class="pb-4">
    </x-story>
  </x-col>
@endforeach
<x-col class="w-full">
  <p class="text-base mb-2 ml-auto"><a href="#">More news &raquo;</a></p>
  <img class="max-w-none mt-4 block mx-auto" src="https://www.adspeed.com/placeholder-300x250.gif" />
</x-col>
