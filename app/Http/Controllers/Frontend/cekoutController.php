<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\customer;

class cekoutController extends Controller
{
    public function cek(Request $request)
    {
        $keranjang_id = $request->values;

        $emailcustomer = session('data')['email']; 

        $customer = customer::where('email',$emailcustomer)->first();
        


        return view('frontend.cekout',compact('emailcustomer','customer'));

    }
}
