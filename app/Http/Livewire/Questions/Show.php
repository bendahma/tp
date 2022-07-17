<?php

namespace App\Http\Livewire\Questions;

use Livewire\Component;

use App\Models\QUestion ;

class Show extends Component
{
   public $tp ;

   protected $listeners = ['render'=>"render"];

   public function mount($tp) {
      $this->tp = $tp ;
   }


    public function render()
    {
        $questions = Question::where('traveau_id',$this->tp->id)->get()->groupBy('partie') ;

        return view('livewire.questions.show',compact('questions'));
    }
}
