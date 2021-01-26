<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //register function
    public function form(){
      return view('form');
    }

    // register function
    public function register(Request $request){
      $nama = $request['fname'];
      // $nama = $request['fname']." ".$request['lname'];
      return view('welcome', compact('nama'));
    }
}
