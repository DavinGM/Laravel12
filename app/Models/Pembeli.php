<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table = 'pembelis';
    protected $fillable = ['nama_pembeli','jenis_kelamin', 'telepon'];
    public $timestamps = true;

    public function transaksi()
    {
        return $this->hasMany(transaksi::class, 'id_pembeli');
    }
}
