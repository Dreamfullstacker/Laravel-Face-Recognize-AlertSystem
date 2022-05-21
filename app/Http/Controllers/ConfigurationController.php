<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    
    public function index()
    {
        return view('configuration.index');
    }
    
}
