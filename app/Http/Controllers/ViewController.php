<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\note ; 
use Illuminate\Support\Facades\DB;

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
    public function choixGrp(){
        return view('professeur.grp-abscence') ; 
    }
    
    
 public function affichage()
{
    // We need to select les matières avec les notes 
    $student = Auth::user(); 
    $studentId = $student->id;

    $GroupeEtudiants = note::select('matieres.libelle', 'notes.note')
    ->join('matieres', 'notes.id_mat', '=', 'matieres.id')
    ->where('notes.id_etu', $studentId)
    ->distinct()
    ->get();

    return view('students.affichage', compact('GroupeEtudiants'));
}

    
        
    }
    
     
    
