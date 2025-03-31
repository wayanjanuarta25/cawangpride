<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanBarangController extends Controller
{
    public function index()
    {
        $barangMasuk = BarangMasuk::all();
        return view('laporan.barang_masuk', compact('barangMasuk'));
    }

    public function exportPDF()
    {
        $barangMasuk = BarangMasuk::with('barang')->get(); // Load relasi barang
        $pdf = Pdf::loadView('laporan.barang_masuk_pdf', compact('barangMasuk'));
        
        return $pdf->download('laporan_barang_masuk.pdf');
    }
}
