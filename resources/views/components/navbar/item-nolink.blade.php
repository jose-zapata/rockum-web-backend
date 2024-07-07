<div {{ $attributes->merge(
  ['class' => 'uppercase border-x border-slate-200 font-medium leading-6 text-black bg-white hover:text-white hover:bg-black'],
) }}>{!! $slot !!}</div>