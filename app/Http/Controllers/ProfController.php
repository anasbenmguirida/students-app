<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User ; 
use Illuminate\Support\Facades\DB ; 

 class ProfController extends Controller
    {
        public function insererNote(Request $request)
        {
            $selectedFiliere = $request->input('filiere');
            $GroupeEtudiants = User::join('groupes', 'users.id', '=', 'groupes.id_etu')
                ->where('groupes.nom_grp', $selectedFiliere)
                ->select('users.name', 'users.prenom')
                ->get();
            return view('professeur.insertion', compact('GroupeEtudiants'));
        }
    }

