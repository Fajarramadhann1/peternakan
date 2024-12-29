<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penjualan_ayam', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_ayam'); // Menambahkan kolom kategori ayam
            $table->string('nama_kandang'); // Menambahkan kolom nama kandang
            $table->integer('jumlah_penjualan');
            $table->integer('harga');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('penjualan_ayam');
    }
};
