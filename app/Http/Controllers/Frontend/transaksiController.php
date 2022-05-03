<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\transaksi;
use App\Models\transaksi_barang;
use App\Models\transaksi_ukuranbarang;
use App\Models\customer;

class transaksiController extends Controller
{
    public function lihat(Request $request)
    {
        //ambil email
        $customer_email = $request->emailSession;

        //ambil id customer
        $customer_id = customer::where('email',$customer_email)->first()->id;

        //ambil data keranjang sesuai id
        $transaksi = transaksi::where('transaksi.customer_id',$customer_id);
        $transaksiData = $transaksi->orderBy('transaksi.updated_at', 'desc')->get(); //list transaksi;
        
        $transaksiDetail = $transaksi->join('transaksi_barang','transaksi.id','=','transaksi_barang.transaksi_id')->join('baju','transaksi_barang.baju_id','=','baju.id')->join('gambar_baju','baju.id','=','gambar_baju.id')->get(); //melihat isi transaksi
        

        return view('frontend.listTransaksi', compact('transaksiData','transaksiDetail'));
    }
}
