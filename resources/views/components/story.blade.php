<div {{ $attributes->merge(['class' => 'story']) }}>
  <a href="{{ $link }}"><img src="{{ $image }}" class="max-w-full block object-cover aspect-video" /></a>
  <h2 class="text-3xl font-new-rocker mt-3 mb-4"><a href="{{ $link }}">{{ $title }}</a></h2>
  {{ $slot }}
</div>