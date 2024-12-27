<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanAyam extends Model
{
    use HasFactory;
    protected $table = 'penjualan_ayam';
    protected $fillable = ['jumlah_penjualan', 'harga'];
}
