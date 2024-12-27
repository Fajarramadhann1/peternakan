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
public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'kategori_ayam' => 'required|string',
        'harga_ayam' => 'required|integer',
        'stok_ayam' => 'required|integer',
        'nama_kandang' => 'required|string',
    ]);

    // Cek apakah data ayam sudah ada dengan kategori, harga, dan kandang yang sama
    $ayam = Ayam::where('kategori_ayam', $request->kategori_ayam)
                ->where('harga_ayam', $request->harga_ayam)
                ->where('nama_kandang', $request->nama_kandang)
                ->first();

    if ($ayam) {
        // Jika sudah ada, tambahkan stok ayam ke data yang ada
        $ayam->stok_ayam += $request->stok_ayam;
        $ayam->save();
    } else {
        // Jika belum ada, buat data baru
        Ayam::create([
            'kategori_ayam' => $request->kategori_ayam,
            'harga_ayam' => $request->harga_ayam,
            'stok_ayam' => $request->stok_ayam,
            'nama_kandang' => $request->nama_kandang,
        ]);
    }

    // Redirect dengan pesan sukses
    return redirect()->back()->with('success', 'Data ayam berhasil disimpan atau diperbarui.');
}

}
