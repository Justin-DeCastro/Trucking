<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountingController extends Controller
{
    public function accounting_dash(){
        return view('Accounting.Accountingdash');
    }
}
