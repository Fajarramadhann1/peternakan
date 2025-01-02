<?php

namespace App\Http\Controllers;

use App\Models\Ayam;
use Illuminate\Http\Request;
use App\Models\PenjualanAyam;
use Illuminate\Support\Facades\Http;

class PenjualanAyamController extends Controller
{
    // Fungsi untuk menampilkan semua data penjualan ayam
    public function index()
    {
        // Mengambil semua data dari tabel PenjualanAyam
        $penjualanAyam = PenjualanAyam::all();

        $ayams = Ayam::get();

        // Mengirim data ke view 'penjualan-ayam'
        return view('penjualan-ayam', compact('penjualanAyam', 'ayams'));
    }

    // Fungsi untuk menyimpan data baru ke database
    public function store(Request $request)
    {
        // Validasi data input dari pengguna
        $request->validate([
            'jumlah_penjualan' => 'required|integer',
            'id_ayam' => 'required|numeric',
            'nomor_hp' => 'required|numeric',
            'nama_pelanggan' => 'required|string',
        ]);

        $ayam = Ayam::find($request->id_ayam);

        if ($ayam->stok_ayam >= $request->jumlah_penjualan) {
            $kurangstok = $ayam->stok_ayam - $request->jumlah_penjualan;

            $ayam->update([
                'stok_ayam' => $kurangstok,
            ]);

            // Menyimpan data yang sudah divalidasi ke database
            PenjualanAyam::create([
                'jumlah_penjualan' => $request->jumlah_penjualan,
                'harga' => $ayam->harga_ayam,
                'kategori_ayam' => $ayam->kategori_ayam,
                'nama_kandang' => $ayam->nama_kandang,
                'nama_pelanggan' => $request->nama_pelanggan,
                'nomor_hp' => $request->nomor_hp,
            ]);
            return redirect()->back()->with('success', 'Data berhasil ditambahkan.');
        }
        return redirect()->back()->with('error', 'Stok Ayam tidak mencukupi.');

        // dd($request->all());
    
    
        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
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

        $ayam = Ayam::get();

        // Mengirim data ke view 'edit-penjualan-ayam'
        return view('edit-penjualan-ayam', compact('penjualanAyam', 'ayam'));
    }

    // Fungsi untuk memperbarui data berdasarkan ID
    public function update(Request $request, $id)
    {
        // Validasi data input dari pengguna
        $request->validate([
            'nama_pelanggan' => 'required|string',
            'jumlah_penjualan' => 'required|integer|min:1|max:5000',
            'id_ayam' => 'required|integer',
            'nomor_hp' => 'required|string',
        ]);

        $ayam = Ayam::find($request->id_ayam);
        $penjualanAyam = PenjualanAyam::findOrFail($id);

        if ($ayam->stok_ayam + $penjualanAyam->jumlah_penjualan >= $request->jumlah_penjualan) {
            
            $kurangstok = $ayam->stok_ayam + $penjualanAyam->jumlah_penjualan - $request->jumlah_penjualan;

            $ayam->update([
                'stok_ayam' => $kurangstok,
            ]);


          // Memperbarui data dengan input baru
            $penjualanAyam->update([
                'jumlah_penjualan' => $request->jumlah_penjualan,
                'harga' => $ayam->harga_ayam,
                'kategori_ayam' => $ayam->kategori_ayam,
                'nama_kandang' => $ayam->nama_kandang,
                'nomor_hp' => $request->nomor_hp, // Menambahkan pembaruan nomor HP
                'nama_pelanggan' => $request->nama_pelanggan, // Menambahkan pembaruan nomor HP
            ]);

            return redirect('/penjualan-ayam')->with('success', 'Data penjualan ayam berhasil diperbarui.');
        }
        return redirect()->back()->with('error', 'Stok Ayam tidak mencukupi.');
    }


    //Integrasi untuk mengirim Whatsapp
    public function sendToWhatsapp($penjualanAyam)
    {
        // Ambil data pesanan berdasarkan pesanan ID
        $pesananAyam = PenjualanAyam::findOrFail($penjualanAyam);

        if (!$pesananAyam){
            return response()->json(['success' => false, 'message' => 'Pesanan atau pelanggan tidak ditemukan.']);
        }

        // Ambil nomor HP pelanggan
        $noHp = $pesananAyam->nomor_hp;

        // Format nomor HP sesuai format internasional jika perlu
        $noHp = preg_replace('/^0/', '62', $noHp);

        // Pesan yang akan dikirim
        $message = "Halo {$pesananAyam->nama_pelanggan},\n"
            . "Pesanan Anda dengan antrian ke {$pesananAyam->id} telah selesai.\n"
            . "Anda Telah Memesan {$pesananAyam->kategori_ayam} Sebanyak {$pesananAyam->jumlah_penjualan} ekor dari {$pesananAyam->nama_kandang}.\n"
            . "Dengan Total Harga : Rp " . number_format($pesananAyam->jumlah_penjualan * $pesananAyam->harga, 0, ',', '.') . ".\n"
            . "Terima kasih telah Memesan Ayam di Peternakan Pa Sarwani.\n"
            . "Jangan Kapok yaaa :)";

        // API Fonnte Endpoint
        $url = 'https://api.fonnte.com/send';

        // Kirim permintaan ke API Fonnte
        $response = Http::withHeaders([
            'Authorization' => 'boCgS2MjAn1CEeD6dCHU', // Ganti dengan API Key Fonnte Anda
        ])->post($url, [
            'target' => $noHp,
            'message' => $message,
            'type' => 'text', // Jenis pesan (text/image dll)
        ]);

        // Mengecek apakah permintaan berhasil
        if ($response->successful()) {
                 return redirect()->back()->with('success', 'Pesan berhasil dikirim ke WhatsApp.');
    }
    return redirect()->back()->with('error', 'Gagal Mengirim Pesan.');
    }
}