<?php

namespace App\Http\Controllers\Frontend;

use App\Models\keranjang;
use App\Models\keranjang_ukuran;

use App\Models\baju;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class keranjangController extends Controller
{
    public function tampil(Request $request)
    {   
        // $id_customer = $request->a;
        $id_customer = 1; 
        $keranjang = keranjang::where('customer_id',$id_customer)->orderby('id','desc')->first();
        $ukuranPerKeranjang = $keranjang->keranjang_ukuran;
        var_dump($ukuranPerKeranjang);

        // $arraybaju_keranjang = [];

        // // var_dump($keranjang->keranjang_ukuran);

        // foreach($keranjang as $isi){

        //     $arraybaju_keranjang[] += $isi->keranjang_ukuran;
        // }

        // var_dump($arraybaju_keranjang);
        // // $keranjang_idbaju = 


        // $baju = baju::

        return view('frontend/keranjang',compact('keranjang'));
    }
}
