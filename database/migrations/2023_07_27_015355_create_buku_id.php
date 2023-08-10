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
        Schema::create('buku_id', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buku', 10)->nullable(false);
            $table->string('judul_buku', 100)->nullable(false);
            $table->string('penerbit_buku', 50)->nullable(false);
            $table->unsignedInteger('tahun_terbit')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku_id');
    }
};
