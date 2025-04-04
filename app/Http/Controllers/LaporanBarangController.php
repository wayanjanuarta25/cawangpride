<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanBarangController extends Controller
{
    // Laporan Barang Masuk
    public function barangMasuk()
    {
        $barangMasuk = BarangMasuk::with('barang')->get();
        return view('laporan.barang_masuk', compact('barangMasuk'));
    }

    public function barangMasukPDF()
    {
        $barangMasuk = BarangMasuk::with('barang')->get();
        $pdf = Pdf::loadView('laporan.barang_masuk_pdf', compact('barangMasuk'));
        return $pdf->download('laporan_barang_masuk.pdf');
    }

    // Laporan Barang Keluar
    public function barangKeluar()
    {
        $barangKeluar = BarangKeluar::with('barang')->get();
        return view('laporan.barang_keluar', compact('barangKeluar'));
    }

    public function barangKeluarPDF()
    {
        $barangKeluar = BarangKeluar::with('barang')->get();
        $pdf = Pdf::loadView('laporan.barang_keluar_pdf', compact('barangKeluar'));
        return $pdf->download('laporan_barang_keluar.pdf');
    }
}
