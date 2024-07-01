<?php

namespace App\Http\Controllers;

use App\Mail\feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail ; 
use Illuminate\Auth\Events\Validator;


class FeedbackController extends Controller
{
    public function sendfeedback(Request $request){
        // validate the inputs before submitting the email
        $UserInput=$request->validate([
            'nom'=>'required|string', 
            'email'=>'required|email', 
            'messages'=>'required|string', 
        ]);
       // send the email if the data is valid 
        
            $messages=$UserInput['messages'] ; 
            $email=$UserInput['email'] ; 
            $nom=$UserInput['nom'] ; 
            Mail::to('benmguiridaanas@gmail.com')->send(new feedback($nom , $email , $messages));
            return redirect()->back()->with('success', 'Votre message a ete envoye avec succes!'); ; 
        
    }
}
