<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('students.register');
    }

    // code of the profile 
    public function profile(){
        return view('students.profile');
    }
}
