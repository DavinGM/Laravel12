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
        $table->unsignedBigInteger('dosen_id')->nullable();
        $table->foreign('dosen_id')->references('id')->on('dosens')->onDelete('set null');
    });
}

public function down(): void
{
    Schema::table('mahasiswas', function (Blueprint $table) {
    });
}

};
