<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{

    protected $fillable = [
        'nomor_telepon',
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'pengguna_id');
    }

}
