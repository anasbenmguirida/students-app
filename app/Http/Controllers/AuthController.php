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
            'role' => 'etudiant',
            ]);
        }
        if($user){
        return redirect()->route('login') ; 
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
        
        // chercher l'email dand la BD reste a configure le role 
        if (Auth::attempt($fields)) {
            $user = Auth::user(); // Get the authenticated user
    
            if ($user->role == 'admin') {
                return redirect()->route('profile');
            } else if ($user->role == 'etudiant') {
                return redirect()->route('profile_etu');
            } else {
            return redirect()->route('login')->with('error', 'Unauthorized role.');
            }
        } else {
            // Handle failed login attempt
            return redirect()->route('login')->with('error', 'Invalid credentials.');
        }
    }
    
}
