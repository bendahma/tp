<?php

namespace App\Http\Livewire\Tps;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Models\Traveau ;
use App\Models\Matiere ;
use App\Models\Niveau ;

class Create extends Component
{
   use WithFileUploads, AuthorizesRequests;

   public  $name,$body ,$numero_partie ,$user_id ,$matiere_id ,$niveau_id ,$image ,$image_show = null ;

//    protected $rules = [
//       'name' => 'required|string|max:255',
//       'numero_partie' => 'required|integer|max:10',
//       'user_id' => 'required|integer',
//       'matiere_id' => 'required|integer',
//       'niveau_id' => 'required|integer',
//   ];

  public function mount(){
     
  }

  public function updatedImage(){
      
   $this->validate([
      'image' => 'image|max:2048', // 2MB Max
   ]);

   $this->image_show = $this->image->store('tp','public');
   
}

   public function saveNewTP(){


      // $this->validate();

      $tp = Traveau::create([
         'name' => $this->name,
         'body' => $this->body,
         'image' => $this->image_show ,
         'numero_partie' => $this->numero_partie,
         'user_id' => auth()->user()->id,
         'matiere_id' => $this->matiere_id,
         'niveau_id' => $this->niveau_id,
      ]);

      return redirect()->route('question.addQuestion',compact('tp'));
   }

   public function render()
   {
      $matieres = Matiere::all();
      $niveaux = Niveau::all() ;
      return view('livewire.tps.create', compact(['matieres','niveaux']));
   }
}
