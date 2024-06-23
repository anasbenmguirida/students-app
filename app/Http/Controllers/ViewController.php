<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function bienvenue(){
        return view('myviews.bienvenue') ; 
    }

    public function ConnectToAccount(){
        return view('myviews.connect') ; 
    }
    public function createAccount(){
        return view('myviews.create') ; 
    }
    public function showprofile(){
        return view('myviews.profileetu') ;
    }
}
