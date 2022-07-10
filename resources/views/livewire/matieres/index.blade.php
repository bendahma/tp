<div class="">

    <div class="flex justify-between items-center w-full">
       <div class="flex gap-x-3">
 
          <div class="">
             <a data-tooltip-target="tooltip-default" href="{{route('matieres.create')}}"
                class="text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-2 focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800">
                <i class="fas fa-plus "></i>
             </a>
             <div id="tooltip-default" role="tooltip"
                class="z-50 inline-block absolute invisible py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                Nouveau Matiere
                <div class="tooltip-arrow" data-popper-arrow></div>
             </div>
          </div>
<<<<<<< HEAD
=======
 
          {{-- Filters --}}
          <div x-data="{ openFilter: false }" class="flex gap-x-3">
             <div id="tooltip-filter" role="tooltip"
                class="z-50 inline-block absolute invisible py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                Filtre
                <div class="tooltip-arrow" data-popper-arrow></div>
             </div>
             <button data-tooltip-target="tooltip-filter" x-on:click="openFilter = ! openFilter"
                wire:click="resetAttribute()"
                class="text-orange-700 border border-orange-700 hover:bg-orange-700 hover:text-white focus:ring-2 focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800">
                <i class="fas fa-filter"></i>
             </button>
             <div x-show="openFilter" class="flex gap-x-3">
                <select wire:model="columName" id=""
                   class=" text-sm rounded-lg w-36 focus:ring-blue-500 focus:border-blue-500 block p-1.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                   <option selected disabled value="">Select column</option>
                   <option value="name">Nom Matiere</option>
                   
                </select>
                @if (!empty($column_data_collection))
                <select wire:model="columnValue" id=""
                   class=" text-sm rounded-lg focus:ring-blue-500 w-36 focus:border-blue-500 block p-1.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                   <option selected value="">All</option>
                   @foreach ($column_data_collection as $data)
                   <option value="{{$data[$attributeName]}}">{{$data[$attributeName] == 1 ? 'suspendu' :
                      ($data[$attributeName] == 0 ? 'Active' : $data[$attributeName] )}}</option>
                   @endforeach
                </select>
                @endif
             </div>
          </div>
          {{-- Sort --}}
          <div x-data="{ openSort: false }" class="flex gap-x-3">
             <div id="tooltip-order" role="tooltip"
                class="z-50 inline-block absolute invisible py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                {{__("lang.order")}}
                <div class="tooltip-arrow" data-popper-arrow></div>
             </div>
 
             <button data-tooltip-target="tooltip-order" x-on:click="openSort = ! openSort" wire:click="resetSort()"
                class="text-indigo-700 border border-indigo-700 hover:bg-indigo-700 hover:text-white focus:ring-2 focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800">
                <i class="fas fa-sort-amount-down"></i>
             </button>
             <div x-show="openSort" class="flex gap-x-3">
                <select wire:model="column"
                   class="text-sm  rounded-lg focus:ring-blue-500 w-36 focus:border-blue-500 block p-1.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                   <option value="name">Nom Matiere</option>                 
                </select>
                <select wire:model="trieePar"
                   class="bg-gray-50 border text-sm rounded-lg w-36 focus:ring-blue-500 focus:border-blue-500 block p-1.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                   required>
                   <option value="ASC">De plus A à Z</option>
                   <option value="DESC">De plus Z à A</option>
                </select>
             </div>
          </div>
>>>>>>> 3cb14510a7fa4a1cf023b7f0c55f7d0d40c0d72c
       </div>
       <div class=" w-1/4 flex-wrap items-stretch">
          <input type="text" class="justify-end my-1 py-2 w-full rounded-lg bg-gray-50 text-sm font-semibold "
             placeholder="Recherche ..." wire:model="search">
       </div>
 
    </div>
 
<<<<<<< HEAD
    <div class="my-3 bg-gray-50 shadow-xs w-1/2 rounded-lg border shadow-xs mx-auto shadow-lg">
       <div class="overflow-x-auto w-full">
          <table class="">
=======
    <div class="my-3 bg-white shadow-xs w-full rounded-lg border shadow-xs">
       <div class="overflow-x-auto w-full">
          <table class="whitespace-no-wrap ">
>>>>>>> 3cb14510a7fa4a1cf023b7f0c55f7d0d40c0d72c
             <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-50 border-b">
                   <th class="px-4 py-3">N°</th>
                   <th class="px-4 py-3">Nom Matière</th>
                   <th class="px-4 py-3"></th>
                   
                </tr>
             </thead>
             <tbody class="bg-white divide-y">

                @forelse($matieres as $matiere)
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 text-sm">
                            {{ $loop->iteration }}
                        </td>
                        <td class="px-4 py-3 text-sm">
<<<<<<< HEAD
                            {{$matiere->name}}
=======
                            
>>>>>>> 3cb14510a7fa4a1cf023b7f0c55f7d0d40c0d72c
                        </td>
                    </tr>
                @empty
                    <tr >
                        <td colspan="3" class="w-full">
                           <span class="w-full justify-center font-bold h-10 text-center"> Aucun matière exites pour le moments </span> 
                        </td>
                    </tr>
                @endforelse
             </tbody>
          </table>
 
       </div>
       <div
          class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase bg-gray-50 border-t sm:grid-cols-9">
          {{ $matieres->links() }}
       </div>
    </div>
 
 </div>