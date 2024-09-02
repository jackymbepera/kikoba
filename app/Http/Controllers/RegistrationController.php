<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;


class RegistrationController extends Controller

{

    public function register(){

        return view('home.registration');
    }


    public function store (Request $request){
    
    //    dd($request);


       $data = $request->validate([
        'username'=>'required',
        'fullname'=>'required',
        'user_email'=>'required',
        'user_password'=>'required'

       ]);

    //    dd($data);

       $kikoba = Article::create($data);


       return redirect(route('log'));

    }


}
