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
            $table->integer('stok_ayam'); // Tipe data integer untuk stok
            $table->integer('harga_ayam'); // Tipe data integer untuk harga
            $table->string('kategori_ayam'); // Nama kategori ayam
            $table->string('nama_kandang'); // Nama kandang ayam

            // Jika ingin mencegah duplicate data dengan kombinasi kolom tertentu
            $table->unique(['kategori_ayam', 'harga_ayam', 'nama_kandang']);
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