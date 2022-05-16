<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()) {
            return view('dashboard.dashboard');    
        }
        return view('welcome');
    }
    
    public function liveView()
    {
        // session(['status' => 'You are logged in live view page']);
        return view('dashboard.liveview');
    }
    public function totalMatches()
    {
        // session(['status' => 'You are logged in live view page']);
        return view('dashboard.totalmatches');
    }
}
