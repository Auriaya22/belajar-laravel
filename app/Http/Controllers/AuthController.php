<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //register function
    public function register(){
      return view('form');
    }

    // register function
    public function register(Request $request){

    }
}
