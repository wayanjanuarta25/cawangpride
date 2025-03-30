<?php

namespace App\Http\Controllers;

use App\Models\StokBarang;
use Illuminate\Http\Request;

class StokBarangController extends Controller
{
    public function index()
    {
        $stokBarang = StokBarang::with('barang')->get();
        return view('stok_barang.index', compact('stokBarang'));
    }
}
