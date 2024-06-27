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
   
    public function showstudentprofile()
    {
        $studentId = auth()->id(); 
        $studentInformation = Etudiant::where('id', '=', $studentId)->first(); 
        return view('myviews.student_profile', compact('studentInformation'));
    }
    public function marquerPresence(){
        $etudiants = Etudiant::where('role', '=' ,  'etudiant')->get();
        return view('myviews.presence', compact('etudiants'));
       
    }
    public function showProfprofile(){
        $Idprofesseur=auth()->id() ; 
        $profInformation=Etudiant::where('id', '=', $Idprofesseur)->first(); 
        return view('myviews.enseignant_profile' , compact('profInformation')) ; 
    }
    
}
