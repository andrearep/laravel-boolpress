<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index()
    {
       
        return view('guests.posts.welcome');
    }
    public function about()
    {
        return view('guests.posts.about');
    }
    public function contacts()
    {
        return view('guests.posts.contacts');
    }
    public function sendContactForm(Request $request)
    {
       
        $validateData = $request->validate([
            "full_name" => 'required',
            "email" => 'required | email',
            "message" => 'required',

        ]);
       

        //return (new ContactFormMail($validateData))->render();
        Mail::to('admin@gmail.com')->send(new ContactFormMail($validateData));
        return redirect()->back()->with('message', 'succes! Grazie per la tua email');
    }
    
}