<?php

namespace App\Http\Controllers\Frontend;

use App\Models\provinsi;
use App\Models\baju;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PulauController extends Controller
{
    public function index()
    {
        $semuaprovinsi = provinsi::all();
        $semuabaju = baju::all();
        
        return view('frontend/pulau',compact('semuaprovinsi','semuabaju'));
    }

}
