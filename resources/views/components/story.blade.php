<div {{ $attributes->merge(['class' => 'story overflow-visible flex flex-col h-full']) }}>
  <a href="{{ $link }}"><img src="{{ $image }}" class="max-w-full block object-cover aspect-video" /></a>
  <div class="p-0">
    <h2 class="text-lg font-bebas-neue leading-5 mt-1"><a href="{{ $link }}">{!! $title !!}</a></h2>
    {{ $slot }}
  </div>
</div>