<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function dashboard(){
        return view('admin.home.dashboard');
    }
}
