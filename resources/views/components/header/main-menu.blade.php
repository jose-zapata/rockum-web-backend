<div class=" flex flex-col lg:flex-row relative" 
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
    console.log(window.innerWidth);
    if (window.innerWidth >= 768) {
      open = true;
      manuallyOpened = false;
    }
    else if (wasManuallyOpened != true) {
      open = false;
    }
  "
>
  <i x-on:click='toggle()' class="cursor-pointer fa-solid fa-bars fa-xl mx-4 my-auto block md:hidden absolute top-1/2 text-white"></i>
  <x-header.logo />
  <x-header.navbar x-show="isOpen" class="flex-nowrap basis-full absolute top-full flex-col w-48 h-screen md:h-auto md:w-auto md:static md:flex-row">
    <x-header.navbar.item class="px-4 py-2" href="#">Interviews</x-header.navbar.item>
    <x-header.navbar.item class="px-4 py-2" href="#">News</x-header.navbar.item>
    <x-header.navbar.item class="px-4 py-2" href="#">Album reviews</x-header.navbar.item>
    <x-header.navbar.item class="px-4 py-2" href="#">Concerts</x-header.navbar.item>
    <x-header.navbar.dropdown-menu class="px-4 py-2 border-0 md:h-full" label="More" id="more">
      <x-header.navbar.item class="px-4 py-2 w-full" href="#">About us</x-header.navbar.item>
      <x-header.navbar.item class="px-4 py-2 w-full" href="#">Gino Alache</x-header.navbar.item>
      <x-header.navbar.item class="px-4 py-2 w-full" href="#">Photo Gallery</x-header.navbar.item>
    </x-header.navbar.dropdown-menu>        
    <div class="flex justify-items-center border-t ml-0 md:ml-auto md:border-t-0" href="#">
      <x-header.navbar.item class="py-2 px-2 basis-1/4 text-center" target="_blank" href="https://www.facebook.com/rockumradio"><i class="fa-brands fa-facebook fa-lg"></i></x-header.navbar.item>
      <x-header.navbar.item class="px-2 py-2 basis-1/4 text-center" target="_blank" href="https://twitter.com/GinoAlache"><i class="fa-brands fa-x-twitter fa-lg"></i></x-header.navbar.item>
      <x-header.navbar.item class="px-2 py-2 basis-1/4 text-center" target="_blank" href="https://www.instagram.com/rockum_web/"><i class="fa-brands fa-instagram fa-lg"></i></x-header.navbar.item>
      <x-header.navbar.item class="px-2 py-2 basis-1/4 text-center" target="_blank" href="https://www.youtube.com/@rockumtv"><i class="fa-brands fa-youtube fa-lg"></i></x-header.navbar.item>
    </div>
    <x-header.navbar.item class="pl-2 pr-12 py-2 leading-none flex flex-wrap content-center items-center" type="red"  href="#">
      <div class="pr-3"><i class="fa-solid fa-tower-broadcast fa-2xl"></i></div>
      <div>LISTEN NOW<br/><span class="font-light normal-case">Radio</span></div>
    </x-header.navbar.item>
  </x-header.navbar>
</div>
