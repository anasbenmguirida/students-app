<?php
//use Illuminate\Routing\ViewController;

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use Illuminate\Routing\ViewController as RoutingViewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// route public : 
Route::get('/' , [ViewController::class , 'bienvenue']) ; 
Route::get('/signup' , [ViewController::class , 'createAccount'])->name('signup') ;
Route::get('/login' , [ViewController::class , 'ConnectToAccount'])->name('login'); 
Route::get('/forget' , [ViewController::class , 'forgetView'])->name('forget'); 
Route::get('/reset' , [ViewController::class , 'reset'])->name('reset'); 


// route authentifie et pour le prof
Route::middleware('auth:sanctum' , 'role:prof')->get('/presence' , [ViewController::class , 'marquerPresence'])->name('presence'); 
Route::middleware('auth:sanctum' , 'role:prof')->get('/profile_prof' , [ViewController::class , 'showProfprofile'])->name('profile_prof'); 
// route des etudiants
Route::middleware('auth:sanctum' , 'role:etudiant')->get('/profile_etu' , [ViewController::class , 'showstudentprofile'])->name('profile_etu'); 
Route::middleware('auth:sanctum' , 'role:etudiant')->get('/affichage' , [ViewController::class , 'affichage'])->name('affichage'); 
// route mixtes 
Route::middleware('auth:sanctum' , 'role:etudiant|admin|prof')->get('/logout' , [AuthController::class , 'logout'])->name('logout'); 



