<?php

namespace App\Http\Livewire\Tps;

use Livewire\Component;

class Edit extends Component
{
   public $tpCompnent ;
   public  $name ,$numero_partie ,$user_id ,$matiere_id ,$niveau_id ;

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
   }

   public function updateTP(){
      $this->tpCompnent->update([
         'name' => $this->name,
         'numero_partie' => $this->numero_partie,
         'user_id' => $this->user_id,
         'matiere_id' => $this->matiere_id,
         'niveau_id' => $this->niveau_id,
      ]);

      toast('TP mettre à jours avec success','success');

      return redirect()->route('tp.index');
   }
    public function render()
    {
        return view('livewire.tp.edit');
    }
}
