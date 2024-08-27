<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function generateQRCode($qrCode)
    {
        return QrCode::size(250)->generate($qrCode);
    }

    public function showQRCode($qrCode)
    {
        $employee = Staff::where('qr_code', $qrCode)->first();

        if (!$employee) {
            abort(404);
        }

        return view('qrcode', ['qrCode' => $this->generateQRCode($employee->qr_code)]);
    }
}
