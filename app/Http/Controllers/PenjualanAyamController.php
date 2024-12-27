<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenjualanAyam;

class PenjualanAyamController extends Controller
{
    public function index()
    {
        $penjualanAyam = PenjualanAyam::all();
        return view('penjualan-ayam', compact('penjualanAyam'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jumlah_penjualan' => 'required|integer',
            'harga' => 'required|integer',
        ]);

        PenjualanAyam::create($request->all());
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function destroy($id)
    {
        PenjualanAyam::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
    //edit
    public function edit($id)
{
    $penjualanAyam = PenjualanAyam::findOrFail($id);
    return view('edit-penjualan-ayam', compact('penjualanAyam'));
}

public function update(Request $request, $id){
    $request->validate([
        'jumlah_penjualan' => 'required|integer',
        'harga' => 'required|integer',
    ]);

    $penjualanAyam = PenjualanAyam::findOrFail($id);
    $penjualanAyam->update($request->all());

    return redirect('/penjualan-ayam')->with('success', 'Data penjualan ayam berhasil diperbarui.');
}

}