<?php

namespace App\Http\Controllers;

use App\Mail\forgetpassword;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Mail ; 
use App\Models\Groupe;
use PHPUnit\TextUI\Configuration\Group;

class AuthController extends Controller
{
    // fonction qui enregistre un etudiant dans la base de donnees 
    public function save(Request $request){
        $data=$request->validate([
            'name'=>'required|string' , 
            'prenom'=>'required|string' , 
            'email'=>'required|email' , 
            'password'=>'required|string|confirmed|min:8' , 
        ]) ; 
        // date is validated then we insert it in the etuduants table  ; 
        if($data){
            $user = User::create([
            'name' => $data['name'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'etudiant',
            ]);
            //dont do this kids hahahahahaahaha
            $strings = ["AP1", "AP2", "GINF1", "GINF2", "GINF3"];
            $randomKey = array_rand($strings);
            $randomString = $strings[$randomKey];
            $GroupeEtudiant=Groupe::create([
                'nom_grp'=>$randomString , 
                'id_etu'=>$user['id'] , 
            ]);
        }
        if($user && $GroupeEtudiant){
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
                return redirect()->route('profile_adm');
            } else if ($user->role == 'etudiant') {
                return redirect()->route('profile_etu');
            } 
            else if ($user->role == 'prof') {
                return redirect()->route('profile_prof');
            } else {
            return redirect()->route('login')->with('error', 'Unauthorized role.');
            }
        } else {
            // Handle failed login attempt
            return redirect()->route('login')->with('error', 'Invalid credentials.');
        }
    }
    public function logout(Request $request){
        $user=Auth::user() ; 
        if($user){
            $request->user()->tokens()->delete() ; 
            return redirect()->route('login'); 
        }
    }
    public function resetPassword(){
        // we need to check if the user has alredy an account by checking if the email exists in the database
        $email=$_POST["email"] ; 
        $userEmail=User::where('email', '=', $email)->first(); 
        if($userEmail != ""){
        //the email exist in the database => we generate an email containing the link to reset the password 
        $link = 'http://127.0.0.1:8000/reset';
        Mail::to($userEmail)->send(new forgetpassword($link));
        return redirect()->back()->with('success', 'Veuillez Verifier votre boite mail pour continuer!'); ; 
        }
    }
    
    
}
