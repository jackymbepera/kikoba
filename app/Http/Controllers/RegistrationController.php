<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Members;

class RegistrationController extends Controller
{

    public function register (){
        return view ('home.registration ');
    }

  

 

    // $data = $request->validate([
    //     'username'=>'required',
    //     'fullname'=>'required',
    //     'user_password'=>'required',
    //     'user_email'=>'required'
    // ]);

    public function demo(Request $request){
        Members::create([
            'username'=>$request->username,
            'fullname'=>$request->fullname,
             'user_password'=>$request->user_password,
             'user_email'=>$request->user_email

        ]);
        return redirect('home.login');
    }


    



    




    //
}
