<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanAyam extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model
    protected $table = 'penjualan_ayam';

    // Daftar kolom yang dapat diisi secara massal
    protected $fillable = [
        'jumlah_penjualan',
        'harga',
        'kategori_ayam',
        'nama_kandang',
        'nama_pelanggan',
        'nomor_hp',
    ]; 
}
