<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyController extends Controller
{
    
    public function index()
    {
        // session(['status' => 'You are logged in dashboard page']);
        return view('verify.index');
    }
    
}
