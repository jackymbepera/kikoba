<?php

use Illuminate\Support\Facades\Route;

use App\http\Controllers\HomeController;
use App\http\Controllers\RegistrationController;
use App\http\Controllers\LoginController;
use App\http\Controllers\LipaController;
use App\http\Controllers\RatibaController;
use App\http\Controllers\WasilianaController;
use App\http\Controllers\DashboardController;
 



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/registration',[RegistrationController::class,'register'])->name('register');

Route::get('/login',[LoginController::class,'login'])->name('log');

Route::get('/lipa',[LipaController::class,'lipa'])->name('lipa');

Route::get('/ratiba',[RatibaController::class,'ratiba'])->name('ratiba');

Route::get('/ratiba',[RatibaController::class,'display'])->name('ratiba');


Route::get('/edit_info/{id}',[RatibaController::class,'edit']);

Route::get('/wasiliana',[WasilianaController::class,'mawasiliano'])->name('wasiliananasi');
     
Route::post('/login',[RegistrationController::class,'demo'])->name('store');

Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');



// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });



