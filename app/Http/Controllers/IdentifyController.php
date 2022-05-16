<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdentifyController extends Controller
{
    
    public function index()
    {
        return view('identify.index');
    }
    
}
