<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\provinsi;

use App\Models\baju;
use App\Models\gambar_baju;

class MenusideController extends Controller
{
    public function index(Request $request)
    {
        $provinsi_id = $request->provinsi_id;
        $provinsi = provinsi::find($provinsi_id);

        $tariSatu = baju::join('tari','baju.id','=','tari.id')->where('provinsi_id',"$provinsi_id")->where('jenis_baju','Baju Tari')->orderBy('nama_tari', 'asc')->first();

        $baju = baju::join('gambar_baju','baju.id','=','gambar_baju.id')->where('provinsi_id',"$provinsi_id")->where('jenis_baju','Baju Adat')->get();

        $semuaTari = baju::join('gambar_baju','baju.id','=','gambar_baju.id')->join('tari','baju.id','=','tari.id')->where('provinsi_id',"$provinsi_id")->where('jenis_baju',"Baju Tari")->orderBy('nama_baju','asc')->get();

        $bajuPernikahan = baju::where('provinsi_id',"$provinsi_id")->where('jenis_baju','Baju Nikah')->orderBy('nama_baju','asc')->get();

        return view('frontend/menu',compact('provinsi_id','provinsi','tariSatu','baju','semuaTari','bajuPernikahan'));
    }

    public function subtari(Request $request)
    {
        $nama_tari = $request->nama_tari;
        $provinsi_id = $request->provinsi_id;
        

        $fokusTari = baju::join('gambar_baju','baju.id','=','gambar_baju.id')->join('tari','baju.id','=','tari.id')->where('provinsi_id',"$provinsi_id")->where('jenis_baju',"Baju Tari")->where('nama_tari',$nama_tari)->orderBy('nama_baju','asc')->get();

        return view('frontend/listTari',compact('nama_tari','fokusTari'));

    }
}
