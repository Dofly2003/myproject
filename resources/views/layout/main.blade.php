<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Jp Books | {{$title}} </title>
</head>
<body class="h-full ">
<div class="min-h-full">
    <nav class="sticky top-0  bg-white " x-data="{ isOpen: false }">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center bg-white justify-between">
          <div class="flex items-center">
            <div class="flex-shrink-0 ">
              <a href="/">
                <img class="w-40" src="https://jpbooks.co.id/files/upload/logo-utama.png" alt="Jp Books">
              </a>
            </div>
            <div class="hidden md:block">
            </div>
          </div>
          <div class="hidden md:block">
            <div class="ml-4  flex items-center md:ml-6">
              <div class="ml-10 flex items-baseline space-x-4 border-b-2">
                <a href="/" class=" rounded-md px-3 py-2 text-sm font-medium text-gray-700  hover:text-gray-900" aria-current="page">
                  Beranda
                </a>
                <a href="/katalog" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700  hover:text-gray-900 ">
                  Katalog
                </a>
                <a href="/tentang-kami" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700  hover:text-gray-900 ">
                  Tentang Kami
                </a>
                <a href="/kontak" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700  hover:text-gray-900">
                  Kontak
                </a>
              </div>
            </div>
          </div>
          <div class="-mr-2 flex md:hidden">
            <!-- Mobile menu button -->
            <button @click="isOpen = !isOpen" type="button" class="relative inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <!-- Menu open: "hidden", Menu closed: "block" -->
              <svg :class="{ 'hidden' : isOpen, 'block' : !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!-- Menu open: "block", Menu closed: "hidden" -->
              <svg :class="{ 'block' : isOpen, 'hidden' : !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>
  
      <!-- Mobile menu, show/hide based on menu state. -->
      <div x-show="isOpen"
      x-transition:enter="transition ease-out duration-100 transform"
      x-transition:enter-start="opacity-0 scale-95"
      x-transition:enter-end="opacity-100 scale-100"
      x-transition:leave="transition ease-in duration-75 transform"
      x-transition:leave-start="opacity-100 scale-100"
      x-transition:leave-end="opacity-0 scale-95" 
       class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3 bg-white">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="/katalog" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700  hover:text-gray-500">Beranda</a>
          <a href="/katalog" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700  hover:text-gray-500">Katalog</a>
          <a href="/tentang-kami" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700  hover:text-gray-500">Tentang Kami</a>
          <a href="/kontak" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700  hover:text-gray-500">Kontak</a>
        </div>
      </div>
    </nav>
  
    <header class="bg-white shadow">
      <div class=" ">
        @yield('container')
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
      </div>
    </main>
  </div>
  
</body>
</html>