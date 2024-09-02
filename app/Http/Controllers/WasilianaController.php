<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class WasilianaController extends Controller
{
    public function mawasiliano (){

        return view('home.wasiliana');
    }


}

