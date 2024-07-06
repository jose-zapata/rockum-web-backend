@props([
  'color' => '', 
  'textcolor' => 'white',
  'type' => 'primary'
])
@switch($type)
  @case('primary')
    @php 
      $color = 'blue' 
    @endphp
    @break
  @case('success')
    @php $color = 'green' @endphp
    @break
  @case('danger')
    @php $color = 'red' @endphp
    @break
  @case('warning')
    @php $color = 'orange' @endphp
    @break
  @default
    @php 
      $color = 'grey';
      $textcolor = 'grey-200'
    @endphp
    @break
@endswitch
<a href="#" {{ $attributes->merge(["class" => "inline-block bg-{$color}-500 hover:bg-{$color}-700 text-{$textcolor} py-2 px-4 border border-{$color}-700 rounded"]) }}>{{ $slot }}</a>