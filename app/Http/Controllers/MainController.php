<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function Main(){
        return view('auth.login');
    }
    function dashboard()
    {
        return view('dashboard')->with([
            'applications'=> \App\Models\Application::latest()->paginate(10),
            ]);
    }
}
