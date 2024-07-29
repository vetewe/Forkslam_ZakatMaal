<?php

namespace App\Http\Controllers;
use App\Models\ZakatModel;

use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index()
    {
        return view('register.jenis');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'jenis_dana' => '',
            'jenis_zakat' => ''
        ]);


        ZakatModel::create($validateData);
        return redirect('/metode');
    }

}
