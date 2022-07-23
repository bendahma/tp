<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Traveau ; 
use App\Models\Cours;
use App\Models\Matiere;
use App\Models\Niveau; 
use App\Models\Annee; 
use App\Models\Message; 

class DashboardController extends Controller
{
    public function index(){

      $tpCount = Traveau::count() ;
      $tpNonValide = Traveau::where('validated',false)->count() ;
      $coursCount = Cours::count() ;
      $coursNonValide = Cours::where('validated',false)->count() ;
      $MatiereCount = Matiere::count() ;
      $AnneeCount = Niveau::count() ;
      $messageCount = Message::count() ;
      $messageNonLu = Message::where('read',false)->count() ;
     
      $data = [
         'tpCount' => $tpCount ,
         'tpNonValide' => $tpNonValide ,
         'coursCount' => $coursCount ,
         'coursNonValide' => $coursNonValide ,
         'MatiereCount' => $MatiereCount ,
         'AnneeCount' => $AnneeCount ,
         'messageCount' => $messageCount ,
         'messageNonLu' => $messageNonLu ,
      ] ;

      switch ( auth()->user()->getRoleNames()[0]) {
               case 'Super Admin':
                  return view('admin.dashboard.index' , compact('data') );
                  break;
               case 'Enseignant':
                  return view('admin.dashboard.index' );
                  break;
               case 'Eleve':
                  return redirect(url('/'));
                  break;
               default:
                  return view('welcome' );
                  break;
            }
       
    }
}
