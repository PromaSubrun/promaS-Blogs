<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        // This is the home page
        return view('pages.index');
    }
    
    public function about(){
        // This is the home page
        return view('pages.about');
    }
    
    public function contact(){
        // This is the home page
        return view('pages.contact');
    }
    
    public function services(){
        // This is the home page
        return view('pages.services');
    }
}


//->with($data)