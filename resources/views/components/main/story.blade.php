<div {{ $attributes->merge(['class'=>'flex flex-col']) }}>
  <h2 class="text-6xl font-semibold font-new-rocker mb-4 mt-3 sm:mt-0">{{ $title }}</h2>
  <div class="flex flex-row">
    <div class="sm:basis-7/12">
      @if ($image)
        <img src="{{ $image }}" class="max-w-full block object-cover aspect-video" />
      @endif
    </div>
    <div class="sm:basis-5/12 sm:pl-4 pl-0">
      <div class="text-xl font-new-rocker">
        {{ $slot }}
      </div>
    </div>
  </div>
</div>