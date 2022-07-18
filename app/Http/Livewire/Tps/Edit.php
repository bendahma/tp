<?php

namespace App\Http\Livewire\Tps;

use Livewire\Component;

use App\Models\Matiere ;
use App\Models\Niveau ;

class Edit extends Component
{
   public $tpCompnent ;
   public $name ,$numero_partie ,$user_id ,$matiere_id ,$niveau_id ;

   protected $rules = [
      'name' => 'required|string|max:255',
      'numero_partie' => 'required|integer|max:10',
      'user_id' => 'required|integer',
      'matiere_id' => 'required|integer',
      'niveau_id' => 'required|integer',
  ];


   public function mount($tp) {

      $this->tpCompnent = $tp ;
      $this->name = $this->tpCompnent->name ;
      $this->numero_partie =  $this->tpCompnent->numero_partie ;
      $this->matiere_id =  $this->tpCompnent->matiere_id ;
      $this->niveau_id =  $this->tpCompnent->niveau_id ;
     
   }

   public function updateTP(){
      $this->tpCompnent->update([
         'name' => $this->name,
         'numero_partie' => $this->numero_partie,
         'user_id' => auth()->user()->id,
         'matiere_id' => $this->matiere_id,
         'niveau_id' => $this->niveau_id,
      ]);
      return redirect()->route('tp.index');
   }
    public function render()
    {
      $matieres = Matiere::all();
      $niveaux = Niveau::all() ;
      return view('livewire.tps.edit', compact(['matieres','niveaux']));
    }
}
