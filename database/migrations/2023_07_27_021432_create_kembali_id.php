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
        Schema::create('kembali_id', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pengembalian');
            $table->unsignedInteger('denda');
            $table->unsignedBigInteger('anggota_id');
            $table->unsignedBigInteger('buku_id');
            $table->unsignedBigInteger('staf_id');
            $table->timestamps();

            $table->foreign('anggota_id')->references('id')->on('anggota_id')->onDelete('cascade');
            $table->foreign('buku_id')->references('id')->on('buku_id')->onDelete('cascade');
            $table->foreign('staf_id')->references('id')->on('staf_id')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kembali_id');
    }
};
