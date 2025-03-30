<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\JenisMateriil;
use App\Models\SubJenis;
use App\Models\SubSubJenis;
use App\Models\Gudang;
use App\Models\Status;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::with(['jenisMateriil', 'subJenis', 'subSubJenis', 'gudang', 'status'])->get();
        return view('manajemen_barang.index', compact('barang'));
    }

    public function show(Barang $barang)
    {
        return view('manajemen_barang.detail', compact('barang'));
    }

    public function create()
    {
        $jenisMateriil = JenisMateriil::all();
        $subJenis = SubJenis::all();
        $subSubJenis = SubSubJenis::all();
        $gudang = Gudang::all();
        $status = Status::all();
        return view('manajemen_barang.create', compact('jenisMateriil', 'subJenis', 'subSubJenis', 'gudang', 'status'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_materiil_id' => 'required|exists:jenis_materiil,id',
            'sub_jenis_id' => 'required|exists:sub_jenis,id',
            'sub_sub_jenis_id' => 'required|exists:sub_sub_jenis,id',
            'merk' => 'required',
            'tipe' => 'required',
            'no_seri' => 'required|unique:barang,no_seri',
            'produk' => 'required',
            'tahun_produksi' => 'required|integer',
            'tahun_pengadaan' => 'required|integer',
            'kondisi' => 'required',
            'posisi_id' => 'required|exists:gudangs,id',
            'status_id' => 'required|exists:status,id',
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan');
    }

    public function edit(Barang $barang)
    {
        $jenisMateriil = JenisMateriil::all();
        $subJenis = SubJenis::all();
        $subSubJenis = SubSubJenis::all();
        $gudang = Gudang::all();
        $status = Status::all();
        return view('manajemen_barang.edit', compact('barang', 'jenisMateriil', 'subJenis', 'subSubJenis', 'gudang', 'status'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'merk' => 'required',
            'tipe' => 'required',
            'no_seri' => 'required|unique:barang,no_seri,' . $barang->id,
            'produk' => 'required',
            'tahun_produksi' => 'required|integer',
            'tahun_pengadaan' => 'required|integer',
            'kondisi' => 'required',
        ]);

        $barang->update($request->all());

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus');
    }

    public function getSubJenis($jenis_materiil_id)
    {
        $subJenis = SubJenis::where('jenis_materiil_id', $jenis_materiil_id)->get();
        return response()->json($subJenis);
    }

public function getSubSubJenis($sub_jenis_id)
    {
        $subSubJenis = SubSubJenis::where('sub_jenis_id', $sub_jenis_id)->get();
        return response()->json($subSubJenis);
    }
}
