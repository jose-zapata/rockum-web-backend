<div class="flex flex-col lg:flex-row m-auto border-t-0 lg:border-t items-center justify-between" 
  x-data="{ 
    init() {
      if (window.innerWidth < 1024) {
        this.open = false;
      }
    },
    open: true,
    manuallyOpened: false,
    get isOpen() { return this.open },
    get wasManuallyOpened() { return this.manuallyOpened },
    toggle() { 
      this.manuallyOpened = true;
      this.open = !this.open;
    },
  }"
  @resize.window="
    if (window.innerWidth >= 1024) {
      open = true;
      manuallyOpened = false;
    }
    else if (wasManuallyOpened != true) {
      open = false;
    }
  "
>
  <i x-on:click='toggle()' class="cursor-pointer fa-solid fa-bars fa-2xl mx-4 my-auto block lg:hidden absolute left-0 top-1/2 text-black"></i>
  <x-header.navbar x-show="isOpen" class="max-w-7xl m-auto flex-col lg:flex-row flex-wrap absolute lg:static left-0 w-full h-screen lg:h-auto border-t lg:border-t-0">
    <div class="flex flex-col lg:flex-row justify-items-left h-auto" href="#">
      <x-header.navbar.item class="px-3 py-2" href="#">Home</x-header.navbar.item>
      <x-header.navbar.item class="px-3 py-2" href="#">Radio</x-header.navbar.item>
      <x-header.navbar.item class="px-3 py-2" href="#">Podcast</x-header.navbar.item>
      <x-header.navbar.item class="px-3 py-2" href="#">Interviews</x-header.navbar.item>
      <x-header.navbar.item class="px-3 py-2" href="#">News</x-header.navbar.item>
      <x-header.navbar.item class="px-3 py-2" href="#">Reviews</x-header.navbar.item>
      <x-header.navbar.item class="px-3 py-2" href="#">Concerts</x-header.navbar.item>
      <x-header.navbar.dropdown-menu class="px-3 py-2 border-0 lg:h-full" label="More" id="more">
        <x-header.navbar.item class="px-3 py-2 lg:w-48" href="#">About us</x-header.navbar.item>
        <x-header.navbar.item class="px-3 py-2 lg:w-48" href="#">Gino Alache</x-header.navbar.item>
        <x-header.navbar.item class="px-3 py-2 lg:w-48" href="#">Photo Gallery</x-header.navbar.item>
      </x-header.navbar.dropdown-menu>
    </div>
    <div class="flex justify-items-center border-t lg:border-t-0 lg:ml-auto" href="#">
      <x-header.navbar.item class="py-3 px-2 basis-1/4 text-center" target="_blank" href="https://www.facebook.com/rockumradio"><i class="fa-brands fa-facebook fa-lg"></i></x-header.navbar.item>
      <x-header.navbar.item class="px-3 py-2 basis-1/4 text-center" target="_blank" href="https://twitter.com/GinoAlache"><i class="fa-brands fa-x-twitter fa-lg"></i></x-header.navbar.item>
      <x-header.navbar.item class="px-3 py-2 basis-1/4 text-center" target="_blank" href="https://www.instagram.com/rockum_web/"><i class="fa-brands fa-instagram fa-lg"></i></x-header.navbar.item>
      <x-header.navbar.item class="px-3 py-2 basis-1/4 text-center" target="_blank" href="https://www.youtube.com/@rockumtv"><i class="fa-brands fa-youtube fa-lg"></i></x-header.navbar.item>
    </div>
    <x-header.search class="w-full lg:hidden p-4 border-t"></x-header.search>
  </x-header.navbar>
</div>
