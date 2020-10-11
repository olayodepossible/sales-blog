<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        return view('Home');
    }

    public function showDashboard(){
        return view('dashboard');
    }

    public function showSinglePost(){
        return view('singlePost');
    }

    public function showContact(){
        return view('contact');
    }

    public function storeContactPost(){

    }

    public function showAboutPage(){
        return view('about');
    }
}
