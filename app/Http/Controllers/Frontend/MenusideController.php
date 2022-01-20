<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\provinsi;

use App\Models\baju;

class MenusideController extends Controller
{
    public function index(Request $request)
    {
        $id_provinsi = $request->id_provinsi;
        $provinsi = provinsi::where('id_provinsi',"$id_provinsi")->first();

        $tariSatu = baju::join('tari','baju.id','=','tari.id')->where('id_provinsi',"$provinsi->id_provinsi")->where('jenis_baju','Baju Tari')->orderBy('nama_tari', 'asc')->first();

        $baju = baju::where('id_provinsi',"$id_provinsi")->where('jenis_baju','Baju Adat')->get();

        $semuaTari = baju::join('gambar_baju','baju.id','=','gambar_baju.id')->join('tari','baju.id','=','tari.id')->where('id_provinsi',"$id_provinsi")->where('jenis_baju',"Baju Tari")->orderBy('nama_baju','asc')->get();

        $bajuPernikahan = baju::where('id_provinsi',"$id_provinsi")->where('jenis_baju','Baju Nikah')->orderBy('nama_baju','asc')->get();

        return view('frontend/menu',compact('id_provinsi','provinsi','tariSatu','baju','semuaTari','bajuPernikahan'));
    }

    public function subtari(Request $request)
    {
        $nama_tari = $request->nama_tari;
        $id_provinsi = $request->id_provinsi;
        

        $fokusTari = baju::join('gambar_baju','baju.id','=','gambar_baju.id')->join('tari','baju.id','=','tari.id')->where('id_provinsi',"$id_provinsi")->where('jenis_baju',"Baju Tari")->where('nama_tari',$nama_tari)->orderBy('nama_baju','asc')->get();

        return view('frontend/listTari',compact('nama_tari','fokusTari'));

    }
}
