<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    
    public function index()
    {
        return view('location.index');
    }
    public function detail()
    {
        return view('location.location_detail');
    }
}
