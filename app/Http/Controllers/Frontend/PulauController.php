<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PulauController extends Controller
{
    public function index()
    {
        $semuaprovinsi = \App\Models\provinsi::all();
        $semuabaju = \App\Models\baju::all();
        return view('frontend/pulau',compact('semuaprovinsi','semuabaju'));
    }

}
