<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlertController extends Controller
{
    
    public function index()
    {
        return view('alert.index');
    }
    
}
