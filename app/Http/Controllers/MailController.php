<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail ; 
use App\Mail\demandeDocument ; 
use Illuminate\Support\Facades\Auth;


class MailController extends Controller
{
    public function sendemail(){
        // we need to know which checkbox or radio button is checked before sending the email 
       $user=Auth::user() ; 
       //dd($user);
       $NomComplet=$user["name"]." " . $user["prenom"] ;
       $email=$user["email"] ; 
        $document=''; 
        Mail::to('benmguiridaanas@gmail.com')->send(new demandeDocument($document , $email , $NomComplet));
       // it should be a notification here 
       return redirect()->back()->with('success', 'Votre demande a été enregitré!');
        
    } 
       
    
      
       
    
       

    }

