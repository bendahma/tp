<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Http\Requests\StoreCoursRequest;
use App\Http\Requests\UpdateCoursRequest;

class CoursController extends Controller
{
    
   public function index()
   {
       return view('admin.cours.index');
   }

   public function create()
   {
       return view('admin.cours.create');
   }

   public function edit(Cours $cours)
   {
        return view('admin.cours.create')->with('cours',$cours);
   }
   
   public function destroy(Cours $cours)
   {
       $cours->delete() ;
       toast('Le cours à été supprime avec success','success') ;
       return redirect()->back();
   }
}
