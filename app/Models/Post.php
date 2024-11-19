<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
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
$table->id();
            $table->timestamps();
            $table->string('title');
            $table->longText('body');
            $table->integer('harga');