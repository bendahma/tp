<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use App\Http\Requests\StoreMatiereRequest;
use App\Http\Requests\UpdateMatiereRequest;

class MatiereController extends Controller
{
   
    public function index()
    {
        return view('admin.matieres.index');
    }

    public function create()
    {
        return view('admin.matieres.create');
    }

    public function edit(Matiere $matiere)
    {
         return view('admin.matieres.create')->with('matiere',$matiere);
    }
    
    public function destroy(Matiere $matiere)
    {
        $matiere->delete() ;
        toast('Matière supprime avec success','success') ;
        return redirect()->back();
    }
}
