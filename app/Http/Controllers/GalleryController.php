<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    
    public function index()
    {
        // session(['status' => 'You are logged in dashboard page']);
        return view('gallery.index');
    }
    
    public function manage()
    {
        return view('gallery.manage');
    }
    
    
    
}
