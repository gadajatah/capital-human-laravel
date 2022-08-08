<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
// use Barryvdh\DomPDF\Facade as PDF;
use PDF;

class ReportController extends Controller
{
    public function staff()
    {
        $pdf = PDF::loadView('report-pdf.staff', [
            'staffs' => Staff::all(),
        ]);
        return $pdf->download('Report-staff-'. date('d-m-Y', strtotime(now())) . '.pdf');
    }
}
