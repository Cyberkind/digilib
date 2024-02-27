<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function home(){
return view("home");
    }
    public function log(){
        return view("login");
    }
    public function ceklogin(Request $request){
        $s = new admin();
        if ($s->where ('username', $request->input('username'))->where('password',$request->input('password'))->exists()){
            return redirect('admin/home');
        }
    }
}
