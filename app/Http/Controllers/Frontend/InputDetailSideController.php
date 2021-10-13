<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\baju;
use App\Models\keranjang;
use App\Models\keranjang_ukuran;
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

        //mengambil ukuran
        $ukuranBaju = $request->ukuranBaju;                 //banyak baju
        $ukuranBaju = explode(",",$ukuranBaju);
        $ukuranBaju = array_chunk($ukuranBaju,3);

        // var_dump($ukuranBaju[0][0]);

        // // data sementara 
        $id_customer = 1;
        
        // //masukkan ke keranjang
            $keranjang = new keranjang;
            $keranjang->customer_id = $id_customer;                     //belum benar sementara 
            $keranjang->id_baju = $request->id_baju;        
            $keranjang->jumlah = $request->banyakBajuSaja;
            $keranjang->tanggal_mulai = $request->tanggal_mulai;
            $keranjang->tanggal_selesai = $request->tanggal_selesai;
            $keranjang->total_hari = $request->totalHariSaja;
            $keranjang->total_biaya = $request->totalBiayaSaja;
            $keranjang->save();


        //masukkan ke keranjang ukuran
        for ($i=0; $i < count($ukuranBaju); $i++) { 
            $keranjang_ukuran = new keranjang_ukuran;
            $keranjang_ukuran->ukuran_atasan = $ukuranBaju[$i][0];
            $keranjang_ukuran->ukuran_bawahan = $ukuranBaju[$i][1];
            $keranjang_ukuran->jumlah_baju_perukuran = $ukuranBaju[$i][2];
            $keranjang_ukuran->keranjang()->associate($keranjang);          //asosiasi id agar sama saat di restore
            $keranjang_ukuran->save();
        }

            return redirect('/');

        
    }
}
