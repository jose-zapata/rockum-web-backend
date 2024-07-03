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
    <x-container class="bg-white p-6 max-w-7xl">
      <div data-flickity='{ "cellAlign": "left", "percentPosition": false, "prevNextButtons": false, "autoPlay": true }' class="mb-6 w-full">
        <x-main.story image="http://rockumweb.com/nestorrockum.jpg" class="carousel-cell w-full">
          <x-slot:title class="mb-4">Title!</x-slot:title>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus reiciendis, doloremque voluptas praesentium tempore exercitationem earum voluptatem dolorem eligendi ad sit iusto delectus accusamus quo fuga totam hic sint ducimus.
        </x-main.story>
        <x-main.story image="http://rockumweb.com/nestorrockum.jpg" class="carousel-cell w-full">
          <x-slot:title class="mb-4">Title!</x-slot:title>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus reiciendis, doloremque voluptas praesentium tempore exercitationem earum voluptatem dolorem eligendi ad sit iusto delectus accusamus quo fuga totam hic sint ducimus.
        </x-main.story>
        <x-main.story image="http://rockumweb.com/nestorrockum.jpg" class="carousel-cell w-full">
          <x-slot:title class="mb-4">Title!</x-slot:title>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus reiciendis, doloremque voluptas praesentium tempore exercitationem earum voluptatem dolorem eligendi ad sit iusto delectus accusamus quo fuga totam hic sint ducimus.
        </x-main.story>
        <x-main.story image="http://rockumweb.com/nestorrockum.jpg" class="carousel-cell w-full">
          <x-slot:title class="mb-4">Title!</x-slot:title>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus reiciendis, doloremque voluptas praesentium tempore exercitationem earum voluptatem dolorem eligendi ad sit iusto delectus accusamus quo fuga totam hic sint ducimus.
        </x-main.story>
      </div>
    </x-container>
    <x-container class="my-4 max-w-7xl">
      <x-container class="flex -mx-2">
        <x-container class="bg-white p-4 mx-2 flex-grow">Main</x-container>
        <x-container class="mx-2 w-[300px] box-content">
          <x-container class="mb-4 bg-white">
            Sidebar
          </x-container>
          <x-container class="my-4 bg-white">
            Sidebar
          </x-container>
          <x-container class="my-4 bg-white">
            Sidebar
          </x-container>
          <x-container class="my-4 bg-white">
            Sidebar
          </x-container>
        </x-container>
      </x-container>
    </x-container>
  </x-main>
</x-layout>