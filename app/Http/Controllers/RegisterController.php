<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.registrasi', [

        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|email:dns',
            'nama' => ['required', 'min:3', 'max:50'],
            'no_hp' => 'required|min:11|max:13',
            'alamat' => 'required|min:3|max:255',
            'jk' => ''

        ]);
        
      
        user::create($validateData);
        return redirect('/jenis');
    
    }


}