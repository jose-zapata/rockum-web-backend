<div 
  x-data="{
    percent: 0,
  }"
>
  <div 
    @scroll.window = "
      percentValue = (window.scrollY / ($el.scrollHeight - document.documentElement.clientHeight - $el.offsetTop)) * 100;
      percent = Math.min(100, percentValue);
    "
    x-bind:style="{'background-position-y': percent + '%'}"
    class="container-full p-4 mt-12 md:mt-24 lg:mt-12 bg-no-repeat bg-contain" style="background-image: url('{{ Vite::asset('resources/images/concert-ambience.jpg') }}')">
    <section id="main-content" class="max-w-[1090px] mx-auto border border-neutral-300 p-6 bg-white">
      {{ $slot }}
    </section>
  </div>
</div>