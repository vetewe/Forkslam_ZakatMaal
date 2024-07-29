<?php

namespace App\Http\Controllers;
use App\Models\AdminModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('register.dana');
    }

    public function indexx()
    {
        $data['request'] = AdminModel::all();
        return view('tampilanadmin', $data);
    }

    public function save(Request $request){
        $admin = new AdminModel;
        $admin->nama = $request->nama;
        $admin->jk = $request->jk;
        $admin->no_hp = $request->no_hp;
        $admin->email = $request->email;
        $admin->jenis_zakat = $request->jenis_zakat;
        $admin->nominal = $request->nominal;
        $admin->haul = $request->haul;
        $admin->save();
        return redirect('/thanks');
    }
}
