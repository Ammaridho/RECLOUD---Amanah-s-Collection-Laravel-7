<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\provinsi;

class apiController extends Controller
{
    public function test()
    {
        $user = provinsi::all();
        return $user;
    }
}
