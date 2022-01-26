<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\customer;
use App\Models\keranjang;
use App\Models\gambar_baju;
use App\Models\prosestransaksi;

class cekoutController extends Controller
{
    public function cek(Request $request)
    {
        $keranjang_id = $request->values;

        $emailcustomer = session('data')['email']; 

        $customer = customer::where('email',$emailcustomer)->first();
        
        //keranjang

            //ambil id customer
            $customer_id = $customer->id;

            //ambil data keranjang sesuai id
            $keranjang = keranjang::findMany($keranjang_id);

            // //Jumlah & harga
            $arrayJumlahBaju = $keranjang->pluck('jumlah');
            $arrayTotalBiaya = $keranjang->pluck('total_biaya');
            $arrayIdBaju     = $keranjang->pluck('baju_id');      
                  

            for ($i=0; $i < count($keranjang); $i++) { 
                    $arrayNamaBaju[] = $keranjang[$i]->baju->nama_baju;
                    $arrayUkuran[]   = $keranjang[$i]->keranjang_ukuran->pluck('ukuran_atasan');
            }

            for ($i= 0; $i < count($arrayIdBaju); $i++) { 
                $arrayGambarBaju[] = gambar_baju::where('id',$arrayIdBaju[$i])->pluck('gambar')->first();
            }

        return view('frontend.cekout',compact('arrayNamaBaju','arrayTotalBiaya','arrayUkuran','arrayJumlahBaju','arrayGambarBaju','keranjang_id','arrayIdBaju','emailcustomer','customer'));

    }

    public function rincianCekout(Request $request)
    {
        // dd($request);
        
        $nama           = $request->nama;
        $alamat         = $request->alamat;
        $kodePos        = $request->kodePos;
        $noTelp         = $request->noTelp; 
        $email          = $request->emaill;
        $pilihkurir     = $request->pilihkurir;
        $bankTujuan     = $request->bankTujuan;
        $biayaPenyewaan = $request->biayaPenyewaan;
        $uangJaminan    = $request->uangJaminan;
        $ongkir         = $request->ongkir;
        $totalTagihan   = $request->totalTagihan;
        $noRek          = $request->noRek;
        $namaRek        = $request->namaRek;

        //ambil id customer
        $customer_id = customer::where('email',$email)->first()->id;

        //store ke database prosestransaksi
        $prosesTransaksi = new prosestransaksi;
        $prosesTransaksi->customer_id = $customer_id;
        $prosesTransaksi->status = 'Menunggu Pembayaran';
        $prosesTransaksi->save();

        return view('frontend.rincianCekout', compact('nama','alamat','kodePos','noTelp','email','pilihkurir','bankTujuan','biayaPenyewaan','uangJaminan','ongkir','totalTagihan','noRek','namaRek'));
    }
}
