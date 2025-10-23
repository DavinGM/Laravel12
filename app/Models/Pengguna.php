<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $fillable = [
        'nama',
    ];
    public function telepons()
    {
        return $this->hasOne(Telepon::class, 'pengguna_id');
    }
}
