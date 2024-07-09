@props([
  'href',
])
<a href="{{ $href }}" {{ $attributes->merge(
  ['class' => 'block uppercase border-x border-slate-200 font-medium leading-6 shrink-0 grow-0 content-center'],
  ['target' => '_self']
) }}>{{ $slot }}</a>