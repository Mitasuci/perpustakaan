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
        Schema::create('anggota_id', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->nullable(false);
            $table->string('no_telepon',12)->nullable(false);
            $table->string('alamat',100)->nullable(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_id');
    }
};
