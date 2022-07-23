<x-app-layout>
   <x-slot name="header">
      {{ __('Dashboard') }}
   </x-slot>

   @role ('Super Admin')
   @if (isset($data) && !is_null($data))
   <br><br>
   <div class="w-full flex gap-x-10">
      <div class="bg-red-400 rounded-lg shadow-xl w-1/4 h-24 text-centerflex justify-center items-center">
         <div class="h-full font-semibold flex items-center justify-center px-4">
            Les Messages Non Lu : <span class="font-bold text-2xl mx-6"> {{$data['messageNonLu']}} </span>
         </div>
      </div>
      <div class="bg-gray-300 rounded-lg shadow-xl w-1/4 h-24 text-centerflex justify-center items-center">
         <div class="h-full font-semibold flex items-center justify-center px-4">
            Les Messages : <span class="font-bold text-2xl mx-6"> {{$data['messageCount']}} </span>
         </div>
      </div>

      <div class="bg-blue-400 rounded-lg shadow-xl w-1/4 h-24 text-centerflex justify-center items-center">
         <div class="h-full font-semibold flex items-center justify-center px-4">
            Les Matières : <span class="font-bold text-2xl mx-6"> {{$data['MatiereCount']}} </span>
         </div>
      </div>
      <div class="bg-yellow-300 rounded-lg shadow-xl w-1/4 h-24 text-centerflex justify-center items-center">
         <div class="h-full font-semibold flex items-center justify-center px-4">
            Les Années : <span class="font-bold text-2xl mx-6"> {{$data['AnneeCount']}} </span>
         </div>
      </div>
   </div>
   <br><br>
   <div class="w-full flex gap-x-10">
      <div class="bg-green-300 rounded-lg shadow-xl w-1/4 h-24 text-centerflex justify-center items-center">
         <div class="h-full font-semibold flex items-center justify-center px-4">
            Les TP publié : <span class="font-bold text-2xl mx-6"> {{$data['tpCount']}} </span>
         </div>
      </div>
      <div class="bg-red-300 rounded-lg shadow-xl w-1/4 h-24 text-centerflex justify-center items-center">
         <div class="h-full font-semibold flex items-center justify-center px-4">
            Les TP non validé: <span class="font-bold text-2xl mx-6"> {{$data['tpNonValide']}} </span>
         </div>
      </div>
      <div class="bg-blue-300 rounded-lg shadow-xl w-1/4 h-24 text-centerflex justify-center items-center">
         <div class="h-full font-semibold flex items-center justify-center px-4">
            Les Cours publié : <span class="font-bold text-2xl mx-6"> {{$data['coursCount']}} </span>
         </div>
      </div>
      <div class="bg-purple-300 rounded-lg shadow-xl w-1/4 h-24 text-centerflex justify-center items-center">
         <div class="h-full font-semibold flex items-center justify-center px-4">
            Les Cours non validé: <span class="font-bold text-2xl mx-6"> {{$data['coursNonValide']}} </span>
         </div>
      </div>
   </div>
   <br><br>
   <div class="w-full flex gap-x-10">
      <div class="bg-pink-300 rounded-lg shadow-xl w-1/4 h-24 text-centerflex justify-center items-center">
         <div class="h-full font-semibold flex items-center justify-center px-4">
            Les enseignants : <span class="font-bold text-2xl mx-6"> {{$data['enseignant']}} </span>
         </div>
      </div>
      <div class="bg-cool-gray-300 rounded-lg shadow-xl w-1/4 h-24 text-centerflex justify-center items-center">
         <div class="h-full font-semibold flex items-center justify-center px-4">
            Les eleves: <span class="font-bold text-2xl mx-6"> {{$data['eleves']}} </span>
         </div>
      </div>
      <div class="bg-transparent rounded-lg  w-1/4 h-24 text-centerflex justify-center items-center">
         <div class="h-full font-semibold flex items-center justify-center px-4">
            {{-- Les Cours publié : <span class="font-bold text-2xl mx-6"> {{$data['coursCount']}} </span> --}}
         </div>
      </div>
      <div class="bg-transparent rounded-lg  w-1/4 h-24 text-centerflex justify-center items-center">
         <div class="h-full font-semibold flex items-center justify-center px-4">
            {{-- Les Cours non validé: <span class="font-bold text-2xl mx-6"> {{$data['coursNonValide']}} </span> --}}
         </div>
      </div>
   </div>
   <br><br>

   @endif

   @endrole

</x-app-layout>