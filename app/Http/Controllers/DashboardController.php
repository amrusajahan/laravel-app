<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        if (!Auth::check()) {
            return redirect('/login')->with('status', 'Please log in to access the dashboard.');
        }
        
        return view('dashboard.index');
    }
}
