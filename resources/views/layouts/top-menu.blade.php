<header class="z-10 py-4 shadow-sm bg-gray-50">
   <div class="container flex justify-end items-center px-6 mx-auto h-full text-purple-600 md:justify-end">
      <!-- Mobile hamburger -->
      <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
         @click="toggleSideMenu" aria-label="Menu">
         <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
               d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
               clip-rule="evenodd"></path>
         </svg>
      </button>
      {{-- User settings --}}
      <x-dropdown>
         <x-slot name="trigger">
            <button
               class="inline-flex  items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md align-middle focus:shadow-outline-purple focus:outline-none"
               @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
               <i class="far fa-user mr-2 text-lg"></i>
               {{ Auth::user()->name }}
            </button>
         </x-slot>
         <x-slot name="content">
            <div class=" " x-show="isProfileMenuOpen">
               <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                  x-transition:leave-end="opacity-0" @click.outside="closeProfileMenu"
                  @keydown.escape="closeProfileMenu"
                  class="absolute right-0 p-2 mt-2 space-y-2 text-gray-600 bg-white rounded-md border border-gray-100 shadow-md"
                  aria-label="submenu">
                  <form method="POST" action="{{ route('logout') }}">
                     @csrf
                     <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        <x-slot name="icon">
                           <svg class="mr-3 w-4 h-4" aria-hidden="true" fill="none" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                              <path
                                 d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                              </path>
                           </svg>
                        </x-slot>
                        {{ __('Log Out') }}
                     </x-dropdown-link>
                  </form>
               </ul>
            </div>

         </x-slot>
      </x-dropdown>



   </div>
</header>