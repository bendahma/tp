<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matiere ;
use App\Models\Niveau ;
use App\Models\Annee ;
use App\Models\Traveau ;
use App\Models\Cours ;

class FrontController extends Controller
{
    public function index(){
       return view('welcome') ;
    }
    
    public function matiere(){
      $matieres = Matiere::all() ; 
      return view('front.matiere' , compact('matieres')) ;
    }

    public function annee(Matiere $matiere){
      $niveaux = Niveau::all() ; 
      return view('front.annee' , compact(['matiere','niveaux'])) ;
    }

    public function  cours(Matiere $matiere,Niveau $niveau){

      $cours = Cours::where('matiere_id',$matiere->id)->where('niveau_id',$niveau->id)->get() ;
      return view('front.cours',compact('cours')) ;
   }

    public function  downloadCours(Cours $cour){

      // 
      
   }

    public function  traveaux_pratqiues(){
      $tps = Traveau::with(['matiere','niveau','cour','user'])->get() ;
      return view('front.tp',compact('tps')) ;
    }
    
    public function  about(){

    }
    
    public function contact() {

    }
}
