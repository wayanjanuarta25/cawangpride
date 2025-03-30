<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;

    protected $fillable = [
        'barang_id', 'jumlah', 'satuan', 'kondisi', 'tanggal_masuk', 'keterangan'
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public static function boot()
{
    parent::boot();

    static::created(function ($barangMasuk) {
        $stok = StokBarang::firstOrCreate(['barang_id' => $barangMasuk->barang_id]);
        $stok->stok += $barangMasuk->jumlah;
        $stok->save();
    });

    static::deleted(function ($barangMasuk) {
        $stok = StokBarang::where('barang_id', $barangMasuk->barang_id)->first();
        if ($stok) {
            $stok->stok -= $barangMasuk->jumlah;
            $stok->save();
        }
    });
}

}
