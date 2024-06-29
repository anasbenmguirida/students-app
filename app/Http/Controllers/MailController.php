<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail ; 
use App\Mail\demandeDocument ; 
use Illuminate\Support\Facades\Auth;


class MailController extends Controller
{
    public function sendemail(){
       $user=auth()->user() ; 
        $NomComplet=$user->nom;
        $email=$user->email ; 
        $document=''; 
        Mail::to('benmguiridaanas@gmail.com')->send(new demandeDocument($NomComplet , $email , $document));
            return 'email sent succesfully';
        } 
       
    
      
       
    
       

    }

