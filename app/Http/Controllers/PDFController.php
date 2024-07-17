<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; 
use Illuminate\Support\Facades\App;

class PDFController extends Controller
{
    
        public function generatePDF(Request $request)
        {
            // Get all students
            $GroupeEtudiants = $request->input('GroupeEtudiants');
            $pdf = PDF::loadView('professeur.pdf_view', compact('GroupeEtudiants'));
            return $pdf->download('liste_etudiants.pdf');
        }
    
    
}
