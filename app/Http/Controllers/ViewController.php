<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use App\Models\User;

class ViewController extends Controller
{
    //
    public function bienvenue(){
        return view('publicviews.bienvenue') ; 
    }

    public function ConnectToAccount(){
        return view('publicviews.connect') ; 
    }
    public function createAccount(){
        return view('publicviews.create') ; 
    }
   
    public function showstudentprofile()
    {
        $studentId = auth()->id(); 
        $studentInformation = User::where('id', '=', $studentId)->first(); 
        return view('students.student_profile', compact('studentInformation'));
    }
    public function marquerPresence(){
        $etudiants = User::where('role', '=' ,  'etudiant')->get();
        return view('professeur.precence', compact('etudiants'));
       
    }
    public function showProfprofile(){
        $Idprofesseur=auth()->id() ; 
        $profInformation=User::where('id', '=', $Idprofesseur)->first(); 
        return view('professeur.prof_profile' , compact('profInformation')) ; 
    }
    public function forgetView(){
        return view('publicviews.forget');
        }

    public function reset(){
        return view('publicviews.reset');
        }
    public function selectGrp(){
        return view('professeur.choose-groupe');
    }
     
    }
