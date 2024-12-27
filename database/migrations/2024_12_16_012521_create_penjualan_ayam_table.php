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
            $table->unsignedBigInteger('ayam_id');
            $table->integer('jumlah_penjualan');
            $table->integer('harga');
            $table->timestamps();
        
            $table->foreign('ayam_id')->references('id')->on('ayams')->onDelete('cascade');
        });
        
        
    }
    
    public function down(): void
    {
        Schema::dropIfExists('penjualan_ayam');
    }
};
