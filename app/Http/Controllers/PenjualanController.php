<?php

namespace App\Http\Controllers;


use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function deletePenjualan(Penjualan $penjualan) {
        //
        $penjualan->delete();
        return redirect('/penjualan');
    }

    public function actuallyUpdatePenjualan(Penjualan $penjualan, Request $request) {
        $incomingField = $request->validate([
            'metode_penjualan' => 'required',
            'jumlah_penjualan' => 'required',
        ]);

        $incomingField['metode_penjualan'] = strip_tags($incomingField['metode_penjualan']);
        $incomingField['jumlah_penjualan'] = strip_tags($incomingField['jumlah_penjualan']);

        $penjualan->update($incomingField);
        return redirect('/penjualan');
    }

    public function showEditScreen(Penjualan $penjualan) {
        dd($penjualan); // Menampilkan data yang diambil
        return view('edit-penjualan', ['penjualan' => $penjualan]);
    }
    

    public function createPenjualan(Request $request) {
        $incomingField = $request->validate([
            'metode_penjualan' => 'required',
            'jumlah_penjualan' => 'required',
        ]);

        $incomingField['metode_penjualan'] = strip_tags($incomingField['metode_penjualan']);
        $incomingField['jumlah_penjualan'] = strip_tags($incomingField['jumlah_penjualan']);

        Penjualan::create($incomingField);
        return redirect('/penjualan');
    }
}
