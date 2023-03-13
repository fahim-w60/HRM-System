<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getDashboard()
    {
        return view('backend.pages.dashboard');
    }
}
