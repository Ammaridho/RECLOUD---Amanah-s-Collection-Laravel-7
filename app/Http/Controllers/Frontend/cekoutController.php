<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cekoutController extends Controller
{
    public function cek(Request $request)
    {
        $keranjang_id = $request->values;

        return response()->json([
                                    'success'=>'Berhasil dihapus.',
                                    'id_keranjang' => $keranjang_id[0]
                                ]);
    }
}
