<div {{ $attributes->merge(['class'=>'']) }}>
  <h2 class="text-3xl font-semibold font-oswald mb-auto pb-4 mt-3 sm:mt-0">{{ $title }}</h2>
  <div class="flex flex-col sm:flex-row">
    <div class="basis-full sm:basis-1/2">
      @if ($image)
        <img src="{{ $image }}" class="max-w-full block object-cover aspect-video" />
      @endif
    </div>
    <div class="basis-full sm:basis-1/2 sm:pl-4 pl-0 flex flex-col justify-between">
      <div class="text-xl">{{ $slot }}</div>
      <div class="ml-auto"><x-link-button class="font-semibold">Read more</x-link-button></div>
    </div>
  </div>
</div>