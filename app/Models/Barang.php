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
        'posisi_id', 'status_id'
    ];

    // Relasi ke Jenis Materiil
    public function jenisMateriil() {
        return $this->belongsTo(JenisMateriil::class);
    }

    // Relasi ke Sub Jenis
    public function subJenis() {
        return $this->belongsTo(SubJenis::class);
    }

    // Relasi ke Sub Sub Jenis
    public function subSubJenis() {
        return $this->belongsTo(SubSubJenis::class);
    }

    // Relasi ke Gudang (Posisi)
    public function gudang()
    {
        return $this->belongsTo(Gudang::class, 'posisi_id'); 
    }   

    // Relasi ke Status
    public function status() {
        return $this->belongsTo(Status::class);
    }
}
