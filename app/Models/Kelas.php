<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = [
        'nama_kelas',
    ];

    public function murid()
    {
        return $this->hasMany(Murid::class, 'id_kelas');
    }
}
