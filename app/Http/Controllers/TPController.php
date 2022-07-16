<?php

namespace App\Http\Controllers;

use App\Models\TP;

class TPController extends Controller
{
   public function index()
   {
       return view('admin.tp.index');
   }

   public function create()
   {
       return view('admin.tp.create');
   }

   public function edit(Tp $tp)
   {
        return view('admin.tp.create')->with('tp',$tp);
   }
   
   public function destroy(Tp $tp)
   {
       $tp->delete() ;
       toast('TP supprime avec success','success') ;
       return redirect()->back();
   }

    public function validation(TP $tP)
    {
        $tp->update(['validated'=>true]) ;
        toast('TP validé avec success','success') ;
        return redirect()->back();
    }
}
