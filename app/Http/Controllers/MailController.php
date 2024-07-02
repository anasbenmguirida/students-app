<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail ; 
use App\Mail\demandeDocument ; 
use Illuminate\Support\Facades\Auth;


class MailController extends Controller
{
    public function sendemail(Request $request){
        // we need to know which checkbox or radio button is checked before sending the email 
       $user=Auth::user() ; 
       //dd($user);
       $attestationScolarite = $request->has('attestation_scolarite');
        $carteEtudiant = $request->has('carte_etudiant');
        $releveNotes = $request->has('releve_notes');
        $attestationReussite = $request->has('attestation_reussite');
        if($attestationReussite){
            $document="attestation de reussite";
        }
        if($releveNotes){
            $document="Releve de notes";
        }
        if($attestationScolarite){
            $document="Attestation de scolarite";
        }
        if($carteEtudiant){
            $document="carte d'etudiant";
        }
       $NomComplet=$user["name"]." " . $user["prenom"] ;
       $email=$user["email"] ; 
       
       
        
        
        Mail::to('benmguiridaanas@gmail.com')->send(new demandeDocument($document , $email , $NomComplet));
       // it should be a notification here 
       return redirect()->back()->with('success', 'Votre demande a été enregitré!');
        
    } 
       
    
      
       
    
       

    }

