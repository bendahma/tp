<div>
   <div class="w-full flex items-center">
      <div class="px-4 py-2 font-semibold">Question :</div>
      <div class="px-4 py-2 flex w-2/3">
         <input type="text" class="w-3/4 rounded-lg font-semibold px-4 py-2 mx-4" wire:model="name" placeholder="">
         <select class="w-1/4 rounded-lg font-semibold px-4 py-2" wire:model="">
            <option selected>Partie </option>
         </select>
      </div>
      <x-button type="submit" class="">Ajouter</x-button>
      <a class="px-4 py-2 text-sm font-medium leading-5 text-center
      text-white bg-red-600 border border-transparent rounded-lg 
      hover:bg-red-700 focus:outline-none focus:ring mx-3" href="">Télécharger TP</a>
   </div>
</div>