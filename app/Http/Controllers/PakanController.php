<?php

namespace App\Http\Controllers;

use App\Models\Pakan; // Ensure you import the Post model
use Illuminate\Http\Request;

class PakanController extends Controller
{
    // Menampilkan halaman dengan data yang tersimpan
    public function index()
    {
        $pakan = Pakan::all();
        return view('pakan', ['pakan' => $pakan]);
    }

    // Menambahkan post baru
    public function createPakan(Request $request)
    {
        // Validasi input dari pengguna
        $incomingField = $request->validate([
            'pakan' => 'required|string',
            'stok' => 'required|integer|min:1|max:100',
            'harga' => 'required|integer|max:500000',
        ]);
    
        // Cari pakan berdasarkan nama
        $existingPakan = Pakan::where('pakan', $request->pakan)->first();
    
        if ($existingPakan) {
            // Jika nama pakan sudah ada, update stok dengan menambahkan stok baru
            $existingPakan->update([
                'stok' => $existingPakan->stok + $request->stok,
            ]);
        } else {
            // Jika nama pakan belum ada, buat entri baru
            Pakan::create([
                'pakan' => $request->pakan,
                'stok' => $request->stok,
                'harga' => $request->harga,
            ]);
        }
    
        // Redirect setelah selesai
        return redirect('/pakanbaru')->with('success', 'Data pakan berhasil disimpan atau diperbarui.');
    }
    

    // Mengupdate post yang ada
    public function actuallyUpdatePakan(Pakan $pakan, Request $request)
    {
        $incomingField = $request->validate([
            'pakan' => 'required|string',
            'stok' => 'required|integer|min:1|max:100',
            'harga' => 'required|integer|min:1000|max:500000',
        ]);

        $pakan->update([
            'pakan' => $incomingField['pakan'],
            'stok' => $incomingField['stok'],
            'harga' => $incomingField['harga'],
        ]);

        return redirect('/pakan');
    }

    public function deletePakan(Pakan $pakan)
    {
        $pakan->delete();
        return redirect('/pakan');
    }

    // Menampilkan layar edit
    public function showEditScreen(Pakan $pakan)
    {
        return view('edit-pakan', ['pakan' => $pakan]);
    }

    // Menampilkan halaman pakanbaru
    public function pakanBaru()
    {
        $pakans = Pakan::all(); // Ambil semua data pakan
        return view('pakanbaru', ['pakans' => $pakans]); // Pastikan variabel dikirim ke view
    }
}
