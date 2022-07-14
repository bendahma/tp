<?php

namespace App\Http\Livewire\Niveaux;

use Livewire\Component;

class Edit extends Component
{
   public $niveauCompnent,$name ;

   public function mount($niveau) {
      $this->niveauCompnent = $niveau ;
      $this->name = $this->niveauCompnent->name ;
   }

   public function updateniveau(){
      $this->niveauCompnent->update([
         'name' => $this->name ,
      ]);

      toast('Nouvelle niveau scolaire ajouté avec success','success');

      return redirect()->route('niveau.index');
   }
    public function render()
    {
        return view('livewire.niveaus.edit');
    }
}
