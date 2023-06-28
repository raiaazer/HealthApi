<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function userHome()
    {
        return view('home', ["msg"=>"I'm User Role"]);
    }

    public function adminDashboard()
    {
        // return view('home', ["msg"=>"I'm Admin Role"]);
        return view('dashboard');
    }
}
