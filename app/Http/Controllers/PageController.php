<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
       
        return view('guests.posts.home');
    }
    public function about()
    {
        return view('guests.posts.about');
    }
    public function contacts()
    {
        return view('guests.posts.contacts');
    }
    
}