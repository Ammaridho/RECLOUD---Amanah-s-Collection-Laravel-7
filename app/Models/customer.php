<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function keranjang()
    {
        return $this->hasMany(keranjang::class);
    }
    
}
