<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class siswa extends Model
{
    use HasFactory;

    // filed yang boleh diisi
    protected $fillable = ['id', 'nama_lengkap', 'jenis_kelamin', 'tanggal_lahir', 'kelas'];
    public $timestamps = true;
}
