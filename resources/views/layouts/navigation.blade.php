<aside class="z-20 hidden w-64 overflow-y-auto bg-white md:block flex-shrink-0 shadow-sm rounded-sm">
   <div class="py-4">
      <a class="ml-6 flex justify-center text-lg  font-bold " href="{{ route('dashboard') }}">
         Dashboard
      </a>

      <ul class="mt-6">
         <div class="uppercase text-2xs font-bold py-3 px-2">
            Genarale
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
            <x-nav-link href="{{ route('cours.index') }}" :active="request()->routeIs('cours.index')">
               <x-slot name="icon">
                  <i class="fas fa-book text-xl"></i>
               </x-slot>
               Les cours
            </x-nav-link>
         </li>
         <li class="relative px-6 py-1">
            <x-nav-link href="{{ route('tp.index') }}" :active="request()->routeIs('tp.index')">
               <x-slot name="icon">
                  <i class="fas fa-microscope text-xl"></i>
               </x-slot>
               Travaux pratiques
            </x-nav-link>
         </li>
         @endrole

         @role('Super Admin')
         <div class="uppercase text-2xs font-bold py-3 px-2">
            Education
         </div>
         <li class="relative px-6 py-1">
            <x-nav-link href="{{ route('tp.index') }}" :active="request()->routeIs('tp.index')">
               <x-slot name="icon">
                  <i class="fas fa-microscope text-xl"></i>
               </x-slot>
               Traveau Pratique
            </x-nav-link>
         </li>
         <li class="relative px-6 py-1">
            <x-nav-link href="{{ route('matieres.index') }}" :active="request()->routeIs('matieres.index')">
               <x-slot name="icon">
                  <i class="fas fa-book-open text-xl"></i>
               </x-slot>
               Matière
            </x-nav-link>
         </li>
         <li class="relative px-6 py-1">
            <x-nav-link href="{{ route('annee.index') }}" :active="request()->routeIs('annee.index')">
               <x-slot name="icon">
                  <i class="fas fa-calendar-day text-xl"></i>
               </x-slot>
               Année scolaire
            </x-nav-link>
         </li>
         <li class="relative px-6 py-1">
            <x-nav-link href="{{ route('niveau.index') }}" :active="request()->routeIs('niveau.index')">
               <x-slot name="icon">
                  <i class="fas fa-school text-xl"></i>
               </x-slot>
               Niveau scolaire
            </x-nav-link>
         </li>

         <div class="uppercase text-2xs font-bold py-3 px-2">
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
      </ul>
   </div>
</aside>