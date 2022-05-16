<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    
    public function index()
    {
        // session(['status' => 'You are logged in dashboard page']);
        return view('stores.index');
    }
    
    public function manage()
    {
        return view('stores.manage');
    }
    public function detail()
    {
        return view('stores.store_detail');
    }
    public function entrance()
    {
        return view('stores.entrance');
    }

    
    
}
