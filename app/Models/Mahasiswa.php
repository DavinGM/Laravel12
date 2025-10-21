<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{

    // protected $fillable = ['nama', 'nim']; ini daftar Collom yang bisa di isi masal saat pakai fungsi Create() atau update()
    protected $fillable = ['nama', 'nim'];

    // public function wali() ini mendefinisikan Relasi One to One dari mahasiswa ke Wali
    public function wali()
    {
        return $this->hasOne(Wali::class, 'id_mahasiswa');
        // hasOne(Wali::class, 'id_mahasiswa') → Artinya satu Mahasiswa punya satu Wali, 
        // dan foreign key di table walis adalah id_mahasiswa.
    }   
    public function dosen(){
        // yang di milik oleh mahasiswa
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }

    public function hobis(){
        return $this->belongsToMany(Hobi::class, 'mahasiswa_hobi', 'mahasiswa_id', 'hobi_id');
    }


    // next kamu bisa cek di model Wali
}
