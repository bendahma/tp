<aside class="z-20 hidden w-64 overflow-y-auto bg-white md:block flex-shrink-0 shadow-sm rounded-sm">
   <div class="py-4">
      <a class="ml-6 flex justify-center text-lg  font-bold " href="{{ route('dashboard') }}">
         Dashboard
      </a>

      <ul class="mt-6">
         <div class="uppercase text-2xs font-bold py-3 px-2">
            Genarals
         </div>
         <li class="relative px-6 py-1">

            <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" target="blank">
               <x-slot name="icon">
                  <i class="fas fa-home text-xl"></i>
               </x-slot>
               {{ __('Dashboard') }}
            </x-nav-link>
         </li>
         <li class="relative px-6 py-1">
            <x-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
               <x-slot name="icon">
                  <i class="fas fa-globe text-xl "></i>
               </x-slot>
               {{ __('lang.Site') }}
            </x-nav-link>
         </li>
         @role('Enseignant')
         <div class="uppercase text-2xs font-bold py-1 px-2">
            Enseignement
         </div>
         <li class="relative px-6 py-1">
            <x-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
               <x-slot name="icon">
                  <i class="fas fa-book text-xl"></i>
               </x-slot>
               Les cours
            </x-nav-link>
         </li>
         <li class="relative px-6 py-1">
            <x-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
               <x-slot name="icon">
                  <i class="fas fa-microscope text-xl"></i>
               </x-slot>
               Travaux pratiques
            </x-nav-link>
         </li>
         @endrole
         @role('Super Admin')
         <div class="uppercase text-2xs font-bold py-1 px-2">
            Users
         </div>
         <li class="relative px-6 py-1">
            <x-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
               <x-slot name="icon">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                     </path>
                  </svg>
               </x-slot>
               {{ __('lang.Users') }}
            </x-nav-link>
         </li>
         @endrole


         {{-- <li class="relative px-6 py-3">
            <button
               class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
               @click="toggleMultiLevelMenu" aria-haspopup="true">
               <span class="inline-flex items-center">
                  <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                     <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                  </svg>
                  <span class="ml-4">Two-level menu</span>
               </span>
               <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                     d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                     clip-rule="evenodd"></path>
               </svg>
            </button>
            <template x-if="isMultiLevelMenuOpen">
               <ul x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                  aria-label="submenu">
                  <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                     <a class="w-full" href="#">Child menu</a>
                  </li>
               </ul>
            </template>
         </li> --}}
      </ul>
   </div>
</aside>