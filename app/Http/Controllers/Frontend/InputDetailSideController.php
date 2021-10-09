<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\baju;
use Illuminate\Http\Request;

class InputDetailSideController extends Controller
{
    public function index(Request $request)
    {
        $id_baju = $request->id_baju;

        //seleksi awal apakah tari atau bukan
        // $seleksi = tampil1("SELECT * FROM baju WHERE baju.id_baju = $id_baju");
        $seleksi = baju::where('id_baju',"$id_baju")->first();

        if($seleksi->jenis_baju == 'Baju Tari'){
            // $detail = tampil1("SELECT * FROM ((baju INNER JOIN gambar_baju ON baju.id_baju = gambar_baju.id_baju)
            //                                         INNER JOIN tari ON baju.id_baju = tari.id_baju) WHERE baju.id_baju = $id_baju");

            $detail = baju::join('gambar_baju','baju.id_baju','=','gambar_baju.id_baju')->join('tari','baju.id_baju','=','tari.id_baju')->where('baju.id_baju',"$id_baju")->first();
                                            
        }else{
            // $detail = tampil1("SELECT * FROM baju INNER JOIN gambar_baju ON baju.id_baju = gambar_baju.id_baju WHERE baju.id_baju = $id_baju");

            $detail = baju::join('gambar_baju','baju.id_baju','=','gambar_baju.id_baju')->where('baju.id_baju',"$id_baju")->first();
        }
        

        return view('frontend.inputDetail',compact('id_baju','detail','seleksi'));
    }

    public function inputUkuran(Request $request)
    {
        $fu = $request->fu;
        $id_baju = $request->id_baju;

        return view('frontend.inputUkuran',compact('fu','id_baju'));
    }

    public function store(Request $request){
        $ukuranBaju = $request->ukuranBaju;                 //banyak baju
        $banyakBajuSaja = $request->banyakBajuSaja;

        $tanggal_mulai = $request->tanggal_mulai;           //pertanggalan
        $tanggal_selesai = $request->tanggal_selesai;
        $totalHariSaja = $request->totalHariSaja;
        
        $totalBiayaSaja = $request->totalBiayaSaja;         //total Biaya

        dd($ukuranBaju);
        
    }
}
