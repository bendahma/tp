<div>
<<<<<<< HEAD
    <div class="md:flex no-wrap md:-mx-2 ">
        <form wire:submit.prevent="saveNewMatiere">
             @csrf
            <div class="w-full justify-center  mx-2 h-64">
                <div class="bg-white p-3 shadow-lg rounded-lg">        
                    <div class="text-gray-700 flex justify-center w-full">
                        <div class="w-full flex flex-col justify-center text-sm">
                        <div class="w-full flex items-center">
                            <div class="w-1/3 px-4 py-2 font-semibold">Nom matière</div>
                            <div class="px-4 py-2 flex flex-col">
                                <input type="text" class="w-full rounded-lg font-semibold px-4 py-2" wire:model="name" placeholder="Exp: Physique">
                                @error('name') <span class="text-red-700 font-bold text-sm my-1">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-1 my-3">
                            <x-button type="submit">Enregistre</x-button>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>
    </form>
</div>
 </div>
=======
    {{-- Because she competes with no one, no one can compete with her. --}}
</div>
>>>>>>> 3cb14510a7fa4a1cf023b7f0c55f7d0d40c0d72c
