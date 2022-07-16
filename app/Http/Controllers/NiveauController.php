<?php

namespace App\Http\Controllers;

use App\Models\Niveau;

class NiveauController extends Controller
{
    public function index()
    {
        return view('admin.niveau.index');
    }

    public function create()
    {
        return view('admin.niveau.create');
    }

   
    public function edit(Niveau $niveau)
    {
         return view('admin.niveau.create')->with('niveau',$niveau);
    }

   
    public function destroy(Niveau $niveau)
    {
        $niveau->delete() ;
        toast('Niveau scolaire supprime avec success','success') ;
        return redirect()->back();
    }
}
