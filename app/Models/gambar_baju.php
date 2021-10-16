<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gambar_baju extends Model
{
    protected $table = 'gambar_baju';

    public function baju()
    {
        return $this->belongsTo(baju::class);
    }
}
