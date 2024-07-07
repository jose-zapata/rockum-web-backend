@props([
  'href',
])
<a href="{{ $href }}" {{ $attributes->merge(
  ['class' => 'py-3 uppercase border-x border-slate-200 block font-medium leading-6 text-black bg-white hover:text-white hover:bg-black'],
  ['target' => '_self']
) }}>{{ $slot }}</a>