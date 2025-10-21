<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Srtiap Wali yang Terkait dengan satu mahasiswa  akan di simpan di sini
//analogi nya Si table `Wali` ini dia minta nama `Siswa` untuk di tampilkan di sini 
// sesuai dengan Id tercantum 


return new class extends Migration
{

    public function up(): void
    {
        Schema::create('walis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedInteger('id_mahasiswa');
            // `id_mahasiswa`  itu 'foreign key' → menghubungkan 'wali' ke `mahasiswa` di table 'mahasiswa'
            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswas')->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('walis');
    }
    // next kamu bisa cek Model Mahasiswa dulu
};
