<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\customer;
use App\Models\keranjang;
use App\Models\keranjang_ukuran;
use App\Models\gambar_baju;
use App\Models\transaksi;
use App\Models\transaksi_barang;
use App\Models\transaksi_ukuranbarang;

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
        
        $nama             = $request->nama;
        $customer_email   = $request->customer_email;
        $alamat           = $request->alamat;
        $kodePos          = $request->kodePos;
        $noTelp           = $request->noTelp; 
        $email            = $request->emaill;
        $pilihkurir       = $request->pilihkurir;
        $bankTujuan       = $request->bankTujuan;
        $biayaPenyewaan   = $request->biayaPenyewaan;
        $uangJaminan      = $request->uangJaminan;
        $ongkir           = $request->ongkir;
        $totalTagihan     = $request->totalTagihan;
        $noRek            = $request->noRek;
        $namaRek          = $request->namaRek;

        // Data ini berbentuk array berdasarkan banyak barang yang di cekout
        $listkeranjang_id = $request->listkeranjang_id;

        //ambil id customer
        $customer_id = customer::where('email',$customer_email)->first();

        //store tabel transaksi
        $transaksi = new transaksi;
        $transaksi->customer_id = $customer_id->id;
        $transaksi->status = 'Menunggu Pembayaran';
        $transaksi->biaya_penyewaan = $biayaPenyewaan;
        $transaksi->uang_jaminan = $uangJaminan;
        $transaksi->kurir = $pilihkurir;
        $transaksi->ongkir = $ongkir;
        $transaksi->total_tagihan = $totalTagihan;
        $transaksi->bank_tujuan = $bankTujuan;
        $transaksi->nomor_rekening = $noRek;
        $transaksi->nama_rekening = $namaRek;
        $transaksi->save();

        // store tabel transaksi_barang STORE BARANG CEKOUT BELUM BENARR
        for ($i=0; $i < count($listkeranjang_id); $i++) { 

            $datakeranjang = keranjang::find($listkeranjang_id[$i])->first();

            $transaksi_barang = new transaksi_barang;
            $transaksi_barang->baju_id = $datakeranjang->baju_id;
            $transaksi_barang->jumlah = $datakeranjang->jumlah;
            $transaksi_barang->tanggal_mulai = $datakeranjang->tanggal_mulai;
            $transaksi_barang->tanggal_selesai = $datakeranjang->tanggal_selesai;
            $transaksi_barang->total_hari = $datakeranjang->total_hari;
            $transaksi_barang->total_biaya = $datakeranjang->total_biaya;
            $transaksi_barang->transaksi()->associate($transaksi);
            $transaksi_barang->save();
            
            //store tabel transaksi_ukuranbarang

            $keranjangukuran = keranjang_ukuran::where('keranjang_id',$listkeranjang_id[$i])->get();

            // PROSES TRANSAKSI HANYA MENGINPUT DATA PERTAMA LALU DI INPUT SEBANYAK DATA, BELUM BENAR
            
            for ($j=0; $j < count($keranjangukuran); $j++) { 
                $transaksi_ukuranbarang = new transaksi_ukuranbarang;
                $transaksi_ukuranbarang->chart_atasan_id = $keranjangukuran[$j]->chart_atasan_id;
                $transaksi_ukuranbarang->chart_bawahan_id = $keranjangukuran[$j]->chart_bawahan_id;
                $transaksi_ukuranbarang->transaksi_barang()->associate($transaksi_barang);
                $transaksi_ukuranbarang->save();
            }

            keranjang::find($listkeranjang_id[$i])->delete();
        }

        
        // dd('stop');

        return view('frontend.rincianCekout', compact('nama','alamat','kodePos','noTelp','email','pilihkurir','bankTujuan','biayaPenyewaan','uangJaminan','ongkir','totalTagihan','noRek','namaRek'));
    }
}
