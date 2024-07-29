<?php

namespace App\Http\Controllers;
use App\Models\BayarModel;

use Illuminate\Http\Request;

class MetodeController extends Controller
{
    public function index()
    {
        return view('register.metode');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nominal' => 'required',
            'metode_bayar' => ''
        ]);


        BayarModel::create($validateData);
        return redirect('/dana');
    }
}
