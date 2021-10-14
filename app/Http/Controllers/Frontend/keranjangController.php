<?php

namespace App\Http\Controllers\Frontend;

use App\Models\keranjang;
use App\Models\keranjang_ukuran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class keranjangController extends Controller
{
    public function tampil(Request $request)
    {   
        $id_customer = $request->a;
        $keranjang = keranjang::find($id_customer)->orderby('id','desc')->paginate();

        return view('frontend/keranjang',compact('keranjang'));
    }
}
