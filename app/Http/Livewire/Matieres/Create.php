<?php

namespace App\Http\Livewire\Matieres;

use Livewire\Component;

<<<<<<< HEAD
use App\Models\Matiere ;

class Create extends Component
{
   public  $name ;

   protected $rules = [
      'name' => 'required|string|max:255',
  ];

   public function saveNewMatiere(){

      $this->validate();

      $matiere = Matiere::create([
         'name' => $this->name,
      ]);

      toast('Nouvelle matière ajouté avec success','success');

      return redirect()->route('matieres.index');
   }

   public function render()
   {
      return view('livewire.matieres.create');
   }
=======
class Create extends Component
{
    public function render()
    {
        return view('livewire.matieres.create');
    }
>>>>>>> 3cb14510a7fa4a1cf023b7f0c55f7d0d40c0d72c
}
