<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail ; 
use App\Mail\demandeDocument ; 

class MailController extends Controller
{
    public function sendemail(){
        $details = "this is an email test" ; 
    
        //Mail::to('benmguiridaanas@gmail.com');
        Mail::to('benmguiridaanas@gmail.com')->send(new demandeDocument($details));
    
        return 'Email sent successfully';

    }
}
