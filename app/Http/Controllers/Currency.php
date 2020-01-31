<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Currency extends Controller
{
    public function convertToCOP ( Request $request) {
        
        $message = ''; 

        $amountToConvert = $request->input('amount');
        $selectedTrm = $request->input('selectedTrm');
        
        if ($amountToConvert > 0 && $selectedTrm > 0) {
            $conversionResult = $amountToConvert * $selectedTrm;
            $message = 'CONVERSION EXITOSA'; 
        } else {
            $message = 'LOS VALORES DEBEN SER NUMERICOS Y MAYORES A CERO, REVISE LOS VALORES ENVIADOS';
            $conversionResult = null;
        }

       
        $response = [
            'message' => $message,
            'data' => $conversionResult,
        ];

        return response()->json($response);
    }
}