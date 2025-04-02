<?php

namespace App\Http\Controllers;  // ← Это обязательно!

class AboutController extends Controller
{
    public function index()
    {
        return view('about');
    }
}