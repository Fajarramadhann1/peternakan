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
        Schema::create('ayam', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('stok_ayam');
            $table->string('harga_ayam');
            $table->string('kategori_ayam');
            $table->string('nama_kandang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ayam');
    }
};
