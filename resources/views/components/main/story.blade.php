<x-row {{ $attributes->merge(['class'=>'carousel-cell w-full']) }}>
  <x-col class="w-full">
    <h2 class="text-3xl font-oswald mb-auto pb-4 w-full truncate">{{ $title }}</h2>
    <x-row class="flex-wrap">
      <x-col class="basis-full md:basis-1/2 mb-4 md:mb-0">
        @if ($image)
          <img src="{{ $image }}" class="max-w-full h-full block object-cover aspect-video" />
        @endif
      </x-col>
      <x-col class="basis-full md:basis-1/2 justify-between">
        <div class="text-xl">{{ $slot }}</div>
        <div class="ml-auto mt-4"><x-link-button class="font-semibold">Read more</x-link-button></div>
      </x-col>
    </x-row>
  </x-col>
</x-row>