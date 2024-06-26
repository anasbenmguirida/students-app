<?php
//use Illuminate\Routing\ViewController;

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

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

// route authentifie 
Route::middleware('auth:sanctum' , 'role:admin')->get('/profile' , [ViewController::class , 'showAdminprofile'])->name('profile'); 
Route::middleware('auth:sanctum' , 'role:etudiant')->get('/profile_etu' , [ViewController::class , 'showstudentprofile'])->name('profile_etu'); 
Route::middleware('auth:sanctum' , 'role:etudiant|admin')->get('/logout' , [AuthController::class , 'logout'])->name('logout'); 


/*Route::get('/', function () {
    return view('welcome');
});*/
