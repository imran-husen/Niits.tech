<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Here i am writing the code for the working page
    public function working()
    {
        return view('working');
    }
}
