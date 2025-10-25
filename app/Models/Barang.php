<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['nama_barang', 'merek', 'harga', 'stok'];
    public $timestamps = true;

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'barang_id');
    }
}
