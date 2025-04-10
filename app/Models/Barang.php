<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = [
        'jenis_materiil_id', 'sub_jenis_id', 'sub_sub_jenis_id', 
        'merk', 'tipe', 'no_seri', 'produk', 'tahun_produksi', 
        'tahun_pengadaan', 'tahun_pakai', 'masa_pakai', 'kondisi', 
        'posisi_id', 'status_id','foto'
    ];

    public function jenisMateriil() {
        return $this->belongsTo(JenisMateriil::class);
    }

    public function subJenis() {
        return $this->belongsTo(SubJenis::class);
    }

    public function subSubJenis() {
        return $this->belongsTo(SubSubJenis::class);
    }

    public function gudang()
    {
        return $this->belongsTo(Gudang::class, 'posisi_id'); 
    }   

    public function status() {
        return $this->belongsTo(Status::class);
    }

    public function barangMasuk()
    {
        return $this->hasMany(BarangMasuk::class, 'barang_id');
    }

}
