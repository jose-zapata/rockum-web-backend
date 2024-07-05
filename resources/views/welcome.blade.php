<x-layout title="Jora jora">
  <x-header>
    <x-header.left>
      <x-header.logo />
      <x-navbar>
        <x-navbar.item href="#">Home</x-navbar.item>
        <x-navbar.item href="#">Features</x-navbar.item>
        <x-navbar.item href="#">Pricing</x-navbar.item>
        <x-navbar.item href="#">Blog</x-navbar.item>
      </x-navbar>
    </x-header.left>
    <x-header.right>
      <a href="#" class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-gray-900">
        Sign in
      </a>
      <a href="#" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600" data-rounded="rounded-md" data-primary="indigo-600">
        Sign up
      </a>
    </x-header.right>
  </x-header>
  <x-main>
    <x-section class="border border-neutral-300 rounded-xl pb-6 bg-white">
      <div data-flickity='{ "cellAlign": "left", "percentPosition": false, "prevNextButtons": false, "autoPlay": true }' class="mb-6 w-full">
        <x-main.story image="http://rockumweb.com/nestorrockum.jpg" class="carousel-cell w-full p-6">
          <x-slot:title class="mb-4">Title!</x-slot:title>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus reiciendis, doloremque voluptas praesentium tempore exercitationem earum voluptatem dolorem eligendi ad sit iusto delectus accusamus quo fuga totam hic sint ducimus.
        </x-main.story>
        <x-main.story image="http://rockumweb.com/nestorrockum.jpg" class="carousel-cell w-full p-6">
          <x-slot:title class="mb-4">Title!</x-slot:title>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus reiciendis, doloremque voluptas praesentium tempore exercitationem earum voluptatem dolorem eligendi ad sit iusto delectus accusamus quo fuga totam hic sint ducimus.
        </x-main.story>
        <x-main.story image="http://rockumweb.com/nestorrockum.jpg" class="carousel-cell w-full p-6">
          <x-slot:title class="mb-4">Title!</x-slot:title>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus reiciendis, doloremque voluptas praesentium tempore exercitationem earum voluptatem dolorem eligendi ad sit iusto delectus accusamus quo fuga totam hic sint ducimus.
        </x-main.story>
        <x-main.story image="http://rockumweb.com/nestorrockum.jpg" class="carousel-cell w-full p-6">
          <x-slot:title class="mb-4">Title!</x-slot:title>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus reiciendis, doloremque voluptas praesentium tempore exercitationem earum voluptatem dolorem eligendi ad sit iusto delectus accusamus quo fuga totam hic sint ducimus.
        </x-main.story>
      </div>
    </x-section>
    <x-section class="my-4">
      <x-row>
        <x-col>
          <h2 class="font-new-rocker text-5xl mt-3 mb-2 mx-4">Latest news</h2>
          <x-row class="my-2 w-full flex-wrap content-baseline">
            <x-col class="basis-1/2">
              <x-story
                title="Cam Pipes from 3 Inches of Blood"
                image="https://rockumweb.com/3inchesINTERVIEWROCKUM.jpg"
                link="https://rockumweb.com/entrevista/128/cam-pipes-from-3-inches-of-blood-tour-secrets-more-exclusive-interview-rockum-tv-"
                class="my-2 bg-white border border-neutral-400 rounded-xl">
                Cam Pipes from 3 Inches of Blood: Tour Secrets & More | Exclusive Interview | Rockum TV
              </x-story>
            </x-col>
            <x-col class="basis-1/2">
              <x-story
                title="Cam Pipes from 3 Inches of Blood"
                image="https://rockumweb.com/3inchesINTERVIEWROCKUM.jpg"
                link="https://rockumweb.com/entrevista/128/cam-pipes-from-3-inches-of-blood-tour-secrets-more-exclusive-interview-rockum-tv-"
                class="my-2 bg-white border border-neutral-400 rounded-xl">
                Cam Pipes from 3 Inches of Blood: Tour Secrets & More | Exclusive Interview | Rockum TV
              </x-story>
            </x-col>
            <x-col class="basis-1/2">
              <x-story
                title="Cam Pipes from 3 Inches of Blood"
                image="https://rockumweb.com/3inchesINTERVIEWROCKUM.jpg"
                link="https://rockumweb.com/entrevista/128/cam-pipes-from-3-inches-of-blood-tour-secrets-more-exclusive-interview-rockum-tv-"
                class="my-2 bg-white border border-neutral-400 rounded-xl">
                Cam Pipes from 3 Inches of Blood: Tour Secrets & More | Exclusive Interview | Rockum TV
              </x-story>
            </x-col>
            <x-col class="basis-1/2">
              <x-story
                title="Cam Pipes from 3 Inches of Blood"
                image="https://rockumweb.com/3inchesINTERVIEWROCKUM.jpg"
                link="https://rockumweb.com/entrevista/128/cam-pipes-from-3-inches-of-blood-tour-secrets-more-exclusive-interview-rockum-tv-"
                class="my-2 bg-white border border-neutral-400 rounded-xl">
                Cam Pipes from 3 Inches of Blood: Tour Secrets & More | Exclusive Interview | Rockum TV
              </x-story>
            </x-col>
          </x-row>
        </x-col>
        <x-col class="w-[300px] flex-shrink-0">
          <div class="my-2 p-4 w-full bg-white">
            Sidebar
          </div>
          <div class="my-2 p-4 w-full bg-white">
            Sidebar
          </div>
          <div class="my-2 p-4 w-full bg-white">
            Sidebar
          </div>
          <div class="my-2 p-4 w-full bg-white">
            Sidebar
          </div>
        </x-col>
      </x-row>
    </x-section>
  </x-main>
</x-layout>