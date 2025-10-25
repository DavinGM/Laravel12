<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'tanggal_transaksi',
        'jumlah_barang',
        'total_harga',
        'barang_id',
        'pembeli_id'
    ];

    public $timestamps = true;

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'pembeli_id');
    }
}
