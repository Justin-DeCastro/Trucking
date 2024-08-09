<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('Admin.dashboard');
    }
    public function adminside(){
        return view('Admin.Admin');
    }
    public function managebranch(){
        return view('Admin.Managebranch');
    }
}
