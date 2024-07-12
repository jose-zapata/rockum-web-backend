@props([
  'href',
  'type' => 'black',
])
<a href="{{ $href }}" 
  @class([
    $attributes['class'],
    'uppercase border-x border-slate-200 font-medium leading-6 shrink-0 block content-center',
    'text-black bg-white hover:text-white hover:bg-black' => $type == 'black',
    'bg-red-700 hover:bg-red-600 text-white' => $type == 'red'
  ])
  {{ $attributes->merge(['target' => '_self']) }}>{{ $slot }}</a>