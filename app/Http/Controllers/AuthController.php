<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 
use Laravel\Sanctum\Sanctum;

class AuthController extends Controller
{
    // fonction qui enregistre un etudiant dans la base de donnees 
    public function save(Request $request){
        $data=$request->validate([
            'nom'=>'required|string' , 
            'prenom'=>'required|string' , 
            'email'=>'required|email' , 
            'password'=>'required|string|confirmed|min:8' , 
        ]) ; 
        // date is validated then we insert it in the etuduants table  ; 
        if($data){
            $user = Etudiant::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            //'role' => 'Etudiant',
            ]);
        }
        if($user){
        return response()->json([
        'message' => 'un utilisateur est créé', ], 201);
        } 
        else{
            return response()->json([ 'message' => 'un erreur est survenue']) ; 
        }  
    }


    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|email',
            'password' => 'string|required',
        ]);
        
        // chercher l'email dand la BD
        if(Auth::attempt($fields)){
        return redirect()->route('profile');
        }
        else{
            return response()->json([
                'message'=>'something went wrong , try again'
            ]);
        }
    }

    
}
