<?php

namespace App\Http\Controllers\Frontend;

use App\Models\keranjang;
use App\Models\keranjang_ukuran;

use App\Models\customer;
use App\Models\baju;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class keranjangController extends Controller
{
    public function tampil(Request $request)
    {   
        // $id_customer = $request->a;
        // $id_customer = 1; 
        // $keranjang = keranjang::where('customer_id',$id_customer)->orderby('id','desc')->first();
        // var_dump($keranjang);


        // $id_customer = $request->a;
        $customer_email = $request->emailSession;
        // var_dump($customer_email);
        
        //id customer
        $customer_id = customer::where('email',$customer_email)->first()->id;
        //customer data
        $customer = customer::where('email',$customer_email)->first();

        //itterasi keranjang (macam macam baju di keranjang)
        // $keranjang_cust = $customer->keranjang[0];
        $keranjang_cust = $customer->keranjang;  //karena terdiri dari object object maka kita keluarkan dnegan foreach

        $arrayNamaBaju = [];

        foreach($keranjang_cust as $isi){
            $arrayNamaBaju[] = $isi->baju->nama_baju;
        }

        // var_dump($arrayNamaBaju);

        //ambil nama baju (harus satu objek saja tidak array atau banyak object)
        // $nama_baju = $keranjang_cust->baju->nama_baju;

        // var_dump($nama_baju);


        // //Jumlah & harga
        $keranjang = keranjang::where('customer_id',$customer_id)->orderby('id','desc');

        $arrayTotalBiaya = $keranjang->pluck('total_biaya');
        // var_dump($arrayTotalBiaya);


        // //ukuran
        // $ukuranPerKeranjang = $keranjang->first()->keranjang_ukuran->pluck('ukuran_atasan');
        $ukuranPerKeranjang = $keranjang->get();
        
        $arrayUkuran = [];
        foreach($ukuranPerKeranjang as $isi){
            $arrayUkuran[] = $isi->keranjang_ukuran->pluck('ukuran_atasan');
        }

        // var_dump($arrayUkuran);

        return view('frontend/keranjang',compact('arrayNamaBaju','arrayTotalBiaya','arrayUkuran')); //sampai sini data sudah di array semua
    }
}
