<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalysisController extends Controller
{
    
    public function index()
    {
        // session(['status' => 'You are logged in dashboard page']);
        return view('analysis.index');
    }
    
    public function manage()
    {
        return view('analysis.manage');
    }
    public function detail()
    {
        return view('analysis.poinew');
    }
    public function entrance()
    {
        return view('analysis.entrance');
    }
    public function other()
    {
        return view('analysis.other');
    }
    public function otheruser()
    {
        return view('analysis.poiuser');
    }
    
}
