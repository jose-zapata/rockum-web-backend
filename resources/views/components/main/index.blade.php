<div 
  x-data="{
    percent: 0,
  }"
>
  <div 
    @scroll.window = "
      percentValue = (window.scrollY / ($el.scrollHeight - document.documentElement.clientHeight)) * 100;
      percent = Math.min(100, percentValue);
    "
    x-bind:style="{'background-position-y': percent + '%'}"
    class="container-full bg-fixed bg-cover p-0 mt-14 bg-no-repeat md:p-6 md:mt-32 lg:mt-24 " style="background-image: url('{{ Vite::asset('resources/images/concert-ambience.jpg') }}')">
    <section id="main-content" class="max-w-[1090px] mx-auto border-0 border-neutral-300 p-6 bg-white ">
      {{ $slot }}
    </section>
  </div>
</div>