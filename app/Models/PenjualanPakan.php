<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanPakan extends Model
{
    use HasFactory;
    protected $table = 'penjualan_pakan';
    protected $fillable = ['jumlah_penjualan', 'harga'];
}
