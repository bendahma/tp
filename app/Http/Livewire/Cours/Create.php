<?php

namespace App\Http\Livewire\Cours;

use Livewire\Component;

use App\Models\Cours ;
use App\Models\Matiere ;
use App\Models\Niveau ;

class Create extends Component
{
   public  $name , $matiere_id ,$niveau_id ;

   protected $rules = [
      'name' => 'required|string|max:255',
  ];

   public function saveNewCours(){

      $this->validate();

      $cours = Cours::create([
         'name' => $this->name,
         'matiere_id' => $this->matiere_id ,
         'niveau_id' => $this->niveau_id ,
         'user_id' => auth()->user()->id,
      ]);

      toast('Nouveau cours ajouté avec success','success');

      return redirect()->route('cours.index');
   }

   public function render()
   {
      $matieres = Matiere::all(); 
      $niveaux = Niveau::all(); 
      return view('livewire.cours.create',compact(['matieres','niveaux']));
   }
}
