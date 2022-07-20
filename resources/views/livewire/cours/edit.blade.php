<div>
   <div class="md:flex w-full ">
      <form wire:submit.prevent="updateCours" class="w-2/3 mx-auto">
         @csrf

         <div class="w-full justify-center  mx-2 h-64">
            <div class="bg-white p-3 shadow-lg rounded-lg">
               <div class="text-gray-700 flex justify-center w-full">

                  <table>
                     <thead></thead>
                     <tbody>
                        <tr>
                           <td>
                              <div class="px-4 py-2 font-semibold">Titre cours</div>
                           </td>
                           <td class="py-2">

                              <input type="text" class="w-full rounded-lg font-semibold px-4 py-2" wire:model="name">

                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="px-4 py-2 font-semibold">Matière du cours</div>
                           </td>
                           <td class="pt-2">
                              <select class="w-full rounded-lg font-semibold px-4 py-2" wire:model="matiere_id">
                                 @foreach ($matieres as $matiere)
                                 <option value="{{$matiere->id}}" {{ $matiere->id == $m ? 'selected' : '' }}>
                                    {{$matiere->name}} </option>
                                 @endforeach
                              </select>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="px-4 py-2 font-semibold">Année scholaire</div>
                           </td>
                           <td class="pt-2">
                              <select class="w-full rounded-lg font-semibold px-4 py-2" wire:model="niveau_id">
                                 @foreach ($niveaux as $niveau)
                                 <option value="{{$niveau->id}}" {{ $niveau->id == $n ? 'selected' : ''}}>
                                    {{$niveau->name}}
                                 </option>
                                 @endforeach
                              </select>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="px-4 py-2 font-semibold">Fichier du cours</div>
                           </td>
                           <td class="py-1"><input type="file" class="w-full rounded-lg font-semibold px-4 py-2"
                                 wire:model="file">
                           </td>
                        </tr>
                        <tr>
                           <td> </td>
                           <td>
                              <x-button type="submit" class="">Mettre à jours</x-button>
                           </td>
                        </tr>
                     </tbody>
                  </table>



               </div>
            </div>

         </div>
      </form>
   </div>
</div>