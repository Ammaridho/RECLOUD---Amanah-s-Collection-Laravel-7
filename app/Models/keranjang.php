<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class keranjang extends Model
{
    protected $table = 'keranjang';

    public function keranjang_ukuran()
    {
        return $this->hasMany(keranjang_ukuran::class);  //one to many
    }

    public function customer()
    {
        return $this->belongsTo(customer::class);
    }

    public function baju()
    {
        return $this->belongsTo(baju::class);
    }
}
