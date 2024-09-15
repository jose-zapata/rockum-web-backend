@props([
  'eternal'
])
<div {{ $attributes->merge(['class' => 'overflow-visible flex flex-col relative max-w-2xl mx-auto']) }}>
  <img src="{{ $eternal->imagen }}" class="w-full block object-cover" />
  <div class="p-0 absolute bottom-0">
    <h1 class="text-xl sm:text-2xl md:text-4xl font-bebas-neue text-white p-4">
      {!! $eternal->artista !!}<br />
      <span class="text-xl sm:text-2xl md:text-3xl">{!! $eternal->bandas !!}</span><br />
      <span class="text-base sm:text-xl md:text-2xl">{!! $eternal->fechabd !!}</span>
    </h1>
  </div>
</div>
<x-row class="mt-3">
  <x-col class="basis-1/2">
    <x-button class="flex flex-nowrap justify-center font-bebas-neue items-center" bgcolor="bg-[#4267B2]" bghovercolor="hover:bg-[#3B5998]" textcolor="text-white">
      <div><i class="fa-brands fa-facebook-f"></i></div>
      <div class="basis-full text-base sm:text-xl">Share</div>
    </x-button>
  </x-col>
  <x-col class="basis-1/2">
    <x-button class="flex flex-nowrap justify-center font-bebas-neue items-center" bgcolor="bg-black" bghovercolor="hover:bg-neutral-800" textcolor="text-white">
      <div><i class="fa-brands fa-x-twitter"></i></div>
      <div class="basis-full text-base sm:text-xl">Tweet</div>
    </x-button>
  </x-col>
</x-row>
