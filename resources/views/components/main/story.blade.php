<div class="flex flex-col sm:flex-row">
  <div class="sm:basis-7/12">
    @if ($image)
      <img src="{{ $image }}" class="max-w-full block object-cover aspect-video" />
    @endif
  </div>
  <div class="sm:basis-5/12 sm:pl-4 pl-0">
    <h2 class="text-3xl font-semibold mb-4 mt-3 sm:mt-0">{{ $title }}</h2>
    <div class="text-base">
      {{ $slot }}
    </div>
  </div>
</div>