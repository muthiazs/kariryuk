<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page
     */
    public function index()
    {
        // In a real application, you would fetch popular jobs and recent listings
        return view('home');
    }
}