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
    <x-main.story image="http://rockumweb.com/nestorrockum.jpg">
      <x-slot:title class="mb-4">Title!</x-slot:title>
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus reiciendis, doloremque voluptas praesentium tempore exercitationem earum voluptatem dolorem eligendi ad sit iusto delectus accusamus quo fuga totam hic sint ducimus.
    </x-main.story>
  </x-main>
</x-layout>