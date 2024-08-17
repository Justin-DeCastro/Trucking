<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function generate(Request $request)
    {
        $text = $request->input('text', 'YOU HAVE BEEN HACKED');
        $qrCode = QrCode::size(300)->generate($text);
        
        return view('Home.QRCode', ['qrCode' => $qrCode]);
    }
}
