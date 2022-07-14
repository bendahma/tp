<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use App\Http\Requests\StoreMatiereRequest;
use App\Http\Requests\UpdateMatiereRequest;

class AnneeController extends Controller
{
    public function index()
    {
        return view('admin.annee.index');
    }

    public function create()
    {
        return view('admin.annee.create');
    }

   
    public function edit(Annee $annee)
    {
         return view('admin.annee.create')->with('annee',$annee);
    }

   
    public function destroy(Annee $annee)
    {
        $annee->delete() ;
        toast('Année scolaire supprime avec success','success') ;
        return redirect()->back();
    }
}
