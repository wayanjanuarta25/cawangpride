<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    public function index()
    {
        $barangMasuk = BarangMasuk::with('barang')->paginate(10);
        return view('barang_masuk.index', compact('barangMasuk'));
    }

    public function create()
    {
        $barang = Barang::all();
        return view('barang_masuk.create', compact('barang'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'barang_id' => 'required|exists:barang,id',
            'jumlah' => 'required|integer',
            'satuan' => 'required|string',
            'kondisi' => 'required|in:Baik,Rusak Ringan,Rusak Berat',
            'tanggal_masuk' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        BarangMasuk::create($request->all());

        if ($request->save_type == 'back') {
            return redirect()->route('barang_masuk.index')->with('success', 'Data berhasil ditambahkan');
        }
    
        return back()->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(BarangMasuk $barangMasuk)
    {
        $barang = Barang::all();
        return view('barang_masuk.edit', compact('barangMasuk', 'barang'));
    }

    public function update(Request $request, BarangMasuk $barangMasuk)
    {
        $request->validate([
            'barang_id' => 'required|exists:barang,id',
            'jumlah' => 'required|integer',
            'satuan' => 'required|string',
            'kondisi' => 'required|in:Baik,Rusak Ringan,Rusak Berat',
            'tanggal_masuk' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        $barangMasuk->update($request->all());

        return redirect()->route('barang_masuk.index')->with('success', 'Barang masuk berhasil diperbarui.');
    }

    public function show(BarangMasuk $barangMasuk)
    {
        return view('barang_masuk.detail', compact('barangMasuk'));
    }

    public function destroy(BarangMasuk $barangMasuk)
    {
        $barangMasuk->delete();
        return redirect()->route('barang_masuk.index')->with('success', 'Data Barang Masuk berhasil dihapus.');
    }

}
