<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class adminController extends Controller
{

    public function reg(){
        return view("reg");
    }
    public function simpan(Request $request){
      
        $cek=$request->validate([
            'email'=>'required',
            'username'=>'required|min:6',
            'password'=>'required|min:4',
            'namalengkap'=>'required',
            'status'=>'required'
        ]);
        $a = new admin();
        $a->create([
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>$request->password,
            'namalengkap'=>$request->namalengkap,
            'status'=>$request->status
        ]);
        return back()->with('Pesan','Register Behasil');
    }

    public function home(){
return view("admin.home");
    }
    public function log(){
        return view("admin/login");
    }
    public function ceklogin(Request $request){
        $s = new admin();
        if ($s->where ('username', $request->input('username'))->where('password',$request->input('password'))->exists()){
            return redirect('admin/home');
        }
    }
}
