<!DOCTYPE html>
<html x-data="data" lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>Platform</title>

   <!-- Styles -->
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">

   @livewireStyles


</head>

<body>
   @include('sweetalert::alert')

   <div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen }">
      @include('layouts.navigation')
      @include('layouts.navigation-mobile')
      <div class="flex flex-col flex-1 w-full">
         @include('layouts.top-menu')
         <main class="h-full overflow-y-auto">
            <div class="container px-6 mx-auto grid">
               <h2 class="my-6 text-gray-700">
                  {{ $header }}
               </h2>

               {{ $slot }}
            </div>
         </main>
         @include('layouts.footer')
      </div>
   </div>
   @livewireScripts
   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>
   <script src="{{ asset('js/flowbite.bundle.js') }}" defer></script>
   <script src="{{ asset('js/init-alpine.js') }}"></script>
   {{-- <script src="{{ asset('node_modules\@themesberg\flowbite\dist\datepicker.bundle.js')}}"></script> --}}

</body>

</html>