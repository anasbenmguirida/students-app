<?php

//use Illuminate\Routing\ViewController;
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
Route::get('/' , [ViewController::class , 'bienvenue']) ; 

Route::get('/signup' , [ViewController::class , 'createAccount'])->name('signup') ;

Route::get('/login' , [ViewController::class , 'ConnectToAccount'])->name('login'); 

Route::middleware('auth:sanctum')->get('/profile' , [ViewController::class , 'showprofile'])->name('profile'); 


/*Route::get('/', function () {
    return view('welcome');
});*/
