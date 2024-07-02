<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf ; 

class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        $etudiants = $request->session()->get('etudiants', []); // Retrieve the student data from session

        $data = [
            'etudiants' => $etudiants
        ];

        /*$pdf = PDF::loadView('professeur.pdf_view', $data);

        return $pdf->download('liste_etudiants.pdf');*/
    }
}
