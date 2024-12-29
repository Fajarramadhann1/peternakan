<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenjualanAyam;

class PenjualanAyamController extends Controller
{
    // Fungsi untuk menampilkan semua data penjualan ayam
    public function index()
    {
        // Mengambil semua data dari tabel PenjualanAyam
        $penjualanAyam = PenjualanAyam::all();

        // Mengirim data ke view 'penjualan-ayam'
        return view('penjualan-ayam', compact('penjualanAyam'));
    }

    // Fungsi untuk menyimpan data baru ke database
    public function store(Request $request)
    {
        // Validasi data input dari pengguna
        $request->validate([
            'jumlah_penjualan' => 'required|integer', // Jumlah penjualan harus diisi dan berupa angka
            'harga' => 'required|integer', // Harga harus diisi dan berupa angka
            'kategori_ayam' => 'required|string', // Kategori ayam harus diisi dan berupa string
            'nama_kandang' => 'required|string', // Nama kandang harus diisi dan berupa string
        ]);

        // Menyimpan data yang sudah divalidasi ke database
        PenjualanAyam::create([
            'jumlah_penjualan' => $request->jumlah_penjualan,
            'harga' => $request->harga,
            'kategori_ayam' => $request->kategori_ayam, // Menyimpan kategori ayam
            'nama_kandang' => $request->nama_kandang, // Menyimpan nama kandang
        ]);

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    // Fungsi untuk menghapus data berdasarkan ID
    public function destroy($id)
    {
        // Mencari data berdasarkan ID, jika tidak ditemukan maka akan menampilkan error 404
        PenjualanAyam::findOrFail($id)->delete();

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    // Fungsi untuk menampilkan form edit data
    public function edit($id)
    {
        // Mencari data berdasarkan ID, jika tidak ditemukan maka akan menampilkan error 404
        $penjualanAyam = PenjualanAyam::findOrFail($id);

        // Mengirim data ke view 'edit-penjualan-ayam'
        return view('edit-penjualan-ayam', compact('penjualanAyam'));
    }

    // Fungsi untuk memperbarui data berdasarkan ID
    public function update(Request $request, $id)
    {
        // Validasi data input dari pengguna
        $request->validate([
            'jumlah_penjualan' => 'required|integer', // Jumlah penjualan harus diisi dan berupa angka
            'harga' => 'required|integer', // Harga harus diisi dan berupa angka
            'kategori_ayam' => 'required|string', // Kategori ayam harus diisi dan berupa string
            'nama_kandang' => 'required|string', // Nama kandang harus diisi dan berupa string
        ]);

        // Mencari data berdasarkan ID, jika tidak ditemukan maka akan menampilkan error 404
        $penjualanAyam = PenjualanAyam::findOrFail($id);

        // Memperbarui data dengan input baru
        $penjualanAyam->update([
            'jumlah_penjualan' => $request->jumlah_penjualan,
            'harga' => $request->harga,
            'kategori_ayam' => $request->kategori_ayam, // Memperbarui kategori ayam
            'nama_kandang' => $request->nama_kandang, // Memperbarui nama kandang
        ]);

        // Redirect ke halaman utama penjualan ayam dengan pesan sukses
        return redirect('/penjualan-ayam')->with('success', 'Data penjualan ayam berhasil diperbarui.');
    }
}
