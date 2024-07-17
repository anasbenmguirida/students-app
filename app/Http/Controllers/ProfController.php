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
        return view('professeur.precence', compact('GroupeEtudiants' , 'selectedFiliere'));
    }
    
    

    public function saveImage(Request $request) {
        // Validate the input
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',//(2MB max)
        ]);
        // Get the image from the request
        $image = $request->file('image');
        $profInformations = Auth::user();
        $profId = $profInformations->id;
        // Create a unique filename for the image
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        // the image is stored in the public/images directory
        $image->move(public_path('images'), $imageName);
         // Get the image path
        $imagePath = 'images/' . $imageName;
        // stocker que le path in the database 
        $query = DB::update('update users set image = ? where id = ?', [$imagePath, $profId]);
        if ($query) {
            return redirect()->back()->with('success', 'Votre photo a été bien sauvegardée!');
        } else {
            return redirect()->back()->with('error', 'Une erreur est survenue. Veuillez réessayer.');
        }
    }
    

   

}
    
    

