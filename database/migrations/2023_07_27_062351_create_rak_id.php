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
        Schema::create('rak_id', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rak', 10)->nullable();
            $table->string('lokasi_rak', 15)->nullable();
            $table->unsignedBigInteger('buku_id');
            $table->timestamps();

            $table->foreign('buku_id')->references('id')->on('buku_id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rak_id');
    }
};
