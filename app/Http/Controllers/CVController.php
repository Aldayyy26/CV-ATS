<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\InformasiPribadi;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Skill;

class CVController extends Controller
{
    public function unduhCV(Request $request)
    {
        // Fetch data from the database
        $informasi_pribadi = InformasiPribadi::first();  // or fetch by user ID, etc.
        $pekerjaan = Pekerjaan::all();
        $pendidikan = Pendidikan::all();
        $skills = Skill::all();

        // Pass data to the view
        $pdf = Pdf::loadView('cv_template', compact('informasi_pribadi', 'pekerjaan', 'pendidikan', 'skills'));

        // Download the PDF
        return $pdf->download('CV.pdf');
    }
}
