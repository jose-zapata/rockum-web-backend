@props([
  'type' => 'black',
  'id' => 'dropdown',
  'label'
])
<div
  id="{{ $id }}"
  class="relative"
  x-data="{ 
    open: false,
    get isOpen() { return this.open },
    toggle() { 
      this.open = !this.open 
    }
  }"
>
  <div x-on:click.stop="toggle()"
    @class([
      $attributes['class'],
      'content-center cursor-pointer relative uppercase border-x font-medium leading-6 block',
      'text-black bg-white hover:text-white hover:bg-black' => $type == 'black',
      'bg-red-700 hover:bg-red-600 text-white' => $type == 'red'
    ])
  >
    <div class="flex">
      <div class="mr-2">{{ $label }}</div>
      <div :class="{ 'rotate-90': isOpen }" class="ml-auto transition-transform"><i class="fa-solid fa-caret-right"></i></div>
    </div>
  </div>
  <template x-if="isOpen">
    <x-header.navbar class="md:absolute top-[102%] border flex-col w-48">
      {{ $slot }}
    </x-header.navbar>
  </template>
</div>
