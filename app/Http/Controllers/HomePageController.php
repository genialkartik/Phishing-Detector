<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home(){
        return view('index');
    }
    public function register(){
        return view('register');
    }
    public function login(){
        return view('login');
    }
    public function about(){
        return view('about');
    }

}
