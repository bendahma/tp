<?php

namespace App\Http\Livewire\Matieres;

use Livewire\Component;

class Edit extends Component
{
   public $matiereCompnent,$name ;

   public function mount($matiere) {
      $this->matiereCompnent = $matiere ;
      $this->name = $this->matiereCompnent->name ;
   }

   public function updateMatiere(){
      $this->matiereCompnent->update([
         'name' => $this->name ,
      ]);

      toast('Nouvelle matière ajouté avec success','success');

      return redirect()->route('matieres.index');
   }
    public function render()
    {
        return view('livewire.matieres.edit');
    }
}
