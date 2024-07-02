<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User ; 
use Illuminate\Support\Facades\DB ; 
use App\Models\note; 
use Illuminate\Support\Facades\Auth ; 
use App\Models\Matiere ; 

 class ProfController extends Controller
    {
        public function getstudentByGrp(Request $request)
        {
            $selectedFiliere = $request->input('filiere');
            $GroupeEtudiants = User::join('groupes', 'users.id', '=', 'groupes.id_etu')
                ->where('groupes.nom_grp', $selectedFiliere)
                ->select('users.id','users.name', 'users.prenom')
                ->get();
            return view('professeur.insertion', compact('GroupeEtudiants'));
        }
        

    public function storeGrades(Request $request)
    {
    // Validate the input
    $notes = $request->input('notes');
    // Get the current professor's ID
    $profInformations = Auth::user();
    $profId = $profInformations->id;
    // Get the ID of the matière enseignée by the current professor
    $MatiereEnseigne = Matiere::where('id_ens', '=', $profId)->first();
    $idMatiere = $MatiereEnseigne->id;
    // Iterate over each note
    $data = [];
        foreach ($notes as $studentId => $note) {
            $data[] = [
                'id_etu' => $studentId,
                'id_mat' => $idMatiere,
                'note' => $note
            ];
            note::insert($data);

    }

    return redirect()->back()->with('success', 'Les notes sont bien enregistrer!');
}
public function grpAbscences(Request $request){
    $selectedFiliere = $request->input('filiere');
    $GroupeEtudiants = User::join('groupes', 'users.id', '=', 'groupes.id_etu')
        ->where('groupes.nom_grp', $selectedFiliere)
        ->select('users.id','users.name', 'users.prenom')
        ->get();
    return view('professeur.precence', compact('GroupeEtudiants'));
}
public function submitForm(Request $request)
{
    $etudiants = $request->input('etudiants'); // Assuming you have an array of student data
    $request->session()->put('etudiants', $etudiants);

    return redirect()->route('generatePDF');
}
}
    
    

