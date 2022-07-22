<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
      switch ( auth()->user()->getRoleNames()[0]) {
               case 'Super Admin':
                  return view('admin.dashboard.index' );
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
