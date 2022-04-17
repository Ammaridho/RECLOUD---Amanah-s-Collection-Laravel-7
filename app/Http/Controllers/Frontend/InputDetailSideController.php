<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\baju;
use App\Models\gambar_baju;
use App\Models\customer;
use App\Models\keranjang;
use App\Models\keranjang_ukuran;
use Illuminate\Http\Request;

class InputDetailSideController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;

        //seleksi awal apakah tari atau bukan
        // $seleksi = tampil1("SELECT * FROM baju WHERE baju.id = $id");
        $seleksi = baju::find($id);

        if($seleksi->jenis_baju == 'Baju Tari'){

            $detail = baju::join('gambar_baju','baju.id','=','gambar_baju.id')->join('tari','baju.id','=','tari.id')->where('baju.id',"$id")->first();
                                            
        }else{

            $detail = baju::join('gambar_baju','baju.id','=','gambar_baju.id')->where('baju.id',"$id")->first();
    
        }

        $keterangan = baju::join('atasan','baju.atasan_id','=','atasan.id')
            ->join('bawahan','baju.bawahan_id','=','bawahan.id')
            ->join('kode_aksesoris','baju.kode_aksesoris_id','=','kode_aksesoris.baju_id')
            ->join('aksesoris','kode_aksesoris.aksesoris_id','=','aksesoris.id')
            ->where('baju.id',"$id")
            ->first();

        $daftarAksesoris = baju::join('kode_aksesoris','baju.kode_aksesoris_id','=','kode_aksesoris.baju_id')
            ->join('aksesoris','kode_aksesoris.aksesoris_id','=','aksesoris.id')
            ->where('baju.id',"$id")
            ->get();

        $arrayGambar = gambar_baju::select('gambar')->where('id', "$id")->get();


        $arrayChartAtasan = baju::join('atasan','baju.atasan_id','=','atasan.id')
                                ->join('chart_atasan','baju.atasan_id','=','chart_atasan.atasan_id')
                                ->where('baju.id',"$id")
                                ->get();

        $arrayChartBawahan = baju::join('bawahan','baju.bawahan_id','=','bawahan.id')
                                ->join('chart_bawahan','baju.bawahan_id','=','chart_bawahan.bawahan_id')
                                ->where('baju.id',"$id")
                                ->get();
        
        return view('frontend.inputDetail',compact('id','detail','seleksi','keterangan','daftarAksesoris','arrayGambar','arrayChartAtasan','arrayChartBawahan'));
    }

    public function inputUkuran(Request $request)
    {
        $fu = $request->fu;
        $id = $request->id;

        $arrayChartAtasan = baju::join('chart_atasan','baju.atasan_id','=','chart_atasan.atasan_id')
                                ->where('baju.id',"$id")
                                ->get();

        $arrayChartBawahan = baju::join('chart_bawahan','baju.bawahan_id','=','chart_bawahan.bawahan_id')
                                ->where('baju.id',"$id")
                                ->get();

        return view('frontend.inputUkuran',compact('fu','id','arrayChartAtasan','arrayChartBawahan'));
    }

    public function store(Request $request){

        //mengambil ukuran
        $ukuranBaju = $request->ukuranBaju;                 //banyak baju
        $ukuranBaju = explode(",",$ukuranBaju);
        $ukuranBaju = array_chunk($ukuranBaju,3);

        // var_dump($ukuranBaju[0][0]);

        // // data sementara 
        $customer_email = $request->customer_email;
        $id_customer = customer::where('email',$customer_email)->first()->id;
        // var_dump($id_customer);
        
        // //masukkan ke keranjang
            $keranjang = new keranjang;
            $keranjang->customer_id = $id_customer;                     //belum benar sementara 
            $keranjang->baju_id = $request->id;        
            $keranjang->jumlah = $request->banyakBajuSaja;
            $keranjang->tanggal_mulai = $request->tanggal_mulai;
            $keranjang->tanggal_selesai = $request->tanggal_selesai;
            $keranjang->total_hari = $request->totalHariSaja;
            $keranjang->total_biaya = $request->totalBiayaSaja;
            $keranjang->save();


        //masukkan ke keranjang ukuran
        for ($i=0; $i < $request->banyakBajuSaja; $i++) { 
            $keranjang_ukuran = new keranjang_ukuran;
            $keranjang_ukuran->chart_atasan_id = $request->id_ukuran_atasan[$i];
            $keranjang_ukuran->chart_bawahan_id = $request->id_ukuran_bawahan[$i];
            $keranjang_ukuran->keranjang()->associate($keranjang);          //asosiasi id agar sama saat di restore
            $keranjang_ukuran->save();
        }


        // urutan penyewaan:
        // pilih baju sesuai gambar -> berikan ukuran yang ada
        // pilih celana sesuai gamabar -> berikan ukuran yang ada

        // cara termudah:
        // samakan semua warna dan berlanjut di sesi chat
        

    }

    
}
