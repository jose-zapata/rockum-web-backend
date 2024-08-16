@props([
  'href' => '#',
  'type' => 'black',
])
<a href="{{ $href }}" 
  @class([
    $attributes['class'],
    'uppercase font-medium h-12 shrink-0 block content-center',
    'text-black border-slate-200 bg-white hover:text-white hover:bg-gray-500 hover:border-gray-500' => $type == 'black',
    'text-white border-x border-neutral-900 bg-black hover:text-black hover:bg-white hover:border-slate-200' => $type == 'white',
    'bg-red-700 hover:bg-red-600 border-red-700 text-white' => $type == 'red'
  ])
  {{ $attributes->merge(['target' => '_self']) }}>{{ $slot }}</a>