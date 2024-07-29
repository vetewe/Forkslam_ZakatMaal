<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorZakatController extends Controller
{
    public function index()
    {
        return view('kalkulator');
    }

        public function hitungMaal(Request $request){
        $Z1 = $request->Z1;
        $Z2 = $request->Z2;
        $Z3 = $request->Z3;
        $Z4 = $request->Z4;
        $hasil = $Z1 + $Z2 + $Z3;
        
        if ($hasil>=81945667){
            $total = ($hasil - $Z4) * 0.025;
            $teks = "";
            $teks2 = "";
        }elseif($hasil<81945667){
            $total= 0;  
            $teks="Penghasilan Anda belum mencapai nishab.";
            $teks2="Anda tetap bisa menyempurnakan niat baik dengan bersedekah.";
            
        }

            return view("/kalkulator", compact ('Z1', 'Z2', 'Z3', 'Z4','teks', 'teks2', 'total'));
    }

    
}
