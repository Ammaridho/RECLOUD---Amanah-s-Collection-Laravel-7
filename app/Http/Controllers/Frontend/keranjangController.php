<?php

namespace App\Http\Controllers\Frontend;

use App\Models\keranjang;
use App\Models\keranjang_ukuran;

use App\Models\gambar_baju;
use App\Models\customer;
use App\Models\baju;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class keranjangController extends Controller
{
    public function tampil(Request $request)
    {   
        //ambil email
        $customer_email = $request->emailSession;
        // var_dump($customer_email);

        //ambil id customer
        $customer_id = customer::where('email',$customer_email)->first()->id;

        //ambil data keranjang sesuai id
        $keranjang = keranjang::where('customer_id',$customer_id);
        $keranjangGet = $keranjang->get();

        if(count($keranjangGet) > 0){

            //id keranjang
            $keranjang_id = $keranjang->pluck('id'); 

            // //Jumlah & harga
            $arrayJumlahBaju = $keranjang->pluck('jumlah');  //dipluck, karena diambil dan dirubah ke bentuk array
            $arrayTotalBiaya = $keranjang->pluck('total_biaya');
            $arrayIdBaju     = $keranjang->pluck('baju_id');

            foreach($keranjangGet as $isi){    //karena mengambil atribut di dalam objek baju yang berelasi keranjang, berawal dari keranjang. (tujuan foreach adalah membuka isinya)
                $arrayNamaBaju[] = $isi->baju->nama_baju;             //ambil nama baju dan masukkan ke array
                $arrayUkuran[]   = $isi->keranjang_ukuran->pluck('ukuran_atasan');//ambil nama baju dan masukkan ke array (pluck karena bentuk data yang diambil banyak maka dibuat array)
                                    // DISINI HARUS MENGGUNAKAN JOIN UNTUK MENDAPATKAN UKURANNYA BERDASARKAN ID CHARTNYA.
            }

            // ambil id_baju    3, 5, 1

            for ($i= 0; $i < count($arrayIdBaju); $i++) { 
                $arrayGambarBaju[] = gambar_baju::where('id',$arrayIdBaju[$i])->pluck('gambar')->first();
            }
        }
        else{
            $arrayNamaBaju      = [];
            $arrayTotalBiaya    = [];
            $arrayUkuran        = [];
            $arrayJumlahBaju    = [];
            $arrayGambarBaju    = [];
            $keranjang_id       = '';
            $arrayIdBaju        = 0;
        }

        return view('frontend/keranjang',compact('arrayNamaBaju','arrayTotalBiaya','arrayUkuran','arrayJumlahBaju','arrayGambarBaju','keranjang_id','arrayIdBaju')); //sampai sini data sudah di array semua
    }

    public function lihat(Request $request)
    {

        $id = $keranjang_id = $request->keranjang_id;

        $isiKeranjang = keranjang::findOrFail($keranjang_id);

        $baju_id = $isiKeranjang->baju_id;
        $id = $baju_id;

        $seleksi = baju::where('id',"$baju_id")->first();

        if($seleksi->jenis_baju == 'Baju Tari'){
            $detail = baju::join('gambar_baju','baju.id','=','gambar_baju.id')->join('tari','baju.id','=','tari.id')->where('baju.id',"$baju_id")->first();
                                            
        }else{
            $detail = baju::join('gambar_baju','baju.id','=','gambar_baju.id')->where('baju.id',"$baju_id")->first();
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

        return view('frontend/lihatDetail',compact('isiKeranjang','id','detail','seleksi','keranjang_id','keterangan','daftarAksesoris','arrayGambar','arrayChartAtasan','arrayChartBawahan'));
    }

    public function editrestore(Request $request)
    {
        $keranjang_id = $request->keranjang_id;

        //mengambil ukuran
        $ukuranBaju = $request->ukuranBaju;                 //banyak baju
        $ukuranBaju = explode(",",$ukuranBaju);
        $ukuranBaju = array_chunk($ukuranBaju,3);

        // var_dump($ukuranBaju[0][0]);

        // // data sementara 
        $customer_email = $request->customer_email;
        $id_customer = customer::where('email',$customer_email)->first()->id;
        // var_dump($id_customer);

        $keranjang = keranjang::find($keranjang_id);     
        $keranjang->jumlah = $request->banyakBajuSajaEdit;
        $keranjang->tanggal_mulai = $request->tanggal_mulaiEdit;
        $keranjang->tanggal_selesai = $request->tanggal_selesaiEdit;
        $keranjang->total_hari = $request->totalHariSajaEdit;
        $keranjang->total_biaya = $request->totalBiayaSajaEdit;
        $keranjang->save();

        keranjang_ukuran::where('keranjang_id',"$keranjang_id")->delete();

        //masukkan ke keranjang ukuran
        for ($i=0; $i < $request->banyakBajuSajaEdit; $i++) { 
            $keranjang_ukuran = new keranjang_ukuran;
            $keranjang_ukuran->chart_atasan_id = $request->id_ukuran_atasan[$i];
            $keranjang_ukuran->chart_bawahan_id = $request->id_ukuran_bawahan[$i];
            $keranjang_ukuran->keranjang()->associate($keranjang);          //asosiasi id agar sama saat di restore
            $keranjang_ukuran->save();
        }

    }

    public function editUkuran(Request $request)
    {
        $fu = $request->fu;
        $id = $request->id;
        $keranjang_id = $request->keranjang_id;

        $arrayChartAtasan = baju::join('chart_atasan','baju.atasan_id','=','chart_atasan.atasan_id')
                                ->where('baju.id',"$id")
                                ->get();

        $arrayChartBawahan = baju::join('chart_bawahan','baju.bawahan_id','=','chart_bawahan.bawahan_id')
                                ->where('baju.id',"$id")
                                ->get();

        $keranjang_ukuran = keranjang_ukuran::where('keranjang_id',$keranjang_id)->get();

        return view('frontend.editUkuran',compact('fu','id','arrayChartAtasan','arrayChartBawahan','keranjang_ukuran'));
    }

    public function destroy(Request $request)
    {
        keranjang::find($request->id)->delete();
    }

    public function destroymulti(Request $request)
    {
        $keranjang_id = $request->values;

        for ($i=0; $i < count($keranjang_id); $i++) { 
            keranjang::find($keranjang_id[$i])->delete();
        }

        return response()->json([
            'success'=>'Berhasil dihapus.',
        ]);
    }
}
