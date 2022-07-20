<div>
   <div class="md:flex w-full ">
      <form wire:submit.prevent="updateTP" class="w-2/3 mx-auto">
         @csrf
         <div class="w-full justify-center  mx-2 h-64">
            <div class="bg-white p-3 shadow-lg rounded-lg">
               <div class="flex flex-col text-gray-700 justify-center w-full">

                  <table>
                     <thead>
                        <th></th>
                     </thead>
                     <tbody>
                        <tr>
                           <td>
                              <div class="px-4 py-2 font-semibold">Titre TP</div>
                           </td>
                           <td>
                              <input type="text" class="w-full rounded-lg font-semibold px-4 py-2" wire:model="name"
                                 placeholder="">
                           </td>
                        </tr>
                        <tr class="my-4">
                           <td>
                              <div class="px-4 py-2 font-semibold">Nombre des parties</div>
                           </td>
                           <td>
                              <input type="text" class="w-full rounded-lg font-semibold px-4 py-2"
                                 wire:model="numero_partie" placeholder="">
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="px-4 py-2 font-semibold">Niveau scolaire</div>
                           </td>
                           <td>
                              <select class="w-full rounded-lg font-semibold px-4 py-2" wire:model="niveau_id">
                                 <option selected> Niveau scolaire </option>
                                 @foreach ($niveaux as $niveau)
                                 <option value="{{$niveau->id}}" {{ $niveau->id == $niveau_id ? 'selected' : '' }} >
                                    {{$niveau->name}} </option>
                                 @endforeach
                              </select>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="px-4 py-2 font-semibold">Matiere</div>
                           </td>
                           <td class="my-2">
                              <select class="w-full rounded-lg font-semibold px-4 py-2" wire:model="matiere_id">
                                 <option selected> Matière </option>
                                 @foreach ($matieres as $matiere)
                                 <option value="{{$matiere->id}}" {{ $matiere_id==$matiere->id ? 'selected' : '' }}>
                                    {{$matiere->name}}
                                 </option>
                                 @endforeach

                              </select>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="px-4 py-2 font-semibold">Enoncé</div>
                           </td>
                           <td class="my-2">
                              <textarea class="w-full rounded-lg font-semibold px-4 py-2" cols="15"
                                 wire:model="body"> </textarea>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="px-4 py-2 font-semibold">Image </div>
                           </td>
                           <td class="my-2">
                              <img src="" alt="">
                           </td>
                        </tr>
                        <tr class="">
                           <td class="justify-center">
                              <x-button type="submit" class="flex mr-0"> Mettre à jours </x-button>
                           </td>
                           <td class="flex justify-end mt-4">

                              <a href="{{route('question.addQuestion',$tpCompnent->id)}}" class="px-4 py-2 text-sm font-medium leading-5 text-center
                              text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600
                              hover:bg-red-700 focus:outline-none focus:ring">Les question <i
                                    class="fas fa-angle-double-right"></i>
                              </a>
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