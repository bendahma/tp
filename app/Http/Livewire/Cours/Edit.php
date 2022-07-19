<?php

namespace App\Http\Livewire\Cours;

use Livewire\Component;
use App\Models\Cours ;
use App\Models\Matiere ;
use App\Models\Niveau ;

class Edit extends Component
{
   public $coursCompnent, $n ,$m ;
   public  $name , $matiere_id ,$niveau_id ;

   public function mount($cours) {

      $this->coursCompnent = $cours ;

      $this->name = $this->coursCompnent->name ;
      $this->n = $this->coursCompnent->niveau_id ;
      $this->m = $this->coursCompnent->matiere_id ;
   }

   public function updateCours(){
      $this->coursCompnent->update([
         'name' => $this->name ,
         'matiere_id' => $this->matiere_id ,
         'niveau_id' => $this->niveau_id ,
         'user_id' => auth()->user()->id,
      ]);

      toast('Mise à jours avec success','success');

      return redirect()->route('cours.index');
   }
    public function render()
    {
      $matieres = Matiere::all(); 
      $niveaux = Niveau::all(); 
      return view('livewire.cours.edit',compact(['matieres','niveaux']));
    }
}
