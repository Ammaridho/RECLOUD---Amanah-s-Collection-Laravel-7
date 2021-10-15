<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenusideController extends Controller
{
    public function index(Request $request)
    {
        $id_provinsi = $request->id_provinsi;
        $provinsi = \App\Models\provinsi::where('id_provinsi',"$id_provinsi")->first();
        return view('frontend/menu',compact('id_provinsi','provinsi'));
    }

    public function subtari(Request $request)
    {
        $nama_tari = $request->nama_tari;
        $id_provinsi = $request->id_provinsi;
        

        $fokusTari = \App\Models\baju::join('tari','baju.id','=','tari.id')->where('id_provinsi',"$id_provinsi")->where('jenis_baju',"Baju Tari")->where('nama_tari',$nama_tari)->orderBy('nama_baju','asc')->get();


        return view('frontend/listTari',compact('nama_tari','fokusTari'));

    }
}
