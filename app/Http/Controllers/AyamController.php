<?php

namespace App\Http\Controllers;

use App\Models\Ayam;
use Illuminate\Http\Request;

class AyamController extends Controller
{
    public function deleteAyam(Ayam $ayam) {
        $ayam->delete();
        return redirect('/ayam');
    }

    // Method untuk mengupdate data ayam
    public function actuallyUpdateAyam(Ayam $ayam, Request $request) {
        $incomingField = $request->validate([
            'nama_kandang'=> 'required',
            'kategori_ayam' => 'required',
            'harga_ayam' => 'required|numeric',
            'stok_ayam' => 'required|numeric',
        ]);

        // Sanitasi input data untuk mencegah XSS
        $incomingField['nama_kandang'] = strip_tags($incomingField['nama_kandang']);
        $incomingField['kategori_ayam'] = strip_tags($incomingField['kategori_ayam']);
        $incomingField['harga_ayam'] = strip_tags($incomingField['harga_ayam']);
        $incomingField['stok_ayam'] = strip_tags($incomingField['stok_ayam']);

        // Update data ayam
        $ayam->update($incomingField);
        return redirect('/ayam');
    }

    // Method untuk menampilkan halaman edit ayam
    public function showEditScreen(Ayam $ayam) {
        return view('edit-ayam', ['ayam' => $ayam]);
    }

    // Method untuk menambahkan data ayam baru
    public function createAyam(Request $request) {
        $incomingField = $request->validate([
            'nama_kandang'=> 'required',
            'kategori_ayam' => 'required',
            'harga_ayam' => 'required|numeric',
            'stok_ayam' => 'required|numeric',
        ]);

        // Sanitasi input data
        $incomingField['nama_kandang'] = strip_tags($incomingField['nama_kandang']);
        $incomingField['kategori_ayam'] = strip_tags($incomingField['kategori_ayam']);
        $incomingField['harga_ayam'] = strip_tags($incomingField['harga_ayam']);
        $incomingField['stok_ayam'] = strip_tags($incomingField['stok_ayam']);

        // Simpan data ayam
        Ayam::create($incomingField);
        return redirect('/ayam');
    }

    // Tambahkan method untuk halaman ayambaru
    public function indexAyamBaru() {
        // Ambil data ayam dari database
        $ayams = Ayam::all();

        // Kirim data ke view ayambaru.blade.php
        return view('ayambaru', compact('ayams'));
    }
}
