<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class kategoriConntroller extends Controller
{
    public function kategori(){
        $k = new kategori();

        return view('kategori',['kategori'=>$k->paginate(5)]);
    }
}
