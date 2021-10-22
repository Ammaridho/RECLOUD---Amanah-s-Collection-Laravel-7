<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cekoutController extends Controller
{
    public function cek(Request $request)
    {
        dd($request->cekout);
    }
}
