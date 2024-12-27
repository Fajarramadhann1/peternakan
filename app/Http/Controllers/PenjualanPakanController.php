<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenjualanPakan;

class PenjualanPakanController extends Controller
{
    public function index()
    {
        $penjualanPakan = PenjualanPakan::all();
        return view('penjualan-pakan', compact('penjualanPakan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jumlah_penjualan' => 'required|integer',
            'harga' => 'required|integer',
        ]);

        PenjualanPakan::create($request->all());

        return redirect()->back()->with('success', 'Data penjualan pakan berhasil disimpan.');
    }

    public function destroy($id)
    {
        $penjualanPakan = PenjualanPakan::findOrFail($id);
        $penjualanPakan->delete();

        return redirect()->back()->with('success', 'Data penjualan pakan berhasil dihapus.');
    }
    //edit
    public function edit($id) {
        $penjualanPakan = PenjualanPakan::findOrFail($id);
        return view('edit-penjualan-pakan', compact('penjualanPakan'));
    }
    
    public function update(Request $request, $id) {
        $request->validate([
            'jumlah_penjualan' => 'required|integer',
            'harga' => 'required|numeric'
        ]);
    
        $penjualanPakan = PenjualanPakan::findOrFail($id);
        $penjualanPakan->update($request->all());
    
        return redirect('/penjualan-pakan')->with('success', 'Data berhasil diperbarui!');
    }
    
}
