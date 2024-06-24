<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function bienvenue(){
        return view('myviews.bienvenue') ; 
    }

    public function ConnectToAccount(){
        return view('myviews.connect') ; 
    }
    public function createAccount(){
        return view('myviews.create') ; 
    }
    public function showprofile(){
        $etudiants = Etudiant::where('role', '=' ,  'etudiant')->get();
        return view('myviews.admin_profile', compact('etudiants'));
       
    }
}
