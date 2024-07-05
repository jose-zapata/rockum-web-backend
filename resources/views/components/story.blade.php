<div {{ $attributes->merge(['class' => 'story overflow-hidden']) }}>
  <a href="{{ $link }}"><img src="{{ $image }}" class="max-w-full block object-cover aspect-video" /></a>
  <div class="p-4">
    <h2 class="text-3xl font-new-rocker mb-4"><a href="{{ $link }}">{{ $title }}</a></h2>
    {{ $slot }}
  </div>
</div>