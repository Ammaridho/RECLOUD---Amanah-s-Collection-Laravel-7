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
                $arrayUkuran[]   = $isi->keranjang_ukuran->pluck('ukuran_atasan');//ambil nama baju dan masukkan ke array (pluck karena bentuk data yang diambil banyaka maka dibuat array)
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
            $keranjang_id = '';
        }

        return view('frontend/keranjang',compact('arrayNamaBaju','arrayTotalBiaya','arrayUkuran','arrayJumlahBaju','arrayGambarBaju','keranjang_id','arrayIdBaju')); //sampai sini data sudah di array semua
    }

    public function edit(Request $request)
    {

        $keranjang_id = $request->keranjang_id;

        $isiKeranjang = keranjang::findOrFail($keranjang_id);

        $baju_id = $isiKeranjang->baju_id;
        $id = $baju_id;

        $seleksi = baju::where('id',"$baju_id")->first();

        if($seleksi->jenis_baju == 'Baju Tari'){
            $detail = baju::join('gambar_baju','baju.id','=','gambar_baju.id')->join('tari','baju.id','=','tari.id')->where('baju.id',"$baju_id")->first();
                                            
        }else{
            $detail = baju::join('gambar_baju','baju.id','=','gambar_baju.id')->where('baju.id',"$baju_id")->first();
        }

        return view('frontend/editDetail',compact('isiKeranjang','id','detail','seleksi','keranjang_id'));
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
        $keranjang->jumlah = $request->banyakBajuSaja;
        $keranjang->tanggal_mulai = $request->tanggal_mulai;
        $keranjang->tanggal_selesai = $request->tanggal_selesai;
        $keranjang->total_hari = $request->totalHariSaja;
        $keranjang->total_biaya = $request->totalBiayaSaja;
        $keranjang->save();

        keranjang_ukuran::where('keranjang_id',"$keranjang_id")->delete();

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

    public function destroy(Request $request)
    {
        $keranjang_id = $request->values;
        // var_dump($keranjang_id);

        echo '<script>console.log(<?php $keranjang_id; ?>);</script>';
        keranjang::find($id)->delete();

        return redirect('/');
    }
}
