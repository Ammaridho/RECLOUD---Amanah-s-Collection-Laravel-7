<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class keranjang_ukuran extends Model
{
    protected $table = 'keranjang_ukuran';
    public $timestamps = false;

    public function keranjang()
    {
        return $this->belongsTo(keranjang::class); //many to one
    }
}
