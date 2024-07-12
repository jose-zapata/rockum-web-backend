<div class="flex flex-col lg:flex-row relative m-auto max-w-6xl items-center justify-between" 
  x-data="{ 
    init() {
      if (window.innerWidth < 768) {
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
    if (window.innerWidth >= 768) {
      open = true;
      manuallyOpened = false;
    }
    else if (wasManuallyOpened != true) {
      open = false;
    }
  "
>
  <i x-on:click='toggle()' class="cursor-pointer fa-solid fa-bars fa-2xl mx-4 my-auto block md:hidden absolute left-0 top-1/2 text-white"></i>
  <x-header.logo />
  <x-header.navbar x-show="isOpen" class="flex-col md:flex-row absolute md:static left-0 w-full h-screen md:h-auto">
    <x-header.navbar.item type="white" class="px-4 py-2 ml-0 lg:ml-auto" href="#">Interviews</x-header.navbar.item>
    <x-header.navbar.item type="white" class="px-4 py-2" href="#">News</x-header.navbar.item>
    <x-header.navbar.item type="white" class="px-4 py-2" href="#">Album reviews</x-header.navbar.item>
    <x-header.navbar.item type="white" class="px-4 py-2" href="#">Concerts</x-header.navbar.item>
    <x-header.navbar.dropdown-menu type="white" class="px-4 py-2 border-0 md:h-full" label="More" id="more">
      <x-header.navbar.item class="px-4 py-2 md:w-48" href="#">About us</x-header.navbar.item>
      <x-header.navbar.item class="px-4 py-2 md:w-48" href="#">Gino Alache</x-header.navbar.item>
      <x-header.navbar.item class="px-4 py-2 md:w-48" href="#">Photo Gallery</x-header.navbar.item>
    </x-header.navbar.dropdown-menu>        
    <div class="flex justify-items-center border-t md:border-t-0" href="#">
      <x-header.navbar.item class="py-2 px-2 basis-1/4 text-center" target="_blank" href="https://www.facebook.com/rockumradio"><i class="fa-brands fa-facebook fa-lg"></i></x-header.navbar.item>
      <x-header.navbar.item class="px-2 py-2 basis-1/4 text-center" target="_blank" href="https://twitter.com/GinoAlache"><i class="fa-brands fa-x-twitter fa-lg"></i></x-header.navbar.item>
      <x-header.navbar.item class="px-2 py-2 basis-1/4 text-center" target="_blank" href="https://www.instagram.com/rockum_web/"><i class="fa-brands fa-instagram fa-lg"></i></x-header.navbar.item>
      <x-header.navbar.item class="px-2 py-2 basis-1/4 text-center" target="_blank" href="https://www.youtube.com/@rockumtv"><i class="fa-brands fa-youtube fa-lg"></i></x-header.navbar.item>
    </div>
    <x-header.navbar.item class="ml-0 lg:ml-0 md:ml-auto pl-2 pr-12 py-2 leading-none flex flex-wrap content-center items-center" type="red" href="#">
      <div class="pr-3"><i class="fa-solid fa-tower-broadcast fa-2xl"></i></div>
      <div>LISTEN NOW<br/><span class="font-light normal-case">Radio</span></div>
    </x-header.navbar.item>
  </x-header.navbar>
</div>
