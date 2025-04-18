<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function index()
    {
        $barangKeluar = BarangKeluar::with('barang')->paginate(10);
        return view('barang_keluar.index', compact('barangKeluar'));
    }

    public function create()
    {
        $barang = Barang::whereIn('id', function ($query) {
            $query->select('barang_id')->from('barang_masuks'); // Fix typo di sini
        })->get();

        return view('barang_keluar.create', compact('barang'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'barang_id' => 'required|exists:barang,id',
            'jumlah' => 'required|integer|min:1',
            'satuan' => 'required|string',
            'tanggal_keluar' => 'required|date',
            'penerima' => 'required|string',
            'keterangan' => 'nullable|string',
        ]);

        BarangKeluar::create($validated);

        if ($request->input('save_type') === 'back') {
            return redirect()->route('barang_keluar.index')->with('success', 'Barang keluar berhasil ditambahkan.');
        }

        return redirect()->back()->with('success', 'Barang keluar berhasil ditambahkan.');
    }

    public function show(BarangKeluar $barangKeluar)
    {
        return view('barang_keluar.detail', compact('barangKeluar'));
    }

    public function edit(BarangKeluar $barangKeluar)
    {
        $barang = Barang::all();
        return view('barang_keluar.edit', compact('barangKeluar', 'barang'));
    }

    public function update(Request $request, BarangKeluar $barangKeluar)
    {
        $validated = $request->validate([
            'barang_id' => 'required|exists:barang,id',
            'jumlah' => 'required|integer|min:1',
            'satuan' => 'required|string',
            'tanggal_keluar' => 'required|date',
            'penerima' => 'required|string',
            'keterangan' => 'nullable|string',
        ]);

        $barangKeluar->update($validated);

        if ($request->input('save_type') === 'back') {
            return redirect()->route('barang_keluar.index')->with('success', 'Data barang keluar berhasil diperbarui.');
        }

        return redirect()->back()->with('success', 'Data barang keluar berhasil diperbarui.');
    }

    public function destroy(BarangKeluar $barangKeluar)
    {
        $barangKeluar->delete();
        return redirect()->route('barang_keluar.index')->with('success', 'Data barang keluar dihapus.');
    }

    public function getBarangInfo($id)
    {
        $barangMasuk = \App\Models\BarangMasuk::where('barang_id', $id)->latest()->first();
    
        if (!$barangMasuk) {
            return response()->json([
                'jumlah' => '',
                'satuan' => '',
                'kondisi' => '',
                'tanggal_masuk' => '',
            ]);
        }
    
        return response()->json([
            'jumlah' => $barangMasuk->jumlah,
            'satuan' => $barangMasuk->satuan,
            'kondisi' => $barangMasuk->kondisi,
            'tanggal_masuk' => $barangMasuk->tanggal_masuk,
        ]);
    }

}
