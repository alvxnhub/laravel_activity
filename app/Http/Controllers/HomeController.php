<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Exercise 4: Blade Template
class HomeController extends Controller
{
    
public function index(){
        $title = "Laravel Blade Practice";
        return view ('welcome', compact('title'));

    }

}
