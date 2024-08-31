<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function donate()
    {
        return view('frontend.donate');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function volunteer(){
        return view('frontend.volunteer');
    }
}
