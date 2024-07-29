<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function authenticate(Request $request)
    {
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        if ($user=='admin' && $pass=='admin'){
            return redirect('/tampilanadmin');
        }else if($user=='' || $pass==''){
            return view('login.login');
        }else{
            return view('login.login');
        }
        
    }

}
