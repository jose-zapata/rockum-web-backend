<div {{ $attributes->merge(['class' => 'story overflow-hidden flex flex-col h-full']) }}>
  <a href="{{ $link }}"><img src="{{ $image }}" class="max-w-full block object-cover aspect-video" /></a>
  <div class="p-4 flex flex-col h-full">
    <h2 class="text-2xl font-oswald mb-4"><a href="{{ $link }}">{!! $title !!}</a></h2>
    {{ $slot }}
    <div class="ml-auto mt-auto">
      <x-link-button class="font-semibold text-sm">Read more</x-link-button>
    </div>
  </div>
</div>