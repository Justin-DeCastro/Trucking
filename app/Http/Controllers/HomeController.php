<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('Home.userhome');
    }
    public function ordertracking(){
        return view('Home.Ordertracking');
    }
    public function about(){
        return view('Home.About');
    }
    public function faq(){
        return view('Home.Faq');
    }
    public function service(){
        return view('Home.Service');
    }
    public function team(){
        return view('Home.Team');
    }
    public function blog(){
        return view('Home.Blog');
    }
    public function contact(){
        return view('Home.Contact');
    }
}
