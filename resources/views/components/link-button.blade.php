@props([
  'color' => '',
  'bordercolor' => '',
  'hovercolor' => '',
  'textcolor' => 'text-white',
  'type' => 'primary'
])
@switch($type)
  @case('primary')
    @php 
      $color = 'bg-blue-500';
      $bordercolor = 'border-blue-500';
      $hovercolor = 'hover:bg-blue-700' 
    @endphp
    @break
  @case('success')
    @php 
      $color = 'bg-green-500';
      $bordercolor = 'border-green-500';
      $hovercolor = 'hover:bg-green-700' 
    @endphp
    @break
  @case('danger')
    @php 
      $color = 'bg-red-500';
      $bordercolor = 'border-red-500';
      $hovercolor = 'hover:bg-red-700' 
    @endphp
    @break
  @case('warning')
    @php 
      $color = 'bg-orange-500';
      $bordercolor = 'border-orange-500';
      $hovercolor = 'hover:bg-orange-700' 
    @endphp
    @break
  @default
    @php 
      $color = 'bg-grey-500';
      $bordercolor = 'border-grey-500';
      $hovercolor = 'hover:bg-grey-700';
      $textcolor = 'text-grey-200'
    @endphp
    @break
@endswitch
<a href="#" {{ $attributes->merge(["class" => "inline-block {$color} {$hovercolor} {$textcolor} py-2 px-4 border {$bordercolor} rounded"]) }}>{{ $slot }}</a>