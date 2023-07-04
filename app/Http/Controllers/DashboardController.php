<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('back.dashboard');
    }

    public function settings()
    {
        return view('back.settings');
    }
}
