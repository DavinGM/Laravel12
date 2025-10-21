<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void
{
    Schema::table('mahasiswas', function (Blueprint $table) {
        $table->unsignedBigInteger('dosen_id');
        $table->foreign('dosen_id')->references('id')->on('dosens')->onDelete('cascade');
    });
}

public function down(): void
{
    Schema::table('mahasiswas', function (Blueprint $table) {
        $table->dropForeign(['dosen_id']); // hapus foreign key dulu
        $table->dropColumn('dosen_id');    // baru hapus kolom
    });
}

};
