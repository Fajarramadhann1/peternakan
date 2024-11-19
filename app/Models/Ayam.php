<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayam extends Model
{
    use HasFactory;
    protected $table = 'ayam';
    
    protected $fillable = [
        'nama_kandang',
        'kategori_ayam',
        'stok_ayam',
        'harga_ayam',
    ];
}