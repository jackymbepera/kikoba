<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LipaController extends Controller
{
    public function lipa (){

        return view('home.lipa');
    }


}

