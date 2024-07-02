<?php
//use Illuminate\Routing\ViewController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;



// route public : 
Route::get('/' , [ViewController::class , 'bienvenue']) ; 
Route::get('/signup' , [ViewController::class , 'createAccount'])->name('signup') ;
Route::get('/login' , [ViewController::class , 'ConnectToAccount'])->name('login'); 
Route::get('/forget' , [ViewController::class , 'forgetView'])->name('forget'); 
Route::get('/reset' , [ViewController::class , 'reset'])->name('reset'); 


// route authentifie et pour le prof
Route::middleware('auth:sanctum' , 'role:prof')->get('/presence' , [ViewController::class , 'marquerPresence'])->name('presence'); 
Route::middleware('auth:sanctum' , 'role:prof')->get('/profile_prof' , [ViewController::class , 'showProfprofile'])->name('profile_prof'); 
Route::middleware('auth:sanctum' , 'role:prof')->get('/groupe-etu' , [ViewController::class , 'selectGrp'])->name('selectGrp'); 
Route::middleware('auth:sanctum' , 'role:prof')->get('/student-info' , [ProfController::class , 'getstudentByGrp'])->name('getstudentByGrp'); 
// route des etudiants
Route::middleware('auth:sanctum' , 'role:etudiant')->get('/profile_etu' , [ViewController::class , 'showstudentprofile'])->name('profile_etu'); 
Route::middleware('auth:sanctum' , 'role:etudiant')->get('/affichage' , [ViewController::class , 'affichage'])->name('affichage'); 
// route mixtes 
Route::middleware('auth:sanctum' , 'role:etudiant|admin|prof')->get('/logout' , [AuthController::class , 'logout'])->name('logout'); 



