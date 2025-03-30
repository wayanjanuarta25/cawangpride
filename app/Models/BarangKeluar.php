<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;

    protected $fillable = [
        'barang_id', 'jumlah', 'satuan', 'tanggal_keluar', 'penerima', 'keterangan'
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public static function boot()
    {
        parent::boot();
    
        static::created(function ($barangKeluar) {
            $stok = StokBarang::where('barang_id', $barangKeluar->barang_id)->first();
            if ($stok) {
                $stok->stok -= $barangKeluar->jumlah;
                $stok->save();
            }
        });
    
        static::deleted(function ($barangKeluar) {
            $stok = StokBarang::where('barang_id', $barangKeluar->barang_id)->first();
            if ($stok) {
                $stok->stok += $barangKeluar->jumlah;
                $stok->save();
            }
        });
    }

}
