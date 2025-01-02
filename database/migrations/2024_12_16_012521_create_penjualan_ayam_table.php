<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('penjualan_ayam', function (Blueprint $table) {
        $table->id(); // Auto increment primary key
        $table->integer('jumlah_penjualan');
        $table->decimal('harga', 15, 2);
        $table->string('kategori_ayam', 255);
        $table->string('nama_kandang', 255);
        $table->string('nama_pelanggan', 255);
        $table->string('nomor_hp', 15); // Ubah tipe data ke string untuk nomor HP
        $table->timestamps();
    });
}

    
    public function down(): void
    {
        Schema::dropIfExists('penjualan_ayam');
    }
};

