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
        $transaksi = transaksi::where('customer_id',$customer_id);
        $transaksiData = $transaksi->get();
        $transaksiId = $transaksi->first()->id;

        dd($transaksiId);  //Sampai DIsini Untuk Transaksi Id ambil barang belumm (untuk ambil nama barang)

        return view('frontend.listTransaksi', compact('transaksiData'));
    }
}
