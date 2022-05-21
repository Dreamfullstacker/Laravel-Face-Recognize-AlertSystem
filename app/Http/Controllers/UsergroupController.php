<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsergroupController extends Controller
{
    
    public function index()
    {
        return view('usergroup.index');
    }
    
}
