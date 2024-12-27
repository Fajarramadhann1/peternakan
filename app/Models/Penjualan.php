<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'penjualan'; // Nama tabel yang benar
=======

    protected $table = 'penjualan';

>>>>>>> 2981142ef8b7b95f86bb2e7986841558ee48d4fb
    protected $fillable = ['metode_penjualan', 'jumlah_penjualan'];
}
