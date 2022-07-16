<x-app-layout>
   <x-slot name="header" class="flex items-center ">
      <a href="{{url('/')}}" class="uppercase font-semibold text-sm hover:underline hover:text-black hover:font-bold"><i
            class="fas fa-home"> </i></a>
      <span class="text-base font-bold mx-1">/</span>
      <a href="{{route('matieres.index')}}"
         class="text-base font-semibold uppercase hover:underline hover:text-black hover:font-bold">TP </a>
      <span class="text-base font-bold mx-1">/</span>
      <a href="" class="text-base font-semibold uppercase hover:underline hover:text-black hover:font-bold">Question
      </a>
      <span class="text-base font-bold mx-1">/</span>
      <a href="{{route('matieres.create')}}"
         class="text-base font-semibold uppercase hover:underline hover:text-black hover:font-bold">
         @if(!isset($matiere)) Ajoutéé question @else Mettre à jours @endif
      </a>

   </x-slot>

   <div class="text-md mt-3 mb-1">
      TP : <span class="font-bold text-gray-600 ">{{$tp->name}}</span> Pour les : <span
         class="font-bold text-gray-600 ">{{$tp->niveau->name}} {{$tp->matiere->name}}</span>
   </div>

   <div class="">
      <div class="">

         <div class="container mx-auto my-5 p-5">
            @if (!isset($question))
            @livewire('questions.create')
            @else
            @livewire('questions.edit', ['question' => $question], key($question->id))
            @endif


         </div>
      </div>
   </div>

</x-app-layout>