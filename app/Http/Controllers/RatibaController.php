<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Members;



class RatibaController extends Controller
{
    public function ratiba (){

        return view('home.ratiba');
    }

    public function display(){

        $data=Members::all();

        return view('home.ratiba',compact('data'));
    }

 public function edit($id){
    $data=Members::find($id);
    // $data=post::find($data);

    return view('home.view',compact('data'));
 }



}

