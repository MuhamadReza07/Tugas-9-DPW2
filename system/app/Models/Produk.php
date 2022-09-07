<?php

namespace App\Models;

use illuminate\Database\Eloquent\Model;

class Produk extends Model{
    public $timestamp = false;
protected $table = 'produk';

protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    'harga' => 'decimal:2'
];

function seller(){
    return $this->belongsTo(User::class, 'id_user');
}

function getHargaStringAttribute(){
    return "Rp.".number_format($this->attributes['harga']);
}

}