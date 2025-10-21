<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    protected $fillable = ['nama', 'id_mahasiswa'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
        // belongsTo(Mahasiswa::class, 'id_mahasiswa')
        // → Artinya satu Wali milik satu Mahasiswa, foreign key-nya ada di table walis
        //(id_mahasiswa) dan mengacu ke table mahasiswas.id
    }
}
