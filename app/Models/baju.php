<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class baju extends Model
{
    protected $table = 'baju';

    public function keranjang()
    {
        return $this->hasMany(keranjang::class);
    }
}
