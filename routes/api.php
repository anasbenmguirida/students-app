<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfController;
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

// form routes and public
Route::post('/save' , [AuthController::class , 'save'])->name('save') ; 
Route::post('/connect' , [AuthController::class , 'login'])->name('connect') ; 
Route::post('/send-feedback' , [FeedbackController::class , 'sendfeedback'])->name('send-feedback') ; 

Route::post('/reset-password' , [AuthController::class , 'resetPassword'])->name('resetPassword'); 
//etudiant demande un document  
Route::post('/sendemail' , [MailController::class , 'sendemail'])->name('sendemail') ; 


// prof
Route::post('/store-grade' , [ProfController::class , 'storeGrades'])->name('store-grade'); 
Route::get('/get-students' , [ProfController::class , 'grpAbscences'])->name('get-students'); 
Route::post('/store-grade' , [ProfController::class , 'storeGrades'])->name('store-grade'); 
Route::post('/submit-form', [ProfController::class, 'submitForm'])->name('submitForm');
Route::post('/update-photo', [ProfController::class, 'saveImage'])->name('update-photo');






Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
