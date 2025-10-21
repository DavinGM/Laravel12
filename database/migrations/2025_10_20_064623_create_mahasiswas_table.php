<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


// ini adalah Table utama Dari Relasi Mahasiswa dan Wali one to one

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();  //id ini adalah primary key dan sudah auto incrmnt
            $table->string('nama');
            $table->string('nim')->unique();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};



// Selanjut nya coba cek di 2025_10_20_064727_create_walis_table.php