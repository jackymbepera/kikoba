<?php

use Illuminate\Support\Facades\Route;

use App\http\Controllers\HomeController;
use App\http\Controllers\RegistrationController;
use App\http\Controllers\LoginController;
use App\http\Controllers\LipaController;
use App\http\Controllers\RatibaController;
use App\http\Controllers\WasilianaController;
use App\Models\Article;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/registration',[RegistrationController::class,'register'])->name('register');

Route::get('/login',[LoginController::class,'login'])->name('log');

Route::get('/lipa',[LipaController::class,'lipa'])->name('lipa');

Route::get('/ratiba',[RatibaController::class,'ratiba'])->name('ratibakutoka');

Route::get('/wasiliana',[WasilianaController::class,'mawasiliano'])->name('wasiliananasi');

// Route::post('datasubmit',function (){
//       Article::create([
//         'fullname'=>request('fullname'),
//         'username'=>request('username'),
//         'user_email'=>request('user_email'),
//         'user_password'=>request('user_password')
//       ]);

//       });

      
Route::post('/login',[RegistrationController::class,'store'])->name('store');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



