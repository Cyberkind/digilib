<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\kategori;
use Illuminate\Http\Request;

class kategoriConntroller extends Controller
{
    public function kategori(){
        $k = new kategori();
        return view('kategori.kategori',['data'=>$k->all()]);

    }
    public function kategori_tambah(){
        return view('kategori.tambah');
    }
    public function kategori_kirim(Request $request){
        $validated = $request->validate([
            'nama_kategori' => 'required|unique:kategoribuku|max:255',
            
        ]);
        $bebas = kategori::create($request->all());
        return redirect ('/kategori')->with('status', 'Kategori Berhasil Ditambah');
    }
    public function kategori_edited($kategoriid){
        $e = kategori::select('*')->where('kategoriid', $kategoriid)->get();
        return view('kategori.edit', ['data'=>$e]);
    }
    public function kategori_edit(Request $request){
        $e = kategori::where('kategoriid',$request->kategoriid)->update([
            'nama_kategori'=>$request->nama_kategori
        ]);
        return redirect('/kategori');
    }
    public function kategori_hapus($kategoriid){
        $e = kategori::where('kategoriid',$kategoriid)->delete();
        return back();
    }
}
