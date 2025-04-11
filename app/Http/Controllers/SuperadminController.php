<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\Gudang;
use App\Models\User;
use App\Models\Barang;
use App\Models\Status;  

class SuperadminController extends Controller
{
    public function index()
    {
        $barangMasukCount = BarangMasuk::sum('jumlah');
        $barangKeluarCount = BarangKeluar::sum('jumlah');
        $totalGudang = Gudang::count();
        $totalUsers = User::count();
        $totalBarang = Barang::count();

        $statusPerbaikan = Status::where('nama', 'Perbaikan')->first();

        $totalBarangPerbaikan = 0;
        if ($statusPerbaikan) {
            $totalBarangPerbaikan = Barang::where('status_id', $statusPerbaikan->id)->count();
        }

        $barangSiapOperasi = $totalBarang - $barangKeluarCount - $totalBarangPerbaikan;
    
        $recentTransactions = BarangMasuk::with('barang:id,merk')
            ->select('barang_id', 'jumlah', \DB::raw("'Masuk' as status"), 'created_at')
            ->union(
                BarangKeluar::with('barang:id,merk')
                    ->select('barang_id', 'jumlah', \DB::raw("'Keluar' as status"), 'created_at')
            )
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get()
            ->map(function ($item) {
                $item->nama_barang = $item->barang->merk ?? 'Unknown';
                return $item;
            });
        
        return view('superadmin.dashboard', compact('barangMasukCount', 'barangKeluarCount', 'totalGudang', 'totalUsers', 'recentTransactions', 'totalBarang', 'totalBarangPerbaikan', 'barangSiapOperasi'));
    }

    public function manageUsers()
    {
        return view('superadmin.manage-users');
    }

    public function dataMaster()
    {
        return view('superadmin.data-master');
    }
}
