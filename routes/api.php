<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// form routes 
Route::post('/save' , [AuthController::class , 'save'])->name('save') ; 
Route::post('/connect' , [AuthController::class , 'login'])->name('connect') ; 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});